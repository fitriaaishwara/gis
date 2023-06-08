<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Toaster;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Sliders::orderBy('created_at', 'desc')->get();
        return view("admin.pages.slider.slider", compact('sliders'));
    }

    public function store(Request $request)
    {
        $sliderTitle = ucwords($request->title);
        $sliderOrderby = $request->order_by;
        $sliderButton = $request->button_text;
        $sliderLink = $request->button_link;
        $sliderButtonStatus = $request->button_status == 0 ? 0 : 1;

        $sliderImage = $request->file('image');
        $sliderImageName = $sliderImage->getClientOriginalName();
        // $sliderImage->move(storage_path('images/slider'), $sliderImageName);
        $sliderImage->move(Storage::disk('public')->path('images/slider'), $sliderImageName);

        $slider = new Sliders();
        $slider->title = $sliderTitle;
        $slider->order_by = $sliderOrderby;
        $slider->image = $sliderImageName;
        $slider->button_text = $sliderButton;
        $slider->button_link = $sliderLink;
        $slider->button_status = $sliderButtonStatus;

        if ($slider->save()) {
            Alert::success('Success', 'Slider has been added');
        } else {
            Alert::error('Failed', 'Slider failed to add');
        }

        return redirect()->back();

    }

    public function showJson($id) {
        $slider = Sliders::find($id);
        return response()->json($slider);
    }

    public function update($id, Request $request)
    {

        $slider = Sliders::find($id);
        $slider->title = ucwords($request->title);
        $slider->order_by = $request->order_by;
        $slider->button_text = $request->button_text;
        $slider->button_link = $request->button_link;
        $slider->button_status = $request->button_status == 0 ? 0 : 1;

        if ($request->hasFile('image')) {
            $sliderImage = $request->file('image');
            $sliderImageName = $sliderImage->getClientOriginalName();
            $sliderImage->move(Storage::disk('public')->path('images/slider'), $sliderImageName);
            $slider->image = $sliderImageName;
        }
        $slider->save();

        if ($slider->save()) {
            toast('Slider has been updated', 'success');
        } else {
            toast('Slider failed to update', 'error');
        }

        return redirect()->back();

    }

    public function delete($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];

            $delete =Sliders::find($id);
            $delete->delete();

            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Slider has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }

    public function changeButtonSliderStatus ($id)
    {
        $slider = Sliders::find($id);
        $slider->button_status = !$slider->button_status;
        $slider->save();

        if ($slider->save()) {
            Alert::success('Success', 'Slider status has been changed');
        } else {
            Alert::error('Failed', 'Slider status failed to change');
        }
        return redirect()->back();
    }

    public function changeSliderStatus($id)
    {
        $slider = Sliders::find($id);
        $slider->status = !$slider->status;
        $slider->save();

        if ($slider->save()) {
            Alert::success('Success', 'Slider status has been changed');
        } else {
            Alert::error('Failed', 'Slider status failed to change');
        }
        return redirect()->back();
    }

}
