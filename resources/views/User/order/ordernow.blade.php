@extends('user.master.master')
@section('content')
<!-- Main content -->
<section class="content">
    <form method="POST" action="/ordernow_post" enctype="multipart/form-data">
        @csrf
        <h2 class="text-center mb-4 mt-4">Order Information</h2>
        <div class="container">

        <div class="col-12" style="background: #6fbbd3; border-radius: 5px;">
            <div class="col-10">
               <br>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label>Your Mobile No</label>
                            <input type="text" name="user_mobile" value="" id="product_name" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label>Division</label>
                                    <select name="user_division" class="form-control">
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Chattogram">Chattogram</option>
                                        <option value="Barishal">Barishal</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Mymensingh ">Mymensingh </option>
                                        <option value="Sylhet">Sylhet</option>
                                    </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label>Address</label>
                            <input type="text" name="user_address" value="" id="user_address" class="form-control">
                        </div>
                    </div>
                </div>

                

               
            <div class="row text-center mt-4">
                <div class="col-lg-4 offset-lg-4" >
                    <button type="submit" class="btn mb-3 text-black btn-block text-bold" style="background-color:#64e764;">Submit</button>
                </div>
            </div>
        </div>
    </form>
  </section>
  <!-- /.content -->
@endsection