@extends('user.master.master')
@section('content')
<div class="customer-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-12">
        <div class="product-bar">
            <h3>Results for Products</h3>
            @foreach ($products as $product )
                <div class="row product-item">
                    <div class="col-sm-3">
                        <a href="/detail/{{ $product->id }}">
                            <img class="product-img" src="{{ (!empty($product->product_img_path))?url('Upload_image/'
                            .$product->product_img_path):url('storage/profile-photos/8o0QK4BIs6SkJESuPhm1N7adEo2eEG7HaIU224Yi.jpg') }}">

                            </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="/detail/{{ $product->id }}">
                        
                            <div class="">
                                <h3>Product Name : {{ $product->product_name }}</h3>
                                <h3>Product Price : {{ $product->product_price }}</h3>
                            </div>
                            </a>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-warning">Remove to Cart</button>
                    </div>
                </div>
                
                
            @endforeach
        </div>
    </div>
</div>
@endsection