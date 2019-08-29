@extends('layouts.admin')

@section('title')
  Banner
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Banner Create :
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
                <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
              		 {{ csrf_field() }}

                  <div class="card-body">
                       <div class="row">
                           <div class="col-md-8">
                               <div class="form-group">
                                   <label for="normal-input" class="form-control-label">Name :</label>
                                   <input type="text" name="name" class="form-control" placeholder="Full Name">
                               </div>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-md-8">
                               <div class="form-group">
                                   <label for="normal-input" class="form-control-label">Email :</label>
                                   <input type="email" name="email" class="form-control" placeholder="Email">
                               </div>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-md-8">
                               <div class="form-group">
                                   <label for="normal-input" class="form-control-label">Password :</label>
                                   <input type="password" name="password" class="form-control" placeholder="Your Password">
                               </div>
                           </div>
                       </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">

                                <label class="form-control-label">User Type? </label>
                                  <input type="radio" name="is_active" value="1">Admin
                                  <input type="radio" name="is_active" value="0">Author
                            </div>
                          </div>
                      </div>


                      <div class="form-group">
                        <input type = "submit" value = "Submit" />
                        <input type = "reset"  value = "Reset" />
                      </div>
                  </div>
                </form>
            </div>
        </div>
    </div>

</div>
</div>


@endsection
