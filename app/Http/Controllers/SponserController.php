<?php

namespace App\Http\Controllers;

use App\Model\Sponser;
use Illuminate\Http\Request;

class SponserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      try{

          $sponsers = Sponser::all();
          return view('table.sponsers.index', compact('sponsers'));

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
        return view('table.sponsers.create');
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
              $request->image->move(public_path('/images/sponser/'), $fileName);
              $data['picture']=$fileName;
          }
          else{
              $data['picture'] = null;
          }
          //dd($data);
          Sponser::create($data);

          //return redirect()->route('labs.index')->withMessage('Lab is Inserted Successfully.');
          //return redirect()->route('slider.index')->with('message','Slider is Inserted Successfully.');
          return back();

      }catch(QueryException $e){

          return redirect()
              ->route('sponser.create')
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
      $sponser = Sponser::findOrfail($id);
      //dd($slider);
      return view('table.sponsers.show', compact('sponser'));
    }

    /**$brand = Brand::findOrfail($id);
    //dd($slider);
    return view('table.brands.show', compact('brand'));
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $sponser = Sponser::findOrfail($id);
      return view('table.sponsers.edit', compact('sponser'));
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
            $sponser = Sponser::findOrFail($id);
            $data = $request->all();
            $oldpath=public_path('images/sponser/' . $sponser->picture);
            if($request->hasFile('image')){
                $image=$request->file('image');
                $filename=time(). '.' .$image->getClientOriginalExtension();
                $location=public_path('/images/sponser/');
                $image->move($location, $filename);
                $data['picture']=$filename;
            }
            else if($oldpath)
            {
                $data['picture']=$sponser->picture;
            }
            $sponser->update($data);
            //dd($data);
            return redirect('sponser')->with('message','Sponser Updated !');
        }
        catch(QueryException $e){
            return redirect()
                ->route('sponser.create')
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
          $sponser = Sponser::findOrFail($id);
          $sponser->delete();
          return redirect()->route('sponser.index')->with('message','Sponser is Deleted Successfully.');
        }catch(QueryException $e){
          return redirect()
              ->route('sponser.index')
              ->withErrors($e->getMessage());
        }
    }
}
