@extends('layouts.admin')

@section('title')
  Banner
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{url('/cart/create')}}" class="btn btn-success">Add New</a>
              <a href="" class="btn btn-primary">PDF</a>
              <a href="" class="btn btn-info">XL</a>
              <button onclick="print()">Print</button>
          </div>
            <div class="card">
                <div class="card-header bg-light">
                    Cart Index :
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                     <thead>
                       <tr>
                         <th>No.</th>
                         <th>Product Id</th>
                         <th>Picture</th>
                         <th>Product title</th>
                         <th>Quantity</th>
                         <th>Unite Price</th>
                         <th>Total Price</th>
                         <th>Action</th>
                       </tr>
                     </thead>
         @php
            $sl = 0;
         @endphp
        @foreach($carts as $cart)
             <tbody>
               <tr>
                 <td>{{++$sl}}</td>
                 <td><a href="{{route('cart.show',$cart->id)}}">{{$cart->product_id}}</a></td>
                 <td><img src="{{ asset('images/cart/'.$cart->picture) }}" width="100" height="100"></td>
                 <td>{{$cart->product_title}}</td>
                 <td>{{$cart->qty}}</td>
                 <td>{{$cart->unite_price}}</td>
                 <td>{{$cart->total_price}}</td>
                 <td></a>
                      <a href="{{route('cart.edit',$cart->id)}}">Edit</a>|
                     {!! Form::open(array('url' => ['cart',$cart->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

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
