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
                    Cart Create :
                </div>
                @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif

                @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif


                <form action="{{route('cart.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label" >Product ID</label>
                                  <input type="text" name="product_id"  class="form-control">
                              </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label for="exampleInputFile" class="form-control-label">File input :</label><br>
                                  <input type="file" name="image" id="exampleInputFile" class="form-control">

                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label" >Product Title</label>
                                  <input type="text"  class="form-control"  name="product_title" placeholder="caption" required>
                              </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label">Quantity :</label><br>
                                  <input type="text"  name="qty" class="form-control">
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label">Unite Price :</label><br>
                                  <input type="link"  name="unite_price" class="form-control">
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label">Total Price :</label><br>
                                  <input type="link"  name="total_price" class="form-control">
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
