@extends('layout.layout')

@section('title')
  Cart list
@endsection

@section('content')

<section>
    <div class="container">
      <div class="row">
<h2 class="title text-center">title</h2>



    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
      <h2 class="title text-center" style="color: #FE980F; font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 700;
       margin: 0 15px; text-transform: uppercase;margin-bottom: 30px; margin-top: 30px; position: relative;"> View Card </h2>
      <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card">

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
                             <th>Total Price</th>
                             <th>Action</th>
                           </tr>
                         </thead>


             @php
                 $n = 0;
                 $pro[] = $product;
             @endphp

             @if(count($pro)==0)
              lol
            @else

                         <tbody>
                           <tr>
                             <td></td>
                             <td><a href=""></a></td>
                             <td><img src="" width="100" height="100"></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td>

                                 {!! Form::open(array('url' => ['',],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

                                 <button type="submit" class="btn btn-primary">Delete</button>
                                 {!! Form::close() !!}
                             </td>
                           </tr>
                         </tbody>

                         <tfoot>
                            <tr  style="background: #eaebec">
                                <td colspan="7">
                                     <div class="pull-left">
                                    <button class="btn btn-default" type="button" style="cursor: pointer;padding:10px 30px" onClick="location.href='{{ url('/') }}'"><i class="fa fa-arrow-left"></i>Back to Shop</button>
                                    </div>
                                     <div class="pull-right">
                                    <a onClick="return confirm('Confirm ?')" href=""><button class="btn" type="button" style="cursor: pointer;padding:10px 30px">Remove All</button></a>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                @endif
                     </table>

                   </div>



                <form class="shipping_address" id="form-order" role="form" method="POST" action="">
                  <div class="row">
                      <div class="col-md-6">
                              {{ csrf_field() }}
                              <table class="table  table-bordered table-responsive">
                                  <tr>
                                      <td class="form-group{{ $errors->has('toname') ? ' has-error' : '' }}">
                                          <label for="phone" class="control-label"><i class="fa fa-user"></i> Name:</label>
                                          <input name="name" type="text" placeholder="Name" value="" style="width: 100%; padding: 7px !important;">

                                      </td>
                                      <td class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                          <label for="phone" class="control-label"><i class="fa fa-volume-control-phone"></i>Phone:</label>
                                          <input name="phone" type="text" placeholder="Phone" value="" style="width: 100%; padding: 7px !important;">

                                      </td>
                                  </tr>
                                  <tr>
                                      <td colspan="2" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                          <label for="email" class="control-label"><i class="fa fa-user"></i>Email:</label>
                                          <input name="email" type="text" placeholder="" value="" style="width: 100%; padding: 7px !important;">

                                      </td>

                                  </tr>

                                  <tr>
                                      <td class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}"><label for="address1" class="control-label"><i class="fa fa-home"></i> Address1:</label>
                                        <input name="address1" type="text" placeholder="" value="" style="width: 100%; padding: 7px !important;">
                                      </td>
                                      <td class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}"><label for="address2" class="control-label"><i class="fa fa-university"></i> Address2: </label>
                                        <input name="address2" type="text" placeholder="" value="" style="width: 100%; padding: 7px !important;">
                                      </td>
                                  </tr>
                                  <tr>
                                      <td colspan="2">
                                          <label  class="control-label" style="display: inline-block; margin-bottom: 5px; font-weight: bold;">Note:</label>
                                          <textarea rows="5" name="comment" placeholder="" style="width: 101%;
                                            background: #F0F0E9;  padding: 7px !important;resize: none;"></textarea>
                                      </td>

                                  </tr>
                              </table>

                      </div>
                      <div class="col-md-6">

                      {{-- Total --}}
                      <div class="row">
                          <div class="col-md-12">
                              <table class="table box table-bordered" id="showTotal">

                                <tr class="showTotal">

                                     <th>Sub Total :</th>
                                    <td style="text-align: right" id=" element code"> $100 </td>
                                </tr>

                                 <tr class="showTotal" style="background:#f5f3f3;font-weight: bold;">
                                     <th>Total :</th>
                                    <td style="text-align: right" id=" element code"> $100 </td>
                                </tr>

                              </table>

                {{-- Coupon --}}

                              <div class="row">
                                <div class="form-group col-md-6">
                                  <label class="control-label" for="inputGroupSuccess3"><i class="fa fa-exchange" aria-hidden="true"></i> Coupon

                                  </label>
                                  <div id="coupon-group" class="input-group ">
                                    <input type="text" placeholder="Your coupon" class="form-control" id="coupon-value" aria-describedby="inputGroupSuccess3Status">
                                    <span class="input-group-addon"  style="cursor: pointer;" data-loading-text="<i class='fa fa-spinner fa-spin'></i> checking">Apply</span>
                                  </div>
                                  <span class="status-coupon" style="display: none;" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                  <div class="coupon-msg " style="text-align: left;padding-left: 10px;"></div>
                                </div>
                            </div>

                {{-- //End coupon --}}


                {{-- Shipping method --}}

                      <div class="row">
                          <div class="col-md-12">
                                  <div class="form-group">
                                      <h3 class="control-label">Shipping Method :<br></h3>

                                  </div>

                                  <div class="form-group">

                                          <div>
                                              <label class="radio-inline" style="padding-left: 46px;">
                                               <input type="radio" name="shippingMethod" value=""  style="position: relative;" >Shipping Standard($20,000)

                                              </label>
                                          </div>

                                  </div>
                          </div>
                      </div>
                {{-- //Shipping method --}}


                {{-- Payment method --}}
                      <div class="row">
                          <div class="col-md-12">
                                  <div class="form-group "><br>
                                      <h3 class="control-label">Payment Method :<br><br></h3>

                                  <div class="form-group">

                                          <div>
                                              <label class="radio-inline" style="padding-left: 46px;">
                                               <input type="radio" name="paymentMethod" value="" style="position: relative;" >
                                               <a href="{{asset('images/homeImg/Cash.png')}}">
                                                 <img title="" alt="" src="{{asset('images/homeImg/Cash.png')}}" style="width: 120px;">
                                               </a>
                                              </label>
                                          </div>

                                  </div>
                                  <div class="form-group">

                                          <div>
                                              <label class="radio-inline" style="padding-left: 46px;">
                                               <input type="radio" name="paymentMethod" value="" style="position: relative;" >
                                               <a href="{{asset('images/homeImg/Paypal.png')}}">
                                                 <img title="" alt="" src="{{asset('images/homeImg/Paypal.png')}}" style="width: 120px;">
                                               </a>
                                              </label>
                                          </div>

                                  </div>


                          </div>
                      </div>
                {{-- //Payment method --}}
                          </div>
                      </div>
                {{-- End total --}}


                      <div class="row" style="padding-bottom: 20px;">
                          <div class="col-md-12 text-center">
                                  <div class="pull-right">
                                      <button class="btn btn-success" id="submit-order" type="button" style="cursor: pointer; padding: 10px 30px;">
                                        <i class="fa fa-check"></i> Checkout</button>
                                  </div>
                          </div>
                      </div>



                  </div>
                </div>


           </form>


        </div>

 </div>
</div>
</div>
</div>
</div>

@endsection
