<?php

namespace App\Http\Controllers\back;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {
        $brands = Brand::latest()->get();
        return view('back.brand.index',compact('brands'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->title = $request->brand;
        $brand->save();
        return back()->with('success', 'با موفقیت ثبت شد.');
    }

    public function show(Brand $brand)
    {
        //
    }

    public function edit(Brand $brand)
    {
    }

    public function update(Request $request, Brand $brand)
    {
        //
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return back();
    }
}
