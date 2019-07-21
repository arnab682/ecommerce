@extends('layouts.admin')

@section('title')
  Testimonial
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Testimonial Create :
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
                <form class="" action="{{url('/testimonial')}}" method="post" enctype="multipart/form-data">@csrf
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Name</label>
                                  <input name="name" class="form-control" placeholder="Name">
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
                                  <label for="normal-input" class="form-control-label">Body</label>
                                  <input name="body" class="form-control" placeholder="body">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Designation</label>
                                  <input name="designation" class="form-control" placeholder="Designation">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Active</label>
                                  <input name="is_active" class="form-control" >
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
