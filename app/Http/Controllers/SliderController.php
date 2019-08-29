<?php

namespace App\Http\Controllers;

use App\Model\Slider;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        //dd($sliders);
        return view('table.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('table.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $slider = $request->all();
        // //dd($request->all());
        // Slider::create($slider);

        try{
              //dd($request->input());
              if($request->hasFile('image')) {
                  $data = $request->all();
                  $fileName = $request->title.time().'-'.$request->image->getClientOriginalName();
                  $request->image->move(public_path('/images/slider/'), $fileName);
                  $data['picture']=$fileName;
              }
              else{
                  $data['picture'] = null;
              }
              dd($data);
              Slider::create($data);

              //return redirect()->route('labs.index')->withMessage('Lab is Inserted Successfully.');
              //return redirect()->route('slider.index')->with('message','Slider is Inserted Successfully.');
              return back();

          }catch(QueryException $e){

              return redirect()
                  ->route('slider.create')
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
       $slider = Slider::findOrfail($id);
       //dd($slider);
       return view('table.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrfail($id);
        return view('table.slider.edit', compact('slider'));
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
      //$slider = Slider::findOrfail($id);

      try {
            $slider = Slider::findOrFail($id);
            $data = $request->all();
            $oldpath=public_path('images/slider/' . $slider->picture);
            if($request->hasFile('image')){
                $image=$request->file('image');
                $filename=time(). '.' .$image->getClientOriginalExtension();
                $location=public_path('/images/slider/');
                $image->move($location, $filename);
                $data['picture']=$filename;
            }
            else if($oldpath)
            {
                $data['picture']=$slider->picture;
            }
            $slider->update($data);
            return redirect('slider')->with('message','Slider Updated !');
        }
        catch(QueryException $e){
            return redirect()
                ->route('slider.create')
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
          $slider=Slider::findOrFail($id);
          $slider->delete();
          return redirect()->route('slider.index')->with('message','Slider is Deleted Successfully.');
        }catch(QueryException $e){
          return redirect()
              ->route('slider.index')
              ->withErrors($e->getMessage());
        }
    }

    public function pdf(){
      $sliders = Slider::all();
      //dd($sliders);
      return view('table.slider.downloadpdf', compact('sliders'));
    }


    public function downloadxl(){


        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');
        $sheet->setCellValue('A2', 'Hello World !');

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.'helloworld'.'.xls"'); /*-- $filename is  xsl filename ---*/
        header('Cache-Control: max-age=0');

        //$Excel_writer->save('php://output');
        $writer->save('php://output');
    }

    public function downloadpdf(){


        try {
            error_reporting(0);
            app('debugbar')->disable();
            $sliders=Slider::all();
            $html =  view('table.slider.downloadpdf', compact('sliders'))->render();
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->debug = true;
            $mpdf->WriteHTML($html);
            $mpdf->Output();
            //$mpdf->Output(public_path('/images/slider').'/asdfsdf1.pdf','F');
        } catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception
            //       name used for catch
            // Process the exception, log, print etc.
            echo $e->getMessage();
        }

    }

}
