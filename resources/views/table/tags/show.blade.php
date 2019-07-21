@extends('layouts.admin')

@section('title')
  Tag Show
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">


    <div class="card">
      <div class="card-header bg-light">
          Tag Show :
      </div>
      <div class="card-body">
        <dl>
            <dt>ID :</dt>
            <dd>{{$tag->id}}</dd>

            <dt>Title :</dt>
            <dd>{{$tag->title}}</dd>

            <dt>Created At</dt>
            <dd>{{$tag->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$tag->updated_at}}</dd>
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
