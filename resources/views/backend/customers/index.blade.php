@extends('layouts.admin')
@section('content')

      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
        @if(session('succsess'))
		     <div class="alert alert-success">
		         {{ session('succsess') }}
		     </div>
		@endif
		@if(session('delete'))
		     <div class="alert alert-success">
		        <span>{{ session('delete') }}</span>
		     </div>
		@endif
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            	<a href=""><i class="fa fa-plus" aria-hidden="true">Thêm người dùng</i></a>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
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
							<td>{{ $customer->name }}</td>
							<td>{{ $customer->gender }}</td>
							<td>{{ $customer->email }}</td>
							<td>{{ $customer->address }}</td>
							<td>{{ $customer->phone_number }}</td>
							<td>{{ $customer->note }}</td>
							<td class="hidden-sm hidden-xs btn-group">
								<a href="{{ route('customers.show', $customer) }}" class="btn btn-xs btn-success" title="Xem thông tin"><i class="ace-icon fa fa-eye bigger-120"></i></a>
								
						        <a href="{{ route('customers.edit', $customer) }}" class="btn btn-xs btn-info" title="Chỉnh sửa thông tin"><i class="ace-icon fa fa-pencil bigger-120"></i></a>
						        <form action="{{ route('customers.destroy', $customer) }}" method="post">
						        	{{ csrf_field() }}
						        	{{ method_field('delete') }}
						        	  <button type="button" class="confirm-btn" data-token="{{ csrf_token() }}"><i class="fa fa-trash-o"></i></button>
						        </form>
								
							</td>
						</tr>
					</tbody>
				@endforeach	
              </table>
              {!! $customers->links() !!}
            </div>
          </div>
        </div>
      </div>             	
@endsection