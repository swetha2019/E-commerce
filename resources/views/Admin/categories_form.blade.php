<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Web Admin panel</title>
<link rel="icon" type="{{ url('/') }}/template/image/png" href="images/fav.png">
<link rel="stylesheet" href="{{ url('/') }}/template/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ url('/') }}/template/css/themify-icons.css">
    <link rel="stylesheet" href="{{ url('/') }}/template/css/line-icons.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/animate.min.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/perfect-scrollbar.min.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/jquery.datepicker.min.css">
<!-- calander -->
<link rel="stylesheet" href="{{ url('/') }}/template/css/flatweather.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/nice-select.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/style.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/color.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/responsive.css">
<style type="text/css">

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
                                    <div class="logo"><a title="" href="index-2.html"><img alt="" src="{{ url('/') }}/template/images/logo2.png"></a></div>
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
                                        <div class="logo"><a href="index-2.html" title=""><img src="{{ url('/') }}/template/images/logo.png" alt=""></a></div>
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
                                                <span class="drop-bottom"><a href="{{url('admin_logout')}}" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
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
                   <li><a href="{{url('adminhome')}}" title=""><i class="fa fa-home"></i></a></li>
                    <li>Dashbord</li>
                  </ul>
                </div>

            </div>
<div class="gap no-gap">
    <div class="inner-bg">





       <div class="tab-style">
                      <ul class="tab nav nav-tabs tab-btns">
                        <li class="nav-item"><a class="active" href="#link1" data-toggle="tab">Mani Category</a></li>
                        <li class="nav-item"><a href="#link2" data-toggle="tab">Sub Category</a></li>
                        <li class="nav-item"><a href="#link3" data-toggle="tab">Child Category</a></li>
                        
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active fade show" id="link1">
                          <div class="tab-meta">
                            

                                                <div class="little-heading">
                                   <div class="element-title">
                                            <h4 align="center">CATEGORIES</h4>
                                             @foreach($detail as $admin)
                                    @if($admin->role!="Editor")
                                            <a href="{{url('add_category')}}" title="" class="btn-st drk-blu-clr">Add category</a>
                                            @endif
                                    @endforeach
                                        </div>
                                        <div class="widget">
                                          <table class="prj-tbl striped table-responsive">
                                            <thead class="color">
                                              <tr>
                                                <th><i class="all-slct"></i></th>
                                                <th><em>Categories Id</em></th>
                                                <th><em>Categories Name</em></th>
                                                <th colspan="2"><em>Action</em></th>
                                                
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($category)>0)
                                                  
                                               @foreach($category as $categry)
                                              <tr>
                                                <td><i class="sngl-slct"></i></td>
                                                <td><span>Catgory_{{$categry->category_id}}</span></td>
                                                <td>{{$categry->category_name}}</td>
                                                <td>
                                                 <ul>
                                                     <li><a href="{{url('Catgory_delete',$categry->category_id)}}" ><i class="icon-trash"></i></a></li>
                                                    <li><a href="{{url('catgory_edit',$categry->category_id)}}" class="edit-btn"><i class="fa fa-forward"></i></a></li>
                                                     
                                                     
                                                     
                                                </ul>
                                                </td>
                                                </tr>
                                              @endforeach
                                              @endif
                                              
                                            </tbody>
                                          </table>
                                        </div>
                                    </div>
                      </div>
                        </div>






                        <div class="tab-pane fade" id="link2">
                          <div class="tab-meta">
                           <div class="inner-bg">
                                 

                                         @if(session()->has('message'))
                                      <div class="alert alert-success" style="background-color: lightgreen; color: white">
                                          {{ session()->get('message') }}
                                      </div>
                                  @endif
                                       @if ($errors->any())
                                         <div class="alert alert-danger" style=" color: green; font-weight:bold;">
                                            <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                         <div class="little-heading">
                           <div class="element-title">
                                    <h4 align="center">SUB CATEGORIES</h4>
                                    @foreach($detail as $admin)
                                    @if($admin->role!="Editor")
                                    <a href="add_subcategory" title="" class="btn-st drk-blu-clr">Add category</a>
                                    @endif
                                    @endforeach
                                     </div>
                                </div>
                                <div class="widget">
                                  <table class="prj-tbl striped table-responsive">
                                    <thead class="color">
                                      <tr>
                                        <th><i class="all-slct"></i></th>
                                        <th><em>Sub Category Id</em></th>
                                        <th><em>Category Name</em></th>
                                         <th><em>Sub category Name</em></th>
                                        <th colspan="2"><em>Action</em></th>
                                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($sub_category)>0)
                                          
                                       @foreach($sub_category as $sub_categori)
                                      <tr>
                                        <td><i class="sngl-slct"></i></td>
                                        <td><span>Catgory_{{$sub_categori->category_id}}</span></td>
                                        <td>{{$sub_categori->category_name}}</td>
                                        <td>{{$sub_categori->subcategory_name}}</td>

                                        <td>
                                         <ul>
                                             <li><a href="{{url('sub_category_delete',$sub_categori->subcategory_id)}}" ><i class="icon-trash"></i></a></li>
                                             <li><a href="{{url('sub_category_edit',$sub_categori->subcategory_id)}}" class="edit-btn"><i class="fa fa-forward"></i></a></li>
                                             
                                             
                                        </ul>
                                        </td>
                                        </tr>
                                      @endforeach
                                      @endif
                                      
                                    </tbody>
                                  </table>
                                </div>                                  
                                </div>
                    </div>
                   </div>






                        <div class="tab-pane fade" id="link3">
                          <div class="tab-meta">
                             <div class="">
                                <div class="accordians-style">
                                  <div class="">
                                    <div class="col-md-12">
                                      <div class="toggle toggle-style5" id="toggle5">
                                        <h4 class="wdg-tl" align="center">Child Categories</h4>
                                        <div class="toggle-item brd-5 activate">
                                        <h3 class="active"><i class="fa fa-life-bouy"></i>Child one</h3>

                                          <div class="content">
                                            <div class="simple-text">
                                                <div class="little-heading">
                                                   @foreach($detail as $admin)
                                    @if($admin->role!="Editor")
                                    
                                     <a href="add_Childcategory" title="" class="btn-st bordr rd-30">Add category</a>
                                    @endif
                                    @endforeach
                                                </div>
                                              <div class="widget">

                                                  <table class="prj-tbl striped table-responsive">
                                                    
                                                    <thead class="color">
                                                      <tr>
                                                        <th><i class="all-slct"></i></th>
                                                        <th><em>Child_ID</em></th>
                                                        <th><em>Category </em></th>
                                                        <th><em>Sub Category </em></th>
                                                        <th><em>Child Category</em></th>
                                                        <th colspan="2"><em>Action</em></th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if(count($child_category)>0)
                                                        @foreach($child_category as $child_category)
                                                      <tr>
                                                        <td><i class="sngl-slct"></i></td>
                                                        <td><span>{{$child_category->child_category_id}}</span></td>
                                                        <td><i>{{$child_category->category_name}}</i></td>
                                                        <td><i>{{$child_category->subcategory_name}}</i></td>
                                                        <td><i>{{$child_category->childcategory_name}}</i></td>
                                                        <td>
                                                         <ul>
                                                             <li><a href="child_category/{{$child_category->child_category_id}}" ><i class="icon-trash"></i></a></li>
                                                            <!-- <li><a href="Catgory_subcategory/{{$sub_categori->category_id}}" class="edit-btn"><i class="fa fa-forward"></i></a></li>-->                                                        
                                                        </ul>
                                                        </td>
                                                      </tr>
                                                      @endforeach
                                                      @endif
                                                      
                                                    </tbody>
                                                  </table>
                                                    </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="toggle-item brd-5">
                                          <h3 class=""><i class="fa fa-joomla"></i>child Two</h3>
                                          <div class="content">
                                            <div class="simple-text">
                                             <div class="little-heading">
                                                 @foreach($detail as $admin)
                                    @if($admin->role!="Editor")
                                                <a href="add_Childcategory2" title="" class="btn-st bordr rd-30">Add Child Two</a>
                                                @endif
                                                @endforeach
                                                </div>
                                                <div class="widget">
                                                  <table class="prj-tbl striped table-responsive">
                                                    <thead class="color">
                                                      <tr>
                                                        <th><i class="all-slct"></i></th>
                                                        <th><em>Child_ID</em></th>
                                                        <th><em>Category</em></th>
                                                        <th><em>Sub Category</em></th>
                                                        <th><em>Child Category</em></th>
                                                        <th><em>Second Child Category</em></th>
                                                        <th colspan="2"><em>Action</em></th>
                                                        
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      
                                                      @foreach($child_category2 as $child_category2)
                                                      <tr>
                                                        <td><i class="sngl-slct"></i></td>
                                                        <td><span>{{$child_category2->child2_category_id}}</span></td>
                                                        <td><i>{{$child_category2->category_name}}</i></td>
                                                        <td><i>{{$child_category2->subcategory_name}}</i></td>
                                                        <td><span>{{$child_category2->childcategory_name}}</span></td>
                                                        <td><i>{{$child_category2->childcategory2_name}}</i></td>
                                                        <td>
                                                             <ul>
                                                                 <li><a href="child_category2/{{$child_category2->child2_category_id}}" ><i class="icon-trash"></i></a></li>
                                                                <!-- <li><a href="Catgory_subcategory/{{$sub_categori->category_id}}" class="edit-btn"><i class="fa fa-forward"></i></a></li>-->
                                                                 
                                                                 
                                                            </ul>
                                                            </td>
                                                      </tr>
                                                      @endforeach
                                                    </tbody>
                                                  </table>
                                                </div>



                                            </div>
                                          </div>
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                  </div>
                          </div>
                        </div>










                        <div class="tab-pane fade" id="link4">
                          <div class="tab-meta">
                            <p> High High lorm ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat
                              ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. High lorm ipsum dolor sit amet
                              adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                              tation ullamcorper. </p>
                          </div>
                        </div>
                      </div>
                    </div>


               

                <!--<div class="gap no-gap">
                    <div class="inner-bg">
                      <div class="element-title">
                        <h4>Sub categories</h4>
                        <span>Please fill the form bellow.</span> </div>
                      <div class="add-prod-from">
                      	<form action="add_subcategories" method="post">
                      		{{csrf_field()}}
						  <div class="row">
							
							
							  <label>category</label>
							  <select  name="category_id" >
							  	<option value="">---choose one----</option>
                                    <option value="">---choose one----</option>
                                        <option value="">---choose one----</option>
                                            <option value="">---choose one----</option>
                                                <option value="">---choose one----</option>
                                                    <option value="">---choose one----</option>
                                                </select>
							 <! @if(count($category))
							  	{
							  	@foreach($category as $categry)
								<option value="{{$categry->category_id}}">{{$categry->category_name}}</option>
								@endforeach
							    }
							    @endif
							  </select>->
							</div>
                           <div class="col-md-6">
                            <div class="row">
							  <label>Sub Categories</label>
							  <input type="text" placeholder="sub categories" name="subcategory_name">
                            </div>
							</div>		
							 <div class="row">
							<div class="col-md-12">
							  <div class="buttonz">
                               
								<button type="submit">save</button>
								<button type="submit">cancel</button>

							  </div>
							</div>
                      	</div>
                      </form>
					  </div>	  
                    </div>
                </div>-->
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
<script src="{{ url('/') }}/template/js/nice-select.js"></script> 
<script src="{{ url('/') }}/template/js/custom2.js"></script> 
<script src="{{ url('/') }}/template/js/flatweather.min.js"></script> 
<script src="{{ url('/') }}/template/js/html5lightbox.js"></script> 
<script src="{{ url('/') }}/template/js/custom.js"></script><!-- scripts -->
<script type="text/javascript">
    $('#category').on('change',function()
    {
  
     var category_id = $(this).val();    
   if(category_id)
       {    
       // alert(category_id);

        $.ajax(
        {
           type:"GET",
           url:"{{url('subcategory_select')}}?category_id="+category_id,
           success:function(res)
           {       
                         
                $('#sub').empty();
               
                 var toAppend = '<select name="subcategory_id" >';
                    $.each(res, function(key, value)
                    {
                          toAppend += '<option value="'+value.subcategory_id+'">'+value.subcategory_name+'</option>';
                    });
                    $('#sub').html(toAppend);
           }
        });
    } 
   });



