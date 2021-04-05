<?php

namespace App\Http\Controllers\back;

use App\Cosult;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;

class ConslutController extends Controller
{
    public function index()
    {
        $consults = Cosult::latest()->get();
        return view('back.consultion.index',compact('consults'));
    }

    public function create()
    {
        return view('back.consultion.create');
    }

    public function store(Request $request)
    {
        $consult = new Cosult();
        $consult->faname = $request->faname;
        $consult->phone = $request->phone;
        $consult->email = $request->email;
        $consult->facebook = $request->facebook;
        $consult->whatsup = $request->whatsup;
        $consult->twitter = $request->twitter;
        $consult->telegram = $request->telegram;
        $consult->description = $request->description;
        $consult->enname = $request->enname;
        $consult->endes = $request->endes;
        $consult->turname = $request->turname;
        $consult->turdes = $request->turdes;
        $consult->save();

        $photos = explode(',', $request->input('photo_id')[0]);
        foreach ($photos as $photo) {
            $test = Photo::find($photo);
            if (isset($test)) {
                $test->cosult_id = $consult->id;
                $test->save();
            }
        }

        return redirect()->route('consult.index');
    }

    public function show(Cosult $cosult)
    {
        //
    }

    public function edit($id)
    {
        $cosult = Cosult::find($id);
        return view('back.consultion.edit',compact('cosult'));
    }

    public function update(Request $request,$id)
    {
        $consult = Cosult::find($id);
        $consult->faname = $request->faname;
        $consult->phone = $request->phone;
        $consult->email = $request->email;
        $consult->facebook = $request->facebook;
        $consult->whatsup = $request->whatsup;
        $consult->twitter = $request->twitter;
        $consult->telegram = $request->telegram;
        $consult->description = $request->description;
        $consult->enname = $request->enname;
        $consult->endes = $request->endes;
        $consult->turname = $request->turname;
        $consult->turdes = $request->turdes;
        $consult->save();

        $photos = explode(',', $request->input('photo_id')[0]);
        foreach ($photos as $photo) {
            $test = Photo::find($photo);
            if (isset($test)) {
                $test->cosult_id = $consult->id;
                $test->save();
            }
        }

        return redirect()->route('consult.index');
    }

    public function destroy($id)
    {
        $cosult = Cosult::find($id);
        $photo = Photo::where('cosult_id',$cosult->id)->first();
        if ($photo) {
            unlink(getcwd() . $photo->path);
            $photo->delete();
        }
        $cosult->delete();
        return back();
    }
}
