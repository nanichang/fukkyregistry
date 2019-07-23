@extends('layouts.master')

@section('content')
  <!--Breadcrumb section-->
  <div class="breadcrumb_section">
		<div class="container">
		  <div class="row">
				<div class="col-12">
				  <div class="breadcrumb_inner">
					<ul>
					  <li><a href="#">Home</a></li>
					  <li><i class="zmdi zmdi-chevron-right"></i></li>
					  <li>Wishlist</li>
					</ul>
				  </div>
				</div>
		  </div>
		</div>
  </div>
  <!--Breadcrumb section end-->

  <!-- PAGE SECTION START -->
	<div class="page-section section ptb-100">
		<form action="#">
			<div class="container">
				<div class="row">

					<div class="col-12">

						<div class="wishlist-table table-responsive">
							<p>
								<strong>Sharable Link:</strong> 
								<input type="text" value="{{ $user->sharable_link }}/{{$user->slug}}" readonly></p>
							<table>
								<thead>
									<tr>
										<th class="pro-remove">Remove</th>
										<th class="pro-thumbnail">Image</th>
										<th class="pro-title">Product</th>
										<th class="pro-price">Unit Price</th>
										<!-- <th class="pro-stock-stauts">Stock Stauts</th> -->
										<th class="pro-add-to-cart">Add to Cart</th>
									</tr>
								</thead>
								<tbody>
									@foreach($wishlists as $wishlist)
										<tr>
											<td class="pro-remove"><a href="#">×</a></td>
											<td class="pro-thumbnail"><a href="#"><img src="assets/img/product/{{$wishlist->product_image}}" alt="" /></a></td>
											<td class="pro-title"><a href="#">{{ $wishlist->product_name }}</a></td>
											<td class="pro-price"><span class="amount"> &#x20A6; {{ $wishlist->current_price }}</span></td>
											<!-- <td class="pro-stock-stauts"><span class="in-stock">in stock</span></td> -->
											<td class="pro-add-to-cart">
												@if($wishlist->purchased === 0)
													<a href="#" class="add-to-cart">Buy Now</a>
												@else
													<a href="#" class="add-to-cart">Purchased</a>
												@endif
											</td>
										</tr>
									@endforeach									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</form> 
	</div>
	<!-- PAGE SECTION END -->

@endsection