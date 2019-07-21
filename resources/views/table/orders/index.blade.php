@extends('layouts.admin')

@section('title')
  Order
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{url('/order/create')}}" class="btn btn-success">Add New</a>
              <a href="" class="btn btn-primary">PDF</a>
              <a href="" class="btn btn-info">XL</a>
              <button onclick="print()">Print</button>
          </div>
            <div class="card">
                <div class="card-header bg-light">
                    Order Index :
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
               <thead>
                 <tr>
                   <th>No.</th>
                   <th>Product ID</th>
                   <th>Quantity</th>
                   <th>Action</th>
                 </tr>
               </thead>
         @php
            $sl = 0;
         @endphp
        @foreach($orders as $order)
               <tbody>
                 <tr>
                   <td>{{++$sl}}</td>
                   <!-- <td><a href="{{route('order.show', $order->id)}}">{{$order->product_id}}</a></td> -->
                   <td><a href="{{url('order/').'/'.$order->id}}">{{$order->product_id}}</a></td>
                   <td>{{$order->qty}}</td>
                   <td></a>
                        <a href="{{route('order.edit',$order->id)}}">Edit</a>|
                       {!! Form::open(array('url' => ['order',$order->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

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
