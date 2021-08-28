@extends('user.master.master')
@section('content')
<div class="customer-product">
    <div class="col-sm-10">
        <table class="table">

            <tbody>
              <tr>
        
                <td>Amount</td>
                <td>{{ $total }}</td>
       
              </tr>
              <tr>
        
                <td>Delivery</td>
                <td>{{ $delivery }}</td>
 
              </tr>
              <tr>
        
                <td>Offer Discount</td>
                <td>{{ $discount}}</td>
 
              </tr>
              <tr>
 
                <td>Total Amount</td>
                <td>{{ $total+$delivery-$discount }}</td>
      
              </tr>
            </tbody>
          </table>
    </div>
</div>
@endsection