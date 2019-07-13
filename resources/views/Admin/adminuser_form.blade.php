<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Web Admin panel</title>
<link rel="icon" type="image/png" href="{{ url('/') }}/template/images/fav.png">
<link rel="stylesheet" href="{{ url('/') }}/template/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/themify-icons.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/line-icons.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/animate.min.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/nice-select.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/perfect-scrollbar.min.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/jquery.datepicker.min.css">
<!-- calander -->
<link rel="stylesheet" href="{{ url('/') }}/template/css/flatweather.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/style.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/color.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/responsive.css">
<!-- <style type="text/css">
	.drop{
		overflow: scroll;
	}
</style> -->
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
					<div class="logo"><a title="" href="{{ url('/') }}/template/index-2.html"><img alt="" src="{{ url('/') }}/template/images/logo2.png"></a></div>
					<nav class="slide-menu">
                                        <span>Navigation <i class="ti-layout"></i></span>
                                         <ul class="parent-menu">
                                            <li class="menu-item-has-children"> <a title="#"><i class="fa fa-dashboard"></i><span>Categories</span></a>
                                                <ul>
                                                    <li><a href="categories_form" title="">Add categories</a></li>
                                                    <li><a href="view_categories" title="">View categories</a></li>
                                                    <li><a href="view_subcategory" title="">View sub category</a></li>
                                                    <li><a href="{{ url('/') }}/template/index4.html" title="">Dashboard 4</a></li>
                                                    <li><a href="{{ url('/') }}/template/index5.html" title="">Dashboard 5</a></li>
                                                </ul>
                                            </li>
                                           <!--  <li class="menu-item-has-children"> <a title=""><i class="fa fa-shopping-cart"></i><span>Vendores Details</span></a>
                                                <ul class="mega">
                                                    <li><a href="#newvendor" title="">New Vendores</a></li>
                                                    <li><a href="#vendor"> Recently used Vendores</a></li>
                                                </ul>
                                            </li>-->
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
                                                    <li><a href="adminuser_form">Add new user</a></li>
                                                    <li><a href="{{ url('/') }}/template/product-order.html">view user detail</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title="#"><i class="fa fa-bookmark-o"></i><span>Previous Orders</span></a>
                                                <ul>
                                                    <li><a href="{{ url('/') }}/template/accordion-n-tabs.html">accordions & tabs</a></li>
                                                    <li><a href="{{ url('/') }}/template/elements.html">elements</a></li>
                                                    <li><a href="{{ url('/') }}/template/invoices.html">invoices</a></li>
                                                    <li><a href="{{ url('/') }}/template/tabels.html">tabels styles</a></li>
                                                    <li><a href="typography.html">typography</a></li>
                                                    <li><a href="{{ url('/') }}/template/megamenu.html">mega menu styles</a></li>
                                                    <li><a href="{{ url('/') }}/template/socials-btns.html">social buttons</a></li>
                                                    <li><a href="{{ url('/') }}/template/testimonials.html">testimonials styles</a></li>
													<li><a href="{{ url('/') }}/template/calendar.html">event calendar</a></li>
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
						<div class="logo"><a href="{{ url('/') }}/template/index-2.html" title=""><img src="{{ url('/') }}/template/images/logo.png" alt=""></a></div>
					</div>
					<div class="col-lg-9">
						<ul class="notify-area">
							<li>
								<div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>
								<i class="fa fa-navicon nav-icon3"></i>
							</li>
							<!-- <li class="notifications"><a href="#" title=""><i class="fa fa-bell-o"></i></a><span class="red-bg">02</span>
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
							</li> -->
							<!-- <li class="messages"><a href="#" title=""><i class="fa fa-envelope-o"></i></a><span class="blue-bg">10</span>
								<div class="drop messages"> <span class="drop-head">3 New Message <i class="fa fa-pencil-square-o"></i></span>
									<ul class="drop-meta">
										<li> <i class="notifi-icon"><img src="images/resources/user-mesg.jpg" alt=""></i>
											<div class="notifi-meta"> <span>02:34PM</span>
												<h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
											</div>
										</li>
										<li> <i class="notifi-icon"><img src="{{ url('/') }}/template/images/resources/user-mesg2.jpg" alt=""></i>
											<div class="notifi-meta"> <span>02:34PM</span>
												<h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
											</div>
										</li>
										<li> <i class="notifi-icon"><img src="{{ url('/') }}/template/images/resources/user-mesg3.jpg" alt=""></i>
											<div class="notifi-meta"> <span>02:34PM</span>
												<h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
											</div>
										</li>
										<li> <i class="notifi-icon"><img src="{{ url('/') }}/template/images/resources/user-mesg.jpg" alt=""></i>
											<div class="notifi-meta"> <span>02:34PM</span>
												<h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
											</div>
										</li>
										<li> <i class="notifi-icon"><img src="{{ url('/') }}/template/images/resources/user-mesg2.jpg" alt=""></i>
											<div class="notifi-meta"> <span>02:34PM</span>
												<h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
											</div>
										</li>
									</ul>
									<span class="drop-bottom"><a href="#" title="">View More messages</a></span> </div>
							</li> -->
							<<!-- li class="mega"><a href="#" title="">mega</a>
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
													<li><a href="#" title="">Themes and {{ url('/') }}/templatelates</a></li>
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
													<li><a href="#" title="">Themes and {{ url('/') }}/templatelates</a></li>
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
													<li><a href="#" title="">Themes and {{ url('/') }}/templatelates</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li> -->
						</ul>
						<div class="t-search">
							<form method="post">
								<input type="text" placeholder="Enter Your Keyword">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<ul class="seting-area">
							<!-- <li class="langages">
								<a href="#" title="">Eng</a>
								<ul class="drop language">
									<li class="lang-selected"><a href="#"><i class="fa fa-check"></i> Eng</a></li>
									<li><a href="#">Rus</a></li>
									<li><a href="#">Jap</a></li>
									<li><a href="#">Arb</a></li>
								</ul> -->
							</li>
							<!-- <li class="setting-panel"><a href="#" title=""><i class="icon-equalizer"></i></a></li> -->
						</ul>
					</div>
					<div class="col-lg-1">
						<div class="user-head">
							<div class="admin">
								<div class="admin-avatar"><img src="{{ url('/') }}/template/images/resources/admin.png" alt=""> <i class="online"></i> </div>
							</div>
							<div class="drop setting"> <span class="drop-head">stifen Doe <i>30 days trial</i></span>
								<ul class="drop-meta">
									<!-- <li> <a href="#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li> -->
									<li> <a href="#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
									<li> <a href="#" title=""><i class="fa fa-adjust"></i>task</a> </li>
									<li> <a href="#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
									<li> <a href="#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
								</ul>
								<span class="drop-bottom"><a href="{{ url('admin_logout')}}" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
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
                                                    <li> <i class="notifi-icon"><img src="{{ url('/') }}/template/images/resources/user-mesg2.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="{{ url('/') }}/template/images/resources/user-mesg3.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="{{ url('/') }}/template/images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="{{ url('/') }}/template/images/resources/user-mesg2.jpg" alt=""></i>
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
											
											<li> <a href="#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
											<li> <a href="#" title=""><i class="fa fa-adjust"></i>task</a> </li>
											<li> <a href="#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
											<li> <a href="#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
										</ul>
										<span class="drop-bottom"><a href="admin_logout" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
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
                    <li><a href="{{url('adminhome')}}" title="">Home</a></li>
                    <li>Dashbord</li>
                  </ul>
                </div>
                <div class="inner-bg">
                  <div class="element-title">
                    <h4>Edit Vendor profile</h4>
                    <span>Edit your profile</span> 
                    
				  </div>
				   @if(session()->has('message'))
    <div class="alert alert-success" style="background-color: lightgreen; color: white">
        {{ session()->get('message') }}
    </div>
@endif
				 


				  <form enctype="multipart/form-data" method="post" action="add_user">
                     {{ csrf_field() }} 
                     
                <div class="pnl-bdy billing-sec">
                    	
                    	 <div class="col-md-6 col-sm-6 field">
                        <label>Name<span>*</span> </label>
                        <input value="" name="admin_user" type="text" placeholder=" Name">
                         @if ($errors->has('admin_user'))
    					<div class="error">{{ $errors->first('admin_user') }}</div>
						@endif

                      
                      </div>


<div class="col-md-6 col-sm-6 field">
                        <label>New Phone Number <span>*</span> </label>
                        <input placeholder="Enter Your New Phone Number" value="" name="admin_phone" type="text">
                        @if ($errors->has('admin_phone'))
    					<div class="error">{{ $errors->first('admin_phone') }}</div>
						@endif
                      </div>

<div class="col-md-6 col-sm-6 field">
                        <label>New Email id <span>*</span> </label>
                        <input placeholder="Enter Your New Phone Number" value="" name="admin_email" type="text">
                        @if ($errors->has('admin_email'))
    					<div class="error">{{ $errors->first('admin_email') }}</div>
						@endif
                      </div>

<div class="col-md-6 col-sm-6 field">
                        <label>Sample Password<span>*</span> </label>
                        <input placeholder="password" value="" name="admin_password" type="password">
                        @if ($errors->has('admin_password'))
    					<div class="error">{{ $errors->first('admin_password') }}</div>
						@endif
                      </div>



                      	

 
                       <button type="submit">Update Now</button>
                     
                  </form>
                  
                <!--change password -->
                <div align="centre" id="cnge_pwd">
                    
  				                
                 </div>
               
                    
                      
    
                  </div>
                    </div>
                  
                    
                </div>
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
  
</div>
<script src="{{ url('/') }}/template/js/jquery.js"></script> 
<script src="{{ url('/') }}/template/js/bootstrap.min.js"></script> 
<script src="{{ url('/') }}/template/js/perfect-scrollbar.jquery.min.js"></script> 
<script src="{{ url('/') }}/template/js/chart.min.js"></script> 
<script src="{{ url('/') }}/template/js/echart.min.js"></script> 
<script src="{{ url('/') }}/template/js/nice-select.js"></script> 
<script src="{{ url('/') }}/template/js/jquery.sparkline.min.js"></script> 
<script src="{{ url('/') }}/template/js/custom2.js"></script> 
<script src="{{ url('/') }}/template/js/flatweather.min.js"></script> 
<script src="{{ url('/') }}/template/js/html5lightbox.js"></script> 
<script src="{{ url('/') }}/template/js/custom.js"></script><!-- scripts -->

</body>
</html>
