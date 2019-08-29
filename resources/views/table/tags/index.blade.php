@extends('layouts.admin')

@section('title')
  Banner
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{route('tag.create')}}" class="btn btn-success">Add New</a>
              <a href="" class="btn btn-primary">PDF</a>
              <a href="" class="btn btn-info">XL</a>
              <button onclick="print()">Print</button>
          </div>
            <div class="card">
                <div class="card-header bg-light">
                    Tag Index :
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                         <thead>
                           <tr>
                             <th>No.</th>
                             <th>Title</th>
                             <th>Action</th>
                           </tr>
                         </thead>
                   @php
                      $sl = 0;
                   @endphp
                  @foreach($tags as $tag)
                       <tbody>
                         <tr>
                           <td>{{++$sl}}</td>
                           <td><a href="{{route('tag.show',$tag->id)}}">{{$tag->title}}</a></td>
                           <td>
                                <a href="{{route('tag.edit',$tag->id)}}">Edit</a>|
                               {!! Form::open(array('route' => ['tag.destroy',$tag->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

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
