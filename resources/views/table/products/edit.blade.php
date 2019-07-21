@extends('layouts.admin')

@section('title')
  Product
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Product Update :
                </div>

                <form class="" action="{{url('/product/'.$product->id)}}" method="post">@csrf
                  {{ method_field('put') }}
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Title</label>
                                  <input name="title" class="form-control" value="{{$product->title}}">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label for="exampleInputFile" class="form-control-label">File input :</label><br>
                                <input type="file" name="image" id="exampleInputFile" class="form-control">
                                <img src="{{ asset('/images/product/'.$product->picture) }}" width="150"><br><br>
                            </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Short Description :</label>
                                <textarea name="short_description" rows="1" cols="20" class="form-control">{{$product->short_description}}</textarea>
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Description :</label>
                                <textarea name="description" rows="1" cols="20" class="form-control">{{$product->description}}</textarea>
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Product Type :</label>
                                <input type="text" name="product_type" class="form-control" value="{{$product->product_type}}">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Cost</label>
                                  <input name="cost" class="form-control" value="$product->cost">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">MRP</label>
                                  <input name="mrp" class="form-control" value="{{$product->mrp}}">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Special Price</label>
                                  <input name="special_price" class="form-control" value="special_price">
                              </div>
                          </div>
                      </div>


                  <button class="btn btn-success" type="submit">Update Post</button>
                  <button class="btn btn-success" type="reset">Reset</button>
                  </div>
                </form>

            </div>
        </div>
    </div>

</div>
</div>


@endsection
