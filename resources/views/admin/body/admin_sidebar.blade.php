<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link text-center ">
        
        <br><span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="{{ asset('Upload_image/'.Auth::user()->profile_photo_path) }}" class="img-circle elevation-2" alt="User Image"> --}}
            </div>
            <div class="info text-white">
                <a href="{{route('admin.home')}}" class="d-block"></a>
                {{ Auth::user()->name }}

            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.home')}}" class="nav-link {{request()->is('admin/home')?'active':''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                {{--    <li class="nav-header">LABELS</li --}}




                
                <li class="nav-item">
                <a href="/admin/add_product" class="nav-link  {{(request()->is('admin/all_admin')?'active': request()->is('admin/create_admin'))?'active':'' }}">
                    <i class="nav-icon far fa-money-bill-alt "></i>
                    <p>
                    Add Product                  
                    </p>
                </a>
                
                </li>

                <li class="nav-item">
                    <a href="/admin/all_product" class="nav-link  {{(request()->is('admin/all_admin')?'active': request()->is('admin/create_admin'))?'active':'' }}">
                        <i class="nav-icon far fa-money-bill-alt "></i>
                        <p>
                        All Product                  
                        </p>
                    </a>             
                    </li>
                  
                


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
