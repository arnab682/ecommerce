@extends('layout.layout')

@section('title')
  Personal Care
@endsection

<!---->
@section('content')

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <a href="care.html"><img class="first-slide" src="images/ba1.jpg" alt="First slide"></a>

    </div>
    <div class="item">
      <a href="kitchen.html"><img class="second-slide " src="images/ba.jpg" alt="Second slide"></a>

    </div>
    <div class="item">
      <a href="hold.html"><img class="third-slide " src="images/ba2.jpg" alt="Third slide"></a>

    </div>
  </div>

</div><!-- /.carousel -->

<!--content-->
<div class="kic-top ">
<div class="container ">
<div class="kic ">
  <h3>Popular Categories</h3>

</div>
<div class="col-md-4 kic-top1">
  <a href="single.html">
    <img src="images/ki3.jpg" class="img-responsive" alt="">
  </a>
  <h6>Natural Cream</h6>
  <p>Nam libero tempore</p>
</div>
<div class="col-md-4 kic-top1">
  <a href="single.html">
    <img src="images/ki4.jpg" class="img-responsive" alt="">
  </a>
  <h6>Shaving Kit</h6>
  <p>Nam libero tempore</p>
</div>
<div class="col-md-4 kic-top1">
  <a href="single.html">
    <img src="images/ki5.jpg" class="img-responsive" alt="">
  </a>
  <h6>Makeup Kit</h6>
  <p>Nam libero tempore</p>
</div>
</div>
</div>

<!--content-->
<div class="product">
<div class="container">
  <div class="spec ">
    <h3>Products</h3>
    <div class="ser-t">
      <b></b>
      <span><i></i></span>
      <b class="line"></b>
    </div>
  </div>
    <div class=" con-w3l agileinf">
          <div class="col-md-3 pro-1">
            <div class="col-m">
            <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                <img src="images/of36.png" class="img-responsive" alt="">
              </a>
              <div class="mid-1">
                <div class="women">
                  <h6><a href="single.html">Baby Oil</a>(250 g)</h6>
                </div>
                <div class="mid-2">
                  <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                    <div class="block">
                    <div class="starbox small ghosting"> </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="add">
                   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="36" data-name="Baby Oil" data-summary="summary 36" data-price="6.00" data-quantity="1" data-image="images/of36.png">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 pro-1">
            <div class="col-m">
              <a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
                <img src="images/of37.png" class="img-responsive" alt="">
              </a>
              <div class="mid-1">
                <div class="women">
                  <h6><a href="single.html">Soap</a>(250 g)</h6>
                </div>
                <div class="mid-2">
                  <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                    <div class="block">
                    <div class="starbox small ghosting"> </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="add">
                   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="37" data-name="Soap" data-summary="summary 37" data-price="4.50" data-quantity="1" data-image="images/of37.png">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 pro-1">
            <div class="col-m">
              <a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
                <img src="images/of38.png" class="img-responsive" alt="">
              </a>
              <div class="mid-1">
                <div class="women">
                  <h6><a href="single.html">Hair Gel</a>(100 g)</h6>
                </div>
                <div class="mid-2">
                  <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                    <div class="block">
                    <div class="starbox small ghosting"> </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="add">
                   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="38" data-name="Hair Gel" data-summary="summary 38" data-price="3.50" data-quantity="1" data-image="images/of38.png">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 pro-1">
            <div class="col-m">
              <a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
                <img src="images/of39.png" class="img-responsive" alt="">
              </a>
              <div class="mid-1">
                <div class="women">
                  <h6><a href="single.html">Lotion </a>(100 g)</h6>
                </div>
                <div class="mid-2">
                  <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                    <div class="block">
                    <div class="starbox small ghosting"> </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="add">
                   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="39" data-name="Lotion" data-summary="summary 39" data-price="0.80" data-quantity="1" data-image="images/of39.png">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 pro-1">
            <div class="col-m">
            <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                <img src="images/of40.png" class="img-responsive" alt="">
              </a>
              <div class="mid-1">
                <div class="women">
                  <h6><a href="single.html">Shower Gel</a>(250 g)</h6>
                </div>
                <div class="mid-2">
                  <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                    <div class="block">
                    <div class="starbox small ghosting"> </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="add">
                   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="40" data-name="Shower Gel" data-summary="summary 40" data-price="6.00" data-quantity="1" data-image="images/of40.png">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 pro-1">
            <div class="col-m">
              <a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
                <img src="images/of41.png" class="img-responsive" alt="">
              </a>
              <div class="mid-1">
                <div class="women">
                  <h6><a href="single.html">Hair Color</a>(250 g)</h6>
                </div>
                <div class="mid-2">
                  <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                    <div class="block">
                    <div class="starbox small ghosting"> </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="add">
                   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="41" data-name="Hair Color" data-summary="summary 41" data-price="4.50" data-quantity="1" data-image="images/of41.png">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 pro-1">
            <div class="col-m">
              <a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
                <img src="images/of42.png" class="img-responsive" alt="">
              </a>
              <div class="mid-1">
                <div class="women">
                  <h6><a href="single.html"> Wipes</a>(300 kg)</h6>
                </div>
                <div class="mid-2">
                  <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                    <div class="block">
                    <div class="starbox small ghosting"> </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="add">
                   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="42" data-name="Wipes" data-summary="summary 42" data-price="3.50" data-quantity="1" data-image="images/of42.png">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 pro-1">
            <div class="col-m">
              <a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
                <img src="images/of43.png" class="img-responsive" alt="">
              </a>
              <div class="mid-1">
                <div class="women">
                  <h6><a href="single.html">Essential Oils</a>(200 g)</h6>
                </div>
                <div class="mid-2">
                  <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                    <div class="block">
                    <div class="starbox small ghosting"> </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="add">
                   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="43" data-name="Essential Oils" data-summary="summary 43" data-price="0.80" data-quantity="1" data-image="images/of43.png">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
            <div class="col-md-3 pro-1">
            <div class="col-m">
            <a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
                <img src="images/of44.png" class="img-responsive" alt="">
              </a>
              <div class="mid-1">
                <div class="women">
                  <h6><a href="single.html">Cream</a>(150 g)</h6>
                </div>
                <div class="mid-2">
                  <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                    <div class="block">
                    <div class="starbox small ghosting"> </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="add">
                   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="44" data-name="Cream" data-summary="summary 44" data-price="6.00" data-quantity="1" data-image="images/of44.png">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 pro-1">
            <div class="col-m">
              <a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
                <img src="images/of45.png" class="img-responsive" alt="">
              </a>
              <div class="mid-1">
                <div class="women">
                  <h6><a href="single.html">Hair Color</a>(250 g)</h6>
                </div>
                <div class="mid-2">
                  <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                    <div class="block">
                    <div class="starbox small ghosting"> </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="add">
                   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="45" data-name="Hair Color" data-summary="summary 45" data-price="4.50" data-quantity="1" data-image="images/of45.png">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 pro-1">
            <div class="col-m">
              <a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
                <img src="images/of46.png" class="img-responsive" alt="">
              </a>
              <div class="mid-1">
                <div class="women">
                  <h6><a href="single.html">Baby Care</a>(1 kg)</h6>
                </div>
                <div class="mid-2">
                  <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                    <div class="block">
                    <div class="starbox small ghosting"> </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="add">
                   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="46" data-name="Baby Care" data-summary="summary 46" data-price="3.50" data-quantity="1" data-image="images/of46.png">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 pro-1">
            <div class="col-m">
              <a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
                <img src="images/of47.png" class="img-responsive" alt="">
              </a>
              <div class="mid-1">
                <div class="women">
                  <h6><a href="single.html">Lotion</a>(100 g)</h6>
                </div>
                <div class="mid-2">
                  <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                    <div class="block">
                    <div class="starbox small ghosting"> </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="add">
                   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="47" data-name="Lotion" data-summary="summary 47" data-price="0.80" data-quantity="1" data-image="images/of47.png">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
         </div>
</div>
</div>
<!--footer-->
<div class="footer">
<div class="container">
<div class="col-md-3 footer-grid">
  <h3>About Us</h3>
  <p>Nam libero tempore, cum soluta nobis est eligendi
    optio cumque nihil impedit quo minus id quod maxime
    placeat facere possimus.</p>
</div>
<div class="col-md-3 footer-grid ">
  <h3>Menu</h3>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="kitchen.html">Kitchen</a></li>
    <li><a href="care.html">Personal Care</a></li>
    <li><a href="hold.html">Household</a></li>
    <li><a href="codes.html">Short Codes</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
</div>
<div class="col-md-3 footer-grid ">
  <h3>Customer Services</h3>
  <ul>
    <li><a href="shipping.html">Shipping</a></li>
    <li><a href="terms.html">Terms & Conditions</a></li>
    <li><a href="faqs.html">Faqs</a></li>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="offer.html">Online Shopping</a></li>

  </ul>
</div>
<div class="col-md-3 footer-grid">
  <h3>My Account</h3>
  <ul>
    <li><a href="login.html">Login</a></li>
    <li><a href="register.html">Register</a></li>
    <li><a href="wishlist.html">Wishlist</a></li>

  </ul>
</div>
<div class="clearfix"></div>
  <div class="footer-bottom">
    <h2 ><a href="index.html"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h2>
    <p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
    <ul class="social-fo">
      <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
      <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
    </ul>
    <div class=" address">
      <div class="col-md-4 fo-grid1">
          <p><i class="fa fa-home" aria-hidden="true"></i>12K Street , 45 Building Road Canada.</p>
      </div>
      <div class="col-md-4 fo-grid1">
          <p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>
      </div>
      <div class="col-md-4 fo-grid1">
        <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@example1.com</a></p>
      </div>
      <div class="clearfix"></div>

      </div>
  </div>
<div class="copy-right">
  <p> &copy; 2016 Big store. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
</div>
</div>
</div>

@endsection

@section('order')

<!-- product -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body modal-spa">
              <div class="col-md-5 span-2">
                    <div class="item">
                      <img src="images/of36.png" class="img-responsive" alt="">
                    </div>
              </div>
              <div class="col-md-7 span-1 ">
                <h3>Baby Oil(250 g)</h3>
                <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                <div class="price_single">
                  <span class="reducedfrom "><del>$2.00</del>$1.50</span>

                 <div class="clearfix"></div>
                </div>
                <h4 class="quick">Quick Overview:</h4>
                <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                 <div class="add-to">
                     <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="36" data-name="Baby Oil" data-summary="summary 36" data-price="1.50" data-quantity="1" data-image="images/of36.png">Add to Cart</button>
                  </div>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
      </div>
