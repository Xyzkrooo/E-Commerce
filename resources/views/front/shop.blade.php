@extends('layouts.app')

@section('content')
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Shop List</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ol>   
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row align-items-center mb-4 pb-1">
                        <div class="col-12">
                            <div class="product_header">
                                <a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                                <div class="search_wrap">
                                    <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                                    <form id="search_form">
                                        <input type="text" placeholder="Search" class="form-control" id="search_input" name="query">
                                        <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                                    </form>
                                    <div id="search_results"></div>
                                </div>
                                    <div class="search_overlay"></div>
                                <div class="product_header_right">
                                    <div class="products_view">
                                        <a href="javascript:Void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                        <a href="javascript:Void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                    </div>
                                    <div class="custom_select">
                                        <select class="form-control form-control-sm">
                                            <option value="">Showing</option>
                                            <option value="9">9</option>
                                            <option value="12">12</option>
                                            <option value="18">18</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row shop_container">
                        @foreach ($product as $data)
                            
                        
                        <div class="col-md-4 col-6">
                            <div class="product">
                                <div class="product_img">
                                    <a href="{{route('detail_product',$data->id)}}">
                                        <img src="{{ asset('storage/' . $data->cover_image) }}" alt="product_img1" style="width: 261px; height: 261px;">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{route('detail_product',$data->id)}}">{{ $data->name }}</a></h6>
                                    <div class="product_price">
                                        <span class="price">${{ number_format($data->price) }}</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>{{ $data->short_desc }}</p>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="pagination mt-3 justify-content-center pagination_style1">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="linearicons-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="sidebar">
                        <div class="widget">
                            <h5 class="widget_title">Categories</h5>
                            <ul class="widget_categories">
                                <li><a href="{{ url('/shop') }}"><span class="categories_name">All Categories</span><span class="categories_num"></span></a></li>
                                @foreach ($category as $data)
                                <li><a href="{{ url('shop/kategori/' . $data->id) }}"><span class="categories_name">{{ $data->name }}</span><span class="categories_num"></span></a></li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
    
    </div>
<!-- END MAIN CONTENT -->
@endsection
