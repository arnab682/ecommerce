@extends('layouts.admin')

@section('title')
  Label Show
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">


    <div class="card">
      <div class="card-header bg-light">
          Label Show :
      </div>
      <div class="card-body">
        <dl>
            <dt>ID :</dt>
            <dd>{{$label->id}}</dd>

            <dt>Title :</dt>
            <dd>{{$label->title}}</dd>

            <dt>Picture :</dt>
            <dd> <img src="{{ asset('images/label/').'/'.$label->picture }}" width="100" height="100"></dd>

            <dt>Created At</dt>
            <dd>{{$label->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$label->updated_at}}</dd>
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
