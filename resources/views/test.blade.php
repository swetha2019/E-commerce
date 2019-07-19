<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="multi" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="file" name="mul[]" multiple="multiple">
	<input type="submit" name="sub">
	<a href="disp">Dispaly</a>
</form>
</body>
</html>