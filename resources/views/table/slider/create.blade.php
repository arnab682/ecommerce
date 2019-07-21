@extends('layouts.admin')

@section('title')
  Slider
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Slider Create :
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


                <form action="{{url('/slider')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label" for="title">Title</label>
                                  <input type="text" name="title"  class="form-control">
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
                                  <label class="form-control-label" for="caption">Caption</label>
                                  <input type="text"  class="form-control" id="caption" name="caption" placeholder="caption" required>
                              </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label">Link :</label><br>
                                  <input type="link"  name="link" class="form-control">
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label">Is Active? </label>

                                      <input type="radio" name="is_active" value="1" checked>Yes
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
