@extends('layouts.admin')

@section('title')
  Banner
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{url('/sponser/create')}}" class="btn btn-success">Add New</a>
              <a href="" class="btn btn-primary">PDF</a>
              <a href="" class="btn btn-info">XL</a>
              <button onclick="print()">Print</button>
          </div>
            <div class="card">
                <div class="card-header bg-light">
                    Sponser Index :
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
               <thead>
                 <tr>
                   <th>No.</th>
                   <th>Title</th>
                   <th>Picture</th>
                   <th>Link</th>
                   <th>Promotional Massage</th>
                   <th>Html Banner</th>
                   <th>Active</th>
                   <th>Draft</th>
                   <th>Soft Delete</th>
                   <th>Action</th>
                 </tr>
               </thead>
         @php
            $sl = 0;
         @endphp
        @foreach($sponsers as $sponser)
             <tbody>
               <tr>
                 <td>{{++$sl}}</td>
                 <td><a href="{{route('sponser.show',$sponser->id)}}">{{$sponser->title}}</a></td>
                 <td><img src="{{ asset('images/sponser/'.$sponser->picture) }}" width="100" height="100"></td>
                 <td>{{$sponser->link}}</td>
                 <td>{{$sponser->promotional_message}}</td>
                 <td>{{$sponser->html_banner}}</td>
                 <td>{{$sponser->is_active}}</td>
                 <td>{{$sponser->is_draft}}</td>
                 <td>{{$sponser->soft_delete}}</td>
                 <td></a>
                      <a href="{{route('sponser.edit',$sponser->id)}}">Edit</a>|
                     {!! Form::open(array('url' => ['sponser',$sponser->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

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
