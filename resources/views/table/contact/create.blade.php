@extends('layouts.admin')

@section('title')
  Contact
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Contact Create :
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
                <form class="" action="{{url('/contact')}}" method="post">@csrf
                  <div class="card-body">
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
                                <label class="form-control-label">Email :</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Subject :</label>
                                <input type="text" name="subject" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Comment :</label>
                                <input type="text" name="comment" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Date Time :</label>
                                <input type="date" name="datetime" class="form-control">
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
