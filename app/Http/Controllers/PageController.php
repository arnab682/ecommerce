<?php

namespace App\Http\Controllers;

use App\Model\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      try{

          $pages = Page::all();
          return view('table.pages.index', compact('pages'));

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
        return view('table.pages.create');
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

          Page::create($data);

          //return redirect()->route('labs.index')->withMessage('Lab is Inserted Successfully.');
          //return redirect()->route('slider.index')->with('message','Slider is Inserted Successfully.');
          return back();

      }catch(QueryException $e){

          return redirect()
              ->route('page.create')
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
      $page = Page::findOrfail($id);
      //dd($slider);
      return view('table.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $page = Page::findOrfail($id);
      return view('table.pages.edit', compact('page'));
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
      $page = Page::findOrFail($id);
      $data = $request->all();
      $page->update($data);

      return redirect('page')->with('message','Page Updated !');
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
          $page = Page::findOrFail($id);
          $page->delete();
          return redirect()->route('page.index')->with('message','Page is Deleted Successfully.');
        }catch(QueryException $e){
          return redirect()
              ->route('page.index')
              ->withErrors($e->getMessage());
        }
    }
}
