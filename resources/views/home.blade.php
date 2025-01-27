@extends('layouts.app')

@section('content')
    <!-- MAIN CONTENT -->

    <!-- START SECTION BANNER -->
    <div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
        <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item background_bg active" data-img-src="{{ asset('user/assets/images/monitor-banner.png') }}">
                    <div class="banner_slide_content banner_content_inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-10">
                                    <div class="banner_content overflow-hidden">
                                        <h2 class="staggered-animation" data-animation="slideInLeft"
                                            data-animation-delay="0.5s">LED 75 INCH F58</h2>
                                        <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light"
                                            data-animation="slideInLeft" data-animation-delay="1s">Get up to <span
                                                class="text_default">50%</span> off Today Only!</h5>
                                        <a class="btn btn-fill-out staggered-animation text-uppercase"
                                            href="{{url('/shop')}}" data-animation="slideInLeft"
                                            data-animation-delay="1.5s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item background_bg" data-img-src="{{ asset('user/assets/images/phones-banner.png') }}">
                    <div class="banner_slide_content banner_content_inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-10">
                                    <div class="banner_content overflow-hidden">
                                        <h2 class="staggered-animation" data-animation="slideInLeft"
                                            data-animation-delay="0.5s">Smart Phones</h2>
                                        <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light"
                                            data-animation="slideInLeft" data-animation-delay="1s"><span
                                                class="text_default">50%</span> off in all products</h5>
                                        <a class="btn btn-fill-out staggered-animation text-uppercase"
                                            href="{{url('/shop')}}" data-animation="slideInLeft"
                                            data-animation-delay="1.5s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item background_bg" data-img-src="{{ asset('user/assets/images/banner-headphone-19.jpg') }}" >
                    <div class="banner_slide_content banner_content_inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-10">
                                    <div class="banner_content overflow-hidden">
                                        <h2 class="staggered-animation" data-animation="slideInLeft"
                                            data-animation-delay="0.5s">Beat Headphone</h2>
                                        <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light"
                                            data-animation="slideInLeft" data-animation-delay="1s">Taking your Viewing
                                            Experience to Next Level</h5>
                                        <a class="btn btn-fill-out staggered-animation text-uppercase"
                                            href="{{url('/shop')}}" data-animation="slideInLeft"
                                            data-animation-delay="1.5s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><i
                    class="ion-chevron-left"></i></a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><i
                    class="ion-chevron-right"></i></a>
        </div>
    </div>
    <!-- END SECTION BANNER -->


    <div class="main_content">
        <!-- START SECTION BANNER -->
        <div class="section pb_20 small_pt">
            <div class="custom-container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="sale-banner mb-3 mb-md-4">
                            <a class="hover_effect1" href="#">
                                <img src="{{ 'user/assets/images/banner-camera.jpg' }}" alt="shop_banner_img7">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sale-banner mb-3 mb-md-4">
                            <a class="hover_effect1" href="#">
                                <img src="{{ 'user/assets/images/banner-headphone.jpg' }}" alt="shop_banner_img8">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sale-banner mb-3 mb-md-4">
                            <a class="hover_effect1" href="#">
                                <img src="{{ 'user/assets/images/keyboard banner.webp' }}" alt="shop_banner_img9" style="width: 423px; height: 235px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION BANNER -->

        <!-- START SECTION SHOP -->
        {{-- <div class="section pt-0 pb-0">
	<div class="custom-container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="heading_tab_header">
                    <div class="heading_s2">
                        <h4>Deal Of The Day</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-12">
            	<div class="product_slider carousel_slider owl-carousel owl-theme nav_style3" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "650":{"items": "2"}, "1199":{"items": "2"}}'>
            		<div class="item">
                        <div class="deal_wrap">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="{{('user/assets/images/el_img1.jpg')}}" alt="el_img1">
                                </a>
                            </div>
                            <div class="deal_content">
                                <div class="product_info">
                                    <h5 class="product_title"><a href="shop-product-detail.html">Red & Black Headphone</a></h5>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                    </div>
                                </div>
                                <div class="deal_progress">
                                    <span class="stock-sold">Already Sold: <strong>6</strong></span>
                                    <span class="stock-available">Available: <strong>8</strong></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width:46%"> 46% </div>
                                    </div>
                                </div>
                                <div class="countdown_time countdown_style4 mb-4" data-time="2021/10/02 12:30:15"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="deal_wrap">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="{{('user/assets/images/el_img2.jpg')}}" alt="el_img2">
                                </a>
                            </div>
                            <div class="deal_content">
                                <div class="product_info">
                                    <h5 class="product_title"><a href="shop-product-detail.html">Smart Watch External</a></h5>
                                    <div class="product_price">
                                        <span class="price">$55.00</span>
                                        <del>$95.00</del>
                                    </div>
                                </div>
                                <div class="deal_progress">
                                    <span class="stock-sold">Already Sold: <strong>4</strong></span>
                                    <span class="stock-available">Available: <strong>22</strong></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width:26%"> 26% </div>
                                    </div>
                                </div>
                                <div class="countdown_time countdown_style4 mb-4" data-time="2021/09/02 12:30:15"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="deal_wrap">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="{{('user/assets/images/el_img3.jpg')}}" alt="el_img3">
                                </a>
                            </div>
                            <div class="deal_content">
                                <div class="product_info">
                                    <h5 class="product_title"><a href="shop-product-detail.html">Nikon HD camera</a></h5>
                                    <div class="product_price">
                                        <span class="price">$68.00</span>
                                        <del>$99.25</del>
                                    </div>
                                </div>
                                <div class="deal_progress">
                                    <span class="stock-sold">Already Sold: <strong>16</strong></span>
                                    <span class="stock-available">Available: <strong>20</strong></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width:28%"> 28% </div>
                                    </div>
                                </div>
                                <div class="countdown_time countdown_style4 mb-4" data-time="2021/11/02 12:30:15"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
        <!-- END SECTION SHOP -->

        <!-- START SECTION SHOP -->
        <div class="section small_pt small_pb">
            <div class="custom-container">
                <div class="row">
                    <div class="col-xl-3 d-none d-xl-block">
                        <div class="sale-banner">
                            <a class="hover_effect1" href="#">
                                <img src="{{ 'user/assets/images/385 x 535.jpg' }}" alt="shop_banner_img10" style="width: 311px; height: 433px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h4>New arrival</h4>
                                    </div>
                                    <div class="view_all">
                                        <a href="{{url('/shop')}}" class="text_default"><i class="linearicons-power"></i>
                                            <span>View All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-margin="20">
                                    @foreach ($product as $data)
                                    <div class="item">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="{{route('detail_product',$data->id)}}">
                                                    <img src="{{ asset('storage/' . $data->cover_image) }}"
                                                        alt="product_img1" style="width: 261px; height: 261px;">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <form action="{{ route('cart.add', $data->id) }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="quantity" value="1">
                                                                <button type="submit" class="btn btn-fill-out btn-addtocart">
                                                                    <i class="icon-basket-loaded"></i>
                                                                </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a
                                                        href="{{route('detail_product',$data->id)}}">{{ $data->name}}</a></h6>
                                                <div class="product_price">
                                                    <span class="price">Rp.{{ number_format($data->price, 2) }}</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>{{$data->desc}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION CLIENT LOGO -->
        {{-- <div class="section pt-0 small_pb">
	<div class="custom-container">
    	<div class="row">
			<div class="col-md-12">
            	<div class="heading_tab_header">
                    <div class="heading_s2">
                        <h4>Our Brands</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="client_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false" data-nav="true" data-margin="30" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}, "1199":{"items": "6"}}'>
                	<div class="item">
                    	<div class="cl_logo">
                        	<img src="{{('user/assets/images/cl_logo1.png')}}" alt="cl_logo"/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cl_logo">
                        	<img src="{{('user/assets/images/cl_logo2.png')}}" alt="cl_logo"/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cl_logo">
                        	<img src="{{('user/assets/images/cl_logo3.png')}}" alt="cl_logo"/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cl_logo">
                        	<img src="{{('user/assets/images/cl_logo4.png')}}" alt="cl_logo"/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cl_logo">
                        	<img src="{{('user/assets/images/cl_logo5.png')}}" alt="cl_logo"/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cl_logo">
                        	<img src="{{('user/assets/images/cl_logo6.png')}}" alt="cl_logo"/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cl_logo">
                        	<img src="{{('user/assets/images/cl_logo7.png')}}" alt="cl_logo"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
        <!-- END SECTION CLIENT LOGO -->

        <!-- START SECTION SHOP -->
        {{-- <div class="section pt-0 pb_20">
	<div class="custom-container">
    	<div class="row">
        	<div class="col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_tab_header">
                            <div class="heading_s2">
                                <h4>Featured Products</h4>
                            </div>
                            <div class="view_all">
                            	<a href="#" class="text_default"><span>View All</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5" data-nav="true" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>
                            <div class="item">
                                <div class="product_wrap">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img2.jpg')}}" alt="el_img2">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img2.jpg')}}" alt="el_hover_img2">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Smart Watch External</a></h6>
                                        <div class="product_price">
                                            <span class="price">$55.00</span>
                                            <del>$95.00</del>
                                            <div class="on_sale">
                                                <span>25% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:68%"></div>
                                            </div>
                                            <span class="rating_num">(15)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_wrap">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img1.jpg')}}" alt="el_img1">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img1.jpg')}}" alt="el_hover_img1">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Red &amp; Black Headphone</a></h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_wrap">
                                    <span class="pr_flash">New</span>
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img3.jpg')}}" alt="el_img3">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img3.jpg')}}" alt="el_hover_img3">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Nikon HD camera</a></h6>
                                        <div class="product_price">
                                            <span class="price">$68.00</span>
                                            <del>$99.00</del>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:87%"></div>
                                            </div>
                                            <span class="rating_num">(25)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_wrap">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img5.jpg')}}" alt="el_img5">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img5.jpg')}}" alt="el_hover_img5">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Smart Televisions</a></h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_wrap">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img9.jpg')}}" alt="el_img9">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img9.jpg')}}" alt="el_hover_img9">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">oppo Reno3 Pro</a></h6>
                                        <div class="product_price">
                                            <span class="price">$68.00</span>
                                            <del>$99.00</del>
                                            <div class="on_sale">
                                                <span>20% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:87%"></div>
                                            </div>
                                            <span class="rating_num">(25)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_wrap">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img7.jpg')}}" alt="el_img7">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img7.jpg')}}" alt="el_hover_img7">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Audio Theaters</a></h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_tab_header">
                            <div class="heading_s2">
                                <h4>Top Rated Products</h4>
                            </div>
                            <div class="view_all">
                            	<a href="#" class="text_default"><span>View All</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5" data-nav="true" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>
                            <div class="item">
                                <div class="product_wrap">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img5.jpg')}}" alt="el_img5">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img5.jpg')}}" alt="el_hover_img5">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Smart Televisions</a></h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_wrap">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img12.jpg')}}" alt="el_img12">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img12.jpg')}}" alt="el_hover_img12">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Sound Equipment for Low</a></h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_wrap">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img4.jpg')}}" alt="el_img4">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img4.jpg')}}" alt="el_hover_img4">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Audio Equipment</a></h6>
                                        <div class="product_price">
                                            <span class="price">$69.00</span>
                                            <del>$89.00</del>
                                            <div class="on_sale">
                                                <span>20% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:70%"></div>
                                            </div>
                                            <span class="rating_num">(22)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_wrap">
                                    <span class="pr_flash bg-danger">Hot</span>
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img6.jpg')}}" alt="el_img6">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img6.jpg')}}" alt="el_hover_img6">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Samsung Smart Phone</a></h6>
                                        <div class="product_price">
                                            <span class="price">$55.00</span>
                                            <del>$95.00</del>
                                            <div class="on_sale">
                                                <span>25% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:68%"></div>
                                            </div>
                                            <span class="rating_num">(15)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_wrap">
                                    <span class="pr_flash bg-danger">Hot</span>
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img8.jpg')}}" alt="el_img8">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img8.jpg')}}" alt="el_hover_img8">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Surveillance camera</a></h6>
                                        <div class="product_price">
                                            <span class="price">$55.00</span>
                                            <del>$95.00</del>
                                            <div class="on_sale">
                                                <span>25% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:68%"></div>
                                            </div>
                                            <span class="rating_num">(15)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_wrap">
                                    <span class="pr_flash bg-success">Sale</span>
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img10.jpg')}}" alt="el_img10">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img10.jpg')}}" alt="el_hover_img10">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">classical Headphone</a></h6>
                                        <div class="product_price">
                                            <span class="price">$68.00</span>
                                            <del>$99.00</del>
                                            <div class="on_sale">
                                                <span>20% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:87%"></div>
                                            </div>
                                            <span class="rating_num">(25)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_tab_header">
                            <div class="heading_s2">
                                <h4>On Sale Products</h4>
                            </div>
                            <div class="view_all">
                            	<a href="#" class="text_default"><span>View All</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5" data-nav="true" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>
                            <div class="item">
                                <div class="product_wrap">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img11.jpg')}}" alt="el_img11">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img11.jpg')}}" alt="el_hover_img11">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Basics High-Speed HDMI</a></h6>
                                        <div class="product_price">
                                            <span class="price">$69.00</span>
                                            <del>$89.00</del>
                                            <div class="on_sale">
                                                <span>20% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:70%"></div>
                                            </div>
                                            <span class="rating_num">(22)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_wrap">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img7.jpg')}}" alt="el_img7">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img7.jpg')}}" alt="el_hover_img7">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Audio Theaters</a></h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_wrap">
                                    <span class="pr_flash bg-danger">Hot</span>
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img8.jpg')}}" alt="el_img8">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img8.jpg')}}" alt="el_hover_img8">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Surveillance camera</a></h6>
                                        <div class="product_price">
                                            <span class="price">$55.00</span>
                                            <del>$95.00</del>
                                            <div class="on_sale">
                                                <span>25% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:68%"></div>
                                            </div>
                                            <span class="rating_num">(15)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_wrap">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img5.jpg')}}" alt="el_img5">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img5.jpg')}}" alt="el_hover_img5">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Smart Televisions</a></h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_wrap">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img9.jpg')}}" alt="el_img9">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img9.jpg')}}" alt="el_hover_img9">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">oppo Reno3 Pro</a></h6>
                                        <div class="product_price">
                                            <span class="price">$68.00</span>
                                            <del>$99.00</del>
                                            <div class="on_sale">
                                                <span>20% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:87%"></div>
                                            </div>
                                            <span class="rating_num">(25)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_wrap">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{('user/assets/images/el_img1.jpg')}}" alt="el_img1">
                                            <img class="product_hover_img" src="{{('user/assets/images/el_hover_img1.jpg')}}" alt="el_hover_img1">
                                        </a>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Red &amp; Black Headphone</a></h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
        </div>
    </div>
</div> --}}

        <div class="custom-container mb-5">

            <div class="shopping_info">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="icon_box icon_box_style2">
                            <div class="icon">
                                <i class="flaticon-shipped"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>Free Delivery</h5>
                                <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon_box icon_box_style2">
                            <div class="icon">
                                <i class="flaticon-money-back"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>30 Day Returns Guarantee</h5>
                                <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon_box icon_box_style2">
                            <div class="icon">
                                <i class="flaticon-support"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>27/4 Online Support</h5>
                                <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
@endsection
