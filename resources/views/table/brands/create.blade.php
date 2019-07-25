@extends('layouts.admin')

@section('title')
  Brand
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Brand Create :
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
                <form action="{{url('/brand')}}" method="post" enctype="multipart/form-data">
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

                                <label class="form-control-label">Save as Draft : </label>
                                  <input type="radio" name="is_draft" value="1">Yes
                                  <input type="radio" name="is_draft" value="0">No
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
