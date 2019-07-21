@extends('layouts.admin')

@section('title')
  Contact
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{url('/contact/create')}}" class="btn btn-success">Add New</a>
              <a href="" class="btn btn-primary">PDF</a>
              <a href="" class="btn btn-info">XL</a>
              <button onclick="print()">Print</button>
          </div>
            <div class="card">
                <div class="card-header bg-light">
                    Contact Index :
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
               <thead>
                 <tr>
                   <th>No.</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Subject</th>
                   <th>Comment</th>
                   <th>Status</th>
                   <th>Date Time</th>
                   <th>Action</th>
                 </tr>
               </thead>
         @php
            $sl = 0;
         @endphp
        @foreach($contacts as $contact)
             <tbody>
               <tr>
                 <td>{{++$sl}}</td>
                 <td><a href="{{route('contact.show',$contact->id)}}">{{$contact->name}}</a></td>
                 <td>{{$contact->email}}</td>
                 <td>{{$contact->subject}}</td>
                 <td>{{$contact->comment}}</td>
                 <td>{{$contact->status}}</td>
                 <td>{{$contact->datetime}}</td>
                 <td></a>
                      <a href="{{route('contact.edit',$contact->id)}}">Edit</a>|
                     {!! Form::open(array('url' => ['contact',$contact->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

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
