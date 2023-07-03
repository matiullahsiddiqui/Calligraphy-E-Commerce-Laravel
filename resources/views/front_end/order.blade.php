@extends('front_end/home_page_master')

@section('content')

<div class="alert alert-Success alert-dismissible fade show" role="alert">
    <strong>Your Order has been Placed
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>

<div class="container mt-5 mb-5">

    <div class="row d-flex justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="text-left logo p-2 px-5">

                    <img src="{{asset('/admin/'.$setting->logo)}}" width="50">

                </div>

                <div class="invoice p-5">

                    <h5>Your order Confirmed!</h5>

                    <span class="font-weight-bold d-block mt-4">{{$frontData['name']}}</span>
                    <span>You order has been confirmed and will be shipped in next two days!</span>

                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                        <table class="table table-borderless">

                            <tbody>
                                <tr>

                                    <td>
                                        <div class="py-2">

                                            <span class="d-block text-muted">Order No</span>
                                            <span>{{$frontData['order_id']}}</span>

                                        </div>
                                    </td>


                                    <td>
                                        <div class="py-2">

                                            <span class="d-block text-muted">Phone No</span>
                                            <span>{{$frontData['phone']}}</span>

                                        </div>
                                    </td>


                                    <td>
                                        <div class="py-2">

                                            <span class="d-block text-muted">Shiping Address</span>
                                            <span>{{$frontData['address']}}</span>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="product border-bottom table-responsive">

                        <table class="table table-borderless">

                            <tbody>
                                <tr>

                                    <td width="20%">

                                        <img src="" width="90">

                                    </td>

                                    <td width="20%">
                                        <span class="d-block text-muted">SKU</span>
                                        <span class="font-weight-bold">{{$frontData['sku']}}</span>
                                        <!-- <div class="product-qty">
                                            <span class="d-block">Quantity: {{$frontData['quantity']}}</span>
                                            <span>Description: {{$frontData['description']}}</span>

                                        </div> -->
                                    </td>

                                    <td width="30%">
                                        <span class="d-block text-muted">Description</span>
                                        <span>{{$frontData['description']}}</span>
                                    </td>

                                    <td width="20%">
                                        <span class="d-block text-muted">Quantity</span>
                                        <span>{{$frontData['quantity']}}</span>
                                    </td>

                                    <td width="30%">
                                        <span class="d-block text-muted">Product Price</span>
                                        <span class="font-weight-bold">{{$frontData['product_total_price']}}</span>
                                    </td>

                                </tr>

                            </tbody>

                        </table>
                    </div>
                    <!-- <div class="row d-flex justify-content-end">

                        <div class="col-md-5">

                            <table class="table table-borderless">

                                <tbody class="totals">

                                    <tr>
                                        <td>
                                            <div class="text-left">

                                                <span class="text-muted">Subtotal</span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right">
                                                <span>{{ $frontData['price'] }}</span>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>
                    </div> -->
                    <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                    <p class="font-weight-bold mb-0">Thanks for shopping with us!</p>
                    <span>NEGARISTAN TEAM</span>
                </div>

                <div class="d-flex justify-content-between footer p-3">
                    <span>Need Help? visit our <a href="{{URL('/contact')}}"> Help center</a></span>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection