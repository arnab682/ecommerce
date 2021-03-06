@extends('layout.layout')

@section('title')
  Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template| Home :: w3layouts
@endsection

@section('content')

<!--video-->
<!-- <div data-vide-bg="video/video"> -->
<div data-vide-bg="video/video">
  <div class="container">
  <div class="banner-info">
    <h3>It is a long established fact that a reader will be distracted by
    the readable </h3>
    <div class="search-form">
        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}

            <input type="text" name="q" placeholder="Search..." >
            <input type="submit" value=" " >

        </form>
    </div>

  </div>
  </div>
</div>

  <script>window.jQuery || document.write('<script src="{{asset('js/jquery-1.11.1.min.js')}}"><\/script>')</script>
  <script src="{{asset('js/jquery.vide.min.js')}}"></script>



<!--content-->
<div class="content-top ">
<div class="container ">
  <div class="spec ">
    <h3>Special Offers</h3>
    <div class="ser-t">
      <b></b>
      <span><i></i></span>
      <b class="line"></b>
    </div>
  </div>
    <div class="tab-head ">
      <nav class="nav-sidebar">
        <ul class="nav tabs ">
          <li class="active"><a href="#tab1" data-toggle="tab">Staples</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">Snacks</a></li>
          <li class=""><a href="#tab3" data-toggle="tab">Fruits & Vegetables</a></li>
          <li class=""><a href="#tab4" data-toggle="tab">Breakfast & Cereal</a></li>
        </ul>
      </nav>
      <div class=" tab-content tab-content-t ">
        <div class="tab-pane active text-style" id="tab1">
          <div class=" con-w3l">

        @foreach($offerStaples as $product)

            <div class="col-md-3 m-wthree">
              <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#myModal{{$m=1}}" class="offer-img">
                  <img src="{{ asset('images/product/'.$product->picture) }}" class="img-responsive" alt="" height="300px" width="300px">
                  <div class="offer"><p><span>Offer</span></p></div>
                </a>
                <div class="mid-1">
                  <div class="women">
                    <h6><a href="{{url('/single', $product->id)}}"> {{$product->title}}</a>(1 kg)</h6>
                  </div>
                  <div class="mid-2">
                    <p ><label>${{$product->cost}}.00</label><em class="item_price">${{$product->special_price}}.00</em></p>
                      <div class="block">
                      <div class="starbox small ghosting"> </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                    <div class="add">
                      <a href="{{url('/single', $product->id)}}" type="submit" class="btn btn-danger my-cart-b ">Add to Cart</a>
                    </div>

                </div>
              </div>
            </div>

        @endforeach
              <div class="clearfix"></div>
           </div>

        </div>




        <div class="tab-pane  text-style" id="tab2">
          <div class=" con-w3l">
          @foreach($offerSnacks as $product)

            <div class="col-md-3 m-wthree">
              <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                  <img src="{{ asset('images/product/'.$product->picture) }}" class="img-responsive" alt="" height="300px" width="300px">
                  <div class="offer"><p><span>Offer</span></p></div>
                </a>
                <div class="mid-1">
                  <div class="women">
                    <h6><a href="single.html">{{$product->title}}</a>(100 g)</h6>
                  </div>
                  <div class="mid-2">
                    <p ><label>${{$product->cost}}.00</label><em class="item_price">${{$product->special_price}}.00</em></p>
                      <div class="block">
                      <div class="starbox small ghosting"> </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                    <div class="add">
                      <a href="{{url('/single', $product->id)}}" type="submit" class="btn btn-danger my-cart-b ">Add to Cart</a>
                    </div>
                </div>
              </div>
            </div>

        @endforeach
            <div class="clearfix"></div>
           </div>
        </div>


        <div class="tab-pane  text-style" id="tab3">
          <div class=" con-w3l">
          @foreach($offerFruits as $product)

            <div class="col-md-3 m-wthree">
              <div class="col-m">
              <a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
                  <img src="{{ asset('images/product/'.$product->picture) }}" class="img-responsive" alt="" height="300px" width="300px">
                  <div class="offer"><p><span>Offer</span></p></div>
                </a>
                <div class="mid-1">
                  <div class="women">
                    <h6><a href="single.html">{{$product->title}}</a>(6 pcs)</h6>
                  </div>
                  <div class="mid-2">
                    <p ><label>${{$product->cost}}.00</label><em class="item_price">${{$product->special_price}}.00</em></p>
                      <div class="block">
                      <div class="starbox small ghosting"> </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                    <div class="add">
                      <a href="{{url('/single', $product->id)}}" type="submit" class="btn btn-danger my-cart-b ">Add to Cart</a>
                    </div>
                </div>
              </div>
            </div>


          @endforeach
            <div class="clearfix"></div>
           </div>
        </div>


        <div class="tab-pane text-style" id="tab4">
            <div class=" con-w3l">
             @foreach($offerBreakfast as $product)

                 <div class="col-md-3 m-wthree">
                  <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal13" class="offer-img">
                      <img src="{{ asset('images/product/'.$product->picture) }}" class="img-responsive" alt="" height="300px" width="300px">
                      <div class="offer"><p><span>Offer</span></p></div>
                    </a>
                    <div class="mid-1">
                      <div class="women">
                        <h6><a href="single.html">{{$product->title}}</a>(500 g)</h6>
                      </div>
                      <div class="mid-2">
                        <p ><label>${{$product->cost}}.00</label><em class="item_price">${{$product->special_price}}.00</em></p>
                          <div class="block">
                          <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                        <div class="add">
                          <a href="{{url('/single', $product->id)}}" type="submit" class="btn btn-danger my-cart-b ">Add to Cart</a>
                        </div>
                    </div>
                  </div>
                </div>

            @endforeach
            <div class="clearfix"></div>
           </div>
        </div>
      </div>
    </div>

