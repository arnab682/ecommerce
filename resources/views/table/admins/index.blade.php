@extends('layouts.admin')

@section('title')
  Admin
@endsection

@section('content')

    <div><a href="" class="btn btn-success">Add New</a>
        <a href="" class="btn btn-primary">PDF</a>
        <a href="" class="btn btn-info">XL</a>
        <button onclick="print()">Print</button>
    </div>


    <!-- <table class="table table-bordered"> -->
    <div class="bs-docs-example">
             <table class="table table-striped">
               <thead>
                 <tr>
                   <th>No.</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Phone</th>
                   <th>Soft Delete</th>
                   <th>Draft</th>
                   <th>Action</th>
                 </tr>
               </thead>
         @php
            $sl = 0;
         @endphp
        @foreach($admins as $admin)
             <tbody>
               <tr>
                 <td>{{++$sl}}</td>
                 <td>{{$admin->name}}</td>
                 <td>{{$admin->email}}</td>
                 <td>{{$admin->phone}}</td>
                 <td>{{$admin->soft_delete}}</td>
                 <td>{{$admin->is_draft}}</td>
                 <th>Edit | Delete</th>
               </tr>
        @endforeach
             </tbody>
           </table>
      </div>

@endsection
