@extends('layouts.admin')

@section('title')
  Banner
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{url('/subscriber/create')}}" class="btn btn-success">Add New</a>
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
                   <td>{{$subscriber->email}}</td>
                   <td>{{$subscriber->is_subcribed}}</td>
                   <td>{{$subscriber->reason}}</td>
                   <th>Edit | Delete</th>
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
