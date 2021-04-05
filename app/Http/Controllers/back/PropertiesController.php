<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Property;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{

    public function index()
    {
        $properties = Property::latest()->get();
        return view('back.property.index', compact('properties'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        if ($request->fapro) {
            $property = new Property();
            $property->title = $request->fapro;
            $property->type = $request->type;
            $property->language = 'fa';
            $property->save();
        }
        if ($request->enpro) {
            $property = new Property();
            $property->title = $request->enpro;
            $property->type = $request->type;
            $property->language = 'en';
            $property->save();
        }
        if ($request->turpro) {
            $property = new Property();
            $property->title = $request->turpro;
            $property->type = $request->type;
            $property->language = 'tur';
            $property->save();
        }

        return back()->with('success', 'با موفقیت ثبت شد.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('back.property.edit', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        if ($request->fapro)
            $property->title = $request->fapro;
        if($request->enpro)
            $property->title = $request->enpro;
        if ($request->turpro)
            $property->title = $request->turpro;
        $property->type = $request->type;
        $property->save();

        return redirect()->route('properties.index');
    }

    public function destroy($id)
    {
        //
    }
}
