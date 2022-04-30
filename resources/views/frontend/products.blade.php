@extends('frontend.layouts.master')
@section('title','Myqueen | Products')
@section('body')
<main class="main">
	<nav class="breadcrumb-nav">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="{{url('/')}}"><i class="d-icon-home"></i></a></li>
				<li>Shop</li>
			</ul>
		</div>
	</nav>
	<div class="page-header pl-4 pr-4" style="background-image: url(images/shop-banner.jpg)">

		<!-- <h1 class="page-title font-weight-bold lh-1 text-capitalize">Shop</h1> -->

	</div>
	<!-- End PageHeader -->
	<div class="page-content mb-10 pb-3">
		<div class="container">
			<div class="row main-content-wrap gutter-lg">
				<aside class="col-lg-3 sidebar sidebar-fixed sidebar-toggle-remain shop-sidebar sticky-sidebar-wrapper">
					<div class="sidebar-overlay"></div>
					<a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
					<div class="sidebar-content">
						<div class="sticky-sidebar" data-sticky-options="{'top': 10}">


							<div class="widget widget-collapsible">
								<h3 class="widget-title">Size</h3>
								<ul class="widget-body filter-items">
									<li><a href="#">Extra Large</a></li>
									<li><a href="#">Large</a></li>
									<li><a href="#">Medium</a></li>
									<li><a href="#">Small</a></li>
								</ul>
							</div>


						</div>
					</div>
				</aside>
				<div class="col-lg-9 main-content">
					<nav class="toolbox sticky-toolbox sticky-content fix-top">
						<div class="toolbox-left">
							<a href="#" class="toolbox-item left-sidebar-toggle btn btn-sm btn-outline btn-primary btn-rounded btn-icon-right d-lg-none">Filter<i class="d-icon-arrow-right"></i></a>
							<div class="toolbox-item toolbox-sort select-box text-dark">
								<label>Sort By :</label>
								<select name="orderby" class="form-control">
									<option value="default">Default</option>
									<option value="popularity" selected="selected">Most Popular</option>
									<option value="rating">Average rating</option>
									<option value="date">Latest</option>
									<option value="price-low">Sort forward price low</option>
									<option value="price-high">Sort forward price high</option>
									<option value="">Clear custom sort</option>
								</select>
							</div>
						</div>
						<div class="toolbox-right">
							<div class="toolbox-item toolbox-show select-box text-dark">
								<label>Show :</label>
								<select name="count" class="form-control">
									<option value="12">12</option>
									<option value="24">24</option>
									<option value="36">36</option>
								</select>
							</div>

						</div>
					</nav>
					<div class="row cols-2 cols-sm-3 product-wrapper">
						@foreach ($products as $product)
						<div class="product-wrap">
							<div class="product">
								<figure class="product-media">
									<a href="">
										<img src="{{ asset($product->productimagee) }}" alt="product" width="280" height="315">
									</a>
									<div class="product-label-group">
										<label class="product-label label-new">new</label>
										<label class="product-label label-sale">12% OFF</label>
									</div>
									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
										<a href="#" class="btn-product-icon btn-wishlist" id="wish_hart ADD_WISH_COLOR_ID"
                                                    onclick="add_to_wishlist(ADD_WISH_ID)" style="color: ADD_COLOR" title="Add to wishlist"><i class="d-icon-heart"></i></a>
									</div>
									<div class="product-action">
										<a href="{{ route('Product-Details', $product->id) }}" class="btn-product btn-quickview" title="Quick View">Quick
											View</a>
									</div>
								</figure>
								<div class="product-details">
									<div class="product-cat">
									<a href="{{ route('Product-Details', $product->id) }}">Product details</a>
									</div>
									<h3 class="product-name">
									<a href="{{ route('Product-Details', $product->id) }}">{{ $product->title }}</a>
									</h3>
									<div class="product-price">
										<ins class="new-price">${{ $product->saleprice }}</ins><del class="old-price">${{ $product->regularprice }}</del>
									</div>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width:60%"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="" class="rating-reviews">( 16 reviews )</a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<nav class="toolbox toolbox-pagination">
						<p class="show-info">Showing <span>12 of 56</span> Products</p>
						<ul class="pagination">
							<li class="page-item disabled">
								<a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
									<i class="d-icon-arrow-left"></i>Prev
								</a>
							</li>
							<li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item page-item-dots"><a class="page-link" href="#">6</a></li>
							<li class="page-item">
								<a class="page-link page-link-next" href="#" aria-label="Next">
									Next<i class="d-icon-arrow-right"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</main>
<!-- End Main -->
@section('javascript')
<script>
        function customViewFormatter(data) {
            var template = $('#profileTemplate').html();
            var view = ''
            $.each(data, function(i, row) {
                var add_color = row.active != null ? "red" : '';
                view += template.replace('NAME', row.title)
                    .replace('PRODUCT_PICTURE', row.image)
                    .replace('PRICE', row.saleprice)
                    .replace('PRODUCT_ID', row.id)
                    .replace('ADD_WISH_ID', row.id)
                    .replace('ADD_WISH_COLOR_ID', row.id)
                    .replace('ADD_COLOR', add_color)
                // .replace('%ADD_CART_ID%', row.id)
            })

            return '<div class="row justify-content-center">${view}</div>'
        }

        function all_product(params) {
            $.ajax({
                type: "GET",
                url: "{{ URL::signedRoute('users.all_product') }}",
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    params.success(data)
                    $('body').addClass('mainloaded')
                },
                error: function(er) {
                    params.error(er);
                }
            });
        }

        function redirect_to_details(id) {
            $.ajax({
                url: "{{ route('users.product_details.index') }}",
                type: 'get',
                data: {
                    id: id
                },
                cache: false,
                dataType: 'json',
                success: function(data) {
                    // console.log(data);
                    window.location.href = data
                }
            })
        }

        function add_to_wishlist(id) {
            $.ajax({
                url: "{{ URL::signedRoute('users.wishlist.store') }}",
                type: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    product_id: id
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    if (data.status == 'success') {
                        toastr.options = {
                            "closeButton": true,
                            "newestOnTop": true,
                            "positionClass": "toast-bottom-center"
                        };
                        toastr.success(data.message);

                        $('#wish_hart' + id).css('color', data.color);
                    }
                },
                error: function(errror) {
                    console.log(error)
                }
            })
        }
    </script>
@endsection
@endsection