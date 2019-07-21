@extends('layouts.admin')

@section('title')
  Contact
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">


    <div class="card">
      <div class="card-header bg-light">
          Contact Show :
      </div>
      <div class="card-body">

        <dl>
            <dt>ID :</dt>
            <dd>{{$contact->id}}</dd>

            <dt>Name :</dt>
            <dd>{{$contact->name}}</dd>

            <dt>Email :</dt>
            <dd>{{$contact->email}}</dd>

            <dt>Subject :</dt>
            <dd>{{$contact->subject}}</dd>

            <dt>Comment :</dt>
            <dd>{{$contact->commet}}</dd>

            <dt>Status :</dt>
            <dd>{{$contact->status}}</dd>

            <dt>Soft Delete :</dt>
            <dd>{{$contact->soft_delete}}</dd>

            <dt>Date Time :</dt>
            <dd>{{$contact->datetime}}</dd>

            <dt>Created At</dt>
            <dd>{{$contact->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$contact->updated_at}}</dd>
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