$('#category1').on('change',function()
    {
   
     var category_id = $(this).val();

   if(category_id)
       {    
       // alert(category_id);

        $.ajax(
        {
           type:"GET",
           url:"{{url('subcategory_select')}}?category_id="+category_id,
           success:function(res)
           {       
                         
                $('#sub1').empty();
               
                 var toAppend = '<select name="subcategory_id" ><option value"">select</option>';
                    $.each(res, function(key, value)
                    {
                          toAppend += '<option value="'+value.subcategory_id+'">'+value.subcategory_name+'</option>';
                    });
                    $('#sub1').html(toAppend);
           }
        });
    } 
   });
$('#sub1').on('change',function()
    {
  
     var subcategory_id1 = $('select[name="subcategory_id"]').val();   
     //alert(subcategory_id1);
     if(subcategory_id1)
         {    
           alert(subcategory_id1);
           $.ajax(
         {
           type:"GET",
           url:"{{url('child_select')}}?subcategory_id="+subcategory_id1,
           success:function(resl)
           {       
                         
                $('#child').empty();
               
                 var toAppend = '<select name="subcategory_id" >';
                    $.each(resl, function(key, value)
                    {
                          toAppend += '<option value="'+value.child_category_id+'">'+value.childcategory_name+'</option>';
                    });
                    $('#child').html(toAppend);
           }
        });
    } 
   });

</script>
</body>

</html>
