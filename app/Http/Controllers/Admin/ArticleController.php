<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleHeader;
use App\Models\ArticleKeywords;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::with('categories', 'user','articleHeaders')->orderBy('date', 'DESC')->get();

        return view('admin.pages.article.index', compact('articles'));
    }
    public function showAllArticle()
    {
        $articles = Article::with('categories', 'user','articleHeaders')->orderBy('date', 'DESC')->get();
        return view("admin.pages.article.allArticle", compact("articles"));
    }

    public function create()
    {
        $categories = Category::all();
        return view("admin.pages.article.addArticle", compact("categories"));
    }

    public function store(Request $request)
    {

        // if (!$request->has('content')) {
        //     return redirect()->back()->with('error', 'Content is required');
        // }
        if (!$request->filled('content')) {

            toast('Please Input Content', 'error');
            return redirect()->back();
        }

        $article = new Article();
        $article->user_id = auth()->user()->id;
        $article->category_id = $request->category_id;
        $article->title = ucwords($request->title);
        $article->description = $request->description;
        $article->slug = Str::slug($article->title, '-');
        $article->date = $request->date;
        $article->content = $request->content;

        if ($article->save()) {
            $keywords = $request['keyword'];
            $keywords = json_decode($keywords);
            $keywords =  collect($keywords)->pluck('value')->toArray();
            foreach ($keywords as $key => $value) {
                $metaArticle = new ArticleKeywords();
                $metaArticle->article_id = $article->id;
                $metaArticle->keyword = $value;
                $metaArticle->save();
            }
            $articleHeader = new ArticleHeader();
            $articleHeader->article_id = $article->id;
            if ($request->hasFile('image')) {
                $articleHead = $request->file('image');
                $articleImageName = $articleHead->getClientOriginalName();
                $articleHead->move(Storage::disk('public')->path('images/header'), $articleImageName);
                $link = env('APP_URL') . '/storage/images/header/' . $articleImageName;
                $articleHeader->image = $articleImageName;
                $articleHeader->link = $link;
            }
            $articleHeader->alt = $request->alt;
            $articleHeader->title_header = ucwords($request->title_header);
        }
        $articleHeader->save();

        if ($article->save()) {
            Alert::success('Success', 'Article has been created');
        } else {
            Alert::error('Error', 'Article failed to create');
        }

        return redirect()->to('admin/articles/');
    }

    public function edit($id)
    {
        $article = Article::where('id', $id)->first();
        $categories = Category::all();
        $metaArticle = ArticleKeywords::where('article_id', $id)->get();
        $articleHeader = ArticleHeader::where('article_id', $id)->first();

        return view("admin.pages.article.editArticle", compact("article", "categories", "metaArticle", "articleHeader"));
    }

    public function update($id, Request $request)
    {
        if (!$request->filled('content')) {

            toast('Please Input Content', 'error');
            return redirect()->back();
        }

        $article = Article::find($id);
        $article->user_id = auth()->user()->id;
        $article->category_id = $request->category_id;
        $article->title = ucwords($request->title);
        $article->description = $request->description;
        $article->slug = Str::slug($article->title, '-');
        $article->date = $request->date;
        $article->content = $request->content;
        $article->save();

        ArticleKeywords::where('article_id', $id)->delete();

        $keywords = $request['keyword'];
        $keywords = json_decode($keywords);
        $keywords =  collect($keywords)->pluck('value')->toArray();

        foreach ($keywords as $key => $value) {
            $metaArticle = new ArticleKeywords();
            $metaArticle->article_id = $article->id;
            $metaArticle->keyword = $value;
            $metaArticle->save();
        }

        $articleHeader = ArticleHeader::where('article_id', $id)->first();
        $articleHeader->article_id = $article->id;
        if ($request->hasFile('image')) {
            $articleHead = $request->file('image');
            $articleImageName = $articleHead->getClientOriginalName();
            // $articleHead->move(storage_path('images/header'), $articleImageName);
            $articleHead->move(Storage::disk('public')->path('images/header'), $articleImageName);
            $link = env('APP_URL') . '/storage/images/header/' . $articleImageName;
            $articleHeader->image = $articleImageName;
            $articleHeader->link = $link;
        }
        $articleHeader->alt = $request->alt;
        $articleHeader->title_header = ucwords($request->title_header);
        $articleHeader->save();

        if ($article->save()) {
            Alert::success('Success', 'Article has been updated');
        } else {
            Alert::error('Error', 'Article failed to update');
        }

        return redirect()->to('admin/articles/');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $articleHeader = ArticleHeader::where('article_id', $id)->first();
        $articleKeywords = ArticleKeywords::where('article_id', $id)->first();
        $article->delete();
        $articleHeader->delete();
        $articleKeywords->delete();

        if ($article->delete()) {
            $article->status = !$article->status;
            $article->save();
        }

        if ($articleHeader->delete()) {
            $articleHeader->status = !$articleHeader->status;
            $articleHeader->save();
        }

        if ($articleKeywords->delete()) {
            $articleKeywords->status = !$articleKeywords->status;
            $articleKeywords->save();
        }


        if ($article->delete()) {
            Alert::success('Success', 'Article has been deleted');
        } else {
            Alert::error('Error', 'Article failed to delete');
        }

        return redirect()->back();

    }

    public function changeArticleStatus($id)
    {
        $clients = Article::find($id);
        if ($clients != null) {
            $clients->publish_status = !$clients->publish_status;
            $clients->save();
        }

        if ($clients->publish_status == 1) {
            Alert::success('Success', 'Article has been activated');
        } else {
            Alert::success('Success', 'Article has been deactivated');
        }

        return redirect()->back();
    }

    public function restore($id)
    {
        Article::withTrashed()->find($id);
        // User::withTrashed()->find($id)->restore();

        return back();
    }

    public function restoreAll()
    {

        Article::withTrashed()->restore();
        // User::onlyTrashed()->restore();

        return back();
    }
}
