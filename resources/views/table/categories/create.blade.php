@extends('layouts.admin')

@section('title')
  Category
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Category Create :
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
                <form class="" action="{{url('/category')}}" method="post">@csrf
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
                                <label class="form-control-label">Link :</label><br>
                                <input type="link" name="link" class="form-control">
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
