@extends('layouts.admin')

@section('title')
  Label
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{route('label.create')}}" class="btn btn-success">Add New</a>
              <a href="" class="btn btn-primary">PDF</a>
              <a href="" class="btn btn-info">XL</a>
              <button onclick="print()">Print</button>
          </div>
            <div class="card">
                <div class="card-header bg-light">
                    Label Index :
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
               <thead>
                 <tr>
                   <th>No.</th>
                   <th>Title</th>
                   <th>Picture</th>
                   <th>Action</th>
                 </tr>
               </thead>
         @php
            $sl = 0;
         @endphp
        @foreach($labels as $label)
               <tbody>
                 <tr>
                   <td>{{++$sl}}</td>
                   <td><a href="{{route('label.show',$label->id)}}">{{$label->title}}</a></td>
                   <td><img src="{{ asset('images/label/'.$label->picture) }}" width="100" height="100"></td>
                   <td></a>
                        <a href="{{route('label.edit',$label->id)}}">Edit</a>|
                       {!! Form::open(array('route' => ['label.destroy',$label->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

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
