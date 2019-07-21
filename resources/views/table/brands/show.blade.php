@extends('layouts.admin')

@section('title')
  Brand Show
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">


    <div class="card">
      <div class="card-header bg-light">
          Brand Show :
      </div>
      <div class="card-body">

        <dl>
            <dt>ID</dt>
            <dd>{{$brand->id}}</dd>

            <dt>Title</dt>
            <dd>{{$brand->title}}</dd>

            <dt>Draft</dt>
            <dd>{{$brand->is_draft}}</dd>

            <dt>Active</dt>
            <dd>{{$brand->is_active}}</dd>

            <dt>Created At</dt>
            <dd>{{$brand->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$brand->updated_at}}</dd>
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
