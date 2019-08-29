<?php

namespace App\Http\Controllers;

use App\Model\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      try{

          $banners = Banner::all();
          return view('table.banners.index', compact('banners'));

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
        return view('table.banners.create');
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
                $request->image->move(public_path('/images/banner/'), $fileName);
                $data['picture']=$fileName;
            }
            else{
                $data['picture'] = null;
            }
            //dd($data);
            Banner::create($data);

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
      $banner = Banner::findOrfail($id);
      //dd($slider);
      return view('table.banners.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $banner = Banner::findOrfail($id);
      return view('table.banners.edit', compact('banner'));
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
      //dd($request);
      try {
            $banner = Banner::findOrFail($id);
            $data = $request->all();
            $oldpath=public_path('images/banner/' . $banner->picture);
            if($request->hasFile('image')){
                $image=$request->file('image');
                $filename=time(). '.' .$image->getClientOriginalExtension();
                $location=public_path('/images/banner/');
                $image->move($location, $filename);
                $data['picture']=$filename;
            }
            else if($oldpath)
            {
                $data['picture']=$banner->picture;
            }
            $banner->update($data);
            return back()->with('message','Banner Updated !');
        }
        catch(QueryException $e){
            return redirect()
                ->route('Banner.create')
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
          $banner=Banner::findOrFail($id);
          $banner->delete();
          return redirect()->route('banner.index')->with('message','Banner is Deleted Successfully.');
        }catch(QueryException $e){
          return redirect()
              ->route('banner.index')
              ->withErrors($e->getMessage());
        }

    }
}
