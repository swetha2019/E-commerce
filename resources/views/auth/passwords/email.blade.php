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
<link rel="stylesheet" href="{{ url('/') }}/template/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/animate.min.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/style.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/color.css">
<link rel="stylesheet" href="{{ url('/') }}/template/css/responsive.css">
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
            <div class="logo"><img src="{{ url('/') }}/template/images/logo2.png" alt=""></div>
            <h4>Forgot Password </h4>
            <span>Enter your Registered email </span>
            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
              <label><i class="fa fa-envelope"></i></label>
             <input type="text" placeholder="Email Address" name="email">
             <br>
              @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              <button type="submit">retrieve password</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{ url('/') }}/template/js/jquery.js"></script> 
<script src="{{ url('/') }}/template/js/bootstrap.min.js"></script>
<script src="{{ url('/') }}/template/js/custom.js"></script>
</body>
</html>
