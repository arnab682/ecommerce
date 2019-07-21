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
            <dd>{{$category->id}}</dd>

            <dt>Name</dt>
            <dd>{{$category->name}}</dd>

            <dt>Link</dt>
            <dd>{{$category->link}}</dd>

            <dt>Soft Delete</dt>
            <dd>{{$category->soft_delete}}</dd>

            <dt>Draft</dt>
            <dd>{{$category->is_draft}}</dd>

            <dt>Created At</dt>
            <dd>{{$category->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$category->updated_at}}</dd>
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
