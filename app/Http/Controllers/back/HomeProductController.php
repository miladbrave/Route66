<?php

namespace App\Http\Controllers\back;

use App\Cosult;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Product;
use App\Productcomplete;
use App\Productproperty;
use App\Property;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeProductController extends Controller
{

    public function index()
    {
        $products = Product::latest()->get();
        return view('back.product.index', compact('products'));
    }

    public function create()
    {
        $properties = Property::where('type', 1)->latest()->get();
        $consults = Cosult::latest()->get();
        return view('back.product.create', compact('properties', 'consults'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'faname' => 'required',
            'type' => 'required',
            'facountry' => 'required',
            'facity' => 'required',
            'sellstatus' => 'required',
            'price' => 'required',
            'encountry' => 'required',
            'encity' => 'required',
            'enname' => 'required',
            'turcountry' => 'required',
            'turcity' => 'required',
            'turname' => 'required',
            'meter' => 'required',
        ], [
            'faname.required' => 'عنوان ملک را وارد کنید.',
            'type.required' => 'نوع ملک را وارد کنید.',
            'facountry.required' => 'کشور را وارد کنید.',
            'facity.required' => 'شهر را وارد کنید.',
            'sellstatus.required' => 'وضعیت ملک را وارد کنید.',
            'price.required' => 'قیمت را وارد کنید.',
            'encountry.required' => 'کشور(انگلیسی) را وارد کنید.',
            'encity.required' => 'شهر(انگلیسی) را وارد کنید.',
            'enname.required' => 'عنوان(انگلیسی) را وارد کنید.',
            'turcountry.required' => 'کشور(ترکی) را وارد کنید.',
            'turcity.required' => 'شهر(ترکی) را وارد کنید.',
            'turname.required' => 'عنوان(ترکی) را وارد کنید.',
            'meter.required' => 'متراژ را وارد کنید.',
        ]);
        $product = new Product();
        $product->title = $request->faname;
        $product->slug = $this->make_slug($request->faname);;
        $product->entitle = $request->enname;
        $product->turtitle = $request->turname;
        $product->type = $request->type;
        $product->country = $request->facountry;
        $product->encountry = $request->encountry;
        $product->turcountry = $request->turcountry;
        $product->city = $request->facity;
        $product->encity = $request->encity;
        $product->turcity = $request->turcity;
        $product->zone = $request->fazone;
        $product->enzone = $request->enzone;
        $product->turzone = $request->turzone;
        $product->sellStatus = $request->sellstatus;
        $product->cosult_id = $request->consult;
        $product->price = $request->price;
        $product->address = $request->address;
        $product->enaddress = $request->enaddress;
        $product->turaddress = $request->turaddress;
        $product->description = $request->des;
        $product->endescription = $request->endes;
        $product->turdescription = $request->turdes;
        $product->status = $request->status;
        $product->save();
        $photos = explode(',', $request->input('photo_id')[0]);
        foreach ($photos as $photo) {
            $test = Photo::find($photo);
            if (isset($test)) {
                $test->product_id = $product->id;
                $test->save();
            }
        }
        $productcomplete = new Productcomplete();
        $productcomplete->meter = $request->meter;
        $productcomplete->age = $request->year;
        $productcomplete->room = $request->room;
        $productcomplete->bath = $request->bath;
        $productcomplete->floor = $request->floor;
        $productcomplete->heating = $request->heating;
        $productcomplete->product_id = $product->id;
        $productcomplete->save();
        if ($request->selectMultiplefa) {
            foreach ($request->selectMultiplefa as $fa) {
                $property = new Productproperty();
                $property->title = $fa;
                $property->language = "fa";
                $property->product_id = $product->id;
                $property->save();
            }
        }
        if ($request->selectMultipleen) {

            foreach ($request->selectMultipleen as $en) {
                $property = new Productproperty();
                $property->title = $en;
                $property->language = "en";
                $property->product_id = $product->id;
                $property->save();
            }
        }
        if ($request->selectMultipletur) {

            foreach ($request->selectMultipletur as $tur) {
                $property = new Productproperty();
                $property->title = $tur;
                $property->language = "tur";
                $property->product_id = $product->id;
                $property->save();
            }
        }
        return redirect()->route('home.index');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        if ($product->status == 0) {
            $product->status = 1;
            $product->save();
            return back();
        }
        if ($product->status == 1) {
            $product->status = 0;
            $product->save();
            return back();
        }
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $properties = Property::where('type', 1)->latest()->get();
        $consults = Cosult::latest()->get();
        return view('back.product.edit', compact('properties', 'product', 'consults'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'faname' => 'required',
            'type' => 'required',
            'facountry' => 'required',
            'facity' => 'required',
            'sellstatus' => 'required',
            'price' => 'required',
            'encountry' => 'required',
            'encity' => 'required',
            'enname' => 'required',
            'turcountry' => 'required',
            'turcity' => 'required',
            'turname' => 'required',
            'meter' => 'required',
        ], [
            'faname.required' => 'عنوان ملک را وارد کنید.',
            'type.required' => 'نوع ملک را وارد کنید.',
            'facountry.required' => 'کشور را وارد کنید.',
            'facity.required' => 'شهر را وارد کنید.',
            'sellstatus.required' => 'وضعیت ملک را وارد کنید.',
            'price.required' => 'قیمت را وارد کنید.',
            'encountry.required' => 'کشور(انگلیسی) را وارد کنید.',
            'encity.required' => 'شهر(انگلیسی) را وارد کنید.',
            'enname.required' => 'عنوان(انگلیسی) را وارد کنید.',
            'turcountry.required' => 'کشور(ترکی) را وارد کنید.',
            'turcity.required' => 'شهر(ترکی) را وارد کنید.',
            'turname.required' => 'عنوان(ترکی) را وارد کنید.',
            'meter.required' => 'متراژ را وارد کنید.',
        ]);

        $product = Product::findOrFail($id);
        $product->title = $request->faname;
        $product->slug = $this->make_slug($request->faname);;
        $product->entitle = $request->enname;
        $product->turtitle = $request->turname;
        $product->type = $request->type;
        $product->country = $request->facountry;
        $product->encountry = $request->encountry;
        $product->turcountry = $request->turcountry;
        $product->city = $request->facity;
        $product->encity = $request->encity;
        $product->turcity = $request->turcity;
        $product->zone = $request->fazone;
        $product->enzone = $request->enzone;
        $product->turzone = $request->turzone;
        $product->sellStatus = $request->sellstatus;
        $product->cosult_id = $request->consult;
        $product->price = $request->price;
        $product->address = $request->address;
        $product->enaddress = $request->enaddress;
        $product->turaddress = $request->turaddress;
        $product->description = $request->des;
        $product->endescription = $request->endes;
        $product->turdescription = $request->turdes;
        $product->status = $request->status;
        $product->save();

        $photos = explode(',', $request->input('photo_id')[0]);
        foreach ($photos as $photo) {
            $test = Photo::find($photo);
            if (isset($test)) {
                $test->product_id = $product->id;
                $test->save();
            }
        }
        $productcomplete = Productcomplete::where('product_id', $id)->first();
        $productcomplete->meter = $request->meter;
        $productcomplete->age = $request->year;
        $productcomplete->room = $request->room;
        $productcomplete->bath = $request->bath;
        $productcomplete->floor = $request->floor;
        $productcomplete->heating = $request->heating;
        $productcomplete->save();
        $productproperty = Productproperty::where('product_id', $id)->get();
        if ($request->selectMultiplefa) {
            $tests = $productproperty->where('language', 'fa');
            foreach ($tests as $test) {
                $test->delete();
            }
            foreach ($request->selectMultiplefa as $fa) {
                $property = $productproperty->where('title', $fa)->first();
                if (isset($property)) {
                    $property->title = $fa;
                    $property->language = "fa";
                    $property->product_id = $product->id;
                    $property->save();
                } else {
                    $property = new Productproperty();
                    $property->title = $fa;
                    $property->language = "fa";
                    $property->product_id = $product->id;
                    $property->save();
                }
            }
        }
        if ($request->selectMultipleen) {
            $tests = $productproperty->where('language', 'en');
            foreach ($tests as $test) {
                $test->delete();
            }
            foreach ($request->selectMultipleen as $en) {
                $property = $productproperty->where('title', $en)->first();
                if (isset($property)) {
                    $property->title = $en;
                    $property->language = "en";
                    $property->product_id = $product->id;
                    $property->save();
                } else {
                    $property = new Productproperty();
                    $property->title = $en;
                    $property->language = "en";
                    $property->product_id = $product->id;
                    $property->save();
                }
            }
        }
        if ($request->selectMultipletur) {
            $tests = $productproperty->where('language', 'tur');
            foreach ($tests as $test) {
                $test->delete();
            }
            foreach ($request->selectMultipletur as $tur) {
                $property = $productproperty->where('title', $tur)->first();
                if (isset($property)) {
                    $property->title = $tur;
                    $property->save();
                } else {
                    $property = new Productproperty();
                    $property->title = $tur;
                    $property->language = "tur";
                    $property->product_id = $product->id;
                    $property->save();
                }
            }
        }
        return redirect()->route('home.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $photos = Photo::where('product_id', $product->id)->get();
        if ($photos) {
            foreach ($photos as $photo) {
                unlink(getcwd() . $photo->path);
                $photo->delete();
            }
        }
        $product->delete();
        return redirect()->route('home.index');
    }

    public function storepic(Request $request)
    {
        $uploadfile = $request->file('file');
        $filename = time() . $uploadfile->getClientOriginalName();
        $original_name = $uploadfile->getClientOriginalName();
        $image = Image::make($uploadfile);
        $upload_path = public_path('/photo/');
        $image->resize(580, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save( $upload_path.$filename ,100);

//        $uploadfile->move('photo', $filename);
        $photo = new Photo();
        $photo->original_name = $original_name;
        $photo->path = $filename;
        $photo->user_id = 1;
        $photo->save();

        return response()->json([
            'photo_id' => $photo->id
        ]);
    }

    public function removeimage(Request $request)
    {
        $filename =  $request->get('filename');
        $photo = Photo::where('original_name',$filename)->latest()->first();
        if (isset($photo)) {
            unlink(public_path() . $photo->path);
            $photo->delete();
            return "success";
        }
        return "failed";
    }

    public function photodestroy($id)
    {
        $photo = Photo::whereId($id)->first();
        if ($photo) {
            unlink(getcwd() . $photo->path);
            $photo->delete();
        }
        return back();
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
