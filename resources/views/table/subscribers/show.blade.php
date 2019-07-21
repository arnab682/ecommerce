@extends('layouts.admin')

@section('title')
  Subscriber Show
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">


    <div class="card">
      <div class="card-header bg-light">
          Subscriber Show :
      </div>
      <div class="card-body">
        <dl>
            <dt>ID :</dt>
            <dd>{{$subscriber->id}}</dd>

            <dt>Email :</dt>
            <dd>{{$subscriber->email}}</dd>

            <dt>Subcribed :</dt>
            <dd>{{$subscriber->is_subcribed}}</dd>

            <dt>Reason :</dt>
            <dd>{{$subscriber->reason}}</dd>

            <dt>Created At</dt>
            <dd>{{$subscriber->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$subscriber->updated_at}}</dd>
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
