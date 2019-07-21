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
            <dd>{{$sponser->id}}</dd>

            <dt>Title :</dt>
            <dd>{{$sponser->title}}</dd>

            <dt>Picture :</dt>
            <dd> <img src="{{ asset('images/sponser/').'/'.$sponcer->picture }}" width="100" height="100"></dd>

            <dt>Link :</dt>
            <dd>{{$sponser->link}}</dd>

            <dt>Promotional Message :</dt>
            <dd>{{$sponser->promotional_message}}</dd>

            <dt>Html Banner :</dt>
            <dd>{{$sponser->html_banner}}</dd>

            <dt>Created At</dt>
            <dd>{{$sponser->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$sponser->updated_at}}</dd>
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
