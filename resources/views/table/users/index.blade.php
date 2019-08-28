
@extends('layouts.admin')

@section('title')
  Admin
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{url('/user/create')}}" class="btn btn-success">Add New</a>
              <a href="" class="btn btn-primary">PDF</a>
              <a href="" class="btn btn-info">XL</a>
              <button onclick="print()">Print</button>
          </div>
            <div class="card">
                <div class="card-header bg-light">
                    User Index :
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Admin</th>
                              <th>Author</th>
                              <th>Create At</th>
                              <th>Update At</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                            @php
                               $sl = 0;
                            @endphp
                           @foreach($users as $user)
                                <tbody>
                                  <tr>
                                    <td>{{++$sl}}</td>
                                    <td><a href="{{route('user.show',$user->id)}}">{{$user->name}}</a></td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->admin}}</td>
                                    <td>{{$user->author}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                    <td>
                                         <a href="{{route('user.edit',$user->id)}}" class="btn btn-warning"><i class="icon icon-pencil"></i></a>|
                                        {!! Form::open(array('url' => ['user',$user->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

                                        <button type="submit" class="btn btn-danger">X</button>
                                        {!! Form::close() !!}
                                    </td>
                                  </tr>
                           @endforeach
                                </tbody>
                        </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</div>

@endsection
