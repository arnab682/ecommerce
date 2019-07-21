<?php

namespace App\Http\Controllers;

use App\Model\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      try{

          $testimonials = Testimonial::all();
          return view('table.testimonial.index', compact('testimonials'));

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
        return view('table.testimonial.create');
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
              $request->image->move(public_path('/images/testimonial/'), $fileName);
              $data['picture']=$fileName;
          }
          else{
              $data['picture'] = null;
          }
          //dd($data);
          Testimonial::create($data);

          //return redirect()->route('labs.index')->withMessage('Lab is Inserted Successfully.');
          //return redirect()->route('slider.index')->with('message','Slider is Inserted Successfully.');
          return back();

      }catch(QueryException $e){

          return redirect()
              ->route('testimonial.create')
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
      $testimonial = Testimonial::findOrfail($id);
      //dd($slider);
      return view('table.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $testimonial = Testimonial::findOrfail($id);
      return view('table.testimonial.edit', compact('testimonial'));
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
            $testimonial = Testimonial::findOrFail($id);
            $data = $request->all();
            $oldpath=public_path('images/testimonial/' . $testimonial->picture);
            if($request->hasFile('image')){
                $image=$request->file('image');
                $filename=time(). '.' .$image->getClientOriginalExtension();
                $location=public_path('/images/testimonial/');
                $image->move($location, $filename);
                $data['picture']=$filename;
            }
            else if($oldpath)
            {
                $data['picture']=$testimonial->picture;
            }
            $testimonial->update($data);
            return redirect('testimonial')->with('message','Testimonial Updated !');
        }
        catch(QueryException $e){
            return redirect()
                ->route('testimonial.create')
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
          $testimonial = Testimonial::findOrFail($id);
          $testimonial->delete();
          return redirect()->route('testimonial.index')->with('message','Testimonial is Deleted Successfully.');
        }catch(QueryException $e){
          return redirect()
              ->route('testimonial.index')
              ->withErrors($e->getMessage());
        }
    }
}
