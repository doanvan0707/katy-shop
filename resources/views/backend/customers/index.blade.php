@extends('layouts.admin')
@section('content')
<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Address</th>
			<th>Phone_number</th>
			<th>Note</th>
			<th>Action</th>
		</tr>
	</thead>
	@foreach($customers as $key => $customer)
		<tbody>
			<tr>
				<td>{{ ++$key }}</td>
				<td>{{ $customer->name }}</td>
				<td>{{ $customer->gender }}</td>
				<td>{{ $customer->email }}</td>
				<td>{{ $customer->address }}</td>
				<td>{{ $customer->phone_number }}</td>
				<td>{{ $customer->note }}</td>
				<td>
					<a href="" class="btn btn-info"><i class="fa fa-eye"></i></a>
					<a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
					<form action="{{ route('customers.destroy', $customer) }}" method="post">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
					</form>
				</td>
			</tr>
		</tbody>
	@endforeach	
</table>
@endsection