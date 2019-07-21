<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
  @include('includes.theme.head')
</head>
<body>
<a href="offer.html"><img src="{{asset('images/download.png')}}" class="img-head" alt=""></a>
<div class="header">

		@include('includes.theme.headerNavigation')
</div>


<!--content-->
  <!-- Carousel
    ================================================== -->
 @yield('content')

<!--content-->

<!--footer-->
  @include('includes.theme.footerNavigation')
<!-- //footer-->

<!-- smooth scrolling -->
<script type="text/javascript">
  $(document).ready(function() {
  /*
    var defaults = {
    containerID: 'toTop', // fading element id
    containerHoverID: 'toTopHover', // fading element hover id
    scrollSpeed: 1200,
    easingType: 'linear'
    };
  */
  $().UItoTop({ easingType: 'easeOutQuart' });
  });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
    $(function () {

      var goToCartIcon = function($addTocartBtn){
        var $cartIcon = $(".my-cart-icon");
        var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
        $addTocartBtn.prepend($image);
        var position = $cartIcon.position();
        $image.animate({
          top: position.top,
          left: position.left
        }, 500 , "linear", function() {
          $image.remove();
        });
      }

      $('.my-cart-btn').myCart({
        classCartIcon: 'my-cart-icon',
        classCartBadge: 'my-cart-badge',
        affixCartIcon: true,
        checkoutCart: function(products) {
          $.each(products, function(){
            console.log(this);
          });
        },
        clickOnAddToCart: function($addTocart){
          goToCartIcon($addTocart);
        },
        getDiscountPrice: function(products) {
          var total = 0;
          $.each(products, function(){
            total += this.quantity * this.price;
          });
          return total * 1;
        }
      });

    });
  </script>

  <!-- product -->

  @yield('order')

</body>
</html>
