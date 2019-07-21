@extends('layouts.admin')

@section('title')
  Cart Show
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">


    <div class="card">
      <div class="card-header bg-light">
          Cart Show :
      </div>
      <div class="card-body">

        <dl>
            <dt>ID</dt>
            <dd>{{$cart->id}}</dd>

            <dt>SID</dt>
            <dd>{{$cart->sid}}</dd>

            <dt>Product ID</dt>
            <dd>{{$cart->product_id}}</dd>

            <dt>Image</dt>
            <dd> <img src="{{ asset('images/cart/').'/'.$cart->picture }}" width="100" height="100"></dd>

            <dt>Product Title</dt>
            <dd>{{$cart->product_title}}</dd>

            <dt>Quantity</dt>
            <dd>{{$cart->qty}}</dd>

            <dt>Unite Price</dt>
            <dd>{{$cart->unite_price}}</dd>

            <dt>Total Price</dt>
            <dd>{{$cart->total_price}}</dd>

            <dt>Created At</dt>
            <dd>{{$cart->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$cart->updated_at}}</dd>
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
