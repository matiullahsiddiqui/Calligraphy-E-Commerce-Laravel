@extends('back_end/admin_dashboard')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl md-col-4">
            <div class="card mb-4 md-col-4">
                <div class="card-header d-flex justify-content-between align-items-center md-col-4">
                    <h5 class="mb-0">Edit Data</h5>

                </div>
                <div class="card-body md-col-4">
                    <form method="POST" action="{{route('products.update', $product->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('PUT')
                        <input type="hidden" name="_method" value="PUT">
                        <div class="mb-3 md-col-4">
                            <label class="form-label" for="basic-default-fullname" >Description</label>
                            <input type="text" name="description" class="form-control" value="{{$product->description}}" id="basic-default-fullname" placeholder="Product Description" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Product Price</label>
                            <input type="number" name="price" class="form-control" id="basic-default-company" placeholder="Product Price" value="{{$product->price}}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-email">Product Dimensions</label>
                            <div class="input-group input-group-merge">
                                <input type="number" name="length" class="form-control" placeholder="Length  in Inches" value="{{$product->length}}" />
                                <span class="input-group-text">"</span>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="number" name="width" class="form-control" placeholder="Width in Inches" value="{{$product->width}}" />
                                <span class="input-group-text">"</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product SKU</label>
                            <input type="number" id="basic-default-phone" name="sku" class="form-control phone-mask" placeholder="SKU-0001" value="{{$product->sku}}" />
                        </div>
                        <div class="mb-3 col-md-3 col-sm-12">
                            <select class="form-select" name = "category" id="select_item" value="{{$product->category}}">
                                <option >Select Category</option>
                                <option>Nastaleekh</option>
                                <option>Sulus</option>
                                <option>Mix</option>
                            </select>
                        </div>
                        <div class="mb-3 md-col-4">
                            <label class="form-label" for="basic-default-fullname">Product Image</label>
                            <input type="file" name="image" class="form-control" id="basic-default-fullname" placeholder="Product Description" value="{{$product->image}}" />
                        </div>
                       
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection