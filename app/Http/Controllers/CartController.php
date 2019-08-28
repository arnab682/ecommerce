<?php

namespace App\Http\Controllers;

use App\Model\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      try{

          $carts = Cart::all();
          return view('table.carts.index', compact('carts'));

      }catch(QueryException $e){

          return redirect()
              ->route('404_blade')
              ->withInput()
              ->withErrors($e->getMessage());
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('table.carts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            //dd($request->input());
            //dd($request->all());
        try{
              //dd($request->input());
              //dd($request->hasFile('image'));
              if($request->hasFile('image')) {
                  $data = $request->all();
                  $fileName = time().'-'.$request->image->getClientOriginalName();
                  $request->image->move(public_path('/images/cart/'), $fileName);
                  $data['picture']=$fileName;
              }
              else{
                  $data['picture'] = null;
              }
              //dd($data['picture']);
              Cart::create($data);

              //return redirect()->route('labs.index')->withMessage('Lab is Inserted Successfully.');
              //return redirect()->route('slider.index')->with('message','Slider is Inserted Successfully.');
              return back();

          }catch(QueryException $e){

              return redirect()
                  ->route('cart.create')
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
      $cart = Cart::findOrfail($id);
      //dd($slider);
      return view('table.carts.show', compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cart = Cart::findOrfail($id);
      return view('table.carts.edit', compact('cart'));
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
            $cart = Cart::findOrFail($id);
            $data = $request->all();
            $oldpath=public_path('images/cart/' . $cart->picture);
            if($request->hasFile('image')){
                $image=$request->file('image');
                $filename=time(). '.' .$image->getClientOriginalExtension();
                $location=public_path('/images/cart/');
                $image->move($location, $filename);
                $data['picture']=$filename;
            }
            else if($oldpath)
            {
                $data['picture']=$cart->picture;
            }
            $cart->update($data);
            return redirect('cart')->with('message','Cart Updated !');
        }
        catch(QueryException $e){
            return redirect()
                ->route('cart.create')
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
          $cart = Cart::findOrFail($id);
          $cart->delete();
          return redirect()->route('cart.index')->with('message','Cart is Deleted Successfully.');
        }catch(QueryException $e){
          return redirect()
              ->route('cart.index')
              ->withErrors($e->getMessage());
        }
    }

    public function display($id){
      $product = Product::findOrFail($id);
      //dd($product);
      return view('table.carts.cart', compact('product'));
    }

    public function cartStore(Request $request){

       //dd($request);
       $data = $request->all();
       Cart::create($data);

       //return redirect()->route('labs.index')->withMessage('Lab is Inserted Successfully.');
       //return redirect()->route('slider.index')->with('message','Slider is Inserted Successfully.');
       return back();

    }
}
