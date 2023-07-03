@extends('front_end/home_page_master')

@section('content')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Your Item has been Added to Cart
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> 
@endif



<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{asset('img/breadcrum.jpeg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>{{$product->category}}</h2>
                    <div class="breadcrumb__option">
                        <a href="{{URL('/home_page')}}">Home</a>
                        <span>{{$product->category}} - </span>
                        <span>SKU - {{$product->sku}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large" src="{{URL('/uploads/'.$product->image)}}" alt="">
                    </div>

                    <div class="product__details__pic__slider owl-carousel">
                        <img data-imgbigurl="{{URL('/uploads/'.$product->image)}}" src="{{URL('/uploads/'.$product->image)}}" alt="">
                        <img data-imgbigurl="img/product/details/product-details-3.jpg" src="" alt="">
                        <img data-imgbigurl="img/product/details/product-details-5.jpg" src="" alt="">
                        <img data-imgbigurl="img/product/details/product-details-4.jpg" src="" alt="">
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>SKU - {{$product->sku}}</h3>
                    <div class="product__details__price">{{$product->price. " PKR"}}</div>

                    <!-- <div class="product__details__quantity">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="number" value="1" id="quantity" min="1">
                            </div>
                        </div>
                    </div>
                     -->
                    <a href="{{url('add-to-cart/'.$product->id)}}" class="primary-btn">ADD TO CART</a>


                    
                    <ul>
                        <li><b>Availability</b> <span>In Stock</span></li>
                        <li><b>Shipping</b> <span>02 day shipping. <samp>Free pickup today</samp></span></li>
                        <li><b>Dimensions:</b> <span>L: {{$product->length}} x W: {{$product->width}}</span></li>
                        <li><b>Share on</b>
                            <div class="share">
                            <a href="{{$setting->admin_facebook}}"><i class="fa fa-facebook"></i></a>
                                    <a href="{{$setting->admin_twitter}}"><i class="fa fa-twitter"></i></a>
                                    <a href="{{$setting->admin_linkedin}}"><i class="fa fa-linkedin"></i></a>
                                    <a href="{{$setting->admin_instagram}}"><i class="fa fa-instagram"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Description</a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center">
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h4>{{$product->description}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->

@endsection