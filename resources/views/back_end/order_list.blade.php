@extends('back_end/admin_dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card">
        <h5 class="card-header">Hoverable rows</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email Address</th>
                        <th>Product SKU</th>
                        <th>Product Description</th>
                        <th>Product Quantity</th>
                        <th>Product Price</th>
                        <th>Product Total Price</th>
                        <th>Order Date</th>            
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($orders as $o)
                    <tr>
                        <td>{{$o->id}}</td>
                        <td>{{$o->user_full_name}}</td>
                        <td>{{$o->user_address}}</td>
                        <td>{{$o->user_phone}}</td>
                        <td>{{$o->user_email}}</td>
                        <td>{{$o->user_product_sku}}</td>
                        <td>{{$o->user_product_description}}</td>
                        <td>{{$o->user_product_quantity}}</td>
                        <td>{{$o->user_product_price}}</td>
                        <td>{{$o->user_product_total_price}}</td>
                        <td>{{$o->created_at}}</td>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection