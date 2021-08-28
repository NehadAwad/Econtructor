<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="{{ asset("boot/css/bootstrap.min.css") }}" type="text/css">
{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="{{ asset("boot/js/bootstrap.min.js") }}" type="text/javascript"></script>
</head>
<body>
    @include('user.master.header')
    @yield('content')
    @include('user.master.footer')
</body>

<style>
    .product-img{
        height: 100px;
        width: 80%;
    } 
    .product-item{
        float: left;
        margin: 22px;
    }
    .product-bar{
        margin: 50px;
    
    }
    .detail-img{
        height:300px;
    }
</style>
<script>

</script>
</html>