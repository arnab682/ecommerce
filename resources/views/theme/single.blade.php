@extends('layout.layout')

@section('title')
  Single
@endsection

<!---->
@section('content')

<!--banner-->
<div class="banner-top">
 <div class="container">
   <h3 >Lorem</h3>
   <h4><a href="{{url('/')}}">Home</a><label>/</label>Lorem</h4>
   <div class="clearfix"> </div>
 </div>
</div>
   <div class="single">
     <div class="container">
           <div class="single-top-main">
       <div class="col-md-5 single-top">
       <div class="single-w3agile">

<div id="picture-frame">
     <img src="{{ asset('images/product/'.$product->picture) }}" data-src="images/si-1.jpg" alt="" class="img-responsive"/>
   </div>
       <script src="js/jquery.zoomtoo.js"></script>
   <script>
     $(function() {
       $("#picture-frame").zoomToo({
         magnify: 1
       });
     });
   </script>



     </div>
     </div>
     <div class="col-md-7 single-top-left ">
      <form class="" action="{{url('/cartshop')}}" method="post">@csrf

        <input type="text" name="sid" value="{{session()->getId()}}" hidden>
        <input value="{{ $product->picture }}" name="picture" hidden>

        <div class="single-right">
           <h3><input type="text" name="product_title" value="{{$product->title}}" hidden>{{$product->title}}</h3>

            <div class="pr-single">
             <p class="reduced ">
               <del>${{$product->cost}}.00</del>
               <input type="text" name="unite_price" value="{{$product->special_price}}" hidden>${{$product->special_price}}.00
             </p>
           </div>
           <div class="block block-w3">
             <div class="starbox small ghosting"> </div>
           </div>
           <p class="in-pa"><input type="text" name="desc" value="{{$product->description}}" hidden>{{$product->description}}</p>

           <div class="control qty">
             <label for="">Quantity :</label><br>
             <button class="action qty-decrease qty-button" type="button">−</button>
             <input id="" name="qty" data-cart-item-id="" value="1" type="number" size="4" title="Qty" class="input-text qty"
             data-validate="{required:true,'validate-greater-than-zero':true}" data-role="cart-item-qty">
             <button class="action qty-increase qty-button" type="button">+</button>
           </div>

           <ul class="social-top">
             <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
             <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
             <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
             <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
           </ul>

             <div class="add add-3">

               <a href="{{url('/order')}}" type="submit" class="btn btn-success  my-cart-btn">Add Cart</a>

            </div>

          <div class="clearfix"> </div>
        </div>
      </form>


     </div>
      <div class="clearfix"> </div>
    </div>


 </div>
</div>
   <!---->
<div class="content-top offer-w3agile">
 <div class="container ">
     <div class="spec ">
       <h3>Special Offers</h3>
         <div class="ser-t">
           <b></b>
           <span><i></i></span>
           <b class="line"></b>
         </div>
     </div>
           <div class=" con-w3l wthree-of">
            @php
              $products = App\Model\Product::paginate(8);
            @endphp
            @foreach($products as $product)
            @if($product->is_new === 1)
               <div class="col-md-3 pro-1">
                 <div class="col-m">
                   <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                     <img src="{{ asset('images/product/'.$product->picture) }}" class="img-responsive" alt="" width="320px" height="320px">
                     <div class="offer"><p><span>Offer</span></p></div>
                   </a>
                   <div class="mid-1">
                     <div class="women">
                       <h6><a href="single.html">{{$product->title}}</a>(100 g)</h6>
                     </div>
                     <div class="mid-2">
                       <p ><label>$1.00</label><em class="item_price">$0.70</em></p>
                         <div class="block">
                         <div class="starbox small ghosting"> </div>
                       </div>
                       <div class="clearfix"></div>
                     </div>
                       <div class="add">
                        <a href="#">Add to Cart</a>
                     </div>
                   </div>
                 </div>
               </div>
              @endif
            @endforeach
             <div class="clearfix"></div>

            </div>
            
         </div>
       </div>

