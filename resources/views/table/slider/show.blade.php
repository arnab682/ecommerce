@extends('layouts.admin')

@section('title')
  Slider Show
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">


    <div class="card">
      <div class="card-header bg-light">
          Slider Show :
      </div>
      <div class="card-body">

        <dl>
            <dt>ID</dt>
            <dd>{{$slider->id}}</dd>

            <dt>Title</dt>
            <dd>{{$slider->title}}</dd>

            <dt>Image</dt>
            <dd> <img src="{{ asset('images/slider/').'/'.$slider->picture }}" width="100" height="100"></dd>

            <dt>Caption</dt>
            <dd>{{$slider->caption}}</dd>

            <dt>Created At</dt>
            <dd>{{$slider->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$slider->updated_at}}</dd>
        </dl>

      </div>
    </div>


              </div>
          </div>
      </div>

  </div>
  </div>




@endsection

@section('sidebar')
    n/a
@endsection
