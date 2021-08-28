@extends('user.master.master')
@section('content')
<div class="product-bar">
    <h3>Product List</h3>
    @foreach ($products as $product )
        <div class="product-item">
            <img class="product-img" src="{{ (!empty($product->product_img_path))?url('Upload_image/'
            .$product->product_img_path):url('storage/profile-photos/8o0QK4BIs6SkJESuPhm1N7adEo2eEG7HaIU224Yi.jpg') }}">
            <div class="">
                <h3>{{ $product->product_name }}</h3>
            </div>
        </div>
        
        
    @endforeach
</div>
@endsection