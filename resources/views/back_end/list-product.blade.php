@extends('back_end/admin_dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card">
        <h5 class="card-header">Hoverable rows</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Dimensions</th>
                        <th>Category</th>
                        <th>SKU</th>
                        <th>Image</th>
                        <th>Created</th> 
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($products as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->description}}</td>
                        <td>{{$p->price}}</td>
                        <td>L: {{$p->length}} x W: {{$p->width}}</td>
                        <td>{{$p->category}}</td>
                        <td>{{$p->sku}}</td>
                        <td><img width="100px" src="{{URL('uploads/'.$p->image)}}"></td>
                        <td>{{$p->created_at}}</td>
                        <td>
                            <a href="{{URL('products/'.$p->id.'/edit')}}" class="btn btn-warning">Edit</a>
                            <form method="POST" action="{{URL('products/'.$p->id)}}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>

                            </form>

                            <!-- <form method="POST" action="{{URL('products/'.$p->id)}}">
                              {{ csrf_field()}}
                              <input type="hidden" name="_method" value="DELETE">

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> -->
                        </td>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection