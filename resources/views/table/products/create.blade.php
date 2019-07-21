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
                    Product Create :
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
                <form action="{{url('/product')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Title</label>
                                  <input name="title" class="form-control" placeholder="title">
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
                                <label class="form-control-label">Short Description :</label>
                                <textarea name="short_description" rows="1" cols="20" placeholder="Short Description..." class="form-control"></textarea>
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Description :</label>
                                <textarea name="description" rows="1" cols="20" placeholder="Your Description..." class="form-control"></textarea>
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Product Type :</label>
                                <input type="text" name="product_type" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Cost</label>
                                  <input name="cost" class="form-control" placeholder="Cost">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">MRP</label>
                                  <input name="mrp" class="form-control" placeholder="MRP">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Special Price</label>
                                  <input name="special_price" class="form-control" placeholder="Special Price">
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