@endsection

@section('order')

<!-- product -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content modal-info">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body modal-spa">
        <div class="col-md-5 span-2">
              <div class="item">
                <img src="images/of4.png" class="img-responsive" alt="">
              </div>
        </div>
        <div class="col-md-7 span-1 ">
          <h3>Lays(100 g)</h3>
          <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
          <div class="price_single">
            <span class="reducedfrom "><del>$1.00</del>$0.70</span>

           <div class="clearfix"></div>
          </div>
          <h4 class="quick">Quick Overview:</h4>
          <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
           <div class="add-to">
               <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="5" data-name="Lays" data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="images/of4.png">Add to Cart</button>
            </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content modal-info">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body modal-spa">
        <div class="col-md-5 span-2">
              <div class="item">
                <img src="images/of5.png" class="img-responsive" alt="">
              </div>
        </div>
        <div class="col-md-7 span-1 ">
          <h3>Kurkure(100 g)</h3>
          <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
          <div class="price_single">
            <span class="reducedfrom "><del>$1.00</del>$0.70</span>

           <div class="clearfix"></div>
          </div>
          <h4 class="quick">Quick Overview:</h4>
          <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
           <div class="add-to">
               <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="6" data-name="Kurkure" data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="images/of5.png">Add to Cart</button>
            </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content modal-info">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body modal-spa">
        <div class="col-md-5 span-2">
              <div class="item">
                <img src="images/of6.png" class="img-responsive" alt="">
              </div>
        </div>
        <div class="col-md-7 span-1 ">
          <h3>Popcorn(250 g)</h3>
          <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
          <div class="price_single">
            <span class="reducedfrom "><del>$2.00</del>$1.00</span>

           <div class="clearfix"></div>
          </div>
          <h4 class="quick">Quick Overview:</h4>
          <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
           <div class="add-to">
               <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="7" data-name="Popcorn" data-summary="summary 7" data-price="1.00" data-quantity="1" data-image="images/of6.png">Add to Cart</button>
            </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content modal-info">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body modal-spa">
        <div class="col-md-5 span-2">
              <div class="item">
                <img src="images/of7.png" class="img-responsive" alt="">
              </div>
        </div>
        <div class="col-md-7 span-1 ">
          <h3>Nuts(250 g)</h3>
          <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
          <div class="price_single">
            <span class="reducedfrom "><del>$4.00</del>$3.50</span>

           <div class="clearfix"></div>
          </div>
          <h4 class="quick">Quick Overview:</h4>
          <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
           <div class="add-to">
               <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="8" data-name="Nuts" data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="images/of7.png">Add to Cart</button>
            </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content modal-info">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body modal-spa">
        <div class="col-md-5 span-2">
              <div class="item">
                <img src="images/of8.png" class="img-responsive" alt="">
              </div>
        </div>
        <div class="col-md-7 span-1 ">
          <h3>Banana(6 pcs)</h3>
          <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
          <div class="price_single">
            <span class="reducedfrom "><del>$2.00</del>$1.50</span>

           <div class="clearfix"></div>
          </div>
          <h4 class="quick">Quick Overview:</h4>
          <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
           <div class="add-to">
               <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="9" data-name="Banana" data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="images/of8.png">Add to Cart</button>
            </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content modal-info">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body modal-spa">
        <div class="col-md-5 span-2">
              <div class="item">
                <img src="images/of9.png" class="img-responsive" alt="">
              </div>
        </div>
        <div class="col-md-7 span-1 ">
          <h3>Onion(1 kg)</h3>
          <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
          <div class="price_single">
            <span class="reducedfrom "><del>$1.00</del>$0.70</span>

           <div class="clearfix"></div>
          </div>
          <h4 class="quick">Quick Overview:</h4>
          <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
           <div class="add-to">
               <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="10" data-name="Onion" data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="images/of9.png">Add to Cart</button>
            </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content modal-info">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body modal-spa">
        <div class="col-md-5 span-2">
              <div class="item">
                <img src="images/of10.png" class="img-responsive" alt="">
              </div>
        </div>
        <div class="col-md-7 span-1 ">
          <h3>Bitter Gourd(1 kg)</h3>
          <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
          <div class="price_single">
            <span class="reducedfrom "><del>$2.00</del>$1.00</span>

           <div class="clearfix"></div>
          </div>
          <h4 class="quick">Quick Overview:</h4>
          <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
           <div class="add-to">
               <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="images/of10.png">Add to Cart</button>
            </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content modal-info">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body modal-spa">
        <div class="col-md-5 span-2">
              <div class="item">
                <img src="images/of11.png" class="img-responsive" alt="">
              </div>
        </div>
        <div class="col-md-7 span-1 ">
          <h3>Apples(1 kg)</h3>
          <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
          <div class="price_single">
            <span class="reducedfrom "><del>$4.00</del>$3.50</span>

           <div class="clearfix"></div>
          </div>
          <h4 class="quick">Quick Overview:</h4>
          <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
           <div class="add-to">
               <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="12" data-name="Apples" data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="images/of11.png">Add to Cart</button>
            </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content modal-info">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body modal-spa">
        <div class="col-md-5 span-2">
              <div class="item">
                <img src="{{asset('images/of12.png')}}" class="img-responsive" alt="">
              </div>
        </div>
        <div class="col-md-7 span-1 ">
          <h3>Honey(500 g)</h3>
          <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
          <div class="price_single">
            <span class="reducedfrom "><del>$7.00</del>$6.00</span>

           <div class="clearfix"></div>
          </div>
          <h4 class="quick">Quick Overview:</h4>
          <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
           <div class="add-to">
               <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="13" data-name="Honey" data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="images/of12.png">Add to Cart</button>
            </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content modal-info">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body modal-spa">
        <div class="col-md-5 span-2">
              <div class="item">
                <img src="{{asset('images/of13.png')}}" class="img-responsive" alt="">
              </div>
        </div>
        <div class="col-md-7 span-1 ">
          <h3>Chocos(250 g)</h3>
          <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
          <div class="price_single">
            <span class="reducedfrom "><del>$5.00</del>$4.50</span>

           <div class="clearfix"></div>
          </div>
          <h4 class="quick">Quick Overview:</h4>
          <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
           <div class="add-to">
               <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="14" data-name="Chocos" data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="images/of13.png">Add to Cart</button>
            </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content modal-info">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body modal-spa">
        <div class="col-md-5 span-2">
              <div class="item">
                <img src="{{asset('images/of14.png')}}" class="img-responsive" alt="">
              </div>
        </div>
        <div class="col-md-7 span-1 ">
          <h3>Oats(1 kg)</h3>
          <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
          <div class="price_single">
            <span class="reducedfrom "><del>$4.00</del>$3.50</span>

           <div class="clearfix"></div>
          </div>
          <h4 class="quick">Quick Overview:</h4>
          <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
           <div class="add-to">
               <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="15" data-name="Oats" data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="images/of14.png">Add to Cart</button>
            </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content modal-info">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body modal-spa">
        <div class="col-md-5 span-2">
              <div class="item">
                <img src="{{asset('images/of15.png')}}" class="img-responsive" alt="">
              </div>
        </div>
        <div class="col-md-7 span-1 ">
          <h3>Bread(500 g)</h3>
          <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
          <div class="price_single">
            <span class="reducedfrom "><del>$1.00</del>$0.80</span>

           <div class="clearfix"></div>
          </div>
          <h4 class="quick">Quick Overview:</h4>
          <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
           <div class="add-to">
               <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="16" data-name="Bread" data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="images/of15.png">Add to Cart</button>
            </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>

@endsection
