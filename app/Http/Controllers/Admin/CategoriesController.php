<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriesController extends Controller
{
    public function index()
    {
        $category = Category::orderBy('created_at', 'DESC')->get();
        return view('admin.pages.category.index', compact('category'));
    }

    public function store(Request $request)
    {
        $categoryName = ucwords($request->name);
        $categoryDescription = $request->description;

        $category = new Category();
        $category->name = $categoryName;
        $category->description = $categoryDescription;
        $category->save();

        if ($category->save()) {
            Alert::success('Success', 'Category has been added');
        } else {
            Alert::error('Failed', 'Category failed to add');
        }

        return redirect()->back();
    }

    public function showJsonCat($id) {
        $category = Category::find($id);
        return response()->json($category);
    }

    public function update(Request $request, $id)
    {
        $categoryName = $request->name;
        $categoryDescription = $request->description;

        $category = Category::find($id);
        $category->name = ucwords($categoryName);
        $category->description = $categoryDescription;

        if ($category->save()) {
            Alert::success('Success', 'Category has been updated');
        } else {
            Alert::error('Failed', 'Category failed to update');
        }

        return redirect()->back();
    }

    public function delete($id)
    {

            try {
                $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
                $delete = Category::find($id);
                $delete->delete();

                if($delete) {
                    $artikelIds = Article::where("category_id", $id)->pluck("id");
                    foreach ($artikelIds as $artikelId) {
                        $artikel = Article::find($artikelId);
                        $artikel->delete();
                    }
                }

                if($delete->delete()) {
                    $delete->status = !$delete->status;
                    $delete->save();
                }

                if ($delete) {
                    $data = ['status' => true, 'code' => 'SC001', 'message' => 'Photo has been deleted'];
                }
            } catch (\Exception $ex) {
                $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
            }
            return $data;
        // $category = Category::find($id);

        // $artikelIds = Article::where("category_id", $id)->pluck("id");
        // foreach ($artikelIds as $artikelId) {
        //     $artikel = Article::find($artikelId);
        //     $artikel->delete();
        // }
        // $category->delete();

        // if ($category->delete()) {
        //     Alert::success('Success', 'Category has been deleted');
        // } else {
        //     Alert::success('Success', 'Category failed to delete');
        // }

        // return redirect()->back();
    }
}
