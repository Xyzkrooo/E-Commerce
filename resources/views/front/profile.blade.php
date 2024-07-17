@extends('layouts.app')

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>My Account</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content mb-5">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="dashboard_menu">
                            <ul class="nav nav-tabs flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard"
                                        role="tab" aria-controls="dashboard" aria-selected="false"><i
                                            class="ti-layout-grid2"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab"
                                        aria-controls="orders" aria-selected="false"><i
                                            class="ti-shopping-cart-full"></i>Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab"
                                        aria-controls="address" aria-selected="true"><i class="ti-location-pin"></i>My
                                        Address</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail"
                                        role="tab" aria-controls="account-detail" aria-selected="true"><i
                                            class="ti-id-badge"></i>Account details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('logout') }}" class="nav-link"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                            class="ti-lock"></i>Logout</a>
                                    <form action="{{ route('logout') }}" method="post" id="logout-form">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel"
                                aria-labelledby="dashboard-tab">
                                <div class="card rounded-4">
                                    <div class="card-body p-4">
                                        <div class="position-relative mb-5">
                                            <div class="profile-avatar position-absolute top-100 start-50 translate-middle">
                                                <img src="https://placehold.co/110x110/png"
                                                    class="img-fluid rounded-circle p-1 bg-grd-danger shadow" width="170"
                                                    height="170" alt="">
                                            </div>
                                        </div>
                                        <div class="profile-info pt-5 d-flex align-items-center justify-content-between">
                                            <div class="">
                                                <h3>{{ $user->name }}</h3>
                                                <p class="mb-0">{{ $user->email }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Orders</h3>
                                    </div>
                                    {{-- <div class="card-body">
                                        @if ($orders->isEmpty())
                                            <p>You have not placed any orders yet.</p>
                                        @else
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($orders as $order)
                                                            <tr>
                                                                <td>#{{ $order->id }}</td>
                                                                <td>{{ $order->created_at->format('F j, Y') }}</td>
                                                                <td>{{ ucfirst($order->status) }}</td>
                                                                <td>${{ number_format($order->total, 2) }}</td>
                                                                <td><a href="#" class="btn btn-fill-out btn-sm">View</a></td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        @endif
                                    </div> --}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card mb-3 mb-lg-0">
                                            <div class="card-header">
                                                <h3>Billing Address</h3>
                                            </div>
                                            <div class="card-body">
                                                <address>
                                                    {{ $user->billing_address }}<br>
                                                    {{ $user->city }}, {{ $user->state }}<br>
                                                    {{ $user->postal_code }}<br>
                                                    {{ $user->country }}
                                                </address>
                                                <a href="#" class="btn btn-fill-out">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3>Shipping Address</h3>
                                            </div>
                                            <div class="card-body">
                                                <address>
                                                    {{ $user->shipping_address }}<br>
                                                    {{ $user->city }}, {{ $user->state }}<br>
                                                    {{ $user->postal_code }}<br>
                                                    {{ $user->country }}
                                                </address>
                                                <a href="#" class="btn btn-fill-out">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-detail" role="tabpanel"
                                aria-labelledby="account-detail-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Account Details</h3>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" name="enq">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>First Name <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="first_name" value="{{ $user->first_name }}" type="text">
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>Last Name <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="last_name" value="{{ $user->last_name }}" type="text">
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>User Name <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="display_name" value="{{ $user->name }}" type="text">
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="email" value="{{ $user->email }}" type="email">
                                                </div>
                                                    
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-fill-out" name="submit"
                                                        value="Submit">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

    </div>
@endsection