</div>
</div>
</div>






<!--content-->
<div class="content-mid">
<div class="container">

  <div class="col-md-4 m-w3ls">
    <div class="col-md1 ">
      <a href="kitchen.html">
        <img src="{{asset('images/co1.jpg')}}" class="img-responsive img" alt="">
        <div class="big-sa">
          <h6>New Collections</h6>
          <h3>Season<span>ing </span></h3>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4 m-w3ls1">
    <div class="col-md ">
      <a href="hold.html">
        <img src="{{asset('images/co.jpg')}}" class="img-responsive img" alt="">
        <div class="big-sale">
          <div class="big-sale1">
            <h3>Big <span>Sale</span></h3>
            <p>It is a long established fact that a reader </p>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4 m-w3ls">
    <div class="col-md2 ">
      <a href="kitchen.html">
        <img src="{{asset('images/co2.jpg')}}" class="img-responsive img1" alt="">
        <div class="big-sale2">
          <h3>Cooking <span>Oil</span></h3>
          <p>It is a long established fact that a reader </p>
        </div>
      </a>
    </div>
    <div class="col-md3 ">
      <a href="hold.html">
        <img src="{{asset('images/co3.jpg')}}" class="img-responsive img1" alt="">
        <div class="big-sale3">
          <h3>Vegeta<span>bles</span></h3>
          <p>It is a long established fact that a reader </p>
        </div>
      </a>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
</div>
<!--content-->
<!-- Carousel
  ================================================== -->
  @php
      $active = "active";
  @endphp

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
    @foreach($sliders as $slider)

      <div class="item {{$active}}">
       <a href="{{url('/kitchen')}}"> <img class="first-slide" src="{{ asset('images/slider/'.$slider->picture) }}" alt="First slide"></a>
      </div>

      @php
        $active = '';
      @endphp

    @endforeach


    </div>

  </div><!-- /.carousel -->

<!--content-->
<div class="product">
  <div class="container">
    <div class="spec ">
      <h3>Regular Products</h3>
      <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
      </div>
    </div>
    @foreach($products as $product)

        <div class=" con-w3l">

            <div class="col-md-3 pro-1">
              <div class="col-m">

              <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                  <img src="{{ asset('images/product/'.$product->picture) }}" class="img-responsive" alt="" height="320px" width="320px">
              </a>
                <div class="mid-1">
                  <div class="women">
                    <h6><a href="{{url('/single', $product->id)}}">{{$product->title}}</a>(500 g)</h6>
                  </div>
                  <div class="mid-2">
                    <p ><label>${{$product->cost}}.00</label><em class="item_price">${{$product->special_price}}.00</em></p>
                      <div class="block">
                      <div class="starbox small ghosting">{{$product->description}}</div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                      <div class="add">
                        <a href="{{url('/single', $product->id)}}" type="submit" class="btn btn-danger my-cart-b ">Add to Cart</a>
                      </div>
                  </div>


                </div>
              </div>
            </div>
    @endforeach
            <div class="clearfix"></div>

        <!-- pagination     -->
        <div>

            {{$products->render()}}

        </div>


      </div>

  </div>
</div>

@endsection
