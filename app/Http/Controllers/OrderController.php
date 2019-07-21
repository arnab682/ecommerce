<?php

namespace App\Http\Controllers;

use App\Model\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      try{

          $orders = Order::all();
          return view('table.Orders.index', compact('orders'));

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
        return view('table.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      try {

          $data = $request->all();
          //dd($data);
          Order::create($data);

          //return redirect()->route('labs.index')->withMessage('Lab is Inserted Successfully.');
          //return redirect()->route('slider.index')->with('message','Slider is Inserted Successfully.');
          return back();

      }catch(QueryException $e){

          return redirect()
              ->route('order.create')
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
      $order = Order::findOrfail($id);
      //dd($slider);
      return view('table.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $order = Order::findOrfail($id);
      return view('table.orders.edit', compact('order'));
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
      $order = Order::findOrFail($id);
      $data = $request->all();
      $order->update($data);

      return redirect('order')->with('message','Order Updated !');
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
          $order = Order::findOrFail($id);
          $order->delete();
          return redirect()->route('order.index')->with('message','Order is Deleted Successfully.');
        }catch(QueryException $e){
          return redirect()
              ->route('order.index')
              ->withErrors($e->getMessage());
        }
    }
}
