@extends('layouts.admin')

@section('title')
  Banner
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{route('product.create')}}" class="btn btn-success">Add New</a>
              <a href="" class="btn btn-primary">PDF</a>
              <a href="" class="btn btn-info">XL</a>
              <button onclick="print()" class="btn btn-dark">Print</button>
          </div>
            <div class="card">
                <div class="card-header bg-light">
                    Product Index :
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                         <thead>
                           <tr>
                             <th>No.</th>
                             <th>Title</th>
                             <th>Picture</th>
                             <th>Short Description</th>
                             <th>Description</th>
                             <th>Product Type</th>
                             <th>Action</th>
                           </tr>
                         </thead>
                         @php
                            $sl = 0;
                         @endphp
                        @foreach($products as $product)
                               <tbody>
                                 <tr>
                                   <td>{{++$sl}}</td>
                                   <td><a href="{{route('product.show',$product->id)}}">{{$product->title}}</a></td>
                                   <td><img src="{{ asset('images/product/'.$product->picture) }}" width="100" height="100"></td>
                                   <td>{{$product->short_description}}</td>
                                   <td>{{$product->description}}</td>
                                   <td>{{$product->product_type}}</td>
                                   <td></a>
                                        <a href="{{route('product.edit',$product->id)}}">Edit</a>|
                                       {!! Form::open(array('route' => ['product.destroy',$product->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

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
