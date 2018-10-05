@extends('layouts.frontend')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Shopping Cart</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Shopping Cart</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<div class="table-responsive">
				<!-- Shop Products Table -->
				<table class="shop_table beta-shopping-cart-table" cellspacing="0">
					<thead>
						<tr>
							<th class="product-name">Product</th>
							<th class="product-price">Price</th>
							<th class="product-status">Status</th>
							<th class="product-quantity">Qty.</th>
							<th class="product-subtotal">Total</th>
							<th class="product-remove">Remove</th>
						</tr>
					</thead>
					<tbody>
					
						<tr class="cart_item">
							<td class="product-name">
								<div class="media">
									<img class="pull-left" src="assets/dest/images/shoping1.jpg" alt="">
									<div class="media-body">
										<p class="font-large table-title">Men’s Belt</p>
										<p class="table-option">Color: Red</p>
										<p class="table-option">Size: M</p>
										<a class="table-edit" href="#">Edit</a>
									</div>
								</div>
							</td>

							<td class="product-price">
								<span class="amount">$235.00</span>
							</td>

							<td class="product-status">
								In Stock
							</td>

							<td class="product-quantity">
								<select name="product-qty" id="product-qty">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>

							<td class="product-subtotal">
								<span class="amount">$235.00</span>
							</td>

							<td class="product-remove">
								<a href="#" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
						<tr class="cart_item">
							<td class="product-name">
								<div class="media">
									<img class="pull-left" src="assets/dest/images/shoping2.jpg" alt="">
									<div class="media-body">
										<p class="font-large table-title">Men’s Belt</p>
										<p class="table-option">Color: Red</p>
										<p class="table-option">Size: M</p>
										<a class="table-edit" href="#">Edit</a>
									</div>
								</div>
							</td>

							<td class="product-price">
								<span class="amount">$235.00</span>
							</td>

							<td class="product-status">
								In Stock
							</td>

							<td class="product-quantity">
								<select name="product-qty" id="product-qty">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>

							<td class="product-subtotal">
								<span class="amount">$235.00</span>
							</td>

							<td class="product-remove">
								<a href="#" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
						<tr class="cart_item">
							<td class="product-name">
								<div class="media">
									<img class="pull-left" src="assets/dest/images/shoping3.jpg" alt="">
									<div class="media-body">
										<p class="font-large table-title">Men’s Belt</p>
										<p class="table-option">Color: Red</p>
										<p class="table-option">Size: M</p>
										<a class="table-edit" href="#">Edit</a>
									</div>
								</div>
							</td>

							<td class="product-price">
								<span class="amount">$235.00</span>
							</td>

							<td class="product-status">
								In Stock
							</td>

							<td class="product-quantity">
								<select name="product-qty" id="product-qty">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>

							<td class="product-subtotal">
								<span class="amount">$235.00</span>
							</td>

							<td class="product-remove">
								<a href="#" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
				<a href="{{ route('home.checkout') }}" class="btn btn-primary">Mua ngay</a>
				<!-- End of Shop Table Products -->
			</div>
			<!-- End of Cart Collaterals -->
			<div class="clearfix"></div>

		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection