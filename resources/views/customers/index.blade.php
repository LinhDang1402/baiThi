@extends('layout.index')
@section('content')
	<h1>Danh sách khách hàng</h1>
	<form action="">
	<input type="text" value="{{ $search }}" name="search">	<button>Tìm kiếm</button>
	</form>
	<h3><a href="{{ route('customers.create')}}">Thêm khách hàng</a></h3>
	<div class="col-md-12">
              <div class="card">
	<div class="card-header card-header-primary">
                  <h4 class="card-title ">Thông tin khách hàng</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
	<table border="1" cellspacing="0" cellpadding="1" class="table">
		<tr>
			<th>Mã</th>
            <th>Họ tên</th>
            <th>Giới tính</th>
			<th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
		</tr>
		@foreach ($listCustomer as $customer)
			<tr>
				<td> {{ $customer->id }} </td>
                <td> {{ $customer->name }} </td>
                <td> {{ $customer->NameGender }} </td>
				<td> {{ $customer->address }}</td>
				<td> {{ $customer->numberPhone }} </td>
				<td> {{ $customer->email }} </td>
			</tr>
		@endforeach
	</table>

                  </div>
                </div>

              </div>
            </div>
	{{ $listCustomer->appends([
        'search' => $search,
    ])->links('pagination::bootstrap-4') }}
@endsection

	

