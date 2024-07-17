@extends('layouts.app')

@section('content')
<!-- START MAIN CONTENT -->
    <!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>Shopping Cart</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/shop') }}">Shop</a></li>
                    <li class="breadcrumb-item active">Shopping Cart</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive shop_cart_table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Sub Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($cartItems->isEmpty())
                                <tr>
                                    <td colspan="7" class="text-center">
                                        <div class="text-center" style="margin-top: 20px;">
                                            <i class="ti-shopping-cart" style="font-size: 50px;"></i>
                                            <p>Cart is empty</p>
                                        </div>
                                    </td>
                                </tr>
                            @else
                                @foreach($cartItems as $data)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="{{ asset('storage/' . $data->product->cover_image) }}" alt="product1" style="width: 100px; height: 111px;">
                                            </a>
                                        </td>
                                        <td class="product-name" data-title="Product">
                                            <a href="#">{{ $data->product->name }}</a>
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            Rp.{{ number_format($data->product->price, 2) }}
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity">
                                                <form id="quantity-form-{{ $data->id }}" action="{{ route('cart.update', $data->id) }}" method="POST">
                                                    @csrf
                                                    <input type="button" value="-" class="minus" onclick="changeQuantity(this, {{ $data->id }}, -1)">
                                                    <input type="text" name="quantity" value="{{ $data->quantity }}" title="Qty" class="qty" size="4" min="1" required>
                                                    <input type="button" value="+" class="plus" onclick="changeQuantity(this, {{ $data->id }}, 1)">
                                                </form>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Sub Total">
                                            Rp.{{ number_format($data->sub_total, 2) }}
                                        </td>
                                        <td class="product-remove" data-title="Remove">
                                            <form action="{{ route('cart.delete', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="ti-close"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        
                        <tfoot>
                            <tr>
                                <td colspan="6" class="px-0">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-lg-4 col-md-6 mb-3 mb-md-0 text-start text-md-start">
                                            <button class="btn btn-fill-out btn-sm" type="button" onclick="submitAllForms()">Update Cart</button>
                                    	</div>           
                                        <div class="col-lg-8 col-md-4 text-end text-md-end">
                                            <form action="{{ route('cart.clear') }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-line-fill btn-sm">Clear Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="medium_divider"></div>
                <div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
                <div class="medium_divider"></div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-md-6">
                <div class="border p-3 p-md-4">
                    <div class="heading_s1 mb-3">
                        <h6>Cart Totals</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="cart_total_label">Cart Subtotal</td>
                                    <td class="cart_total_amount">Rp.{{ number_format($subTotal, 2) }}</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">Shipping</td>
                                    <td class="cart_total_amount">Free Shipping</td>
                                </tr>   
                                <tr>
                                    <td class="cart_total_label">Total</td>
                                    <td class="cart_total_amount"><strong>Rp.{{ number_format($total, 2) }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <form action="{{ route('checkout') }}" method="POST">
                        @csrf
                        <a href="{{ route('checkout') }}" class="btn btn-fill-out">Proceed To CheckOut</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->

<!-- START SECTION SUBSCRIBE NEWSLETTER -->
<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<script>
    function changeQuantity(button, id, change) {
        var form = document.getElementById('quantity-form-');
        var input = form.querySelector('input[name="quantity"]');
        var currentQuantity = parseInt(input.value);
        var newQuantity = currentQuantity + change;

        if (newQuantity >= 0) {
            input.value = newQuantity;
        }
    }

    function submitAllForms() {
        var forms = document.querySelectorAll('form[id^="quantity-form-"]');
        forms.forEach(function(form) {
            form.submit();
        });
    }
</script>
@endsection
