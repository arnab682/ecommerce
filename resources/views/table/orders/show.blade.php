@extends('layouts.admin')

@section('title')
  Order Show
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">


    <div class="card">
      <div class="card-header bg-light">
          Order Show :
      </div>
      <div class="card-body">
        <dl>
            <dt>ID :</dt>
            <dd>{{$order->id}}</dd>

            <dt>Product ID :</dt>
            <dd>{{$order->product_id}}</dd>

            <dt>Quantity :</dt>
            <dd>{{$order->qty}}</dd>

            <dt>Created At</dt>
            <dd>{{$order->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$order->updated_at}}</dd>
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
