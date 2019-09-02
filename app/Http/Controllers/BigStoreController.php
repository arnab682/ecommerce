<?php

namespace App\Http\Controllers;

use App\Model\Cart;
use App\Model\Slider;
use App\Model\Banner;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class BigStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $number = mt_rand(1000000000, 9999999999);
        // $value = $request->session($number);
        // dd($value);
        //$lol = Session::get('id');
        //dd($lol);

        //$currentSession = session();//session()->getId();
        //dd($currentSession);

        $sliders = Slider::where('is_active',1)->take(3)->get(); //->orderBy('name', 'desc') asc
        $banner = Banner::all();
        $category = Category::all();
        //$products = Product::where('is_new', '1')->take(4)->get(); //orderBy('id', 'desc')->take(4)->get();
        //$products = Product::all();
        //$offerProducts = Product::where('is_new'===1 && 'product_type' === 'Staples')->take(4)->get();
        $offerStaples = Product::where('is_new','=',1)->where('product_type','=', 'Staples')->take(4)->get();
        $offerSnacks = Product::where('is_new','=',1)->where('product_type','=', 'Snacks')->take(4)->get();
        $offerFruits = Product::where('is_new','=',1)->where('product_type','=', 'Fruits & Vegetables')->take(4)->get();
        $offerBreakfast = Product::where('is_new','=',1)->where('product_type','=', 'Breakfast & Cereal')->take(4)->get();
        //dd($offerProducts);
        $products = Product::paginate(16);


        return view('big', compact('sliders', 'products', 'offerStaples', 'offerSnacks', 'offerFruits', 'offerBreakfast'));
        //return view('bigStore', compact('sliders'));
    }




}
