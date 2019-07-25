<?php

namespace App\Http\Controllers;

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

        $sliders = Slider::where('is_active',1)->take(3)->get(); //->orderBy('name', 'desc')
        $banner = Banner::all();
        $category = Category::all();
        $products = Product::orderBy('id', 'asc')->take(4)->get();

        //dd($sliders);


        return view('big', compact('sliders', 'products'));
        //return view('bigStore', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *asc
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
