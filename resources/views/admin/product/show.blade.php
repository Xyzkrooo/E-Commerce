@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col-md-12 col-lg-12 mb-3">
            <div class="card">
                <h3 class="card-header">{{ $product->name }}</h3>
                <div class="card-body">

                    <h5>
                        Price : {{ $product->price }}
                    </h5>
                    <p>
                        Stok : {{ $product->stok }}
                    </p>
                    <hr>
                    <p>
                        Deskripsi {!! $product->desc !!}
                    </p>

                </div>
            </div>
        </div>


        <h3>Images</h3>
        <div class="row">
            @foreach ($product->image as $image)
                <div class="col-md-3">
                    <img src="{{ asset('storage/products/' . $image->image_product) }}" class="w-100 rounded"
                        style="height: 10rem">
                </div>
            @endforeach
        </div>
    </div>
@endsection
