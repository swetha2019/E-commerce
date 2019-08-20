<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Web Admin panel</title>
<link rel="icon" type="image/png" href="{{url('/')}}/template/images/fav.png">
<link rel="stylesheet" href="{{url('/')}}/template/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/')}}/template/css/themify-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/line-icons.css">
<link rel="stylesheet" href="{{url('/')}}/template/css/bootstrap.min.css">
<link rel="stylesheet" href="{{url('/')}}/template/css/animate.min.css">
<link rel="stylesheet" href="{{url('/')}}/template/css/perfect-scrollbar.min.css">
<link rel="stylesheet" href="{{url('/')}}/template/css/jquery.datepicker.min.css">
<!-- calander -->
<link rel="stylesheet" href="{{url('/')}}/template/css/flatweather.css">
<link rel="stylesheet" href="{{url('/')}}/template/css/nice-select.css">
<link rel="stylesheet" href="{{url('/')}}/template/css/style.css">
<link rel="stylesheet" href="{{url('/')}}/template/css/color.css">
<link rel="stylesheet" href="{{url('/')}}/template/css/responsive.css">
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
                    <div class="logo"><a title="" href="temp/index-2.html"><img alt="" src="temp/images/logo2.png"></a></div>
                    <nav class="slide-menu">
                                        <span>Navigation <i class="ti-layout"></i></span>
                                        <ul class="parent-menu">
                                            <li class="menu-item-has-children"> <a title="#"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                                <ul>
                                                    <li><a href="temp/index-2.html" title="">Dashboard 1</a></li>
                                                    <li><a href="temp/index2.html" title="">Dashboard 2</a></li>
                                                    <li><a href="temp/index3.html" title="">Dashboard 3</a></li>
                                                    <li><a href="temp/index4.html" title="">Dashboard 4</a></li>
                                                    <li><a href="temp/index5.html" title="">Dashboard 5</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-shopping-cart"></i><span>New Orders</span></a>
                                                <ul class="mega">
                                                    <li><a href="temp/index-boxed.html" title="">New Products</a></li>
                                                    <li><a href="temp/overlap-sidebar.html">All Products</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-laptop"></i><span>Products</span></a>
                                                <ul class="mega">
                                                    <li><a href="{{ url('add_redirect')}}">Add product</a></li>
                                                    <li><a href="{{ url('view_product')}}">View Product</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title="#"><i class="fa fa-bookmark-o"></i><span>Previous Orders</span></a>
                                                <ul>
                                                    <li><a href="temp/accordion-n-tabs.html">accordions & tabs</a></li>
                                                    <li><a href="temp/elements.html">elements</a></li>
                                                    <li><a href="temp/invoices.html">invoices</a></li>
                                                    <li><a href="temp/tabels.html">tabels styles</a></li>
                                                    <li><a href="typography.html">typography</a></li>
                                                    <li><a href="temp/megamenu.html">mega menu styles</a></li>
                                                    <li><a href="temp/socials-btns.html">social buttons</a></li>
                                                    <li><a href="temp/testimonials.html">testimonials styles</a></li>
                                                    <li><a href="temp/calendar.html">event calendar</a></li>
                                                </ul>
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
                            <div class="logo"><a href="{{url('/')}}/template/index-2.html" title=""><img src="{{url('/')}}/template/images/logo.png" alt=""></a></div>
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
                                            <li> <i class="notifi-icon"><img src="{{url('/')}}/template/images/resources/user-mesg.jpg" alt=""></i>
                                                <div class="notifi-meta"> <span>02:34PM</span>
                                                    <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                </div>
                                            </li>
                                            <li> <i class="notifi-icon"><img src="{{url('/')}}/template/images/resources/user-mesg2.jpg" alt=""></i>
                                                <div class="notifi-meta"> <span>02:34PM</span>
                                                    <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                </div>
                                            </li>
                                            <li> <i class="notifi-icon"><img src="{{url('/')}}/template/images/resources/user-mesg3.jpg" alt=""></i>
                                                <div class="notifi-meta"> <span>02:34PM</span>
                                                    <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                </div>
                                            </li>
                                            <li> <i class="notifi-icon"><img src="{{url('/')}}/template/images/resources/user-mesg.jpg" alt=""></i>
                                                <div class="notifi-meta"> <span>02:34PM</span>
                                                    <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                </div>
                                            </li>
                                            <li> <i class="notifi-icon"><img src="{{url('/')}}/template/images/resources/user-mesg2.jpg" alt=""></i>
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
                                    <div class="admin-avatar"><img src="{{url('/')}}/template/images/resources/admin.png" alt=""> <!-- <i class="online"></i> --> </div>
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
                                                    <li> <i class="notifi-icon"><img src="{{url('/')}}/template/images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="{{url('/')}}/template/images/resources/user-mesg2.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="{{url('/')}}/template/images/resources/user-mesg3.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="{{url('/')}}/template/images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="{{url('/')}}/template/images/resources/user-mesg2.jpg" alt=""></i>
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
                                        <div class="admin-avatar"> <img src="{{url('/')}}/template/images/resources/admin.png" alt=""> <i class="online"></i> </div>
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
              <form method="post" enctype="multipart/form-data" action="{{ ('/update_product') }}" role="form">
                     {{ csrf_field() }} 
             <?php foreach ($products as $data) ?>
              <div class="content-area">
                <div class="sub-bar">
                  <div class="sub-title">
                    <h4>Dashboard:</h4>
                    <span>Welcome To web Admin Panel!</span>
                  </div>
                  <ul class="bread-crumb">
                    <li><a href="#" title="">Home</a></li>
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
                              <input type="hidden" name="product_id" value="<?php echo $data->id;?>">
							  <input type="text" placeholder="Enter Product Name" name="product_name" value="<?php echo $data->product_name;?>">
                              @if ($errors->has('product_name'))
                        <div class="error">{{ $errors->first('product_name') }}</div>
                        @endif
							</div>
							
							<div class="col-md-6">
							  <label>category</label>
							  <select name="category" id="cat" value="<?php echo $data->category;?>">
                                
                                <option value="<?php echo $data->category;?>"><?php echo $data->category_name;?></option>
                                 @foreach($category as $key => $value)
                                    <option value="{{$value->category_id}}">{{$value->category_name}}</option> 
                            @endforeach
							  </select>
							</div>
                            @if ($errors->has('category'))
                        <div class="error">{{ $errors->first('category') }}</div>
                        @endif


                        <div class="col-md-6">
                              <label>Sub Category</label>
                              <select name="sub_category">
                              <option value="<?php echo $data->sub_category;?>"><?php echo $data->subcategory_name;?></option>
                          </select>
                                <div id="sub_cat"></div>
                             
                              
                            </div>
                            @if ($errors->has('sub_category'))
                        <div class="error">{{ $errors->first('sub_category') }}</div>
                        @endif


                        <div class="col-md-6">
                              <label>Child Category-1</label>
                              <select name="child_category">
                              <option value="<?php echo $data->child_category;?>"><?php echo $data->childcategory_name;?></option>
                                </select>
                                <div id="child_cat"></div>
                            </div>
                            @if ($errors->has('child_category'))
                            <div class="error">{{ $errors->first('child_category') }}</div>
                            @endif

                        <div class="col-md-6">
                              <label>Child Category-2</label>
                              <select name="child_category2">
                              <option value="<?php echo $data->second_child_category;?>"><?php echo $data->childcategory2_name;?></option></select>
                                <div id="child_cat2"></div>
                            </div>
                            
                            @if ($errors->has('child_category2'))
                            <div class="error">{{ $errors->first('child_category2') }}
                            </div>
                            @endif
							
							<div class="col-md-12">
							  <div class="input-group">
								<label>price</label>
								<span class="input-group-addon"><i class="fa fa-dollar"></i></span>
								<input class="form-control" name="price" placeholder="Enter Price" type="text" value="<?php echo $data->price;?>">
                                 </div>
                                 @if ($errors->has('price'))
                        <div class="error">{{ $errors->first('price') }}</div>
                        @endif
							 
							</div>
							<div class="col-md-6">
							  <div class="input-group">
								<label>discount</label>
								<span class="input-group-addon"><i class="fa fa-percent"></i></span>
								<input class="form-control" name="discount" placeholder="Enter Discount %" type="text" value="<?php echo $data->discount;?>">
                                </div>
                                @if ($errors->has('discount'))
                        <div class="error">{{ $errors->first('discount') }}</div>
                        @endif
							  
							</div>
							<div class="col-md-12">
							  <label>Product Description</label>
							  <textarea cols="30" rows="10" placeholder="Enter Product Description" name="description" value="<?php echo $data->description;?>"><?php echo $data->description;?></textarea>
                              </div>
                              @if ($errors->has('description'))
                        <div class="error">{{ $errors->first('description') }}</div>
                        @endif
							
							
							<div class="col-md-12"> 
							  <label> Upload Product Image</label>
                              <img src="{{$data->product_image}}"  style="width: 50px; height: 50px ;">
                                <input type="file" name="product_image" value="{{$data->product_image}} ">

                                </div>
                                @if ($errors->has('product_image'))
                        <div class="error">{{ $errors->first('product_image') }}</div>
                        @endif
							  
                               
							
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
<!-- side panel -->
<script src="{{url('/')}}/template/js/jquery.js"></script> 
<script src="{{url('/')}}/template/js/bootstrap.min.js"></script> 
<script src="{{url('/')}}/template/js/perfect-scrollbar.jquery.min.js"></script> 
<script src="{{url('/')}}/template/js/chart.min.js"></script> 
<script src="{{url('/')}}/template/js/echart.min.js"></script> 
<script src="{{url('/')}}/template/js/jquery.sparkline.min.js"></script> 
<script src="{{url('/')}}/template/js/nice-select.js"></script> 
<script src="{{url('/')}}/template/js/custom2.js"></script> 
<script src="{{url('/')}}/template/js/flatweather.min.js"></script> 
<script src="{{url('/')}}/template/js/html5lightbox.js"></script> 
<script src="{{url('/')}}/template/js/custom.js"></script><!-- scripts -->

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="category"]').on('change', function() {
            var category_id = $(this).val();

             // alert(category_id);
            if(category_id) {
                $.ajax({
                    url: "{{ URL::route('sub_category')}}",
                    method: "get",
                    data: {'category_id': category_id  },
                    
                    success:function(data) 
                    {
                        
                         var data2=JSON.parse(data);
                         
                         var toAppend = '<select name="sub_category" value="<?php echo $data->category;?>">';
                         
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

                    alert(data);
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

</body>
</html>