<!-- product -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body modal-spa">
              <div class="col-md-5 span-2">
                    <div class="item">
                      <img src="images/of37.png" class="img-responsive" alt="">
                    </div>
              </div>
              <div class="col-md-7 span-1 ">
                <h3>Soap(250 g)</h3>
                <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                <div class="price_single">
                  <span class="reducedfrom "><del>$10.00</del>$9.00</span>

                 <div class="clearfix"></div>
                </div>
                <h4 class="quick">Quick Overview:</h4>
                <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                 <div class="add-to">
                     <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="37" data-name="Soap" data-summary="summary 37" data-price="9.00" data-quantity="1" data-image="images/of37.png">Add to Cart</button>
                  </div>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
      </div>
      <!-- product -->
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body modal-spa">
              <div class="col-md-5 span-2">
                    <div class="item">
                      <img src="images/of38.png" class="img-responsive" alt="">
                    </div>
              </div>
              <div class="col-md-7 span-1 ">
                <h3>Hair Gel(100 g)</h3>
                <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                <div class="price_single">
                  <span class="reducedfrom "><del>$3.00</del>$2.00</span>

                 <div class="clearfix"></div>
                </div>
                <h4 class="quick">Quick Overview:</h4>
                <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                 <div class="add-to">
                     <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="38" data-name="Hair Gel" data-summary="summary 38" data-price="2.00" data-quantity="1" data-image="images/of38.png">Add to Cart</button>
                  </div>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
      </div>
      <!-- product -->
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body modal-spa">
              <div class="col-md-5 span-2">
                    <div class="item">
                      <img src="images/of39.png" class="img-responsive" alt="">
                    </div>
              </div>
              <div class="col-md-7 span-1 ">
                <h3>Lotion (100 g)</h3>
                <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                <div class="price_single">
                  <span class="reducedfrom "><del>$4.00</del>$3.50</span>

                 <div class="clearfix"></div>
                </div>
                <h4 class="quick">Quick Overview:</h4>
                <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                 <div class="add-to">
                     <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="39" data-name="Lotion " data-summary="summary 39" data-price="3.50" data-quantity="1" data-image="images/of39.png">Add to Cart</button>
                  </div>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
      </div>
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
                      <img src="images/of40.png" class="img-responsive" alt="">
                    </div>
              </div>
              <div class="col-md-7 span-1 ">
                <h3>Shower Gel(250 g)</h3>
                <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                <div class="price_single">
                  <span class="reducedfrom "><del>$1.00</del>$0.70</span>

                 <div class="clearfix"></div>
                </div>
                <h4 class="quick">Quick Overview:</h4>
                <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                 <div class="add-to">
                     <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="40" data-name="Shower Gel" data-summary="summary 40" data-price="0.70" data-quantity="1" data-image="images/of40.png">Add to Cart</button>
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
                      <img src="images/of41.png" class="img-responsive" alt="">
                    </div>
              </div>
              <div class="col-md-7 span-1 ">
                <h3>Hair Color(250 g)</h3>
                <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                <div class="price_single">
                  <span class="reducedfrom "><del>$1.00</del>$0.70</span>

                 <div class="clearfix"></div>
                </div>
                <h4 class="quick">Quick Overview:</h4>
                <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                 <div class="add-to">
                     <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="41" data-name="Hair Color" data-summary="summary 41" data-price="0.70" data-quantity="1" data-image="images/of41.png">Add to Cart</button>
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
                      <img src="images/of42.png" class="img-responsive" alt="">
                    </div>
              </div>
              <div class="col-md-7 span-1 ">
                <h3>Wipes(300 kg)</h3>
                <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                <div class="price_single">
                  <span class="reducedfrom "><del>$2.00</del>$1.00</span>

                 <div class="clearfix"></div>
                </div>
                <h4 class="quick">Quick Overview:</h4>
                <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                 <div class="add-to">
                     <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="42" data-name="Wipes" data-summary="summary 42" data-price="1.00" data-quantity="1" data-image="images/of42.png">Add to Cart</button>
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
                      <img src="images/of43.png" class="img-responsive" alt="">
                    </div>
              </div>
              <div class="col-md-7 span-1 ">
                <h3>Essential Oils(200 g)</h3>
                <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                <div class="price_single">
                  <span class="reducedfrom "><del>$4.00</del>$3.50</span>

                 <div class="clearfix"></div>
                </div>
                <h4 class="quick">Quick Overview:</h4>
                <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                 <div class="add-to">
                     <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="43" data-name="Essential Oils" data-summary="summary 43" data-price="3.50" data-quantity="1" data-image="images/of43.png">Add to Cart</button>
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
                      <img src="images/of44.png" class="img-responsive" alt="">
                    </div>
              </div>
              <div class="col-md-7 span-1 ">
                <h3>Cream(150 g)</h3>
                <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                <div class="price_single">
                  <span class="reducedfrom "><del>$2.00</del>$1.50</span>

                 <div class="clearfix"></div>
                </div>
                <h4 class="quick">Quick Overview:</h4>
                <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                 <div class="add-to">
                     <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="44" data-name="Cream" data-summary="summary 44" data-price="1.50" data-quantity="1" data-image="images/of44.png">Add to Cart</button>
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
                      <img src="images/of45.png" class="img-responsive" alt="">
                    </div>
              </div>
              <div class="col-md-7 span-1 ">
                <h3>Hair Color(250 g)</h3>
                <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                <div class="price_single">
                  <span class="reducedfrom "><del>$1.00</del>$0.70</span>

                 <div class="clearfix"></div>
                </div>
                <h4 class="quick">Quick Overview:</h4>
                <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                 <div class="add-to">
                     <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="45" data-name="Hair Color" data-summary="summary 45" data-price="0.70" data-quantity="1" data-image="images/of45.png">Add to Cart</button>
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
                      <img src="images/of46.png" class="img-responsive" alt="">
                    </div>
              </div>
              <div class="col-md-7 span-1 ">
                <h3>Baby Care(1 kg)</h3>
                <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                <div class="price_single">
                  <span class="reducedfrom "><del>$2.00</del>$1.00</span>

                 <div class="clearfix"></div>
                </div>
                <h4 class="quick">Quick Overview:</h4>
                <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                 <div class="add-to">
                     <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="46" data-name="Baby Care" data-summary="summary 46" data-price="1.00" data-quantity="1" data-image="images/of46.png">Add to Cart</button>
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
                      <img src="images/of47.png" class="img-responsive" alt="">
                    </div>
              </div>
              <div class="col-md-7 span-1 ">
                <h3>Lotion(100 g)</h3>
                <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                <div class="price_single">
                  <span class="reducedfrom "><del>$4.00</del>$3.50</span>

                 <div class="clearfix"></div>
                </div>
                <h4 class="quick">Quick Overview:</h4>
                <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                 <div class="add-to">
                     <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="47" data-name="Lotion" data-summary="summary 47" data-price="3.50" data-quantity="1" data-image="images/of47.png">Add to Cart</button>
                  </div>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
      </div>

@endsection
