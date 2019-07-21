@extends('layouts.admin')

@section('title')
  Order
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Order Update :
                </div>

                <form class="" action="{{url('/order/'.$order->id)}}" method="post">@csrf
                  {{ method_field('put') }}
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Product ID :</label>
                                <input type="text" value="{{$order->product_id}}" name="product_id" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Quantity :</label><br>
                                <input type="text" value="{{$order->qty}}" name="qty" class="form-control">
                            </div>
                          </div>
                      </div>


                  <button class="btn btn-success" type="submit">Update Post</button>
                  <button class="btn btn-success" type="reset">Reset</button>
                  </div>
                </form>

            </div>
        </div>
    </div>

</div>
</div>


@endsection
