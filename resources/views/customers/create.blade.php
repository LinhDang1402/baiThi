<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Thêm Lớp</h1>
	<form action="{{route('customers.store')}}" method="post">
		@csrf
        Ảnh: <input type="text" name="avatar"><br>
		Tên: <input type="text" name="name"><br>
        Giới tính: <input type="radio" name="gender" value="1">Nam
                    <input type="radio" name="gender" value="0">Nữ <br>
        Số điện thoại: <input type="number" name="phone"><br>
        Email: <input type="text" name="email"><br>
		<button>Thêm</button>
	</form>
</body>
</html>