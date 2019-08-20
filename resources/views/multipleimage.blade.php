<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Wooble Html5 Admin panel</title>

    <link rel="icon" type="image/png" href="{{url('/')}}/template/images/fav.png">
    <link rel="stylesheet" href="{{url('/')}}/template/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/')}}/template/css/themify-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/line-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/animate.min.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/jquery.datepicker.min.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/color.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/responsive.css">
    <style >
    #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
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
                                    <nav class="slide-menu">
                                        <span>Navigation <i class="ti-layout"></i></span>
                                        <ul class="parent-menu">
                                            <li class="menu-item-has-children active"> <a title="#"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                                <ul style="display: block;">
                                                    <li><a href="index-2.html" title="">Dashboard 1</a></li>
                                                    <li><a href="index2.html" title="">Dashboard 2</a></li>
                                                    <li><a href="index3.html" title="">Dashboard 3</a></li>
                                                    <li><a class="active" href="index4.html" title="">Dashboard 4</a></li>
                                                    <li><a href="index5.html" title="">Dashboard 5</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-laptop"></i><span>layouts</span></a>
                                                <ul class="mega">
                                                    <li><a href="index-boxed.html" title="">boxed layout</a></li>
                                                    <li><a href="overlap-sidebar.html">overlap sliderbar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-shopping-cart"></i><span>WooCommercee</span></a>
                                                <ul class="mega">
                                                    <li><a href="product.html" title="">product</a></li>
                                                    <li><a href="product-detail.html">product-detail</a></li>
                                                    <li><a href="product-order.html">product-order</a></li>
                                                    <li><a href="product-add.html">add product</a></li>
                                                    <li><a href="product-cart.html">product cart</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title="#"><i class="fa fa-bookmark-o"></i><span>UI Elements</span></a>
                                                <ul>
                                                    <li><a href="accordion-n-tabs.html">accordions & tabs</a></li>
                                                    <li><a href="elements.html">elements</a></li>
                                                    <li><a href="invoices.html">invoices</a></li>
                                                    <li><a href="tabels.html">tabels styles</a></li>
                                                    <li><a href="typography.html">typography</a></li>
                                                    <li><a href="megamenu.html">mega menu styles</a></li>
                                                    <li><a href="socials-btns.html">social buttons</a></li>
                                                    <li><a href="testimonials.html">testimonials styles</a></li>
                                                    <li><a href="calendar.html">event calendar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="inbox.html" title=""><i class="fa fa-inbox"></i><span>inbox</span><ins>5</ins></a></li>
                                            <li><a href="charts.html" title=""><i class="fa fa-bar-chart"></i><span>charts</span></a></li>
                                            <li> <a href="maps.html" title=""><i class="fa fa-globe"></i><span>Google maps</span></a> </li>
                                            <li class="menu-item-has-children"> 
                                                <a title=""><i class="fa fa-flag"></i><span>Icons</span></a>
                                                <ul>
                                                    <li><a href="icons.html">Font Awesome</a></li>
                                                    <li><a href="icons2.html">Themify Icons</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-inbox"></i><span>Pages</span></a>
                                                <ul class="mega">
                                                    <li><a href="profile.html">profile</a></li>
                                                    <li><a href="edit-profile.html">edit profile</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                    <li><a href="forgot-pass.html">forgot password</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-external-link"></i><span>extras</span></a>
                                                <ul class="mega">
                                                    <li><a href="404.html">404 error page</a></li>
                                                    <li><a href="505.html">505 error page</a></li>
                                                    <li><a href="maintenance.html">maintenance</a></li>
                                                    <li><a href="coming-soon.html">coming soon </a></li>
                                                    
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
                                        <div class="logo"><a href="index-2.html" title=""><img src="images/logo.png" alt=""></a></div>
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
                                    
                                    <!-- top info widgets -->
										
                                    <!-- chart full -->

                                
                                    
                                    <div class="row">
                                       
                                        
										<div class="col-lg-10 col-sm-20">
											<div class="widget">
											  <div class="widget-title">
												<h4>Product Images</h4>
												<ul class="widget-controls">
														<li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
														<li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
														<li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
													</ul>
												<em>Your images</em> </div>
												<?php
									foreach($image_data as $value){
                           
                           $image=explode("#@#", $value->image_gallery);
                           }
                                
                         
                           foreach ($image as $key => $value)	{						
								?>
											  <div class="widget-peding">
												<ul class="insta-widget">

													<li><td><form method="post" enctype="multipart/formdata" action="{{ ('/update_image') }}">
                               {{ csrf_field() }}
                               <img src="<?php echo $value; ?>" style="height: 200px;width: 200px;" >
                            
                              
                                <input type="file" name="image" value="<?php echo $value; ?>">
                                <input type="Hidden" name="id" value="<?php echo $id;?>">
                                 <input type="submit" name="submit" name="submit">
                           </form></td></li>

												</ul>
											</div>
											<?php 
							                  }
							               ?>
                            
                          
										  </div>
										  <!-- instagram widget --> 
										</div>
                                        <!-- friends widget -->
                                        
                                        <!-- task widget -->
                                    </div>
                                    <!-- <div id="myModal" class="modal">
								  <span class="close">&times;</span>
								  <img class="modal-content" id="img01">
								  <div id="caption"></div>
								</div> -->
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
    <!-- side panel -->
    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
    <script src="{{url('/')}}/template/js/jquery.js"></script>
    <script src="{{url('/')}}/template/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/template/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{url('/')}}/template/js/owl.carousel.min.js"></script>
    <script src="{{url('/')}}/template/js/chart.min.js"></script>
    <script src="{{url('/')}}/template/js/echart.min.js"></script>
    <script src="{{url('/')}}/template/js/jquery.sparkline.min.js"></script>
    <script src="{{url('/')}}/template/js/chat-init.js"></script>
    <!-- chat messages initilization  -->
    <script src="{{url('/')}}/template/js/custom.js"></script>
    <!-- scripts -->
    <script src="{{url('/')}}/template/js/peity-circle.js"></script>
    <script src="{{url('/')}}/template/js/custom2.js"></script>
</body>

</html>