@extends('user.master.master')
@section('content')
<div class="product-bar">
    <h3>Product List</h3>
    @if ($offer->offer_status == 'Active')
        <h4 style="color: red"> Order {{$offer->offer_quantity }} or more products to win discount upto {{$offer->discount}} taka !! </h4>
    @else
        
    @endif
    @foreach ($products as $product )
        <div class="product-item">
            <a href="/detail/{{ $product->id }}">
            <img class="product-img" src="{{ (!empty($product->product_img_path))?url('Upload_image/'
            .$product->product_img_path):url('storage/profile-photos/8o0QK4BIs6SkJESuPhm1N7adEo2eEG7HaIU224Yi.jpg') }}">
            <div class="">
                <h3>Product Name : {{ $product->product_name }}</h3>
                <h3>Product Price : {{ $product->product_price }}</h3>
            </div>
            </a>
        </div>
        
        
    @endforeach
</div>
@endsection