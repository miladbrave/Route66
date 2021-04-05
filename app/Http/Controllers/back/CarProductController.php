<?php

namespace App\Http\Controllers\back;

use App\Brand;
use App\Car;
use App\Carproperty;
use App\Cosult;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Property;
use Illuminate\Http\Request;

class CarProductController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->paginate(15);
        return view('back.car.index', compact('cars'));
    }

    public function create()
    {
        $properties = Property::where('type', 2)->latest()->get();
        $brands = Brand::latest()->get();
        $consults = Cosult::latest()->get();
        return view('back.car.create', compact('properties', 'brands', 'consults'));
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->title = $request->faname;
        $car->slug = $this->make_slug($request->faname);;
        $car->type = $request->type;
        $car->country = $request->facountry;
        $car->encountry = $request->encountry;
        $car->turcountry = $request->turcountry;
        $car->city = $request->facity;
        $car->encity = $request->encity;
        $car->year = $request->year;
        $car->turcity = $request->turcity;
        $car->cartype = $request->cartype;
        $car->price = $request->price;
        $car->cosult_id = $request->consult;
        $car->description = $request->des;
        $car->endescription = $request->endes;
        $car->turdescription = $request->turdes;
        $car->kilometer = $request->kilometer;
        $car->brand = $request->brand;
        $car->status = $request->status;
        $car->save();
        $photos = explode(',', $request->input('photo_id')[0]);
        foreach ($photos as $photo) {
            $test = Photo::find($photo);
            if (isset($test)) {
                $test->car_id = $car->id;
                $test->save();
            }
        }
        if ($request->selectMultiplefa) {
            foreach ($request->selectMultiplefa as $fa) {
                $property = new Carproperty();
                $property->title = $fa;
                $property->language = "fa";
                $property->car_id = $car->id;
                $property->save();
            }
        }
        if ($request->selectMultipleen) {
            foreach ($request->selectMultipleen as $en) {
                $property = new Carproperty();
                $property->title = $en;
                $property->language = "en";
                $property->car_id = $car->id;
                $property->save();
            }
        }
        if ($request->selectMultipletur) {
            foreach ($request->selectMultipletur as $tur) {
                $property = new Carproperty();
                $property->title = $tur;
                $property->language = "tur";
                $property->car_id = $car->id;
                $property->save();
            }
        }
        return redirect()->route('car.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $car = Car::find($id);
        $properties = Property::where('type', 2)->latest()->get();
        $brands = Brand::latest()->get();
        $consults = Cosult::latest()->get();
        return view('back.car.edit', compact('car', 'properties', 'brands', 'consults'));
    }

    public function update(Request $request, $id)
    {

        $car = Car::find($id);
        $car->title = $request->faname;
        $car->slug = $this->make_slug($request->faname);;
        $car->type = $request->type;
        $car->country = $request->facountry;
        $car->encountry = $request->encountry;
        $car->turcountry = $request->turcountry;
        $car->city = $request->facity;
        $car->encity = $request->encity;
        $car->turcity = $request->turcity;
        $car->cartype = $request->cartype;
        $car->year = $request->year;
        $car->price = $request->price;
        $car->cosult_id = $request->consult;
        $car->description = $request->des;
        $car->endescription = $request->endes;
        $car->turdescription = $request->turdes;
        $car->kilometer = $request->kilometer;
        $car->brand = $request->brand;
        $car->status = $request->status;
        $car->save();
        $photos = explode(',', $request->input('photo_id')[0]);
        foreach ($photos as $photo) {
            $test = Photo::find($photo);
            if (isset($test)) {
                $test->car_id = $car->id;
                $test->save();
            }
        }
        $carproperty = Carproperty::where('car_id', $id)->get();
        if ($request->selectMultiplefa) {
            $tests = $carproperty->where('language', 'fa');
            foreach ($tests as $test) {
                $test->delete();
            }
            foreach ($request->selectMultiplefa as $fa) {
                $property = $carproperty->where('title', $fa)->first();
                if (isset($property)) {
                    $property->title = $fa;
                    $property->language = "fa";
                    $property->car_id = $car->id;
                    $property->save();
                } else {
                    $property = new Carproperty();
                    $property->title = $fa;
                    $property->language = "fa";
                    $property->car_id = $car->id;
                    $property->save();
                }
            }
        }
        if ($request->selectMultipleen) {
            $tests = $carproperty->where('language', 'en');
            foreach ($tests as $test) {
                $test->delete();
            }
            foreach ($request->selectMultipleen as $en) {
                $property = $carproperty->where('title', $en)->first();
                if (isset($property)) {
                    $property->title = $en;
                    $property->language = "en";
                    $property->car_id = $car->id;
                    $property->save();
                } else {
                    $property = new Carproperty();
                    $property->title = $en;
                    $property->language = "en";
                    $property->car_id = $car->id;
                    $property->save();
                }
            }
        }
        if ($request->selectMultipletur) {
            $tests = $carproperty->where('language', 'tur');
            foreach ($tests as $test) {
                $test->delete();
            }
            foreach ($request->selectMultipletur as $tur) {
                $property = $carproperty->where('title', $tur)->first();
                if (isset($property)) {
                    $property->title = $tur;
                    $property->save();
                } else {
                    $property = new Carproperty();
                    $property->title = $tur;
                    $property->language = "tur";
                    $property->car_id = $car->id;
                    $property->save();
                }
            }
        }
        return redirect()->route('car.index')->with('به روز رسانی انجام شد');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $photos = Photo::where('car_id', $car->id)->get();
        if ($photos) {
            foreach ($photos as $photo) {
                unlink(getcwd() . $photo->path);
                $photo->delete();
            }
        }
        $car->delete();
        return redirect()->route('car.index')->with('danger', 'خودرو مورد نظر حذف گردبد');
    }

    function make_slug($string, $separator = '-')
    {
        $string = trim($string);
        $string = mb_strtolower($string, 'UTF-8');
        $string = preg_replace("/[^a-z0-9_\s\-ءاآؤئبپتثجچحخدذرزژسشصضطظعغفقكکگلمنوهی]/u", '', $string);
        $string = preg_replace("/[\s\-_]+/", ' ', $string);
        $string = preg_replace("/[\s_]/", $separator, $string);
        return $string;
    }
}
