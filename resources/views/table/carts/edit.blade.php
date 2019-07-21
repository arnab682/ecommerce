@extends('layouts.admin')

@section('title')
  Cart
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Cart Update :
                </div>


                <form action="{{url('/cart/'.$cart->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label" >Product ID</label>
                                  <input type="text" value="{{ $cart->product_id }}" name="product_id"  class="form-control">
                              </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label for="exampleInputFile" class="form-control-label">File input :</label><br>
                                  <input type="file" name="image" id="exampleInputFile" class="form-control">
                                  <img src="{{ asset('/images/cart/'.$cart->picture) }}" width="150"><br><br>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label" >Product Title</label>
                                  <input type="text"  class="form-control" value="{{ $cart->product_title }}" name="product_title" placeholder="caption" required>
                              </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label">Quantity :</label><br>
                                  <input type="link" value="{{ $cart->qty }}" name="qty" class="form-control">
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label">Unite Price :</label><br>
                                  <input type="link" value="{{ $cart->unite_price }}" name="unite_price" class="form-control">
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label">Total Price :</label><br>
                                  <input type="link" value="{{ $cart->total_price }}" name="total_price" class="form-control">
                              </div>
                            </div>
                        </div>


                    <button class="btn btn-success" type="submit">Create Post</button>
                    <button class="btn btn-success" type="reset">Reset</button>
                    </div>
                  </form>

            </div>
        </div>
    </div>

</div>
</div>


@endsection
