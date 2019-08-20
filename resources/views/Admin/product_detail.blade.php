<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Web Admin panel</title>
<link rel="icon" type="{{ url('/') }}/template/image/png" href="{{ url('/') }}/template/images/fav.png">
<link rel="stylesheet" href="{{ url('/') }}/template/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ url('/') }}/template/css/themify-icons.css">
    <link rel="stylesheet" href="{{ url('/') }}/template/css/line-icons.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/animate.min.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/perfect-scrollbar.min.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/jquery.datepicker.min.css">
<!-- calander -->
<link rel="stylesheet" href="{{ url('/') }}/template/css/flatweather.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/style.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/color.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/responsive.css">
<style type="text/css">
    #slideshow {
  margin: 80px auto;
  position: relative;
    width: inherit;
    height: 500px;
  padding: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
}

#slideshow > div {
  position: absolute;
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;
}
</style>
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
                                    <div class="logo"><a title="" href="index-2.html"><img alt="" src="images/logo2.png"></a></div>
                                    @foreach($detail as $admin)
                    @if($admin->role!="Editor")
                    <nav class="slide-menu">
                                        <span>{{$admin->role}}<i class="ti-layout"></i></span>
                                        <ul class="parent-menu">
                                            <li> <a title="categories_form" href="{{url('adminhome')}}"><i class="fa fa-dashboard"></i><span>Dashbord</span></a>
                                                
                                            </li>
                                            <li> <a title="categories_form" href="{{url('categories_form')}}"><i class="fa fa-navicon"></i><span>Categories</span></a>
                                                
                                            </li>

                                            <li> <a title="" href="{{url('product')}}"><i class="fa fa-shopping-cart"></i><span>Products</span></a>
                                                
                                            </li>
                                             <li> <a title="" href="{{url('subscription')}}"><i class="fa fa-laptop"></i><span>Subscriptions</span></a>
                                                
                                            </li>
                                           <li class="menu-item-has-children"> <a title=""><i class="fa fa-user"></i><span>Vendores Details</span></a>
                                                <ul class="mega">
                                                    <li><a href="{{url('new_vendor')}}" title="">New Vendores</a></li>
                                                    <li><a href="{{url('rect_vendor')}}"> Recently used Vendores</a></li>
                                                </ul>
                                            </li>
                                            
                                            @if($admin->role=="Super_Admin")
                                             <li class="menu-item-has-children"> <a title=""><i class="fa fa-user"></i><span>New User</span></a>
                                                
                                                <ul class="mega">
                                                    <li><a href="{{ url('/') }}/template/product.html" title="">User</a></li>
                                                    <li><a href="{{url('adminuser_form')}}">Add new user</a></li>
                                                    <li><a href="{{ url('view_user') }}">view user detail</a></li>
                                                </ul>
                                               
                                            </li>
                                             @endif
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-laptop"></i><span>layouts</span></a>
                                                <ul class="mega">
                                                    <li><a href="index-boxed.html" title="">boxed layout</a></li>
                                                    <li><a href="overlap-sidebar.html">overlap sliderbar</a></li>
                                                </ul>
                                            </li>
                                           
                                            </li>
                                        </ul>
                                    </nav>
                                    @else
                                   av class="slide-menu">
                                        <span>{{$admin->role}}<i class="ti-layout"></i></span>
                                        <ul class="parent-menu">
                                            <li> <a title="categories_form" href="{{url('adminhome')}}"><i class="fa fa-dashboard"></i><span>Dashbord</span></a>
                                                
                                            </li>
                                            <li> <a title="categories_form" href="{{url('categories_form')}}"><i class="fa fa-navicon"></i><span>Categories</span></a>
                                                
                                            </li>

                                            <li> <a title="" href="{{url('product')}}"><i class="fa fa-shopping-cart"></i><span>Products</span></a>
                                                
                                            </li>
                                           <li class="menu-item-has-children"> <a title=""><i class="fa fa-user"></i><span>Vendores Details</span></a>
                                                <ul class="mega">
                                                    <li><a href="{{url('new_vendor')}}" title="">New Vendores</a></li>
                                                    <li><a href="{{url('rect_vendor')}}"> Recently used Vendores</a></li>
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
                                    @endif
                         @endforeach


                                </div>
                            </div>
                        </header>
                        <!-- side header -->
                        <div class="topbar">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="logo"><a href="index-2.html" title=""><img src="images/logo.png" alt=""></a></div>
                                    </div>
                                    <div class="col-lg-9">
                                        <ul class="notify-area">
                                            <li>
                                                <div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>
                                               <!--  <i class="fa fa-navicon nav-icon3"></i> -->
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
                                                    <li class="lang-selected"><a href="#"><i class="fa fa-check"></i> Eng</a></li>
                                                    <li><a href="#">Rus</a></li>
                                                    <li><a href="#">Jap</a></li>
                                                    <li><a href="#">Arb</a></li>
                                                </ul>
                                            </li>
                                            <li class="setting-panel"><a href="#" title=""><i class="icon-equalizer"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="user-head">
                                            <div class="admin">
                                                <div class="admin-avatar"><img src="images/resources/admin.png" alt=""> <i class="online"></i> </div>
                                            </div>
                                            <div class="drop setting"> <span class="drop-head">stifen Doe <i>30 days trial</i></span>
                                                <ul class="drop-meta">
                                                    <li> <a href="#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>
                                                    <li> <a href="#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
                                                    <li> <a href="#" title=""><i class="fa fa-adjust"></i>task</a> </li>
                                                    <li> <a href="#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
                                                    <li> <a href="#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
                                                </ul>
                                                <span class="drop-bottom"><a href="{{ url('admin_logout') }}" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
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
                                        <div class="admin-avatar"> <img src="images/resources/admin.png" alt=""> <i class="online"></i> </div>
                                    </div>
                                    <div class="drop setting"> <span class="drop-head">stifen Doe <i>30 days trial</i></span>
                                        <ul class="drop-meta">
                                            <li> <a href="#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>
                                            <li> <a href="#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
                                            <li> <a href="#" title=""><i class="fa fa-adjust"></i>task</a> </li>
                                            <li> <a href="#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
                                            <li> <a href="#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
                                        </ul>
                                        <span class="drop-bottom"><a href="{{ url('admin_logout') }}" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
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
                @foreach($product as $pro_detail)
                 <div class="gap no-gap">
                  <div class="inner-bg">
                    <div class="product-details">
                      <div class="gap no-top">
                        <div class="product-details-wrapper paddlr70">
                          <div class="product-detail paddlr100">
                            <div class="row">
                              <div class="col-lg-12 col-md-12">


                                      <?php
                                       $image=explode("#@#", $pro_detail->image_gallery);

                                        ?>
                    <!-- <form action="{{url('pro_edit',$pro_detail->id)}}" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                                         @foreach ($image as $key => $value)
                                        
                                         <img src="{{$value}}">
                                         <input type="file" name="img[]" value="{{$value}}">
                                       @endforeach
                                       <button type="submit" name="save" >Update Category</button>
                                   </form> -->
                                        <div id="slideshow">
                                        @foreach ($image as $key => $value)
                                        <div>
                                         <img src="{{$value}}">
                                       </div>
                                       @endforeach
                                      </div>


                              </div>
                              <div class="col-lg-7 col-md-7">
                                <div class="product-detail-info">
                                  <div class="rating-reviews">
                                    <div class="starz-rating"> <span class="fa fa-star-o"></span> <span class="fa fa-star-o "></span> <span class="fa fa-star-o "></span> <span class="fa fa-star-o "></span> <span class="fa fa-star-o"></span> </div>
                                     

                                    <ul>
                                      <li><a href="#" class="review-btn" title="">(03 Review)</a></li>
                                    </ul>
                                  </div>
                                  <h1>{{$pro_detail->product_name}}</h1>
                                  <p>{{$pro_detail->description}}</p>
                                  @if($pro_detail->discount!=0)
                                  <label hidden>{{$_Discont=($pro_detail->discount/100)*$pro_detail->price}}</label>
                                    <label hidden>{{$_price=$pro_detail->price-$_Discont}}</label>
                                  <span class="price"> <ins>${{$_price}}</ins> <del>${{$pro_detail->price}}</del> </span>
                                  @else
                                  <span class="price"> <ins>${{$pro_detail->price}}</ins></span>
                                  @endif
                                  <div class="cart-quantity">
                                    <form>
                                      <label>Quantity:</label>
                                      <input type="text" value="{{$pro_detail->product_quantity}}">
                                    </form>
                                    <a class="addcart" href="{{url('product')}}" title="">back</a>


                                    

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- <div class="gap no-gap">
                        <div class="single-post-detail paddlr130">
                          <p>All right. Well, take care yourself. I guess that’s what you’re best, presence old master? A tremor in the Force. The last time felt it was in the presence of my old master. I have traced the Rebel spies to her European languages are members. Maybe only in the aspect that I think that I haven’t seen until now teams much better than Southampton. It (a top-four finish) would be fantastic. But we said before, you live game by game and we have to work hard Lorem ipsum dolor sit amet, adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur elit. Ut elit tellus, nec ullamcorper mattis,leo.consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.consectetur adipiscing elit..</p>
                          <ul>
                            <li>number of columns, choose between 8 image sizes</li>
                            <li>Choose between the simple</li>
                            <li>mosaic layout, set your number of columns</li>
                            <li>Tristique pid mus non nec dis turpis odio</li>
                          </ul>
                        </div>
                      </div> -->


                    </div>
                    <!-- Product Details --> 
                  </div>
                </div>
                @endforeach
              </div>
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
<script src="{{ url('/') }}/template/js/bootstrap.min.js"></script> 
<script src="{{ url('/') }}/template/js/perfect-scrollbar.jquery.min.js"></script> 
<script src="{{ url('/') }}/template/js/chart.min.js"></script> 
<script src="{{ url('/') }}/template/js/echart.min.js"></script> 
<script src="{{ url('/') }}/template/js/jquery.sparkline.min.js"></script> 
<script src="{{ url('/') }}/template/js/custom2.js"></script> 
<script src="{{ url('/') }}/template/js/flatweather.min.js"></script> 
<script src="{{ url('/') }}/template/js/html5lightbox.js"></script> 
<script src="{{ url('/') }}/template/js/touchspin.js"></script><!-- Touch Spin for product plus minus--> 
<script src="{{ url('/') }}/template/js/custom.js"></script>
<script type="text/javascript">
    $("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 3000);
</script><!-- scripts -->

</body>
</html>
