<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{url('mobno')}}" method="post">
	 @csrf
	<input type="number" name="no">
	<input type="submit" name="sub">

</form>
</body>
</html>