@extends('layouts.admin')

@section('title')
  subscriber
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{route('subscriber.create')}}" class="btn btn-success">Add New</a>
              <a href="" class="btn btn-primary">PDF</a>
              <a href="" class="btn btn-info">XL</a>
              <button onclick="print()">Print</button>
          </div>
            <div class="card">
                <div class="card-header bg-light">
                    Subscriber Index :
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
               <thead>
                 <tr>
                   <th>No.</th>
                   <th>Email</th>
                   <th>Subscribed</th>
                   <th>Reason</th>
                   <th>Action</th>
                 </tr>
               </thead>
           @php
              $sl = 0;
           @endphp
          @foreach($subscribers as $subscriber)
               <tbody>
                 <tr>
                   <td>{{++$sl}}</td>
                   <td><a href="{{route('subscriber.show',$subscriber->id)}}">{{$subscriber->email}}</a></td>
                   <td>{{$subscriber->is_subcribed}}</td>
                   <td>{{$subscriber->reason}}</td>
                   <td></a>
                        <a href="{{route('subscriber.edit',$subscriber->id)}}">Edit</a>|
                       {!! Form::open(array('route' => ['subscriber.destroy',$subscriber->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

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
