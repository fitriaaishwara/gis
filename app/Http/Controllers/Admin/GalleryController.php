<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->get();
        return view('admin.pages.gallery.index', compact('gallery'));
    }

public function store (Request $request)
    {
        if (!$request->filled('category')) {

            toast('Please Input Category', 'error');
            return redirect()->back();
        }

        $imagesName = $request->title;
        $images = $request->file('image');
        $imagesCategory = $request->category;
        $fileName = $images->getClientOriginalName();
        $images->move(Storage::disk('public')->path('images/gallery'), $fileName);

        $imagesDescription = $request->description;

        $gallery = new Gallery();
        $gallery->title = $imagesName;
        $gallery->category = $imagesCategory;
        $gallery->description = $imagesDescription;
        $gallery->image = $fileName;
        $gallery->save();

        if ($gallery->save()) {
            Alert::success('Success', 'Gallery has been added');
        } else {
            Alert::error('Failed', 'Gallery failed to add');
        }

        return redirect()->back();
    }

    public function showJsonGallery($id) {
        $gallery = Gallery::find($id);
        return response()->json($gallery);
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        $gallery->title = $request->title;
        $gallery->category = $request->category;
        $gallery->description = $request->description;
        if($request->hasFile('image')) {
            $images = $request->file('image');
            $fileName = $images->getClientOriginalName();
            $images->move(Storage::disk('public')->path('images/gallery'), $fileName);
            $gallery->image = $fileName;
        }
        $gallery->save();

        if ($gallery->save()) {
            Alert::success('Success', 'Gallery has been updated');
        } else {
            Alert::error('Failed', 'Gallery failed to update');
        }


        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];

            $delete = Gallery::where('id', $id)->delete();
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Photo has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }
}
