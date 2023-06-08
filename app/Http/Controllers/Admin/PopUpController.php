<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PopUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PopUpController extends Controller
{
    public function index()
    {
        $popups = PopUp::orderBy('created_at', 'desc')->get();
        return view("admin.pages.pop_up.index", compact("popups"));
    }
    public function store(Request $request)
    {
        $image = $request->file('image');
        $fileName = $image->getClientOriginalName();
        // $image->move(storage_path('images/popup'), $fileName);
        $image->move(Storage::disk('public')->path('images/popup'),$fileName);

        $popup = new PopUp();
        $popup->image = $fileName;
        $popup->time = $request->time;
        $popup->url = $request->url;
        $popup->created_by   = Auth::user()->id;
        $popup->save();

        if ($popup->save()) {
            Alert::success('Success', 'Slider has been added');
        } else {
            Alert::error('Failed', 'Slider failed to add');
        }
        return redirect()->back();
    }
    public function show($id)
    {
        try {
            $data = ['status' => false, 'message' => 'Data failed to be found'];
            $data = PopUp::findOrFail($id);
            if ($data) {
                $data = ['status' => true, 'message' => 'Data was successfully found', 'data' => $data];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }

    public function showJson($id) {
        $popup = PopUp::find($id);
        return response()->json($popup);
    }

    public function update(Request $request)
    {
        $image = $request->file('image');


        $popup = PopUp::find($request->id);
        if ($image) {
            $fileName = $image->hashName();
            $image->move(Storage::disk('public')->path('images/popup'),$fileName);
            $popup->image = $fileName;
        }
        $popup->time = $request->time;
        $popup->url = $request->url;      $popup->url = $request->url;
        $popup->updated_by   = Auth::user()->id;
        $popup->save();

        if ($popup->save()) {
            Alert::success('Success', 'Data has been updated');
        } else {
            Alert::error('Failed', 'Data failed to update');
        }

        return redirect()->back();
    }
    public function destroy($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];

            $delete = PopUp::find($id);
            $delete->delete();
            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Category has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }
}
