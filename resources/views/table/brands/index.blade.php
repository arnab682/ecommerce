@extends('layouts.admin')

@section('title')
  Banner
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
<div class="content">
<div class="row">
    <div class="col-md-12">
      <div><a href="{{url('/brand/create')}}" class="btn btn-success">Add New</a>
          <a href="" class="btn btn-primary">PDF</a>
          <a href="" class="btn btn-info">XL</a>
          <button onclick="print()" class="btn btn-dark">Print</button>
      </div>
        <div class="card">
            <div class="card-header bg-light">
                Brand Index :
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                   <thead>
                     <tr>
                       <th>No.</th>
                       <th>Title</th>
                       <th>Draft</th>
                       <th>Active</th>
                       <th>Soft Delete</th>
                       <th>Action</th>
                     </tr>
                   </thead>
         @php
            $sl = 0;
         @endphp
        @foreach($brands as $brand)
             <tbody>
               <tr>
                 <td>{{++$sl}}</td>
                 <td><a href="{{url('brand/').'/'.$brand->id}}">{{$brand->title}}</a></td>
                 <td>{{$brand->is_draft}}</td>
                 <td>{{$brand->is_active}}</td>
                 <td>{{$brand->soft_delete}}</td>
                 <td>
                      <a href="{{route('brand.edit',$brand->id)}}">Edit</a>|
                     {!! Form::open(array('url' => ['brand',$brand->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

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
