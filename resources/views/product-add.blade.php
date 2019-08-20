<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Web Admin panel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="icon" type="image/png" href="template/images/fav.png">
<link rel="stylesheet" href="template/css/font-awesome.min.css">
	<link rel="stylesheet" href="template/css/themify-icons.css">
    <link rel="stylesheet" href="template/css/line-icons.css">
<link rel="stylesheet" href="template/css/bootstrap.min.css">
<link rel="stylesheet" href="template/css/animate.min.css">
<link rel="stylesheet" href="template/css/perfect-scrollbar.min.css">
<link rel="stylesheet" href="template/css/jquery.datepicker.min.css">
<!-- calander -->
<link rel="stylesheet" href="template/css/flatweather.css">
<link rel="stylesheet" href="template/css/nice-select.css">
<link rel="stylesheet" href="template/css/style.css">
<link rel="stylesheet" href="template/css/color.css">
<link rel="stylesheet" href="template/css/responsive.css">
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
                    <div class="logo"><a title="" href="template/index-2.html"><img alt="" src="template/images/logo2.png"></a></div>
                    <nav class="slide-menu">
                                        <span>Navigation <i class="ti-layout"></i></span>
                                        <ul class="parent-menu">
                                            <li class="menu-item-has-children"> <a title="#"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                                <ul>
                                                    <li><a href="template/index-2.html" title="">Home</a></li>
                                                    <!-- <li><a href="template/index2.html" title="">Dashboard 2</a></li>
                                                    <li><a href="template/index3.html" title="">Dashboard 3</a></li>
                                                    <li><a href="template/index4.html" title="">Dashboard 4</a></li>
                                                    <li><a href="template/index5.html" title="">Dashboard 5</a></li> -->
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-shopping-cart"></i><span>New Orders</span></a>
                                                <ul class="mega">
                                                    <li><a href="template/index-boxed.html" title="">New Products</a></li>
                                                    <li><a href="template/overlap-sidebar.html">All Products</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-laptop"></i><span>Products</span></a>
                                                <ul class="mega">
                                                    <!-- <li><a href="template/product.html" title="">product</a></li>
                                                    <li><a href="template/product-detail.html">product-detail</a></li>
                                                    <li><a href="template/product-order.html">product-order</a></li> -->
                                                    <li><a href="{{ url('add_redirect')}}">Add product</a></li>
                                                    <li><a href="{{ url('view_product')}}">View Product</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title="#"><i class="fa fa-bookmark-o"></i><span>Previous Orders</span></a>
                                                <ul>
                                                    <!-- <li><a href="template/accordion-n-tabs.html">accordions & tabs</a></li>
                                                    <li><a href="template/elements.html">elements</a></li>
                                                    <li><a href="template/invoices.html">invoices</a></li>
                                                    <li><a href="template/tabels.html">tabels styles</a></li>
                                                    <li><a href="typography.html">typography</a></li>
                                                    <li><a href="template/megamenu.html">mega menu styles</a></li>
                                                    <li><a href="template/socials-btns.html">social buttons</a></li>
                                                    <li><a href="template/testimonials.html">testimonials styles</a></li>
                                                    <li><a href="template/calendar.html">event calendar</a></li> -->
                                                </ul>
                                            </li>
                                            <!-- <li><a href="template/inbox.html" title=""><i class="fa fa-inbox"></i><span>inbox</span><ins>5</ins></a></li>
                                            <li><a href="template/charts.html" title=""><i class="fa fa-bar-chart"></i><span>charts</span></a></li>
                                            <li> <a href="template/maps.html" title=""><i class="fa fa-globe"></i><span>Google maps</span></a> </li>
                                            <li class="menu-item-has-children"> 
                                                <a title=""><i class="fa fa-flag"></i><span>Icons</span></a>
                                                <ul>
                                                    <li><a href="template/icons.html">Font Awesome</a></li>
                                                    <li><a href="template/icons2.html">Themify Icons</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- <li class="menu-item-has-children active"> <a title=""><i class="fa fa-inbox"></i><span>Pages</span></a>
                                                <ul class="mega" style="display: block;">
                                                    <li><a class="active" href="template/profile.html">profile</a></li>
                                                    <li><a href="template/edit-profile.html">edit profile</a></li>
                                                    <li><a href="template/login.html">login</a></li>
                                                    <li><a href="template/register.html">register</a></li>
                                                    <li><a href="template/forgot-pass.html">forgot password</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- <li class="menu-item-has-children"> <a title=""><i class="fa fa-external-link"></i><span>extras</span></a>
                                                <ul class="mega">
                                                    <li><a href="template/404.html">404 error page</a></li>
                                                    <li><a href="template/505.html">505 error page</a></li>
                                                    <li><a href="template/maintenance.html">maintenance</a></li>
                                                    <li><a href="template/coming-soon.html">coming soon </a></li>
                                                    
                                                </ul>
                                            </li> -->
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
                            <div class="logo"><a href="template/index-2.html" title=""><img src="template/images/logo.png" alt=""></a></div>
                        </div>
                        <div class="col-lg-9">
                            <ul class="notify-area">
                                <li>
                                    <div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>
                                    <i class="fa fa-navicon nav-icon3"></i>
                                </li>
                                <li class="notifications"><!-- <a href="#" title=""><i class="fa fa-bell-o"></i></a><span class="red-bg">02</span> -->
                                    <div class="drop notify"> <span class="drop-head">Notifications</span>
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
                                <li class="messages"><a href="#" title=""><!-- <i class="fa fa-envelope-o"></i></a><span class="blue-bg">10</span> -->
                                    <div class="drop messages"> <span class="drop-head">3 New Message <i class="fa fa-pencil-square-o"></i></span>
                                        <ul class="drop-meta">
                                            <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg.jpg" alt=""></i>
                                                <div class="notifi-meta"> <span>02:34PM</span>
                                                    <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                </div>
                                            </li>
                                            <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg2.jpg" alt=""></i>
                                                <div class="notifi-meta"> <span>02:34PM</span>
                                                    <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                </div>
                                            </li>
                                            <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg3.jpg" alt=""></i>
                                                <div class="notifi-meta"> <span>02:34PM</span>
                                                    <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                </div>
                                            </li>
                                            <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg.jpg" alt=""></i>
                                                <div class="notifi-meta"> <span>02:34PM</span>
                                                    <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                </div>
                                            </li>
                                            <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg2.jpg" alt=""></i>
                                                <div class="notifi-meta"> <span>02:34PM</span>
                                                    <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                </div>
                                            </li>
                                        </ul>
                                        <span class="drop-bottom"><a href="#" title="">View More messages</a></span> </div>
                                </li>
                                <li class="mega"><!-- <a href="#" title="">mega</a> -->
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
                                                        <li><a href="#" title="">Themes and templatelates</a></li>
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
                                                        <li><a href="#" title="">Themes and templatelates</a></li>
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
                                                        <li><a href="#" title="">Themes and templatelates</a></li>
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
                           
                        </div>
                        <div class="col-lg-1">
                            <div class="user-head">
                                <div class="admin">
                                    <div class="admin-avatar"><img src="<?php echo Auth::user()->logo;?>" style="height: 40px;width: 40px" alt=""> </div>
                                </div>
                                <div class="drop setting"> <span class="drop-head"><?php echo $user = Auth::user()->name;?><i>30 days trial</i></span>
                                    <ul class="drop-meta">
                                        <li> <a href="#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>
                                        <li> <a href="#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
                                        <li> <a href="#" title=""><i class="fa fa-adjust"></i>task</a> </li>
                                        <li> <a href="#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
                                        <li> <a href="#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
                                    </ul>
                                    <span class="drop-bottom"><a href="{{ route('logout') }}" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
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
                                            <div class="drop notify"> <span class="drop-head">Notifications</span>
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
                                                    <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg2.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg3.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg2.jpg" alt=""></i>
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
                                        <div class="admin-avatar"> <img src="template/images/resources/admin.png" alt=""> <i class="online"></i> </div>
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
                                    <ul class="seting-area">
                                    <li class="langages">
                                        <a title="" href="#">Eng</a>
                                        <ul class="drop language">
                                            <li class="lang-selected"><a href="#"><i class="fa fa-check"></i> Eng</a></li>
                                            <li><a href="#">Rus</a></li>
                                            <li><a href="#">Jap</a></li>
                                            <li><a href="#">Arb</a></li>
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
              <form method="post" enctype="multipart/form-data" action="{{ ('/add_product') }}" role="form">
                     {{ csrf_field() }} 
                     
              <div class="content-area">
                <div class="sub-bar">
                  <div class="sub-title">
                    <h4>Dashboard:</h4>
                    <span>Welcome To web Admin Panel!</span>
                  </div>
                  <ul class="bread-crumb">
                    <li><a href="{{ url('/home')}}" title="">Home</a></li>
                    <li>Dashbord</li>
                  </ul>
                </div>
                
                <div class="gap no-gap">
                    <div class="inner-bg">
                      <div class="element-title">
                        <h4>about product</h4>
                        <span>Please fill the form below.</span> </div>
                        
                        <div class="add-prod-from">
						  <div class="row">
							<div class="col-md-12">
							  <label>product name</label>
							  <input type="text" placeholder="Enter Product Name" name="product_name" value="{{ old('product_name')}}">
                              @if ($errors->has('product_name'))
                                <div class="error">{{ $errors->first('product_name') }}</div>
                                    @endif
							     </div>
							
							<div class="col-md-12">
							  <label>category</label><a href="#" title="" class="btn-st blu-clr" style="float: right;" data-toggle="modal" data-target="#myModal">Add Category</a>
							  <select name="category" id="cat">
                                <option>Select Category</option>
                                @foreach($category as $key => $value)
                                    <option value="{{$value->category_id}}">{{$value->category_name}}</option> 
                                        @endforeach
							  </select>
							</div>

                            @if ($errors->has('category'))
                            <div class="error">{{ $errors->first('category') }}</div>
                            @endif


                        <div class="col-md-12">
                              <label>Sub Category</label><a href="#" title="" class="btn-st blu-clr" style="float: right;" data-toggle="modal" data-target="#myModal2">Add Sub Category</a>
                                <div id="sub_cat"></div> 
                        </div>
                            @if ($errors->has('sub_category'))
                            <div class="error">{{ $errors->first('sub_category') }}</div>
                            @endif

                        <div class="col-md-12">
                              <label>Child Category-1</label><a href="#" title="" class="btn-st blu-clr" style="float: right;" data-toggle="modal" data-target="#myModal3">Add Child Category</a>
                                <div id="child_cat"></div>
                            </div>
                            @if ($errors->has('child_category'))
                            <div class="error">{{ $errors->first('child_category') }}</div>
                            @endif

                        <div class="col-md-12">
                              <label>Child Category-2</label>
                              <!-- <a href="#" title="" class="btn-st blu-clr" style="float: right;" data-toggle="modal" data-target="#myModal4">Add Child Category-2</a> -->
                                <div id="child_cat2"></div>
                            </div>
                            @if ($errors->has('child_category2'))
                            <div class="error">{{ $errors->first('child_category2') }}</div>
                            @endif


							
							<div class="col-md-12">
							  <div class="input-group">
								<label>price</label>
								<span class="input-group-addon"><i class="fa fa-dollar"></i></span>
								<input class="form-control" name="price" placeholder="Enter Price" type="text">
                                 </div>
                                 @if ($errors->has('price'))
                                    <div class="error">{{ $errors->first('price') }}</div>
                                    @endif
							 
							</div>
							<div class="col-md-12">
							  <div class="input-group">
								<label>discount</label>
								<span class="input-group-addon"><i class="fa fa-percent"></i></span>
								<input class="form-control" name="discount" placeholder="Enter Discount %" type="text">
                                </div>
                                @if ($errors->has('discount'))
                                <div class="error">{{ $errors->first('discount') }}</div>
                                @endif
							  
							</div>
                            <div class="col-md-12">
                              <label>product Quantity</label>
                              <input type="text" placeholder="Enter Product Quantity" name="product_quantity" value="{{ old('product_quantity')}}">
                              @if ($errors->has('product_quantity'))
                                <div class="error">{{ $errors->first('product_quantity') }}</div>
                                    @endif
                                 </div>
							<div class="col-md-12">
							  <label>Product Description</label>
							  <textarea cols="30" rows="10" placeholder="Enter Product Description" name="description"></textarea>
                              </div>
                              @if ($errors->has('description'))
                                <div class="error">{{ $errors->first('description') }}</div>
                                @endif
							
							
							<div class="col-md-12"> 
							  <label> Upload Product Image</label>
								<input  type="file" name="product_image">
                                </div>
                                @if ($errors->has('product_image'))
                                <div class="error">{{ $errors->first('product_image') }}</div>
                                @endif
							  
                              <div class="col-md-12"> 
                              <label> Upload Images</label>
                                <input type="file"  name="attachment[]" multiple>
                                </div>
                               
							
							<div class="col-md-12">
							  <div class="buttonz">
								<button type="submit">Save</button>
								<button type="submit">Cancel</button>
							  </div>
							</div>
                      	</div>
					  </div>	  
                    </div>
                </div>
              </div>
          </form>
              <div class="bottombar"> 
					<span>© 2019. Dewwater. All Rights Reserved.</span>
				</div>
              <!-- bottombar --> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="side-panel">
            
            


    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <header class="w3-container w3-teal"> 
          <h4 class="modal-title" style="float: left;color: teal;">Add Category</h4>
        </div>
        <form action="{{ ('/add_category') }}" role="form" method="post">    
          {{ csrf_field() }}   
            <div class="add-prod-from">
                <div class="row">
                    <div class="col-md-10">
                        <label>Category Name</label>
                            <input type="text" placeholder="Enter Category Name" name="category_name">
                    </div>                 
                </div>
            </div>
                <div class="modal-footer">
                    <footer class="w3-container w3-teal">
                        <button type="submit" class="btn btn-default" >Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
        </form>
      </div>
      
    </div>
  </div>


