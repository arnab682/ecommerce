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
                <form class="" action="{{url('/testimonial')}}" method="post">@csrf
                  <div class="card-body">

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
                                <label class="form-control-label">Body :</label>
                                <input type="text" name="body" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Name :</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Designation :</label>
                                <input type="text" name="designation" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Is Active? </label>
                                <input type="radio" name="is_active" value="1">Yes
                                <input type="radio" name="is_active" value="0">No
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
