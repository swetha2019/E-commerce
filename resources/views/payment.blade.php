<?php
  header("Pragma: no-cache");
  header("Cache-Control: no-cache");
  header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Web Admin panel</title>
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
            <div class="logo"><a href="index-2.html" title=""><img src="template/images/logo.png" alt=""></a></div>
          </div>
          <div class="col-lg-9">
            <ul class="notify-area">
              <li>
                <div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>
                <i class="fa fa-navicon nav-icon3"></i>
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
                <div class="admin-avatar"><img src="<?php echo Auth::user()->logo;?>" style="height: 40px;width: 40px" alt=""></div>
              </div>
              <div class="drop setting"> <span class="drop-head">stifen Doe <i>30 days trial</i></span>
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
              <?php if (isset($frst_pack_data)) { ?>
                <form method="post" action="{{('/get_subscription')}}">
                  {{ csrf_field() }} 
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
                      <h4>Trial Pack Subscription</h4>
                    </div>
                    <div class="cart-page">
                      
                       <?php if (isset($frst_pack_data)) {
                       ?>
                      
                      <div class="gap no-gap">
                        <div class="cart-summary">
                          <div class="summery-title">
                            <h3>Payment Summary</h3>
                          </div>
                          <ul class="cart-total">
                            <li>Pack Name:<span><?php echo $frst_pack_data['subscription_name'];?></span></li>
                            <li>Total:<span>$200</span></li>
                            <li>Coupan Discount:<span>-$55</span></li>
                            <li>Delivery Charges:<span>$12</span></li>
                            <li>Tax:<span>$5</span></li>
                            <li>Payable Amount:<span>$460</span></li>
                            <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
            name="ORDER_ID" autocomplete="off"
            value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                            <input type="hidden" name="pack_name" value="Trial pack">
                            <input type="hidden" name="pack_amount" value="100.12">
                            <?php $user=Auth::user()->id;?>
                             <input type="hidden" name="cust_id" value="<?php echo $user;?>">
                                              </ul>
                        <?php } ?>
                          <div class="total-btns"> <button type="submit" class="btn-st drk-gry-clr" href="#" title="">Place order</button> <a class="btn-st drk-gry-clr" href="{{ route('home') }}" title="">Cancel order</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <?php } elseif (isset($scnd_pack_data)) { ?>
               <form method="post" action="{{('/get_subscription')}}">
                {{ csrf_field() }} 
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
                      <h4>Monthly Pack Subscription</h4>
                    </div>
                    <div class="cart-page">
                      
                      
                      <div class="gap no-gap">
                        <div class="cart-summary">
                          <div class="summery-title">
                            <h3>Payment Summary</h3>
                          </div>
                          <ul class="cart-total">
                             <li>Pack Name:<span><?php echo $scnd_pack_data['subscription_name'];?></span></li>
                            <li>Total:<span><?php echo $scnd_pack_data['pack_amount'];?></span></li>
                            <li>Coupan Discount:<span>-$55</span></li>
                            <li>Delivery Charges:<span>$12</span></li>
                            <li>Tax:<span>$5</span></li>
                            <li>Payable Amount:<span>$460</span></li>
                            <?php $user=Auth::user()->id;?>
                            <input type="hidden" name="pack_name" value="Monthly pack">
                              <input type="hidden" name="pack_amount" value="200.12">
                               <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
            name="ORDER_ID" autocomplete="off"
            value="<?php echo  "ORDS" . rand(10000,99999999)?>">
<input type="hidden" name="cust_id" value="<?php echo $user;?>">
                                              </ul>
                          </ul>
                          <div class="total-btns"> <button type="submit" class="btn-st drk-gry-clr" >Place order</button> <a class="btn-st drk-gry-clr" href="{{ route('home') }}" title="">Cancel order</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
              <?php 
              } elseif (isset($thrd_pack_data)) { ?>
               
             <form method="post" action="{{('/get_subscription')}}">
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
                      <h4>Yearly Pack Subscription</h4>
                    </div>
                    <div class="cart-page">
                      
                      
                      <div class="gap no-gap">
                        <div class="cart-summary">
                          <div class="summery-title">
                            <h3>Payment Summary</h3>
                          </div>
                          <ul class="cart-total">
                            <li>Pack Name:<span><?php echo $thrd_pack_data['subscription_name'];?></span></li>
                            <li>Total:<span><?php echo $thrd_pack_data['pack_amount'];?></span></li>
                            <li>Coupan Discount:<span>-$55</span></li>
                            <li>Delivery Charges:<span>$12</span></li>
                            <li>Tax:<span>$5</span></li>
                            <li>Payable Amount:<span>$460</span></li>
                            <?php $user=Auth::user()->id;?>
                            <input type="hidden" name="pack_name" value="Yearly pack">
                            <input type="hidden" name="pack_amount" value="300.12">
                             <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
            name="ORDER_ID" autocomplete="off"
            value="<?php echo  "ORDS" . rand(10000,99999999)?>">
<input type="hidden" name="cust_id" value="<?php echo $user;?>">
                                              </ul>
                          </ul>
                          <div class="total-btns"> <button type="submit" class="btn-st drk-gry-clr" >Place order</button> <a class="btn-st drk-gry-clr" href="{{ route('home') }}" title="">Cancel order</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
              <?php
               } ?>
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
<script src="template/js/jquery.js"></script> 
<script src="template/js/bootstrap.min.js"></script> 
<script src="template/js/perfect-scrollbar.jquery.min.js"></script> 
<script src="template/js/chart.min.js"></script> 
<script src="template/js/echart.min.js"></script> 
<script src="template/js/jquery.sparkline.min.js"></script> 
<script src="template/js/custom2.js"></script> 
<script src="template/js/flatweather.min.js"></script> 
<script src="template/js/html5lightbox.js"></script> 
<script src="template/js/custom.js"></script><!-- scripts -->

</body>
</html>
