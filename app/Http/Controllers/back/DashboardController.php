<?php

namespace App\Http\Controllers\back;

use App\Car;
use App\Cosult;
use App\Http\Controllers\Controller;
use App\Message;
use App\Product;
use App\Property;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('back.layout');
    }

    public function search(Request $request)
    {
        $product = Product::where('entitle','LIKE', '%'.$request->search.'%')
                             ->orWhere('turtitle','LIKE', '%'.$request->search.'%')
                             ->orWhere('title','LIKE', '%'.$request->search.'%')
                             ->get();
        $car = Car::where('title','LIKE', '%'.$request->search.'%')->get();

        if (count($product) > 0){
            $searches = $product;
            $home = true;
            $cars = false;
            return view('back.search',compact('searches','home','cars'));
        } elseif(count($car) > 0){
            $searches = $car;
            $cars = true;
            $home = false;
            return view('back.search',compact('searches','cars','home'));
        }
    }
}
