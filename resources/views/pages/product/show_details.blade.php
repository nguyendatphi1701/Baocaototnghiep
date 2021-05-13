@extends('layout')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{URL::to('/trang-chu')}}">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
		</div>
	</div>
		<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">
					@foreach($product_details as $key => $value)
					<div class="row">
						<div class="col-sm-4">
							<div class="single-item">
							<div class="single-item-header">
								<img src="{{URL::to('public/uploads/product/'.$value->product_image)}}" alt="">
							</div>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h4>{{$value->product_name}}</h4></p>
								<p class="single-item-price">
									<p><b>Giá: </b><span>{{$value->product_price}} VND</span></p>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="single-item-options">
								<p><b>Mã: </b>{{$value->product_id}}</p><br/>
								<p><b>Tình trạng:</b> Còn hàng</p><br/>
								<p><b>Điều kiện:</b> Mới 100%</p><br/>
								<p><b>Thương hiệu:</b> {{$value->brand_name}}</p><br/>
								<p><b>Danh mục:</b> {{$value->category_name}}</p><br/><br/>
								<button type="button" class="add-to-cart pull-left" name="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								<a class="beta-btn primary" href="#">Mua Ngay<i class="fa fa-chevron-right"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả sản phẩm</a></li>
							<li><a href="#tab-content">Nội dung sản phẩm</a></li>
							<li><a href="#tab-reviews">Đánh giá</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{!!$value->product_desc!!}</p>
						</div>
						<div class="panel" id="tab-content">
							<p>{!!$value->product_content!!}</p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					@endforeach
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm liên quan</h4>

						<div class="row">
							@foreach($relate as $key => $lienquan)
							<div class="col-sm-4">
								<div class="single-item">
                                        <div class="single-item-header">
                                            <a href="{{URL::to('/chi-tiet-san-pham/'.$lienquan->product_id)}}"><img src="{{URL::to('public/uploads/product/'.$lienquan->product_image)}}" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$lienquan->product_name}}</p>
                                            <p class="single-item-price">
                                                <span>{{($lienquan->product_price)}} VND</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                     
                                            <button type="button" class="add-to-cart pull-left" name="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                            
                                            <a class="beta-btn primary" href="{{URL::to('/chi-tiet-san-pham/'.$lienquan->product_id)}}">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
							</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Best Sellers</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="{{URL::to('public/frontend/images/products/sales/1.png')}}" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="{{URL::to('public/frontend/images/products/sales/1.png')}}" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="{{URL::to('public/frontend/images/products/sales/1.png')}}" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="{{URL::to('public/frontend/images/products/sales/1.png')}}" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Sản phẩm mới</h3>
						<div class="widget-body">
							@foreach($all_product as $key =>$product)
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"><img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt=""></a>
									<div class="media-body">
										{{$product->product_name}}
										<span class="beta-sales-price">{{($product->product_price)}} VND</span>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection