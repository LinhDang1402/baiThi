@extends('layout.index')
@section('content')
<body>
	<h1>Thêm khách hàng</h1>
	<form action="{{route('customers.store')}}" method="post">
		@csrf
		Họ tên: <input type="text" name="name"><br>
        Giới tính: <input type="radio" name="gender" value="1">Nam
                    <input type="radio" name="gender" value="0">Nữ <br>
		Địa chỉ: <input type="text" name="address"><br>
        Số điện thoại: <input type="number" name="phone"><br>
        Email: <input type="text" name="email"><br>
		<button>Thêm</button>
	</form>
</body>
</html>
@endsection