<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <header class="w3-container w3-teal"> 
          <h4 class="modal-title" style="float: left;color: teal;">Add Category</h4>
        </div>
        <form action="{{ ('/add_sub_category') }}" role="form" method="post">    
          {{ csrf_field() }}   
            <div class="add-prod-from">
                <div class="row">
                    <div class="col-md-10">
                        <label>Category Name</label>
                           <select name="new_category">
                                <option>Select Category</option>
                                @foreach($category as $key => $value)
                                    <option value="{{$value->category_id}}">{{$value->category_name}}</option> 
                            @endforeach
                              </select>
                    </div>                 
                </div>
            </div>

            <div class="add-prod-from">
                <div class="row">
                    <div class="col-md-10">
                        <label>Sub Category Name</label>
                            <input type="text" placeholder="Enter Sub Category Name" name="sub_category_name">
                    </div>                 
                </div>
            </div>
                <div class="modal-footer">
                    <footer class="w3-container w3-teal">
                        <button type="submit" class="btn btn-default" >Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
        </form>
      </div>
      
    </div>
  </div>


  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <header class="w3-container w3-teal"> 
          <h4 class="modal-title" style="float: left;color: teal;">Add Child-Category</h4>
        </div>
        <form action="{{ ('/add_new_sub_category') }}" role="form" method="post">    
          {{ csrf_field() }}   
            <div class="add-prod-from">
                <div class="row">
                    <div class="col-md-10">
                        <label>Category Name</label>
                           <select name="new_category">
                                <option>Select Category</option>
                                @foreach($category as $key => $value)
                                    <option value="{{$value->category_id}}">{{$value->category_name}}</option> 
                            @endforeach
                              </select>
                    </div>

                     <div class="col-md-12">
                              <label>Sub Category</label>
                                <div id="sub_cat2"></div> 
                        </div>
                            @if ($errors->has('sub_category'))
                            <div class="error">{{ $errors->first('sub_category') }}</div>
                            @endif
                
                </div>
            </div>

            <div class="add-prod-from">
                <div class="row">
                    <div class="col-md-10">
                        <label>child category</label>
                            <input type="text" placeholder="Enter child category Name" name="new_child_category">
                    </div>                 
                </div>
            </div>
                <div class="modal-footer">
                    <footer class="w3-container w3-teal">
                        <button type="submit" class="btn btn-default" >Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
        </form>
      </div>
      
    </div>
  </div>

  <!-- <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
     
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <header class="w3-container w3-teal"> 
          <h4 class="modal-title" style="float: left;color: teal;">Add Second Child-category</h4>
        </div>
        <form action="{{ ('/add_sub_category') }}" role="form" method="post">    
          {{ csrf_field() }}   
            <div class="add-prod-from">
                <div class="row">
                    <div class="col-md-10">
                        <label>Category Name</label>
                           <select name="new_category">
                                <option>Select Category</option>
                                @foreach($category as $key => $value)
                                    <option value="{{$value->category_id}}">{{$value->category_name}}</option> 
                            @endforeach
                              </select>
                    </div>                 
                </div>
            </div>

            <div class="add-prod-from">
                <div class="row">
                    <div class="col-md-10">
                        <label>Sub Category Name</label>
                            <input type="text" placeholder="Enter Sub Category Name" name="sub_category_name">
                    </div>                 
                </div>
            </div>
                <div class="modal-footer">
                    <footer class="w3-container w3-teal">
                        <button type="submit" class="btn btn-default" >Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
        </form>
      </div>
      
    </div>
  </div> -->


  
</div>
           
<script src="template/js/jquery.js"></script> 
<script src="template/js/bootstrap.min.js"></script> 
<script src="template/js/perfect-scrollbar.jquery.min.js"></script> 
<script src="template/js/chart.min.js"></script> 
<script src="template/js/echart.min.js"></script> 
<script src="template/js/jquery.sparkline.min.js"></script> 
<script src="template/js/nice-select.js"></script> 
<script src="template/js/custom2.js"></script> 
<script src="template/js/flatweather.min.js"></script> 
<script src="template/js/html5lightbox.js"></script> 
<script src="template/js/custom.js"></script><!-- scripts -->

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="category"]').on('change', function() {
            var category_id = $(this).val();

             alert(category_id);
            if(category_id) {
                $.ajax({
                    url: "{{ URL::route('sub_category')}}",
                    method: "get",
                    data: {'category_id': category_id  },
                    
                    success:function(data) 
                    {
                        
                         var data2=JSON.parse(data);
                         
                         var toAppend = '<select name="sub_category" value="{{ old('sub_category')}}">';
                         
                         $.each(data2, function(key, value)
                         {
                             toAppend += '<option value="'+value.subcategory_id+'">'+value.subcategory_name+'</option>';
                        });



                    $('#sub_cat').html(toAppend);
                
                    }
                });
            }else{
                $('select[name="sub_category"]').empty();
            }
        });
    });
</script>


<script type="text/javascript">
    $('#sub_cat').on('change',function()
    {
  
     var subcategory_id1 = $('select[name="sub_category"]').val();            
        // alert(subcategory_id1);
          
          if(subcategory_id1) {
                $.ajax({
                    url: "{{ URL::route('child_category1')}}",
                    method: "get",
                    data: {'subcategory_id': subcategory_id1  },
                    
                    success:function(data) 
                    {

                        // alert(data);
                        // exit();
                        
                         var data2=JSON.parse(data);
                         
                         var toAppend = '<select name="child_category">';
                         
                         $.each(data2, function(key, value)
                         {
                             toAppend += '<option value="'+value.child_category_id+'">'+value.childcategory_name+'</option>';
                        });



                    $('#child_cat').html(toAppend);
                
                    }
                });
            }else{
                $('select[name="child_category"]').empty();
            }  
             
            
        
    });
</script>


<script type="text/javascript">
    $('#child_cat').on('change',function()
    {
  
     var childcat_id1 = $('select[name="child_category"]').val();            
//alert(childcat_id1);
          if(childcat_id1) {
                $.ajax({
                    url: "{{ URL::route('child_category2')}}",
                    method: "get",
                    data: {'childcat_id1': childcat_id1  },
                    
                    success:function(data) 
                    {
                        alert(data);

                        var data2=JSON.parse(data);
                         
                         var toAppend = '<select name="child_category2">';
                         
                         $.each(data2, function(key, value)
                         {
                             toAppend += '<option value="'+value.child2_category_id+'">'+value.childcategory2_name+'</option>';
                        });



                    $('#child_cat2').html(toAppend);
                
                    }
                });
            }else{
                $('select[name="child_category2"]').empty();
            }  
             
            
        
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="new_category"]').on('change', function() {
            var category_id = $(this).val();

             alert(category_id);
            if(category_id) {
                $.ajax({
                    url: "{{ URL::route('sub_category')}}",
                    method: "get",
                    data: {'category_id': category_id  },
                    
                    success:function(data) 
                    {
                        
                         var data2=JSON.parse(data);
                         
                         var toAppend = '<select name="sub_category" value="{{ old('sub_category')}}">';
                         
                         $.each(data2, function(key, value)
                         {
                             toAppend += '<option value="'+value.subcategory_id+'">'+value.subcategory_name+'</option>';
                        });



                    $('#sub_cat2').html(toAppend);
                
                    }
                });
            }else{
                $('select[name="sub_category"]').empty();
            }
        });
    });
</script>


</body>
</html>
