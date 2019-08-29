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
                    User Create :
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
                <form action="{{route('user.update',$user->id)}}" method="post" enctype="multipart/form-data">
              		 {{ csrf_field() }} {{ method_field('put') }}

                  <div class="card-body">
                       <div class="row">
                           <div class="col-md-8">
                               <div class="form-group">
                                   <label for="normal-input" class="form-control-label">Name :</label>
                                   <input type="text" name="name" class="form-control" value="{{$user->name}}">
                               </div>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-md-8">
                               <div class="form-group">
                                   <label for="normal-input" class="form-control-label">Email :</label>
                                   <input type="email" name="email" class="form-control" value="{{$user->email}}">
                               </div>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-md-8">
                               <div class="form-group">
                                   <label for="normal-input" class="form-control-label">Password :</label>
                                   <input type="password" name="password" class="form-control" placeholder="Password Update">
                               </div>
                           </div>
                       </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">User Type? </label>
                                @if($user->is_active==1)
                                    <input type="radio" name="is_active" value="1" checked>Admin
                                    <input type="radio" name="is_active" value="0">Author
                                @else
                                    <input type="radio" name="is_active" value="1">Admin
                                    <input type="radio" name="is_active" value="0" checked>Author
                                @endif
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
