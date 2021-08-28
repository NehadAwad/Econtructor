@extends('user.master.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img  class="detail-img" src="{{ (!empty($product->product_img_path))?url('Upload_image/'
            .$product->product_img_path):url('storage/profile-photos/8o0QK4BIs6SkJESuPhm1N7adEo2eEG7HaIU224Yi.jpg') }}">        
        </div>
        <div class="col-sm-6">
            <a href="/dashboard">Go Back</a>
            <h2> {{ $product->product_name }}</h2>
            <h3>Price : {{ $product->product_price}}</h3>
            <h3>Weight : {{$product->product_weight}}</h3>
            <br><br>
            <form action="/add_to_cart" method="post">
                @csrf
                <input type="hidden" name="product_id" id="" value="{{ $product->id}}">
                <button class="btn btn-primary">Add to Cart</button>

            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
            <br><br>
        </div>
    </div>
@endsection