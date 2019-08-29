@extends('layouts.admin')

@section('title')
  Page
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{route('page.create')}}" class="btn btn-success">Add New</a>
              <a href="" class="btn btn-primary">PDF</a>
              <a href="" class="btn btn-info">XL</a>
              <button onclick="print()">Print</button>
          </div>
            <div class="card">
                <div class="card-header bg-light">
                    Page Index :
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
               <thead>
                 <tr>
                   <th>No.</th>
                   <th>Title</th>
                   <th>Description</th>
                   <th>Link</th>
                   <th>Action</th>
                 </tr>
               </thead>
           @php
              $sl = 0;
           @endphp
          @foreach($pages as $page)
               <tbody>
                 <tr>
                   <td>{{++$sl}}</td>
                   <td><a href="{{route('page.show',$page->id)}}">{{$page->title}}</a></td>
                   <td>{{$page->description}}</td>
                   <td>{{$page->link}}</td>
                   <td></a>
                        <a href="{{route('page.edit',$page->id)}}">Edit</a>|
                       {!! Form::open(array('route' => ['page.destroy',$page->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

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
