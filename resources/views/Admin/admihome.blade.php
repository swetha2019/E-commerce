<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Wooble Html5 Admin panel</title>
    <link rel="icon" type="template/image/png" href="images/fav.png">

    <link rel="stylesheet" href="template/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/css/themify-icons.css">
    <link rel="stylesheet" href="template/css/line-icons.css">
    <link rel="stylesheet" href="template/css/bootstrap.min.css">
    <link rel="stylesheet" href="template/css/animate.min.css">
    <link rel="stylesheet" href="template/css/owl.carousel.css">
    <link rel="stylesheet" href="template/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="template/css/jquery.datepicker.min.css">
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
							<div class="logo"><a href="template/index-2.html" title=""><img src="template/images/logo.png" alt=""></a></div>
						</div>
						<div class="col-lg-9">
							<ul class="notify-area">
								<li>
									<div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>
									<i class="fa fa-navicon nav-icon3"></i>
								</li>
							
								<li class="notifications"><a href="#" title=""><i class="fa fa-bell-o"></i></a><span class="red-bg">{{count($count)}}</span>
					
									<div class="drop notify"> <span class="drop-head">Notifications</span>

										<ul class="drop-meta">
											@foreach($count as $not)
											<?php 
								                  $temp = explode(' ',$not->created_at);
								                ?>
											<li> <i class="notifi-icon blue">{{$not->name}}</i>
												<div class="notifi-meta">
													<h4><a href="{{url('notification',$not->id)}}" title=""> {{$not->name}} Send a request for join in Ecommerce</a></h4>
													<span>Name :{{$temp[0]}}</span><br><span>Date :{{$temp[0]}}</span><br> <span>time :{{$temp[1]}}</span> </div>
											</li>
											@endforeach
											<!--<li> <i class="notifi-icon red">C</i>
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
										</ul>-->
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
							<!-- <ul class="seting-area">
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
							</ul> -->
						</div>
						<div class="col-lg-1">
							<div class="user-head">
								<div class="admin">
								 @foreach($detail as $admin)	<div class="admin-avatar"><img src="{{url('site_logo',$admin->logo)}}" alt="" height="40px" width="40px"> <!-- <i class="online"></i> --> </div>@endforeach
								</div>
								<div class="drop setting"> <span class="drop-head"><i>30 days trial</i></span>
									<ul class="drop-meta">
   @foreach($detail as $admin)<li> <a href="{{url('admin_edit',$admin->id)}}" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>@endforeach
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
											@foreach($detail as $admin)
											<li> <a href="{{url('admin_edit',$admin->id)}}" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>@endforeach
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
                    <h4>Admin</h4>
                    <span>Welcome To web Admin Panel!</span>
                  </div>
                  <ul class="bread-crumb">
                    <li><a href="#" title="">Home</a></li>
                    <li>Admin</li>
                  </ul>
                </div>
                 
                <div class="profile">
                  <div class="row merged">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="profile-bg"> <img src="template/images/resources/profile-bg.jpg" alt="">
                        <div class="admin-meta"> <img src="template/images/resources/profile-avatar.jpg" alt="">
                          <h5>
