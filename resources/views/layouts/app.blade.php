<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
<meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

<!-- SITE TITLE -->
<title>Digital Dimenssion</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('user/assets/images/favicon.png')}}">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{asset('user/assets/css/animate.css')}}">	
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{asset('user/assets/bootstrap/css/bootstrap.min.css')}}">
<!-- Google Font -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{asset('user/assets/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('user/assets/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('user/assets/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('user/assets/css/linearicons.css')}}">
<link rel="stylesheet" href="{{asset('user/assets/css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('user/assets/css/simple-line-icons.css')}}">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="{{asset('user/assets/owlcarousel/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('user/assets/owlcarousel/css/owl.theme.css')}}">
<link rel="stylesheet" href="{{asset('user/assets/owlcarousel/css/owl.theme.default.min.css')}}">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{asset('user/assets/css/magnific-popup.css')}}">
<!-- Slick CSS -->
<link rel="stylesheet" href="{{asset('user/assets/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('user/assets/css/slick-theme.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('user/assets/css/responsive.css')}}">

</head>

<body>

<!-- LOADER -->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- END LOADER -->

<!-- Home Popup Section -->
<!-- End Screen Load Popup Section --> 

<!-- START HEADER -->
@include('layouts.front.nav')
<!-- END HEADER -->

@yield('content')

<!-- START SECTION SUBSCRIBE NEWSLETTER -->

<!-- START SECTION SUBSCRIBE NEWSLETTER -->


<!-- END MAIN CONTENT -->

<!-- START FOOTER -->
@include('layouts.front.footer')

<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="{{asset('user/assets/js/jquery-3.6.0.min.js')}}"></script> 
<!-- popper min js -->
<script src="{{asset('user/assets/js/popper.min.js')}}"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="{{asset('user/assets/bootstrap/js/bootstrap.min.js')}}"></script> 
<!-- owl-carousel min js  --> 
<script src="{{asset('user/assets/owlcarousel/js/owl.carousel.min.js')}}"></script> 
<!-- magnific-popup min js  --> 
<script src="{{asset('user/assets/js/magnific-popup.min.js')}}"></script> 
<!-- waypoints min js  --> 
<script src="{{asset('user/assets/js/waypoints.min.js')}}"></script> 
<!-- parallax js  --> 
<script src="{{asset('user/assets/js/parallax.js')}}"></script> 
<!-- countdown js  --> 
<script src="{{asset('user/assets/js/jquery.countdown.min.js')}}"></script> 
<!-- imagesloaded js --> 
<script src="{{asset('user/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- isotope min js --> 
<script src="{{asset('user/assets/js/isotope.min.js')}}"></script>
<!-- jquery.dd.min js -->
<script src="{{asset('user/assets/js/jquery.dd.min.js')}}"></script>
<!-- slick js -->
<script src="{{asset('user/assets/js/slick.min.js')}}"></script>
<!-- elevatezoom js -->
<script src="{{asset('user/assets/js/jquery.elevatezoom.js')}}"></script>
<!-- scripts js --> 
<script src="{{asset('user/assets/js/scripts.js')}}"></script>

</body>
</html>