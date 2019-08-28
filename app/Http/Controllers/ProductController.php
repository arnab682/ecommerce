<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          $products = Product::all();
          return view('table.products.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('table.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      try{
            //dd($request->input());
            if($request->hasFile('image')) {
                $data = $request->all();
                $fileName = $request->title.'-'.$request->image->getClientOriginalName();
                $request->image->move(public_path('/images/product/'), $fileName);
                $data['picture']=$fileName;

                Product::create($data);
            }

            //dd($data);


            //return redirect()->route('labs.index')->withMessage('Lab is Inserted Successfully.');
            //return redirect()->route('slider.index')->with('message','Slider is Inserted Successfully.');
            return back();

        }catch(QueryException $e){

            return redirect()
                ->route('banner.create')
                ->withInput()
                ->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product = Product::findOrfail($id);
      //dd($slider);
      return view('table.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::findOrfail($id);
      return view('table.products.edit', compact('product'));
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
      try {
            $product = Product::findOrFail($id);
            $data = $request->all();
            $oldpath=public_path('images/product/' . $product->picture);
            if($request->hasFile('image')){
                $image=$request->file('image');
                $filename=time(). '.' .$image->getClientOriginalExtension();
                $location=public_path('/images/product/');
                $image->move($location, $filename);
                $data['picture']=$filename;
            }
            else if($oldpath)
            {
                $data['picture']=$product->picture;
            }
            $product->update($data);
            return redirect('product')->with('message','Product Updated !');
        }
        catch(QueryException $e){
            return redirect()
                ->route('product.create')
                ->withInput()
                ->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      try{
          $product = Product::findOrFail($id);
          $product->delete();
          return redirect()->route('product.index')->with('message','Product is Deleted Successfully.');
        }catch(QueryException $e){
          return redirect()
              ->route('product.index')
              ->withErrors($e->getMessage());
        }
    }

    public function singlePostShow(Request $request, $id){
      //dd($id);
      //$lol = $request->session()->get('key');
      //dd($lol);
      //dd($request);
       $product = Product::findOrFail($id);
       return view('theme.single', compact('product'));
      //return "hi";
    }
}
