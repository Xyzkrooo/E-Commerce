@extends('layouts.app')

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Product Detail</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/shop') }}">Shop</a></li>
                        <li class="breadcrumb-item active">Product Detail</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                        <div class="product-image">
                            <div class="product_img_box">
                                <img id="product_img" src='{{ asset('storage/' . $product->cover_image) }}'
                                    data-zoom-image="{{ asset('storage/' . $product->cover_image) }}" alt="product_img1"
                                    style="width: 568px; height: 500px;" />
                                <a href="#" class="product_img_zoom" title="Zoom">
                                    <span class="linearicons-zoom-in"></span>
                                </a>
                            </div>
                            <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4"
                                data-slides-to-scroll="1" data-infinite="false">
                                <div class="item">
                                    <a href="#" class="product_gallery_item active"
                                        data-image="{{ asset('storage/' . $product->cover_image) }}" data-zoom-image="">
                                        <img src="{{ asset('storage/' . $product->cover_image) }}" alt="product_small_img1"
                                            style="width: 118px; height: 128px;" />
                                    </a>
                                </div>
                                @foreach ($product->image as $data)
                                    <div class="item">
                                        <a href="#" class="product_gallery_item"
                                            data-image="{{ asset('storage/products/' . $data->image_product) }}"
                                            data-zoom-image="{{ asset('user/assets/images/product_zoom_img2.jpg') }}">
                                            <img src="{{ asset('storage/products/' . $data->image_product) }}"
                                                alt="product_small_img2" style="width: 118px; height: 128px;" />
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pr_detail">
                            <div class="product_description">
                                <h4 class="product_title"><a href="#">{{ $product->name }}</a></h4>
                                <div class="product_price">
                                    <span class="price">${{ number_format($product->price, 2) }}</span>
                                </div>
                                <div class="pr_desc">
                                    <p>{{ $product->Short_desc }}</p>
                                </div>
                                <div class="product_sort_info mt-4">
                                    <ul>
                                        <li><i class="linearicons-shield-check"></i> Product Protected</li>
                                        <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>
                                    </ul>
                                </div>
                            </div>
                            <hr />
                            <div class="cart_extra">
                                <div class="cart-product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus">
                                        <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </div>
                                <div class="cart_btn">
                                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="quantity" value="1" class="quantity-input">
                                        <button class="btn btn-fill-out btn-addtocart" type="submit"><i
                                                class="icon-basket-loaded"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div>
                            <hr />
                            <ul class="product-meta">
                                <li>SKU: <a href="#">BE45VGRT</a></li>
                                <li>Category: <a href="#">{{ $product->category->name }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="large_divider clearfix"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description"
                                        role="tab" aria-controls="Description" aria-selected="true">Description</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab">
                                <div class="tab-pane fade show active" id="Description" role="tabpanel"
                                    aria-labelledby="Description-tab">
                                    <p>{{ $product->desc }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="small_divider"></div>
                        <div class="divider"></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="heading_s1">
                            <h3>Related Products</h3>
                        </div>
                        <div class="related_product_slider carousel_slider owl-carousel owl-theme" data-margin="20"
                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                            @foreach ($products as $data)
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
                                                <span class="price">${{ number_format($data->price, 2) }}</span>
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

        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const quantityInput = document.querySelector('.quantity-input');
                const qtyInput = document.querySelector('.qty');
                const plusButton = document.querySelector('.plus');
                const minusButton = document.querySelector('.minus');
                const preloader = document.querySelector('.preloader');

                // Event listener for the plus button
                plusButton.addEventListener('click', () => {
                    let currentValue = parseInt(qtyInput.value);
                    if (!isNaN(currentValue)) {
                        qtyInput.value = currentValue += 0;
                        quantityInput.value = qtyInput.value;
                    }
                });

                // Event listener for the minus button
                minusButton.addEventListener('click', () => {
                    let currentValue = parseInt(qtyInput.value);
                    if (!isNaN(currentValue) && currentValue > 1) {
                        qtyInput.value = currentValue -= 0;
                        quantityInput.value = qtyInput.value;
                    }
                });

                // Event listener for the quantity input field
                qtyInput.addEventListener('input', () => {
                    let currentValue = parseInt(qtyInput.value);
                    if (!isNaN(currentValue) && currentValue > 0) {
                        quantityInput.value = currentValue;
                    } else {
                        qtyInput.value = 1;
                        quantityInput.value = 1;
                    }
                });

                // Hide the preloader after page load
                window.addEventListener('load', () => {
                    if (preloader) {
                        preloader.style.display = 'none';
                    }
                });
            });
        </script>
    @endsection
