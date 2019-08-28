<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      return view('table.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         return view('table.users.create');
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

           User::create($data);

           //return redirect()->route('labs.index')->withMessage('Lab is Inserted Successfully.');
           //return redirect()->route('slider.index')->with('message','Slider is Inserted Successfully.');
           return back();

       }catch(QueryException $e){

           return redirect()
               ->route('user.create')
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
       $user = User::findOrfail($id);
       //dd($slider);
       return view('table.users.show', compact('user'));
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       $user = User::findOrfail($id);
       return view('table.users.edit', compact('user'));
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
       $user = User::findOrFail($id);
       $data = $request->all();
       $user->update($data);

       return redirect('user')->with('message','User Updated !');
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
           $user = User::findOrFail($id);
           $user->delete();
           return back()->with('message','User is Deleted Successfully.');
         }catch(QueryException $e){
           return redirect()
               ->route('user.index')
               ->withErrors($e->getMessage());
         }
     }
}
