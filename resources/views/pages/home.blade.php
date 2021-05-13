@extends('layout')
@section('content')
            <div class="fullwidthbanner-container">
                    <div class="fullwidthbanner">
                        <div class="bannercontainer" >
                            @php
                                $i=0;
                            @endphp
                            @foreach($slide as $key =>$sli)
                            @php
                                $i++;
                            @endphp
                        <div class="banner {{$i==1 ? 'active' : ''}}">
                                <ul>
                                    <!-- THE FIRST SLIDE -->
                                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                            <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="public/uploads/slider/{{$sli->slide_image}}" data-src="public/uploads/slider/{{$sli->slide_image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('public/uploads/slider/{{$sli->slide_image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                        <div class="tp-bannertimer"></div>
                    </div>
            </div>
                <!--slider-->

<div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>SẢN PHẨM MỚI</h4>
                            <div class="row">
                                @foreach($all_product as $key =>$product)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        <form>
                                        <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                        <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                        <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                        <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                        <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">
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
                                            <button type="button" name="pull-left" class="add-to-cart pull-left" data-id_product="{{$product->product_id}}"><i class="fa fa-shopping-cart"></i></button>
                                            <a class="beta-btn primary" href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="space50">&nbsp;</div>
                            <h4>SẢN PHẨM BÁN CHẠY</h4>
                        </div> <!-- .beta-products-list -->  
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div>
    @endsection