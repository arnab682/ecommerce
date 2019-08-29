<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      try{

          $categories = Category::all();
          return view('table.categories.index', compact('categories'));

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
        return view('table.categories.create');
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
                 $fileName = $request->name.time().'-'.$request->image->getClientOriginalName();
                 $request->image->move(public_path('/images/category/'), $fileName);
                 $data['picture']=$fileName;

             }
             else{
                 $data['picture'] = null;
                 //$data = $request->all();
             }

             //dd($data);
             //dd($data['picture']);
             Category::create($data);

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
      $category = Category::findOrfail($id);
      //dd($slider);
      return view('table.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $category = Category::findOrfail($id);
      return view('table.categories.edit', compact('category'));
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
      $category = Category::findOrFail($id);
      $data = $request->all();
      $category->update($data);

      return redirect('category')->with('message','Category Updated !');
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
          $categories = Category::findOrFail($id);
          $categories->delete();
          return redirect()->route('category.index')->with('message','Category is Deleted Successfully.');
        }catch(QueryException $e){
          return redirect()
              ->route('category.index')
              ->withErrors($e->getMessage());
        }
    }
}
