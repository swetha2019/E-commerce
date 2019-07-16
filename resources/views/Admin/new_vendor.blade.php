<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Wooble Html5 Admin panel</title>
    <link rel="icon" type="{{ url('/') }}/template/image/png" href="images/fav.png">
    <link rel="stylesheet" href="{{ url('/') }}/template/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/template/css/themify-icons.css">
    <link rel="stylesheet" href="{{ url('/') }}/template/css/line-icons.css">
    <link rel="stylesheet" href="{{ url('/') }}/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/template/css/animate.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/template/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/template/css/jquery.datepicker.min.css">
    <!-- calander -->
    <link rel="stylesheet" href="{{ url('/') }}/template/css/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/template/css/color.css">
    <link rel="stylesheet" href="{{ url('/') }}/template/css/responsive.css">

</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="panel-layout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-page">
                        <header>
                            <div class="side-menus">
                                <div class="side-header">
                                    <div class="logo"><a title="" href="index.html"><img alt="" src="{{ url('/') }}/template/images/logo2.png"></a></div>
                                   <nav class="slide-menu">
                                        <span>Navigation <i class="ti-layout"></i></span>
                                        <ul class="parent-menu">
                                            <li> <a title="categories_form" href="{{url('categories_form')}}"><i class="fa fa-dashboard"></i><span>Categories</span></a>
                                                
                                            </li>
                                           <li class="menu-item-has-children"> <a title=""><i class="fa fa-shopping-cart"></i><span>Vendores Details</span></a>
                                                <ul class="mega">
                                                    <li><a href="{{url('new_vendor')}}" title="">New Vendores</a></li>
                                                    <li><a href="{{url('rect_vendor')}}"> Recently used Vendores</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-laptop"></i><span>Products</span></a>
                                                <ul class="mega">
                                                    <li><a href="{{ url('/') }}/template/product.html" title="">product</a></li>
                                                    <li><a href="{{ url('/') }}/template/product-detail.html">product-detail</a></li>
                                                    <li><a href="{{ url('/') }}/template/product-order.html">product-order</a></li>
                                                    <li><a href="{{ url('/') }}/template/product-add.html">add product</a></li>
                                                    <li><a href="{{ url('/') }}/template/product-cart.html">product cart</a></li>
                                                </ul>
                                            </li>
                                             <li class="menu-item-has-children"> <a title=""><i class="fa fa-laptop"></i><span>New User</span></a>
                                                <ul class="mega">
                                                    <li><a href="{{ url('/') }}/template/product.html" title="">User</a></li>
                                                    <li><a href="{{url('adminuser_form')}}">Add new user</a></li>
                                                    <li><a href="{{ url('view_user') }}">view user detail</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-laptop"></i><span>layouts</span></a>
                                                <ul class="mega">
                                                    <li><a href="index-boxed.html" title="">boxed layout</a></li>
                                                    <li><a href="overlap-sidebar.html">overlap sliderbar</a></li>
                                                </ul>
                                            </li>
                                           
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </header>
                        <!-- side header -->
                        <div class="topbar">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="logo"><a href="index.html" title=""><img src="images/logo.png" alt=""></a></div>
                                    </div>
                                    <div class="col-lg-9">
                                        <ul class="notify-area">
                                            <li>
                                                <div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>
                                                <i class="fa fa-navicon nav-icon3"></i>
                                            </li>
                                            
                                            
                                            <li class="mega"><a href="#" title="">mega</a>
                                                <div class="mega-menu">
                                                    <div class="row mega-style1">
                                                        <div class="col-lg-4">
                                                            <div class="mega-post-info"> <span>envato market</span>
                                                                <ul>
                                                                    <li><a href="#" title="">Envato Market</a></li>
                                                                    <li><a href="#" title="">terms</a></li>
                                                                    <li><a href="#" title="">licenses</a></li>
                                                                    <li><a href="#" title="">market API</a></li>
                                                                    <li><a href="#" title="">Become an affiliate</a></li>
                                                                    <li><a href="#" title="">help</a></li>
                                                                    <li><a href="#" title="">Themes and Templates</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mega-post-info"> <span>Themeforest</span>
                                                                <ul>
                                                                    <li><a href="#" title="">Envato Market</a></li>
                                                                    <li><a href="#" title="">terms</a></li>
                                                                    <li><a href="#" title="">licenses</a></li>
                                                                    <li><a href="#" title="">market API</a></li>
                                                                    <li><a href="#" title="">Become an affiliate</a></li>
                                                                    <li><a href="#" title="">help</a></li>
                                                                    <li><a href="#" title="">Themes and Templates</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mega-post-info"> <span>Evato Element</span>
                                                                <ul>
                                                                    <li><a href="#" title="">Envato Market</a></li>
                                                                    <li><a href="#" title="">terms</a></li>
                                                                    <li><a href="#" title="">licenses</a></li>
                                                                    <li><a href="#" title="">market API</a></li>
                                                                    <li><a href="#" title="">Become an affiliate</a></li>
                                                                    <li><a href="#" title="">help</a></li>
                                                                    <li><a href="#" title="">Themes and Templates</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="t-search">
                                            <form method="post">
                                                <input type="text" placeholder="Enter Your Keyword">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                        <ul class="seting-area">
                                            <li class="langages">
                                                <a href="#" title="">Eng</a>
                                                <ul class="drop language">
                                                    <li class="lang-selected"><a href=""><i class="fa fa-check"></i> Eng</a></li>
                                                    <li><a href="">Rus</a></li>
                                                    <li><a href="">Jap</a></li>
                                                    <li><a href="">Arb</a></li>
                                                </ul>
                                            </li>
                                            <li class="setting-panel"><a href="#" title=""><i class="icon-equalizer"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="user-head">
                                            <div class="admin">
                                                <div class="admin-avatar"><img src="{{ url('/') }}/template/images/resources/admin.png" alt=""> <i class="online"></i> </div>
                                            </div>
                                            <div class="drop setting"> <span class="drop-head">stifen Doe <i>30 days trial</i></span>
                                                <ul class="drop-meta">
                                                    <li> <a href="#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>
                                                    <li> <a href="#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
                                                    <li> <a href="#" title=""><i class="fa fa-adjust"></i>task</a> </li>
                                                    <li> <a href="#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
                                                    <li> <a href="#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
                                                </ul>
                                                <span class="drop-bottom"><a href="#" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="responsive-header">
                                <div class="logo-area">
                                    <ul class="notify-area">
                                        <li>
                                            <div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>
                                        </li>
                                        <li class="notifications"><a href="#" title=""><i class="fa fa-bell-o"></i></a><span class="red-bg">02</span>
                                           <!-- <div class="drop notify"> <span class="drop-head">Notifications</span>
                                                <ul class="drop-meta">
                                                    <li> <i class="notifi-icon blue">N</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                            <span>02:34PM</span> </div>
                                                    </li>
                                                    <li> <i class="notifi-icon red">C</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                            <span>02:34PM</span> </div>
                                                    </li>
                                                    <li> <i class="notifi-icon yellow">A</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                            <span>02:34PM</span> </div>
                                                    </li>
                                                    <li> <i class="notifi-icon blue">N</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                            <span>02:34PM</span> </div>
                                                    </li>
                                                </ul>
                                                <span class="drop-bottom"><a href="#" title="">View More Notifications</a></span> </div>
                                        </li>
                                        <li class="messages"><a href="#" title=""><i class="fa fa-envelope-o"></i></a><span class="blue-bg">10</span>
                                            <div class="drop messages"> <span class="drop-head">3 New Message <i class="fa fa-pencil-square-o"></i></span>
                                                <ul class="drop-meta">
                                                    <li> <i class="notifi-icon"><img src="images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="images/resources/user-mesg2.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="images/resources/user-mesg3.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="images/resources/user-mesg2.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <span class="drop-bottom"><a href="#" title="">View More messages</a></span> </div>
                                        </li>
                                    </ul>
                                    
                                    <div class="user-head">
                                    <div class="admin">
                                        <div class="admin-avatar"> <img src="{{ url('/') }}/template/images/resources/admin.png" alt=""> <i class="online"></i> </div>
                                    </div>
                                    <div class="drop setting"> <span class="drop-head">stifen Doe <i>30 days trial</i></span>
                                        <ul class="drop-meta">
                                            <li> <a href="#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>
                                            <li> <a href="#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
                                            <li> <a href="#" title=""><i class="fa fa-adjust"></i>task</a> </li>
                                            <li> <a href="#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
                                            <li> <a href="#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
                                        </ul>
                                       <span class="drop-bottom"><a href="{{ url('admin_logout') }}" title=""><i class="fa fa-sign-out"></i>log Out</a></span>  </div>
                                    </div>-->
                                    <ul class="seting-area">
                                    <li class="langages">
                                        <a title="" href="#">Eng</a>
                                        <ul class="drop language">
                                            <li class="lang-selected"><a href=""><i class="fa fa-check"></i> Eng</a></li>
                                            <li><a href="">Rus</a></li>
                                            <li><a href="">Jap</a></li>
                                            <li><a href="">Arb</a></li>
                                        </ul>
                                    </li>
                                    <li class="setting-panel"><a title="" href="#"><i class="icon-equalizer"></i></a></li>
                                </ul>
                                </div>
                                <div class="t-search">
                                    <form method="post">
                                        <input type="text" placeholder="Enter Your Keyword">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- responsive header -->
                            <div class="panel-body">
                                <div class="content-area">
                                    <div class="sub-bar">
                                        <div class="sub-title">
                                            <h4>Dashboard:</h4>
                                            <span>Welcome To web Admin Panel!</span>
                                        </div>
                                        <ul class="bread-crumb">
                                            <li><a href="{{url('adminhome')}}" title=""><i class="fa fa-home"></i></a></li>
                                            <li>Dashbord</li>
                                        </ul>
                                    </div>
                                   
                                    <div class="widget">
                                        <div class="widget-title no-margin">
                                            <h4>Admin User</h4>
                                            <ul class="widget-controls">
                                                <li class="refresh-content" title="Refresh"><i class="fa fa-refresh"></i></li>
                                                <li class="expand-content" title="Maximize"><i class="icon-frame"></i></li>
                                                <li class="more-option" title="More Options"><i class="ti-more-alt"></i></li>
                                            </ul>
                                            
                                        </div>
                                        <div class="main-table">
                                            <table class="prj-tbl bordered table-responsive" id=newvendor>
                                            <thead>
                                                <tr>
                                                    <th><em>Venoder Id</em></th>
                                                    <th><em>Vendor Name</em></th>
                                                    <th><em>Phone Number</em></th>
                                                    <th><em>Email</em></th>
                                                    <th><em>Status</em></th>
                                                    <th colspan="2"><em>Action</em></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($array as $fetch)
                                                <div id="search1">
                                                <tr>
                                                    <td><i>VEN10{{$fetch->id}}</i></td>
                                                    <td><span>{{$fetch->name}}</span></td>
                                                    <td><i>{{$fetch->phone}}</i></td>
                                                    <td>
                                                        <div class="prg-br">
                                                            {{$fetch->email}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                     <td><span>@if($fetch->approval_status==0)  <div style="color: red;"> Not Active Yet </div> @endif</span></td>
                                                    
                                                
                                                     <td><span>@if($fetch->approval_status==0)<a href="approved/{{$fetch->id}}" class="btn btn-success"><span class="fa fa-user"></span> Approved</a> @endif </span></td>
                                                    <td>



                                                        <ul>
                                                           <li><a href="/Vendor_Delete/{{$fetch->id}}" ><i class="icon-trash"></i></a></li>
                                                            <li><a href="/vendor_edit/{{$fetch->id}}" class="edit-btn"><i class="fa fa-navicon"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </div>
                                                @endforeach
                                              
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    <!-- ongoing projects widget -->

                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="widget">
                                                <div class="widget-title">
                                                    <h4>top Sales </h4>
                                                    <ul class="widget-controls">
                                                        <li class="refresh-content" title="Refresh"><i class="fa fa-refresh"></i></li>
                                                        <li class="expand-content" title="Maximize"><i class="icon-frame"></i></li>
                                                        <li class="more-option" title="More Options"><i class="ti-more-alt"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <div class="pie-chart">
                                                        <ul class="total">
                                                            <li>Store<span>16b</span></li>
                                                            <li>online<span>20</span></li>
                                                        </ul>
                                                        <canvas id="pieChart"></canvas>
                                                        <ul class="total">
                                                            <li>services<span>150</span></li>
                                                            <li>shares<span>29</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- top sale donut pie chart -->
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="widget">
                                                <div class="widget-title">
                                                    <h4>user activities </h4>
                                                    <ul class="widget-controls">
                                                        <li class="refresh-content" title="Refresh"><i class="fa fa-refresh"></i></li>
                                                        <li class="expand-content" title="Maximize"><i class="icon-frame"></i></li>
                                                        <li class="more-option" title="More Options"><i class="ti-more-alt"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="widget-peding user-activity">
                                                    <div class="user-active">
                                                        <div class="active-usr"> <img src="images/resources/activity-1.jpg" alt=""> </div>
                                                        <div class="active-info">
                                                            <h5><a href="#" title="">Mario Flores</a></h5>
                                                            <span>02 Hours Ago</span>
                                                            <p>Completed Layout Examples</p>
                                                        </div>
                                                    </div>
                                                    <div class="user-active">
                                                        <div class="active-usr"> <img src="images/resources/activity-2.jpg" alt=""> </div>
                                                        <div class="active-info">
                                                            <h5><a href="#" title="">Gabriella Cruz </a></h5>
                                                            <span>09 Hours Ago</span>
                                                            <p>Awesome Dashboard Chart</p>
                                                        </div>
                                                    </div>
                                                    <div class="user-active">
                                                        <div class="active-usr"> <img src="images/resources/activity-3.jpg" alt=""> </div>
                                                        <div class="active-info">
                                                            <h5><a href="#" title="">Johana Cooper</a></h5>
                                                            <span>02 Hours Ago</span>
                                                            <p>Fix Responsive Nvbar Collapse</p>
                                                        </div>
                                                    </div>
                                                    <div class="user-active">
                                                        <div class="active-usr"> <img src="images/resources/activity-2.jpg" alt=""> </div>
                                                        <div class="active-info">
                                                            <h5><a href="#" title="">Gabriella Cruz </a></h5>
                                                            <span>09 Hours Ago</span>
                                                            <p>Awesome Dashboard Chart</p>
                                                        </div>
                                                    </div>
													<div class="user-active">
                                                        <div class="active-usr"> <img src="images/resources/activity-1.jpg" alt=""> </div>
                                                        <div class="active-info">
                                                            <h5><a href="#" title="">Mario Flores</a></h5>
                                                            <span>02 Hours Ago</span>
                                                            <p>Completed Layout Examples</p>
                                                        </div>
                                                    </div>
													<div class="user-active">
                                                        <div class="active-usr"> <img src="images/resources/activity-3.jpg" alt=""> </div>
                                                        <div class="active-info">
                                                            <h5><a href="#" title="">Johana Cooper</a></h5>
                                                            <span>02 Hours Ago</span>
                                                            <p>Fix Responsive Nvbar Collapse</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user activity -->
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="widget">
                                                <div class="widget-title">
                                                    <h4>Browser Statics</h4>
                                                    <ul class="widget-controls">
                                                        <li class="refresh-content" title="Refresh"><i class="fa fa-refresh"></i></li>
                                                        <li class="expand-content" title="Maximize"><i class="icon-frame"></i></li>
                                                        <li class="more-option" title="More Options"><i class="ti-more-alt"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="widget-peding">
                                                    <ul class="browser-static">
                                                        <li>google chorme <span class="blue">65%</span></li>
                                                        <li>Mozila Firefox <span class="red">33%</span></li>
                                                        <li>Safari <span class="yellow">12%</span></li>
                                                        <li>Opera Mini <span class="green">28%</span></li>
                                                        <li>Microsoft Edge <span class="blue">97%</span></li>
                                                        <li>Internet Explorer <span class="green">89%</span></li>
														<li>Android <span class="green">20%</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- browser statics -->
                                        </div>
                                    </div>
                                    <!-- three widgets -->

                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>yearly sales</h4>
                                            <ul class="widget-controls">
                                                <li class="refresh-content" title="Refresh"><i class="fa fa-refresh"></i></li>
                                                <li class="expand-content" title="Maximize"><i class="icon-frame"></i></li>
                                                <li class="more-option" title="More Options"><i class="ti-more-alt"></i></li>
                                            </ul>
                                        </div>
                                        <div class="widget-peding">
                                            <div class="revenue-chart">
                                                <canvas id="lineChart"></canvas>
                                            </div>
                                            <div class="chart-info"> <span>yearly sales</span>
                                                <ul>
                                                    <li class="mango"><a href="#" title="">2015</a></li>
                                                    <li class="carrot"><a href="#" title="">2016</a></li>
                                                    <li class="berry"><a href="#" title="">2017</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- line chart widget full -->

                                    <div class="widget">
                                        <div class="widget-title no-margin">
                                            <h4>recent invoice</h4>
                                            <ul class="widget-controls">
                                                <li class="refresh-content" title="Refresh"><i class="fa fa-refresh"></i></li>
                                                <li class="expand-content" title="Maximize"><i class="icon-frame"></i></li>
                                                <li class="more-option" title="More Options"><i class="ti-more-alt"></i></li>
                                            </ul>
                                        </div>

                                        <div class="main-table recent-invoice ">
                                            <table class="table table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Invoice#</th>
                                                        <th>Customer Name</th>
                                                        <th>status</th>
                                                        <th>due</th>
                                                        <th>ammount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="sr">INV-001001</span></td>
                                                        <td>
                                                            <div class="project-title">
                                                                <h5>Mario Flores </h5>
                                                            </div>
                                                        </td>
                                                        <td><span class="priority low">paid</span></td>
                                                        <td><span class="due">10 March 2017</span></td>
                                                        <td><span class="amount">$ 1200.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="sr">INV-001001</span></td>
                                                        <td>
                                                            <div class="project-title">
                                                                <h5>Gabriella Cruz </h5>
                                                            </div>
                                                        </td>
                                                        <td><span class="priority medium">over due</span></td>
                                                        <td><span class="due">10 April 2017</span></td>
                                                        <td><span class="amount">$ 150.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="sr">INV-001001</span></td>
                                                        <td>
                                                            <div class="project-title">
                                                                <h5>Johana Cooper</h5>
                                                            </div>
                                                        </td>
                                                        <td><span class="priority high">pending</span></td>
                                                        <td><span class="due">25 September 2017</span></td>
                                                        <td><span class="amount">$ 298.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="sr">INV-001001</span></td>
                                                        <td>
                                                            <div class="project-title">
                                                                <h5>Edward Chun</h5>
                                                            </div>
                                                        </td>
                                                        <td><span class="priority high">pending</span></td>
                                                        <td><span class="due">13 May 2017</span></td>
                                                        <td><span class="amount">$ 300.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="sr">INV-001001</span></td>
                                                        <td>
                                                            <div class="project-title">
                                                                <h5>Gabriella Cruz </h5>
                                                            </div>
                                                        </td>
                                                        <td><span class="priority medium">over due</span></td>
                                                        <td><span class="due">10 April 2017</span></td>
                                                        <td><span class="amount">$ 150.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="sr">INV-001001</span></td>
                                                        <td>
                                                            <div class="project-title">
                                                                <h5>Mario Flores </h5>
                                                            </div>
                                                        </td>
                                                        <td><span class="priority low">paid</span></td>
                                                        <td><span class="due">10 March 2017</span></td>
                                                        <td><span class="amount">$ 1200.00</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- recent invoice widget -->

                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="widget">
                                                <div class="admin-widg"> <img src="images/resources/admin-bg.jpg" alt="">
                                                    <div class="widget-peding employee"> <img src="images/resources/admin2.png" alt="">
                                                        <h4>Mario Flores</h4>
                                                        <span>Employee Of The Month</span>
                                                        <ul class="socials">
                                                            <li><a class="facebook" href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                                            <li><a class="twitter" href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                                            <li><a class="google" href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a class="tumblr" href="#" title=""><i class="fa fa-tumblr"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- admin widget -->
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="widget">
                                                <div class="widget-title no-margin">
                                                    <h4>todo list </h4>
                                                    <ul class="widget-controls">
                                                        <li class="refresh-content" title="Refresh"><i class="fa fa-refresh"></i></li>
                                                        <li class="expand-content" title="Maximize"><i class="icon-frame"></i></li>
                                                        <li class="more-option" title="More Options"><i class="ti-more-alt"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="widget-peding">
                                                    <ul class="todo">
                                                        <li>
                                                            <input type="checkbox" id="checkbox-1-1" class="regular-checkbox" />
                                                            <label for="checkbox-1-1"></label>
                                                            <span>stand up</span><a class="del-content" href="#" title=""><i class="fa fa-close"></i></a></li>
                                                        <li>
                                                            <input type="checkbox" id="checkbox-1-2" class="regular-checkbox">
                                                            <label for="checkbox-1-2"></label>
                                                            <span>don't give up the fight.</span><a class="del-content" href="#" title=""><i class="fa fa-close"></i></a></li>
                                                        <li>
                                                            <input type="checkbox" id="checkbox-1-3" class="regular-checkbox">
                                                            <label for="checkbox-1-3"></label>
                                                            <span>Employee</span><a class="del-content" href="#" title=""><i class="fa fa-close"></i></a></li>
                                                        <li>
                                                            <input type="checkbox" id="checkbox-1-4" class="regular-checkbox">
                                                            <label for="checkbox-1-4"></label>
                                                            <span>Embitios Year</span><a class="del-content" href="#" title=""><i class="fa fa-close"></i></a>
                                                        </li>

                                                    </ul>
                                                    <form class="add-new" method="post">
                                                        <input type="text" placeholder="Write New Item And hit Enter">
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- Todo list -->
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <div class="widget">
                                                <div class="widget-title">
                                                    <h4>Users List</h4>
                                                    <ul class="widget-controls">
                                                        <li class="refresh-content" title="Refresh"><i class="fa fa-refresh"></i></li>
                                                        <li class="expand-content" title="Maximize"><i class="icon-frame"></i></li>
                                                        <li class="more-option" title="More Options"><i class="ti-more-alt"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="widget-peding">
                                                    <ul class="user-list">
                                                        <li>
                                                            <div class="owner-pic"> <img src="images/resources/owner.jpg" alt=""> </div>
                                                            <div class="owner-info">
                                                                <h6>Gabriella Cruz </h6>
                                                                <span>08 MIN</span> <i class="mango"></i> </div>
                                                        </li>
                                                        <li>
                                                            <div class="owner-pic"> <img src="images/resources/owner2.jpg" alt=""> </div>
                                                            <div class="owner-info">
                                                                <h6>Mario Flores </h6>
                                                                <span>04 MIN</span> <i class="berry"></i> </div>
                                                        </li>
                                                        <li>
                                                            <div class="owner-pic"> <img src="images/resources/owner3.jpg" alt=""> </div>
                                                            <div class="owner-info">
                                                                <h6>Johana Cooper </h6>
                                                                <span>09 MIN</span> <i class="carrot"></i> </div>
                                                        </li>
                                                        <li>
                                                            <div class="owner-pic"> <img src="images/resources/owner4.jpg" alt=""> </div>
                                                            <div class="owner-info">
                                                                <h6>Edward Chun </h6>
                                                                <span>10 MIN</span> <i class="mango"></i> </div>
                                                        </li>
                                                        <li>
                                                            <div class="owner-pic"> <img src="images/resources/owner2.jpg" alt=""> </div>
                                                            <div class="owner-info">
                                                                <h6>Mario Flores </h6>
                                                                <span>04 MIN</span> <i class="berry"></i> </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- user list -->
                                        </div>
                                    </div>
                                    <!-- three widgets with clanader -->

                                </div>
                                <div class="bottombar"> 
									<span>© 2019. Dewwater. All Rights Reserved.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="side-panel">
            <h4 class="panel-title">General Setting</h4>
            <form method="post">
                <div class="setting-row">
                    <span>use night mode</span>
                    <input type="checkbox" id="nightmode1"/> 
                    <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Notifications</span>
                    <input type="checkbox" id="switch22" /> 
                    <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Notification sound</span>
                    <input type="checkbox" id="switch33" /> 
                    <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>My profile</span>
                    <input type="checkbox" id="switch44" /> 
                    <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Show profile</span>
                    <input type="checkbox" id="switch55" /> 
                    <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
                </div>
            </form>
            <h4 class="panel-title">Account Setting</h4>
            <form method="post">
                <div class="setting-row">
                    <span>Sub users</span>
                    <input type="checkbox" id="switch66" /> 
                    <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>personal account</span>
                    <input type="checkbox" id="switch77" /> 
                    <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Business account</span>
                    <input type="checkbox" id="switch88" /> 
                    <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Show me online</span>
                    <input type="checkbox" id="switch99" /> 
                    <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Delete history</span>
                    <input type="checkbox" id="switch101" /> 
                    <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Expose author name</span>
                    <input type="checkbox" id="switch111" /> 
                    <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
                </div>
            </form>
        </div><!-- side panel -->
    <script src="{{ url('/') }}/template/js/jquery.js"></script>
    <script src="{{ url('/') }}/template/js/jquery-ui.min.js"></script>
    <script src="{{ url('/') }}/template/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/template/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ url('/') }}/template/js/chart.min.js"></script>
    <script src="{{ url('/') }}/template/js/jquery.sparkline.min.js"></script>
    <script src="{{ url('/') }}/template/js/custom2.js"></script>
    <script src="{{ url('/') }}/template/js/custom.js"></script>
    <!-- scripts -->
</body>

</html>