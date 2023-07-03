@extends('front_end/home_page_master')

@section('content')


<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:10%">Image</th>
            <th style="width:20%">Description</th>
            <th style="width:10%">Price</th>
            <th style="width:10%">SKU</th>
            <th style="width:10%">Quantity</th>
            <th style="width:10%" class="text-center">Subtotal</th>
            <th style="width:10%">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $total = 0 ?>
        @if(session('cart'))
        @foreach(session('cart') as $id => $details)        
        <?php $total += $details['price'] * $details['quantity'] ?>
        <tr>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <td data-th="Picture">
                    <img src="/uploads/{{ @$details['image'] }}" width="100" height="100" class="img-responsive" />
                </td>
            </div>

            
            <div class="col-lg-8 col-md-8 col-sm-12">
                <td data-th="Description">
                    <h4 class="nomargin" name="ordered_description">{{ $details['description'] }}</h4>
                </td>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-3">
                <td data-th="Price" name="ordered_price">PKR{{ $details['price'] }}</td>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-3">
                <td data-th="Price" name="ordered_price">{{ $details['sku'] }}</td>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-3">
                <td data-th="Quantity">
                    <input type="number" min="1" max="5" value="{{ $details['quantity'] }}" class="form-control quantity" name="ordered_quantity" />
                </td>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-3">
                <td data-th="Subtotal" class="text-center">PKR {{ $details['price'] * $details['quantity'] }}</td>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-3">
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                </td>
            </div>
        </tr>
        @endforeach
        @endif
    </tbody>
    <tfoot>

        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>

            <td colspan="3" class="hidden-xs"></td>
            <td class="hidden-xs text-center" name="ordered_total"><strong>Total PKR: {{ $total }}</strong></td>
            <td><a href="{{URL('check_out')}}" class="btn btn-warning"><i class="fa fa-angle-right"></i> Check Out</a></td>
            <td><a href="{{URL('clearcart')}}" class="btn btn-danger"><i class="fa fa-angle"></i> Clear Cart</a></td>
        </tr>

    </tfoot>
</table>

@section('scripts')

<script type="text/javascript">
    $(".update-cart").click(function(e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: "{{URL('/update-cart')}}",
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });
    $(".remove-from-cart").click(function(e) {
        e.preventDefault();
        var ele = $(this);
        if (confirm("Are you sure")) {
            $.ajax({
                url: "{{ url('/remove-from-cart')}}",
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.attr("data-id")
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        }
    });
</script>

@endsection
@endsection