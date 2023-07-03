@extends('front_end/home_page_master')

@section('content')

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h1><b>{{$setting->category_1_name}} </b></h1>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('/uploads/'.$product->image)}}">
                        <!-- <ul class="product__item__pic__hover">
                            <li><a href="{{URL('add-to-cart/'.$product->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul> -->
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{URL('/product_details/'.$product->id)}}">SKU - {{$product->sku}}</a></h6>
                        <h5>{{$product->price . ' PKR '}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- Featured Section End -->

@endsection