</h5>
                          <span>Admin Home</span> </div>
                      </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <div class="row">
                        <!-- <div class="col-md-6 col-sm-6">
                          <ul class="follow-btns">
                            <li class="active"><a class="follow" href="#" title="">follow</a></li>
                            <li><a class="message" href="#" title="">message</a></li>
                          </ul>
                        </div> -->
                        <!-- <div class="col-md-6 col-sm-6">
                          <ul class="profile-socials">
                            <li><a class="facebook" href="#" title=""><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#" title=""><i class="fa fa-twitter"></i></a></li>
                            <li><a class="vk" href="#" title=""><i class="fa fa-vk"></i></a></li>
                            <li><a class="tumblr" href="#" title=""><i class="fa fa-tumblr"></i></a></li>
                          </ul>
                        </div> -->
                        <div class="col-md-12">
                          <div class="sub-area">


				       @if(session()->has('message'))
				    <div class="alert alert-success" style="background-color: lightgreen; color: white">
				        {{ session()->get('message') }}
				    </div>
				@endif
                            <ul>
                              <li><a href="#" title=""><i class="fa fa-briefcase"></i>Over View </a></li>
       @foreach($detail as $admin) <li><a href="{{url('admin_edit',$admin->id)}}" title=""><i class="fa fa-gear"></i>Account Settings </a></li>@endforeach
                              <li><a href="#" title=""><i class="fa fa-adjust"></i>Customers </a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="about">
						  <div class="row">
							<div class="col-md-6">
							  <div class="about-info">
								<h4>This admin page </h4>
							  </div>
							</div>
							<div class="col-md-6">
							  <ul class="vlaue-show">
								<li> <span>37</span> <a href="#" title="">Products</a> </li>
								<li> <span>59</span> <a href="#" title="">New Orders</a> </li>
								<li> <span>60</span> <a href="#" title="">Customers</a> </li>
							  </ul>
							</div>
						</div> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="info-section">
                                        <div class="panel-widget style2">
                                            <div class="b-meta">
                                                <img src="images/icon-5.png" alt="">
                                                <div class="info-meta">
                                                    <span>Sales Earnings</span>
                                                    <h4><ins>$</ins>0.00</h4>
                                                    <i>10%</i>
                                                </div>
                                                <div class="spark">
                                                    <div class="sparkline_line"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-widget style2">
                                            <div class="b-meta"> <img src="{{ url('/') }}/template/images/icon-6.png" alt="">
                                                <div class="info-meta">
                                                    <span>total sales</span>
                                                    <h4>4512</h4>
                                                    <i>20%</i>
                                                </div>
                                                <div class="spark">
                                                    <div class="sparkline_three"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-widget style2">
                                            <div class="b-meta"> <img src="{{ url('/') }}/template/images/icon-8.png" alt="">
                                                <div class="info-meta">
                                                    <span>Today's Visits</span>
                                                    <h4>158</h4>
                                                    <i>30%</i>
                                                </div>
                                                <div class="spark">
                                                    <div class="sparkline22"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
               <div class="widget">
                                        <div class="widget-title no-margin">
                                            <h4>Venoder Details</h4>
                                            <span>New Requests from vendores</span>
                                            <ul class="widget-controls">
                                            	<div class="t-search" >
												<form method="post" action="{{url('/search')}}">
													{{csrf_field()}}
													<input type="text" placeholder="Enter Your Keyword" name="search" id="search" onkeyup="search_data(this.value, 'result');" style="background-color:#ba91db;">
													<button type="submit"><i class="fa fa-search"></i></button>
												</form>
							                   </div>
												<li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
												<li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
												<li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
											</ul>
                                        </div>
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
                                                    
                                                
                                                     <td><span>@if($fetch->approval_status==0)<a href="{{url('approved',$fetch->id)}}" class="btn btn-success"><span class="fa fa-user"></span> Approved</a> @endif </span></td>
                                                    <td>



                                                        <ul>
                                                           <li><a href="url(Vendor_Delete',$fetch->id)}}" ><i class="icon-trash"></i></a></li>
                                                            <li><a href="url('vendor_edit',$fetch->id)}}" class="edit-btn"><i class="fa fa-navicon"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </div>
                                                @endforeach
                                              
                                            </tbody>
                                        </table>
                                    </div>



                                      <div class="widget">
                                        <div class="widget-title no-margin">
                                            <h4>Venoder Details</h4>
                                            <span>Recently used vendores</span>
                                            <ul class="widget-controls">
												<li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
												<li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
												<li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
											</ul>
                                        </div>
                                        <table class="prj-tbl bordered table-responsive" id=vendor>
                                            <thead>
                                                <tr>
                                                    <th><em>Venoder Id</em></th>
                                                    <th><em>Vendor Name</em></th>
                                                    <th><em>Phone Number</em></th>
                                                    <th><em>Email</em></th>
													<th><em>Status</em></th>
													
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($array2 as $fetch1)
                                                <tr>
                                                    <td><i>VEN10{{$fetch1->id}}</i></td>
                                                    <td><span>{{$fetch1->name}}</span></td>
                                                    <td><i>{{$fetch1->phone}}</i></td>
                                                    <td>
                                                        <div class="prg-br">
                                                            {{$fetch1->email}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                  <td><span>@if($fetch1->approval_status==1)  <div style="color: green;">  Active </div> @endif</span></td>
                                                   
                                                
                                                     
                                                    <td>
                                                        <ul>
                                                            <li><a href="Vendor_Delete/{{$fetch1->id}}" ><i class="icon-trash"></i></a></li>
                                                            <li><a href="/vendor_edit/{{$fetch1->id}}" class="edit-btn"><i class="fa fa-navicon"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endforeach
                                               
                                            </tbody>
                                        </table>
                                    </div>
                    <!-- user list --> 
                  
                    <!-- user list --> 
               
                    <!-- user list --> 
                  </div>
                  <!-- customer support widget -->
                  <
                    <!-- user list --> 
                  </div>
                  <!-- quick action widget --> 
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
<script src="template/js/jquery.js"></script> 
<script src="template/js/bootstrap.min.js"></script> 
<script src="template/js/perfect-scrollbar.jquery.min.js"></script> 
<script src="template/js/chart.min.js"></script> 
<script src="template/js/echart.min.js"></script> 
<script src="template/js/jquery.sparkline.min.js"></script> 
<script src="template/js/custom2.js"></script> 
<script src="template/js/custom.js"></script>
 <script type="text/javascript">
    $(document).ready(function() {
         $('#search').on('keyup',function() {
         	 var $data=$(this).val();
         	   $.ajax({
                 url: "/search",
                 method: "get",
                data: {'search_value': $data  },
             
		    });

         });
    });
</script>



<!-- scripts -->
</body>
</html>
