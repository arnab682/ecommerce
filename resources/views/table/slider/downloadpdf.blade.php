@extends('layouts.pdflayout')

@section('content')

  <div class="card">

    <div class="card-header bg-light" style=" text-align: center; ">
        <h3 style="text-color: dark;"><u>Slider Report</u></h3>
    </div>
    <br>

    <table  class="table table-bordered">
        <thead class="" style=" text-color: dark;">
            <tr>
                <th style="text-align: center;">No.</th>
                <th style="text-align: center;">Title</th>
                <th style="text-align: center;">Image</th>
                <th style="text-align: center;">Caption</th>
                <th style="text-align: center;">Link</th>
                <th style="text-align: center;">Created At</th>
                <th style="text-align: center;">Modified At</th>

            </tr>
        </thead>
        @php
            $sl = 0;
        @endphp
        @foreach($sliders as $slider)
            <tr>
                <td style="text-align: center;">{{++$sl}}.</td>
                <td style="text-align: center;">{{$slider->title}}</td>
                <td style="text-align: center;"> <img src="{{ asset('/images/slider/'.$slider->picture) }}" width="100" height="60"> </td>
                <td style="text-align: center;">{{$slider->caption}}</td>
                <td style="text-align: center;">{{$slider->link}}</td>
                <td style="text-align: center;">{{$slider['created_at']}}</td>
                <td style="text-align: center;">{{$slider['updated_at']}}</td>

            </tr>
        @endforeach
    </table>
  </div>

  @endsection
