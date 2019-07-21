@extends('layouts.admin')

@section('title')
  Banner Show
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">


    <div class="card">
      <div class="card-header bg-light">
          Banner Show :
      </div>
      <div class="card-body">
        <dl>
            <dt>ID :</dt>
            <dd>{{$banner->id}}</dd>

            <dt>Title :</dt>
            <dd>{{$banner->title}}</dd>

            <dt>Picture :</dt>
            <dd> <img src="{{ asset('images/banner/').'/'.$banner->picture }}" width="100" height="100"></dd>

            <dt>Link :</dt>
            <dd>{{$banner->link}}</dd>

            <dt>Promotional Message :</dt>
            <dd>{{$banner->promotional_message}}</dd>

            <dt>Html Banner :</dt>
            <dd>{{$banner->html_banner}}</dd>

            <dt>Created At</dt>
            <dd>{{$banner->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$banner->updated_at}}</dd>
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
