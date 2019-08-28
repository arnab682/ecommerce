@extends('layouts.admin')

@section('title')
  Banner
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{url('/category/create')}}" class="btn btn-success">Add New</a>
              <a href="" class="btn btn-primary">PDF</a>
              <a href="" class="btn btn-info">XL</a>
              <button onclick="print()" class="btn btn-dark">Print</button>
          </div>
            <div class="card">
                <div class="card-header bg-light">
                    Category Index :
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                         <thead>
                           <tr>
                             <th>No.</th>
                             <th>Name</th>
                             <th>Image</th>
                             <th>Link</th>
                             <th>Action</th>
                           </tr>
                         </thead>
               @php
                  $sl = 0;
               @endphp
              @foreach($categories as $category)
                   <tbody>
                     <tr>
                       <td>{{++$sl}}</td>
                       <td><a href="{{route('category.show',$category->id)}}">{{$category->name}}</a></td>
                       <td><img src="{{ asset('images/category/'.$category->picture) }}" width="100" height="100"></td>
                       <td>{{$category->link}}</td>
                       <td></a>
                            <a href="{{route('category.edit',$category->id)}}">Edit</a>|
                           {!! Form::open(array('url' => ['category',$category->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

                           <button type="submit" class="btn btn-primary">Delete</button>
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
