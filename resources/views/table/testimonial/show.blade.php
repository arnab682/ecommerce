@extends('layouts.admin')

@section('title')
  Testimonial Show
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">


    <div class="card">
      <div class="card-header bg-light">
          Testimonial Show :
      </div>
      <div class="card-body">
        <dl>
            <dt>ID :</dt>
            <dd>{{$testimonial->id}}</dd>

            <dt>Picture :</dt>
            <dd> <img src="{{ asset('images/testimonial/').'/'.$testimonial->picture }}" width="100" height="100"></dd>

            <dt>Name :</dt>
            <dd>{{$testimonial->name}}</dd>

            <dt>Body :</dt>
            <dd>{{$testimonial->body}}</dd>

            <dt>Designation :</dt>
            <dd>{{$testimonial->designation}}</dd>

            <dt>Created At</dt>
            <dd>{{$testimonial->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$testimonial->updated_at}}</dd>
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
