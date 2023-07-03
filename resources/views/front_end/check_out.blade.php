@extends('front_end/home_page_master')

@section('content')




<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Billing Details</h4>

            <form action="{{URL('/order')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Full Name<span>*</span></p>
                                    <input type="text" name="user_full_name" class="form-control" placeholder="Enter Full Name" required>
                                </div>
                            </div>
                        </div>

                        <div class="checkout__input">
                            <p>Complete Address<span>*</span></p>
                            <input type="text" placeholder="Complete Address" class="form-control" class="checkout__input__add" name="user_address" required>

                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text" class="form-control" name="user_phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" class="form-control" name="user_email" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="checkout__order">
                            <h4>Your Order</h4>

                            <div class="checkout__order__products">
                                <div class="row">
                                    <div class="col-lg-2 col-md-8">
                                        SKU
                                    </div>
                                    <div class="col-lg-6 col-md-8">
                                        Description
                                    </div>
                                    <div class="col-lg-2 col-md-2 text-center">
                                        QTY
                                    </div>
                                    <div class="col-lg-2 col-md-2">
                                        Total
                                    </div>
                                </div>
                            </div>

                            
                            <?php $total = 0; ?>

                            @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity']; ?>
                            <div class="row">
                                <div class="col-lg-2 col-md-8">
                                    {{$details['sku']}}
                                    <input value="{{$details['sku']}}" name="user_product_sku" type="hidden">
                                    <!-- <img src="/uploads/{{ @$details['image'] }}" type="hidden" name="user_product_image"> -->
                                    
                                </div>

                                <div class="col-lg-6 col-md-8">
                                    {{$details['description']}}
                                    <input value="{{$details['description']}}" name="user_product_description" type="hidden">
                                </div>
                                <div class="col-lg-2 col-md-2 text-center">
                                    {{$details['quantity']}}

                                    <input value="{{$details['quantity']}}" name="user_product_quantity" type="hidden">
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    {{$details['price']}}
                                    <input value="{{$details['price']}}" name="user_product_price" type="hidden">
                                </div>

                            </div>
                            <br>

                            @endforeach
                            @endif
                            <br>

                            <div class="row">
                                <div class="col-lg-10 col-md-8">
                                    <div class="checkout__order__total">Total </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <strong>
                                        {{ $total }}
                                        <input value="{{$total}}" name="user_product_total_price" type="hidden">
                                    </strong>
                                </div>
                            </div>

                            <div class="checkout__input__checkbox">
                                <label for="payment">
                                    Cash Payment
                                    <input type="checkbox" id="payment">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- <div class="checkout__input__checkbox">
                                <label for="paypal">
                                    Paypal
                                    <input type="checkbox" id="paypal">
                                    <span class="checkmark"></span>
                                </label>
                            </div> -->


                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">Submit Order</button>
            </form>
        </div>
    </div>
</section> 

@endsection

