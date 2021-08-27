@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <form method="POST" action="/admin/edit_product_post/{{ $product->id }}" enctype="multipart/form-data">
        @csrf
        <h2 class="text-center mb-4 mt-4">Edit Product</h2>
        <div class="container">

        <div class="col-12" style="background: #6fbbd3; border-radius: 5px;">
            <div class="col-12">
               <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label>Product Weight</label>
                            <input type="text" name="product_weight" value="{{ $product->product_weight}}" id="product_weight" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label>Product Name</label>
                            <input type="text" name="product_name" value="{{ $product->product_name}}" id="product_name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label>Price</label>
                            <input type="text" name="product_price" value="{{ $product->product_price}}" id="product_price" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label>Quantity</label>
                            <input type="text" name="product_quantity" value="{{ $product->product_quantity}}" id="product_quantity" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label>Pre Order Status</label>
                                    <select name="pre_order_status" class="form-control" value="{{ $product->pre_order_status}}">
                                        <option value="Inactive">Inactive</option>
                                        <option value="Active">Active</option>
                                    </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label>Product Image</label>
                            <input type="file" name="product_img" id="product_img" class="form-control">
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
</div>
@endsection
