<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trang chủ</title>
	 <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
	<div class="container">
		<button class="btn btn1" onclick="location.href='{{ asset('user') }}'">User</button>
		<button class="btn btn2" onclick="location.href='{{ asset('quanan') }}'">Quán ăn</button>
		<button class="btn btn3" onclick="location.href='{{ asset('monan') }}'">Món ăn</button>
		<button class="btn btn4" onclick="location.href='{{ asset('user') }}'">Địa chỉ</button>
	</div>
  
</body>
</html>