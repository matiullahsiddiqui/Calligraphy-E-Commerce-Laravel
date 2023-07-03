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
                        <th>Logo</th>
                        <th>Email</th>
                        <th>Carousel 1</th>
                        <th>Carousel 2</th>
                        <th>Carousel 3</th>
                        <th>Carousel 4</th>
                        <th>Carousel 5</th>
                        <th>Category 1 Name</th>
                        <th>Category 1 Pic</th>
                        <th>Category 2 Name</th>
                        <th>Category 2 Pic</th>
                        <th>Category 3 Name</th>
                        <th>Category 3 Pic</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Instagram</th>
                        <th>Linkedin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($admins as $a)
                    <tr>
                        <td>{{$a->id}}</td>
                        <td><img width="100px" src="{{URL('admin/'.$a->logo)}}"></td>
                        <td>{{$a->admin_email}}</td>
                        <td><img width="100px" src="{{URL('admin/'.$a->carousel_1)}}"></td>
                        <td><img width="100px" src="{{URL('admin/'.$a->carousel_2)}}"></td>
                        <td><img width="100px" src="{{URL('admin/'.$a->carousel_3)}}"></td>
                        <td><img width="100px" src="{{URL('admin/'.$a->carousel_4)}}"></td>
                        <td><img width="100px" src="{{URL('admin/'.$a->carousel_5)}}"></td>
                        <td>{{$a->category_1_name}}</td>
                        <td><img width="100px" src="{{URL('admin/'.$a->category_1_picture)}}"></td>
                        <td>{{$a->category_2_name}}</td>
                        <td><img width="100px" src="{{URL('admin/'.$a->category_2_picture)}}"></td>
                        <td>{{$a->category_3_name}}</td>
                        <td><img width="100px" src="{{URL('admin/'.$a->category_3_picture)}}"></td>
                        <td>{{$a->admin_address}}</td>
                        <td>{{$a->admin_phone}}</td>
                        <td>{{$a->admin_facebook}}</td>
                        <td>{{$a->admin_twitter}}</td>
                        <td>{{$a->admin_instagram}}</td>
                        <td>{{$a->admin_linkedin}}</td>
                        <td>
                            <a href="{{URL('/master/'.$a->id.'/edit')}}" class="btn btn-warning">Edit</a>
                            <form method="POST" action="{{URL('master/'.$a->id)}}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" disabled>Delete</button>
                            </form>
                        </td>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection