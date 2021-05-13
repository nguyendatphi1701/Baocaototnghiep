@extends('layout')
@section('content')
<div class="inner-header">
        <div class="container">
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{URL::to('/trang-chu')}}">Home</a> / <span>Thương hiệu sản phẩm</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="aside-menu">
                            <li><h4>Danh mục</h4>
                            @foreach($category as $key => $cate)
                                <li><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>
                            @endforeach
                            <li><h4>Thương Hiệu</h4>
                                @foreach($brand as $key => $brand)
                                <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}">{{$brand->brand_name}}</a></li>
                                @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="beta-products-list">
                            @foreach($brand_name as $key => $name)
                            <h4>{{ $name->brand_name }}</h4>
                            @endforeach
                            <div class="row">
                               @foreach($brand_by_id as $key =>$product)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"><img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$product->product_name}}</p>
                                            <p class="single-item-price">
                                                <span>{{($product->product_price)}} VND</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <button type="button" class="add-to-cart pull-left" name="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                            <a class="beta-btn primary" href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div> <!-- .beta-products-list --> 
                    </div>
                </div> <!-- end section with sidebar and main content -->
            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
    @endsection