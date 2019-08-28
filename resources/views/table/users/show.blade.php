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
            <dd>{{$user->id}}</dd>

            <dt>Full Name :</dt>
            <dd>{{$user->name}}</dd>

            <dt>Email :</dt>
            <dd>{{$user->email}}</dd>

            <dt>Admin :</dt>
            <dd>{{$user->admin}}</dd>

            <dt>Author :</dt>
            <dd>{{$user->author}}</dd>

            <dt>Created At</dt>
            <dd>{{$user->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$user->updated_at}}</dd>
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
