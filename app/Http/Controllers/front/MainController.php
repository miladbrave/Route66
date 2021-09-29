<?php

namespace App\Http\Controllers\front;

use App\Blog;
use App\Brand;
use App\Car;
use App\Cosult;
use App\Http\Controllers\Controller;
use App\Message;
use App\Product;
use App\Productcomplete;
use App\Property;
use App\Slider;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $home = Product::latest()->get();
        $homeCountries = $home->pluck('country');
        $homeCities = $home->pluck('city');
        $brands = Brand::latest()->get();
        $cars = Car::latest()->get();
        $carcity = $cars->pluck('city');
        $agents = Cosult::latest()->get();
        $blogs = Blog::where('status',1)->latest()->get();
        return view('front.fa.index', compact('carcity','sliders', 'homeCountries', 'homeCities', 'home', 'brands', 'cars','agents','blogs'));
    }

    public function about()
    {
        return view('front.fa.about');
    }

    public function service()
    {
        $agents = Cosult::latest()->get();
        return view('front.fa.service',compact('agents'));
    }

    public function list()
    {
        $homes = Product::latest()->paginate(10);
        $homeCountries = $homes->pluck('country');
        $homeCities = $homes->pluck('city');
        return view('front.fa.lists', compact('homes', 'homeCountries', 'homeCities'));
    }

    public function carlist()
    {
        $cars = Car::latest()->paginate(10);
        $homeCities = $cars->pluck('city');
        $brands = Brand::latest()->get();
        return view('front.fa.carlist', compact('cars', 'homeCities','brands'));
    }

    public function contact()
    {
        return view('front.fa.contact');
    }

    public function product($home, $slug)
    {
        if ($home == "Home") {
            $home = Product::latest()->get();
            $homeCountries = $home->unique('country')->pluck('country');
            $homeCities = $home->unique('city')->pluck('city');
            $product = Product::where('slug',$slug)->first();
            $consult = Cosult::whereId($product->cosult_id)->first();
            $car=null;$cars=null;$brands = null;
        } elseif ($home == "car") {
            $cars = Car::latest()->get();
            $homeCountries = $cars->unique('country')->pluck('country');
            $homeCities = $cars->unique('city')->pluck('city');
            $car = Car::where('slug', $slug)->first();
            $consult = Cosult::whereId($car->cosult_id)->first();
            $brands = Brand::latest()->get();
            $product=null;$properties=null;$home=null;
        }
        $properties = Property::latest()->get();
        return view('front.fa.product', compact('brands','product', 'properties', 'homeCities', 'homeCountries', 'home','car','cars','consult'));
    }

    public function blogDetail($id)
    {
        $blog = Blog::find($id);
        $blogs = Blog::latest()->get();
        return view('front.fa.blogdetail',compact('blog','blogs'));
    }

    public function search(Request $request)
    {
        if ($request->home) {
            $product = Product::with('productcompletes')->latest()->get();
            if ($request->country) {
                $product = Product::where('country', 'LIKE', '%' . $request->country . '%')->get();
            }
            if ($request->city) {
                $product = Product::where('city', 'LIKE', '%' . $request->city . '%')->get();
            }
            if (isset($request->type)) {
                $product = $product->where('type', $request->type);
            }
            if ($request->price) {
                switch ($request->price) {
                    case 1:
                        $product = $product->whereBetween('price', [0, 50001]);
                        break;
                    case 2:
                        $product = $product->whereBetween('price', [5000, 150001]);
                        break;
                    case 3:
                        $product = $product->whereBetween('price', [150000, 300001]);
                        break;
                    case 4:
                        $product = $product->whereBetween('price', [300000, 450001]);
                        break;
                    case 5:
                        $product = $product->whereBetween('price', [450000, 600001]);
                        break;
                    case 6:
                        $product = $product->where('price', '>=', 600000);
                        break;
                }
            }
            if ($request->meter) {
                switch ($request->meter) {
                    case 1:
                        $product = Productcomplete::whereBetween('meter', [0, 101]);
                        break;
                    case 2:
                        $product = Productcomplete::whereBetween('meter', [100, 201]);
                        break;
                    case 3:
                        $product = Productcomplete::whereBetween('meter', [200, 301]);
                        break;
                    case 4:
                        $product = Productcomplete::where('meter', '>=', 300);
                        break;
                }
                $product = Product::whereIn('id', $product->pluck('product_id'))->get();
            }
            if ($request->room) {
                switch ($request->room) {
                    case 1:
                        $product = Productcomplete::where('room', 1);
                        break;
                    case 2:
                        $product = Productcomplete::where('room', 2);
                        break;
                    case 3:
                        $product = Productcomplete::where('room', 3);
                        break;
                    case 4:
                        $product = Productcomplete::where('room', 4);
                        break;
                    case 10:
                        $product = Productcomplete::where('room', '>', 4);
                        break;
                }
                $product = Product::whereIn('id', $product->pluck('product_id'))->get();
            }
            $home = 'ملک';
            $results = $product;
            return view('front.fa.search', compact('results', 'home'));
        } elseif ($request->car) {
            $car = Car::with('Carproperty')->latest()->get();
            if (isset($request->new)) {
                $car = $car->where('type', $request->new);
            }
            if ($request->city) {
                $car = $car->where('city',$request->city );
            }
            if ($request->brand) {
                $car = $car->where('brand',  $request->brand );
            }
            if ($request->cartype) {
                $car = $car->where('cartype', $request->cartype);
            }
            if ($request->price) {
                switch ($request->price) {
                    case 1:
                        $car = $car->whereBetween('price', [0, 20001]);
                        break;
                    case 2:
                        $car = $car->whereBetween('price', [20000, 50001]);
                        break;
                    case 3:
                        $car = $car->whereBetween('price', [50000, 80001]);
                        break;
                    case 4:
                        $car = $car->whereBetween('price', [80000, 100001]);
                        break;
                    case 5:
                        $car = $car->whereBetween('price', [100000, 150001]);
                        break;
                    case 6:
                        $car = $car->where('price', '>=', 150000);
                        break;
                }
            }
            $vehicle = 'خودرو';
            $results = $car;
            return view('front.fa.search', compact('results', 'vehicle'));
        }
        return back();
    }

    public function searchpage()
    {
        return view('front.fa.search');
    }

    public function agent($name)
    {
        $agent = Cosult::where('faname',  'LIKE', '%'. $name.'%')->first();
        $cars = Car::where('cosult_id',$agent->id)->get();
        $homes = Product::where('cosult_id',$agent->id)->get();
        return view('front.fa.agent',compact('agent','cars','homes'));
    }

    public function sendmessage(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|numeric',
            'description' => 'required',
            'g-recaptcha-response' => 'required|captcha'

        ], [
            'name.required' => 'نام را وارد کنید.',
            'phone.required' => 'شماره تماس را وارد کنید.',
            'phone.numeric' => 'شماره تماس باید عددی باشد.',
            'description.required' => 'توضیح پیام را وارد کنید.',
            'g-recaptcha-response' => [
                'required' => 'لطفا روی من ربات نیستم کلیک کنید',
                'captcha' => 'مشکلی پیش آمده است.لطفا بعدا تلاش کنید.',
            ],
        ]);
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->description = $request->description;
        $message->save();

        return back()->with('success','پیام شما ارسال شد.');
    }

    public function login()
    {
        return view('auth.login');
    }
}
