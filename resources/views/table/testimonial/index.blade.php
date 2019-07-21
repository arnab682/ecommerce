@extends('layouts.admin')

@section('title')
  Banner
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{url('/testimonial/create')}}" class="btn btn-success">Add New</a>
              <a href="" class="btn btn-primary">PDF</a>
              <a href="" class="btn btn-info">XL</a>
              <button onclick="print()">Print</button>
          </div>
            <div class="card">
                <div class="card-header bg-light">
                    Banner Index :
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                         <thead>
                           <tr>
                             <th>No.</th>
                             <th>Name</th>
                             <th>Image</th>
                             <th>Body</th>
                             <th>Designation</th>
                             <th>Activity</th>
                             <th>Action</th>
                           </tr>
                         </thead>
                     @php
                        $sl = 0;
                     @endphp
                    @foreach($testimonials as $testimonial)
                         <tbody>
                           <tr>
                             <td>{{++$sl}}</td>
                             <td><a href="{{route('testimonial.show',$testimonial->id)}}">{{$testimonial->name}}</a></td>
                             <td><img src="{{ asset('images/testimonial/'.$testimonial->picture) }}" width="100" height="100"></td>
                             <td>{{$testimonial->body}}</td>
                             <td>{{$testimonial->designation}}</td>
                             <td>Active | Disactive</td>
                             <td></a>
                                  <a href="{{route('testimonial.edit',$testimonial->id)}}">Edit</a>|
                                 {!! Form::open(array('url' => ['testimonial',$testimonial->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

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
