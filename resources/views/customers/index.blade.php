<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Danh sách khách hàng</h1>
	<form action="">
	<input type="text" value="{{ $search }}" name="search">	<button>Tìm kiếm</button>
	</form>
	<a href="{{ route('customers.create')}}">Thêm khách hàng</a>
	<table border="1" cellspacing="0" cellpadding="1">
		<tr>
			<th>Mã</th>
			<th>Ảnh</th>
            <th>Họ tên</th>
            <th>Giới tính</th>
            <th>Số điện thoại</th>
            <th>Email</th>
		</tr>
		@foreach ($listCustomer as $customer)
			<tr>
				<td> {{ $customer->id }} </td>
				<td> {{ $customer->avatar }} </td>
                <td> {{ $customer->name }} </td>
                <td> {{ $customer->NameGender }} </td>
				<td> {{ $customer->numberPhone }} </td>
				<td> {{ $customer->email }} </td>
			</tr>
		@endforeach
	</table>
	{{ $listCustomer->appends([
        'search' => $search,
    ])->links('pagination::bootstrap-4') }}
</body>
</html>