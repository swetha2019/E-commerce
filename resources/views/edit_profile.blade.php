<!DOCTYPE html>
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
<link rel="stylesheet" href="template/css/nice-select.css">
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
                                                    <li><a href="temp/product.html" title="">product</a></li>
                                                    <li><a href="temp/product-detail.html">product-detail</a></li>
                                                    <li><a href="temp/product-order.html">product-order</a></li>
                                                    <li><a href="temp/product-add.html">add product</a></li>
                                                    <li><a href="temp/product-cart.html">product cart</a></li>
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
						<div class="logo"><a href="temp/index-2.html" title=""><img src="temp/images/logo.png" alt=""></a></div>
					</div>
					<div class="col-lg-9">
						<ul class="notify-area">
							<li>
								<div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>
								<i class="fa fa-navicon nav-icon3"></i>
							</li>
							
						</ul>
						<div class="t-search">
							<form method="post">
								<input type="text" placeholder="Enter Your Keyword">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<ul class="seting-area">
							
							</li>
							<!-- <li class="setting-panel"><a href="#" title=""><i class="icon-equalizer"></i></a></li> -->
						</ul>
					</div>
					<div class="col-lg-1">
						<div class="user-head">
							<div class="admin">
								<div class="admin-avatar"><img src="temp/images/resources/admin.png" alt=""> <i class="online"></i> </div>
							</div>
							<div class="drop setting"> <span class="drop-head">stifen Doe <i>30 days trial</i></span>
								<ul class="drop-meta">
									<!-- <li> <a href="#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li> -->
									<li> <a href="#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
									<li> <a href="#" title=""><i class="fa fa-adjust"></i>task</a> </li>
									<li> <a href="#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
									<li> <a href="#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
								</ul>
								<span class="drop-bottom"><a href="{{ url('logout')}}" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
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
                                                    <li> <i class="notifi-icon"><img src="temp/images/resources/user-mesg2.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="temp/images/resources/user-mesg3.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="temp/images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="temp/images/resources/user-mesg2.jpg" alt=""></i>
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
										<div class="admin-avatar"> <img src="temp/images/resources/admin.png" alt=""> <i class="online"></i> </div>
									</div>
									<div class="drop setting"> <span class="drop-head">stifen Doe <i>30 days trial</i></span>
										<ul class="drop-meta">
											<li> <a href="#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>
											<li> <a href="#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
											<li> <a href="#" title=""><i class="fa fa-adjust"></i>task</a> </li>
											<li> <a href="#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
											<li> <a href="#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
										</ul>
										<span class="drop-bottom"><a href="{{ url('logout')}}" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
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
                    <li><a href="{{ url('/home')}}" title="">Home</a></li>
                    
                  </ul>
                </div>
                <div class="inner-bg">
                  <div class="element-title">
                    <h4>Edit Vendor profile</h4>
                    <span>Edit your profile</span> 
                    
				  </div>
				  <?php 
				  $id=Auth::user()->id;?>

				  <form enctype="multipart/form-data" role="form" method="post" action="{{ ('/edit') , ['id' => $id]}}">
                     {{ csrf_field() }} 
                     
                <div class="pnl-bdy billing-sec">
                    	<div class="row">
                    		 <div class="col-md-6 col-sm-6 field">
                        <label>Registration No<span>*</span> </label>
                        <input placeholder="Enter Registration Number" value="{{ old('reg_no', Auth::user()->comp_reg_number)}}" name="reg_no" type="number">
                        @if ($errors->has('reg_no'))
    					<div class="error">{{ $errors->first('reg_no') }}</div>
						@endif
                      </div>


                      <div class="col-md-6 col-sm-6 field">
                        <label>Your Name <span>*</span> </label>
                        <input value="{{ old('name', Auth::user()->name)}}" type="text" name="name">
                         @if ($errors->has('name'))
    					<div class="error">{{ $errors->first('name') }}</div>
						@endif
                      </div>


                      <div class="col-md-12 col-sm-12 field">
                        <label>Contact Number<span>*</span> </label>
                        <input placeholder="" value="{{ old('phone', Auth::user()->phone)}}" type="number" name="phone">
                        @if ($errors->has('phone'))
    					<div class="error">{{ $errors->first('phone') }}</div>
						@endif
                      </div>


                      <div class="col-md-12 col-sm-12 field">
                        <label>Email id<span>*</span> </label>
                        <input placeholder="" readonly="readonly" value="{{ old('email', Auth::user()->email)}}"  type="text" name="email">
                         @if ($errors->has('email'))
    					<div class="error">{{ $errors->first('email') }}</div>
						@endif 
                      </div>

                      <div class="col-md-6 col-sm-12 field">
                        <label>State <span>*</span> </label>
                        	<select name="state" value="{{ old('state', Auth::user()->state)}}">
                          <option>Select State</option>
         					@foreach($state as $key => $value)
         					<option value="{{$value->id}}">{{$value->name}}</option>
         					@endforeach
                        </select>
                        @if ($errors->has('state'))
    					<div class="error">{{ $errors->first('state') }}</div>
						@endif
                      </div>



                      <div class="col-md-6 col-sm-6 field">
                        <label>District<span>*</span> </label>
                        <div id="ddd"></div>                	 
                              					
                        
                        @if ($errors->has('district'))
    					<div class="error">{{ $errors->first('district') }}</div>
						@endif
                      </div>
                      
                      
                      

                      <div class="col-md-6 col-sm-6 field">
                        <label>Country <span>*</span> </label>
                        <select name="country" value="{{ old('country', Auth::user()->country)}}">
                          <option >Select Country</option>
         					@foreach($country as $key => $value)
         					<option value="{{$value->name}}">{{$value->name}}</option>
         					@endforeach
                        </select>
                        @if ($errors->has('country'))
    					<div class="error">{{ $errors->first('country') }}</div>
						@endif
                      </div> 
                     
                      
                       <div class="col-md-6 col-sm-12 field">
                        <label>Zip / Postal Code <span>*</span> </label>
                        <input value="{{ old('pincode', Auth::user()->pincode)}}" placeholder="Enter zip code" name="pincode" type="number">
                        @if ($errors->has('pincode'))
    					<div class="error">{{ $errors->first('pincode') }}</div>
						@endif
                      </div>
                       
                      
                      
                      <div class="col-md-12 col-sm-12 field">
                        <label>Landmark<span>*</span> </label>
                        <input placeholder="Enter Landmark" value="{{ old('landmark', Auth::user()->landmark)}}" name="landmark" type="text">
                        @if ($errors->has('landmark'))
    					<div class="error">{{ $errors->first('landmark') }}</div>
						@endif
                      </div>

                      <div class="col-md-12 col-sm-12 field">
                        <label>Fax<span>*</span> </label>
                        <input placeholder="Enter Fax" value="{{ old('fax', Auth::user()->fax)}}"  name="fax" type="number">
                        @if ($errors->has('fax'))
    					<div class="error">{{ $errors->first('fax') }}</div>
						@endif
                      </div>

                      <div class="col-md-12 col-sm-12 field">
                        <label>Landline Number<span>*</span> </label>
                        <input placeholder="Enter Landline Number" value="{{ old('landline_number', Auth::user()->landline_number)}}"  name="landline_number" type="number">
                        @if ($errors->has('landline_number'))
    					<div class="error">{{ $errors->first('landline_number') }}</div>
						@endif
                      </div>

                      <div class="col-md-4 col-sm-12 field">
                        <label>Website URL <span>*</span> </label>
                        <input name="web_url" placeholder="Enter Website URL" type="text" value="{{ old('web_url', Auth::user()->website)}}">
                        @if ($errors->has('web_url'))
    					<div class="error">{{ $errors->first('web_url') }}</div>
						@endif
                      </div>

                      <div class="col-md-4 col-sm-6 field">
                        <label>Add Facebook URL <span>*</span> </label>
                        <input name="fb_url" placeholder="Enter FB URL" type="text" value="{{ old('fb_url', Auth::user()->facebook_url)}}" >
                        @if ($errors->has('fb_url'))
    					<div class="error">{{ $errors->first('fb_url') }}</div>
						@endif
                      </div>

                      <div class="col-md-4 col-sm-6 field">
                        <label>Add Instagram URL <span>*</span> </label>
                        <input name="insta_url" placeholder="Enter Instagram URL" type="text" value="{{ old('insta_url', Auth::user()->instagram_url)}}" >
                        @if ($errors->has('insta_url'))
    					<div class="error">{{ $errors->first('insta_url') }}</div>
						@endif
                      </div> 
                      
                     
				  <div class="col-md-12 col-sm-12 field"> 
							<span class="upload-image">upload logo</span>
						  <label class="fileContainer"> <span>upload</span>
							<input type="file"  name="logo" value="{{ old('logo', Auth::user()->logo)}}" >
							
						  </label>
						  @if ($errors->has('logo'))
    					<div class="error">{{ $errors->first('logo') }}</div>
						@endif
						</div> 
						<div class="col-md-12 col-sm-12 field"> 
							<span class="upload-image">upload image</span>
						  <label class="fileContainer"> <span>upload</span>
							<input type="file" value="{{ old('image', Auth::user()->image)}}" name="image">
							
						  </label>
						  @if ($errors->has('image'))
    					<div class="error" >{{ $errors->first('image') }}</div>
						@endif
						</div>  
						
                      
                      <div class="col-md-12 col-sm-12">
                        <button type="submit">Save Settings Now</button>
                      </div>
                  </div>
                    </div>
                    </form>
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
            <form>
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
            <form>
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
<script src="template/js/jquery.js"></script> 
<script src="template/js/bootstrap.min.js"></script> 
<script src="template/js/perfect-scrollbar.jquery.min.js"></script> 
<script src="template/js/chart.min.js"></script> 
<script src="template/js/echart.min.js"></script> 
<script src="template/js/nice-select.js"></script> 
<script src="template/js/jquery.sparkline.min.js"></script> 
<script src="template/js/custom2.js"></script> 
<script src="template/js/flatweather.min.js"></script> 
<script src="template/js/html5lightbox.js"></script> 
<script src="template/js/custom.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('select[name="state"]').on('change', function() {
        var state_id = $(this).val();
         //alert(state_id);
            
            $.ajax({
                 url: "{{ URL::route('district')}}",
               
                method: "get",
                data: {'state_id': state_id  },
                //dataType: "json",
            success:function(data) {
                	//alert(data);
                	var data1 = JSON.parse(data); 
                	//alert(data1);
			var distt=$('#dist');

				// var select_tag='<select title="select district">';
				 var toAppend = '<select name="district" >';
					$.each(data1, function(key, value){
                	//alert(value.name) ;
                	   // dist.append($("<option></option>")
                    // .attr("value",value.name)
                    // .text(value.name)); 
                    toAppend += '<option value="'+value.id+'">'+value.name+'</option>';
                   //alert(dist);
                      //var a=select_tag.append(dist+select_close);
                   //alert(a);
                    //  var b=a.append(select_close);
                    // $('#ddd').append(b);
//                   
// $('#ddd').append(select_tag+dist+select_close);
                            });
					$('#ddd').html(toAppend);
				
					// var select=select_tag+dist+select_close;
					// alert(select);
//$('#ddd').append(select);
					//alert(dist);
					
					//alert(dist);
                		// $.each(data1, function(index) {
                			
                		// 	$('select[name="districts"]').append('<option value="'+(data1[index].id)+'">'+(data1[index].name)+'</option>');
                    	 
                  //   });
                }
            });
           
           });
        });
    </script><!-- scripts -->

</body>
</html>