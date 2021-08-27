<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SaforaMart | Online Super Shop with Home Delivery </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/images/favicon/saforamart.ico') }}">
    <!-- Pignose Calender -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('backend/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img class="img-fluid" src="{{ asset('backend/images/logo/logo-sm.png')}}"> </b>
                    <span class="logo-compact"><img src="{{ asset('backend/images/')}}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{ asset('backend/images/logo/logo.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">

                        <div class="input-group-prepend">
                           <a href=""><i class="fas fa-shopping-cart">Orders</i></a> 
                        </div>
                        
                        <div class="input-group-prepend">
                           <a href=""></a> <i class="fas fa-truck">Purchase</i>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
             
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">বাংলা</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown button">
                            <form method="POST" action="http://127.0.0.1:8000/logout">
                                <input type="hidden" name="_token" value="Izm5bm5eJQxmJlf97Is7rVQU9reLuraTTdtHARuT">
                                <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                                                this.closest('form').submit();">Log Out</a>
                         </form> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label"><h5>MAIN NAVIGATION</h5></li>

                    <li>
                        
                        <a class="" href="home.html" aria-expanded="false">
                            <i class="fas fa-home text-success"></i><span class="nav-text">Home</span>
                        </a>

                    </li>
                    <li>
                        
                        <a class="" href="site_setting.html" aria-expanded="false">
                            <i class="fas fa-cog text-primary"></i><span class="nav-text">Site settings</span>
                        </a>

                    </li>
                    <li>
                        <a class="" href="dashboard.html" aria-expanded="false">
                            <i class="fas fa-th-large text-danger"></i><span class="nav-text">Dashboard</span>
                        </a>
                       
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-database text-success"></i><span class="nav-text">Product</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="pdt_unit.html"> Units</a></li>
                            <li><a href="pdt_categories.html">Product Categories</a></li>
                            <li><a href="pdt_subcategories.html">Product Subcategories</a></li>
                            <li><a href="products.html"> Products</a></li>
                        </ul>
                    </li>

                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-shopping-cart text-warning"></i><span class="nav-text">Order</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="promo_code.html">Promo Code</a></li>
                            <li><a href="customer.html"> Customers</a></li>
                            <li><a href="add_sale.html">Add Sale</a></li>
                            <li><a href="order.html"> Orders</a></li>
                            <li><a href="request_pdt.html">Requested Products</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        
                        <a class="" href="delivery_person_cash.html" aria-expanded="false">
                            <i class="fas fa-dollar-sign text-info"></i><span class="nav-text"> Delivery Person Cash</span>
                        </a>

                    </li>

                    <li>
                        
                        <a class="" href="account.html" aria-expanded="false">
                            <i class="far fa-credit-card text-primary"></i><span class="nav-text"> Account</span>
                        </a>

                    </li>

                    <li>
                        
                        <a class="" href="stock.html" aria-expanded="false">
                            <i class="fas fa-grip-horizontal text-danger"></i><span class="nav-text"> Stock</span>
                        </a>

                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-truck text-primary"></i> <span class="nav-text">Purchase</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="suppliers.html"> Suppliers</a></li>
                            <li><a href="purchase.html">Purchase</a></li>
                        </ul>
                    </li>

                    <li>
                        
                        <a class="" href="blukprice_update.html" aria-expanded="false">
                            <i class="fas fa-upload text-warning"></i><span class="nav-text"> Bluk Price Update</span>
                        </a>

                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-dollar-sign text-info"></i> <span class="nav-text">Expense</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="expense_item.html"> Expense Item</a></li>
                            <li><a href="expenses.html" > Expense</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        
                        <a class="" href="supplier_due_payment.html" aria-expanded="false">
                            <i class="far fa-minus-square text-danger"></i> <span class="nav-text"> Supplier Deu Payment</span>
                        </a>

                    </li>


                    <li>
                        
                        <a class="" href="customer_due_payment.html" aria-expanded="false">
                            <i class="fas fa-dollar-sign text-primary"></i> <span class="nav-text">Customer Deu Received</span>
                        </a>

                    </li>


                    <li>
                        
                        <a class="" href="attendence.html" aria-expanded="false">
                            <i class="far fa-clock text-success"></i> <span class="nav-text"> Attendance</span>
                        </a>

                    </li>


                    <li>
                        
                        <a class="" href="invoice&text.html" aria-expanded="false">
                            <i class="fas fa-cog text-danger"></i> <span class="nav-text"> Invoice & Text Setting</span>
                        </a>

                    </li>


                    <li>
                        
                        <a class="" href="salary_payroll.html" aria-expanded="false">
                            <i class="far fa-folder text-secondary"></i> <span class="nav-text"> Salary/ Payroll</span>
                        </a>

                    </li>


                    <li>
                        
                        <a class="" href="damage.html" aria-expanded="false">
                            <i class="fas fa-trash-alt text-danger"></i> <span class="nav-text"> Damage</span>
                        </a>

                    </li>


                    <li>
                        
                        <a class="" href="quotation.html" aria-expanded="false">
                            <i class="far fa-file text-primary"></i> <span class="nav-text"> Quotation</span>
                        </a>

                    </li>


                    <li>
                        
                        <a class="" href="employee.html" aria-expanded="false">
                            <i class="fas fa-user-friends text-info"></i> <span class="nav-text"> Employee</span>
                        </a>

                    </li>


                    <li>
                        
                        <a class="" href="deposit_withdraw.html" aria-expanded="false">
                            <i class="fas fa-suitcase text-danger"></i> <span class="nav-text"> Deposit Or Withdraw</span>
                        </a>

                    </li>


                    <li>
                        
                        <a class="" href="db_backup.html" aria-expanded="false">
                            <i class="fas fa-folder-plus text-primary"></i> <span class="nav-text"> DB Backup & Restore</span>
                        </a>

                    </li>


                    <li>
                        
                        <a class="" href="update.html" aria-expanded="false">
                            <i class="fas fa-file-download text-warning"></i> <span class="nav-text"> Update Software
                        </a>

                    </li>


                    <li>
                        
                        <a class="" href="affiliate.html" aria-expanded="false">
                            <i class="fas fa-cog text-success"></i> <span class="nav-text"> Affiliate</span>
                        </a>

                    </li>                
                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-file-alt text-dark"></i> <span class="nav-text">Reports</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="order_report.html" >Order Report</a></li>
                            <li><a href="customer_order_report.html"> Customer Order Report</a></li>
                            <li><a href="product_order_report.html"> Product Order Report</a></li>
                            <li><a href="most_less_order-report.html"> Most Less Order Products Report</a></li>
                            <li><a href="balance_sheet.html">  Balance Sheet</a></li>
                            <li><a href="daily_summary_report.html">Daily Summary Report</a></li>
                            <li><a href="./chart-peity.html">Stock Report</a></li>
                            <li><a href="./chart-peity.html"> Low Stock Report</a></li>
                            <li><a href="profit_loss_report.html">Profit Loss Report</a></li>
                            <li><a href="supplier_ledger.html">Supplier Ledger</a></li>
                            <li><a href="supplier_due_report.html">Supplier Due Report</a></li>
                            <li><a href="customer_due_recive.html">Customer Due Report</a></li>
                            <li><a href="customer_ledger_report.html">Customer Ledger Report</a></li>
                            <li><a href="attendence_report.html">Attendance Report</a></li>
                            <li><a href="purchase_report.html">Purchase Report</a></li>
                            <li><a href="product_purchase_report.html">Product Purchase Report</a></li>
                            <li><a href="expense_report.html">Expense Report</a></li>
                            <li><a href="damage_report.html">Damage Report</a></li>
                        </ul>
                    </li>
                 
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="far fa-user"></i> <span class="nav-text">My Profile</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="change_profile.html"> Change Profile</a></li>
                            <li><a href="change_password.html" >Change Password</a></li>
                            <li><a href="" >Logout</a></li>
                        </ul>
                    </li>
                  
                
            
                  
                    
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            @yield('content')

            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; 2021 Saforamart  &copy; <a href="https://glamworlditltd.com/">Designed & Developed by Glamworld It</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('backend/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('backend/js/custom.min.js') }}"></script>
    <script src="{{ asset('backend/js/settings.js') }}"></script>
    <script src="{{ asset('backend/js/gleek.js') }}"></script>
    <script src="{{ asset('backend/js/styleSwitcher.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('backend/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('backend/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Datamap -->
    <script src="{{ asset('backend/plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('backend/plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datamaps/datamaps.world.min.js') }}"></script>
    <!-- Morrisjs --
    <script src="{{ asset('backend/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/morris/morris.min.js') }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('backend/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>



    <script src="{{ asset('backend/js/dashboard/dashboard-1.js') }}"></script>

</body>

</html>