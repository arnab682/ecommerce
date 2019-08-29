@extends('layouts.admin')

@section('title')
  Subscriber
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Testimonial Update :
                </div>

                <form class="" action="{{route('testimonial.update',$testimonial->id)}}" method="post" enctype="multipart/form-data">@csrf
                  {{ method_field('put') }}
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Name</label>
                                  <input value="{{$testimonial->name}}" name="name" class="form-control">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label for="exampleInputFile" class="form-control-label">File input :</label><br>
                                <input type="file" name="image" id="exampleInputFile" class="form-control">
                                <img src="{{ asset('/images/testimonial/'.$testimonial->picture) }}" width="150"><br><br>
                            </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Body</label>
                                  <input value="{{$testimonial->body}}" name="body" class="form-control">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Designation</label>
                                  <input value="{{$testimonial->designation}}" name="designation" class="form-control" placeholder="Designation">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Active</label>
                                  <input value="{{$testimonial->is_active}}" name="is_active" class="form-control" >
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
