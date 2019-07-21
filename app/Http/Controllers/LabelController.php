<?php

namespace App\Http\Controllers;

use App\Model\Label;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      try{

          $labels = Label::all();
          return view('table.labels.index', compact('labels'));

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
        return view('table.labels.create');
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
              $request->image->move(public_path('/images/label/'), $fileName);
              $data['picture']=$fileName;
          }
          else{
              $data['picture'] = null;
          }
          //dd($data);
          Label::create($data); //data store in database using Label model

          //return redirect()->route('labs.index')->withMessage('Lab is Inserted Successfully.');
          //return redirect()->route('slider.index')->with('message','Slider is Inserted Successfully.');
          return back();

      }catch(QueryException $e){

          return redirect()
              ->route('label.create')
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
      $label = Label::findOrfail($id);
      //dd($slider);
      return view('table.labels.show', compact('label'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $label = Label::findOrfail($id);
      return view('table.labels.edit', compact('label'));
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
      $label = Label::findOrFail($id);
      $data = $request->all();
      $label->update($data);

      return redirect('label')->with('message','Label Updated !');
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
          $label = Label::findOrFail($id);
          $label->delete();
          return redirect()->route('label.index')->with('message','Label is Deleted Successfully.');
        }catch(QueryException $e){
          return redirect()
              ->route('label.index')
              ->withErrors($e->getMessage());
        }
    }
}
