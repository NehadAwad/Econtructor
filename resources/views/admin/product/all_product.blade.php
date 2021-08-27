@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Products</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead class="bg-info">
                    <tr>
                      <th>Product Weight</th>
                      <th>Product Name</th>
                      <th>Product Price</th>
                      <th>Product Quantity</th>
                      <th>Preorder Status</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product )
                    <tr>
                        <td>{{ $product->product_weight }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_price }}</td>
                        <td>{{ $product->product_quantity }}</td>
                        <td>{{ $product->pre_order_status }}</td>
                        <td><a href="/admin/edit_product/{{ $product->id }}"><button>Edit</button></a></td>
                      </tr>
                    @endforeach
                    
                    </tbody>
    
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
    
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
</div>


@endsection
