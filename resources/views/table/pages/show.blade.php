@extends('layouts.admin')

@section('title')
  Page Show
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">


    <div class="card">
      <div class="card-header bg-light">
          Page Show :
      </div>
      <div class="card-body">
        <dl>
            <dt>ID :</dt>
            <dd>{{$page->id}}</dd>

            <dt>Title :</dt>
            <dd>{{$page->title}}</dd>

            <dt>Description :</dt>
            <dd>{{$page->description}}</dd>

            <dt>Link :</dt>
            <dd>{{$page->link}}</dd>

            <dt>Created At</dt>
            <dd>{{$page->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$page->updated_at}}</dd>
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
