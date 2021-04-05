<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Photo;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('back.slider.index',compact('sliders'));
    }

    public function create()
    {
        return view('back.slider.create');
    }

    public function store(Request $request)
    {
        $slider = new Slider();
        $slider->textfa = $request->textfa;
        $slider->texten = $request->texten;
        $slider->texttur = $request->texttur;
        $slider->status = $request->status;
        $slider->number = $request->number;
        $slider->save();

        $photo = $request->input('photo_id')[0];
        $test = Photo::find($photo);
        if (isset($test)) {
            $test->slider_id = $slider->id;
            $test->save();
        }

        return redirect()->route('slider.index')->with('success', 'اسلایدر جدید ثبت شد.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('back.slider.edit',compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        $slider->textfa = $request->textfa;
        $slider->texten = $request->texten;
        $slider->texttur = $request->texttur;
        $slider->status = $request->status;
        $slider->number = $request->number;
        $slider->save();

        $photo = $request->input('photo_id')[0];
        $test = Photo::find($photo);
        if (isset($test)) {
            $test->slider_id = $slider->id;
            $test->save();
        }

        return redirect()->route('slider.index')->with('success', 'اسلایدر بروز رسانی شد.');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        $photo = Photo::where('slider_id',$slider->id)->first();
        if ($photo) {
            unlink(getcwd() . $photo->path);
            $photo->delete();
        }
        $slider->delete();

        return back()->with('danger','اسلایدر با موفقیت حذف شد.');
    }
}
