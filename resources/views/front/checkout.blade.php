@extends('layouts.app')

@section('content')
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Checkout</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/cart')}}">Cart</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="main_content">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading_s1">
                            <h4>Billing Details</h4>
                        </div>
                        <form action="{{ route('place.order') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="billing_address" required placeholder="Address *">
                            </div>
                            <div class="heading_s1">
                                <h4>Additional Information</h4>
                            </div>
                            <div class="form-group mb-0">
                                <textarea rows="5" class="form-control" name="order_notes" placeholder="Order notes"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input" required type="radio" name="payment_option" id="exampleRadios3" value="bank_transfer" checked>
                                        <label class="form-check-label" for="exampleRadios3">Direct Bank Transfer</label>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="check_payment">
                                        <label class="form-check-label" for="exampleRadios4">Check Payment</label>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="paypal">
                                        <label class="form-check-label" for="exampleRadios5">Paypal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-fill-out btn-block">Place Order</button>
                            </div>
                        </form>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="heading_s1">
                                <h4>Your Orders</h4>
                            </div>
                            <div class="table-responsive order_table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cartItems as $cartItem)
                                            <tr>
                                                <td>{{ $cartItem->product->name }} <span class="product-qty">x {{ $cartItem->quantity }}</span></td>
                                                <td>${{ number_format($cartItem->quantity * $cartItem->product->price, 2) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>SubTotal</th>
                                            <td>${{ number_format($subTotal, 2) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td>Free Shipping</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td>${{ number_format($total, 2) }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
