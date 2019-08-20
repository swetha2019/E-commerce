
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
<link rel="stylesheet" href="template/css/bootstrap.min.css">
<link rel="stylesheet" href="template/css/animate.min.css">
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
      <div class="col-md-12">
        <div class="admin-lock vh100"> 
          <div class="admin-form">
            <div class="logo"><img src="template/images/logo2.png" alt=""></div>
            <h4>Change Password </h4>
            @if(session()->has("success"))
    <div class="alert alert-success">
        {{ session()->get("success") }}
    </div>
@endif
            <form method="post" method="post" action="{{ ('/update_password')}}">
               {{ csrf_field() }} 

              <label><i class="fa fa-key"></i></label>
              <input type="password" name="current_password" placeholder="Current Password"><br><br>
              @if ($errors->has('current_password'))
                        <div class="error">{{ $errors->first('current_password') }}</div>
                        @endif
              
              <label><i class="fa fa-key"></i></label>
              <input type="password" name="new_password" placeholder="New Password"><br><br>
              @if ($errors->has('new_password'))
                        <div class="error">{{ $errors->first('new_password') }}</div>
                        @endif
              
              <label><i class="fa fa-key"></i></label>
              <input type="password" name="confirm_password" placeholder="Confirm Password"><br><br>
              @if ($errors->has('confirm_password'))
                        <div class="error">{{ $errors->first('confirm_password') }}</div>
                        @endif
              <button type="submit">Change password</button>
            </form>
            <label><i class="fa fa-arrow"></i></label>
            <a href="{{url('/')}}" >Back to Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="template/js/jquery.js"></script> 
<script src="template/js/bootstrap.min.js"></script>
<script src="template/js/custom.js"></script>
</body>
</html>
