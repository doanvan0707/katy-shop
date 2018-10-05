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
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            	<a href="{{ route('products.create') }}"><i class="fa fa-plus" aria-hidden="true">Thêm sản phẩm</i></a>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                  	<th>#</th>
                  	<th>Name</th>
                  	<th>Description</th>
                  	<th>Unit_price</th>
                  	<th>Promotion_price</th>
                  	<th>Image</th>
                  	<th>Unit</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @foreach($products as $key => $product)
					<tbody>
						<tr>
							<td>{{ ++$key }}</td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->description }}</td>
							<td>{{ $product->unit_price }}</td>
							<td>{{ $product->promotion_price }}</td>
							<td>{{ $product->image }}</td>
							<td>{{ $product->unit }}</td>
							<td class="hidden-sm hidden-xs btn-group">
								<a href="{{ route('products.show', $product) }}" class="btn btn-xs btn-success" title="Xem thông tin"><i class="ace-icon fa fa-eye bigger-120"></i></a>
								
						        <a href="{{ route('products.edit', $product) }}" class="btn btn-xs btn-info" title="Chỉnh sửa thông tin"><i class="ace-icon fa fa-pencil bigger-120"></i></a>
						        <form action="{{ route('products.destroy', $product) }}" method="post">
						        	{{ csrf_field() }}
						        	{{ method_field('delete') }}
						        	  <button type="button" class="confirm-btn" data-token="{{ csrf_token() }}"><i class="fa fa-trash-o"></i></button>
						        </form>
								
							</td>
						</tr>
					</tbody>
				@endforeach		
              </table>
              {{ $products->links() }}
            </div>
          </div>
        </div>
      </div>             	
@endsection