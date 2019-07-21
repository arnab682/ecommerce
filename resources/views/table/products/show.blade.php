@extends('layouts.admin')

@section('title')
  Product Show
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">


    <div class="card">
      <div class="card-header bg-light">
          Product Show :
      </div>
      <div class="card-body">
        <dl>
            <dt>ID :</dt>
            <dd>{{$product->id}}</dd>

            <dt>Brand ID :</dt>
            <dd>{{$product->product_id}}</dd>

            <dt>Lebel ID :</dt>
            <dd>{{$product->label_id}}</dd>

            <dt>Title :</dt>
            <dd>{{$product->title}}</dd>

            <dt>Picture :</dt>
            <dd> <img src="{{ asset('images/product/').'/'.$product->picture }}" width="100" height="100"></dd>

            <dt>Short Description :</dt>
            <dd>{{$product->short_description}}</dd>

            <dt>Description :</dt>
            <dd>{{$product->description}}</dd>

            <dt>Total Sales :</dt>
            <dd>{{$product->total_sales}}</dd>

            <dt>Product Type :</dt>
            <dd>{{$product->product_type}}</dd>

            <dt>Is New :</dt>
            <dd>{{$product->is_new}}</dd>

            <dt>Cost :</dt>
            <dd>{{$product->cost}}</dd>

            <dt>Mrp :</dt>
            <dd>{{$product->mrp}}</dd>

            <dt>Special Price :</dt>
            <dd>{{$product->Special_price}}</dd>

            <dt>Created At</dt>
            <dd>{{$product->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$product->updated_at}}</dd>
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
