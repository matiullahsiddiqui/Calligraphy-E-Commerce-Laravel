@extends('front_end/home_page_master')

@section('content')

<div class="container">
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/admin/'.$setting->carousel_1)}}" class="d-block w-100" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/admin/'.$setting->carousel_2)}}" class="d-block w-100" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/admin/'.$setting->carousel_3)}}" class="d-block w-100" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/admin/'.$setting->carousel_4)}}" class="d-block w-100" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/admin/'.$setting->carousel_5)}}" class="d-block w-100" height="100%">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<!-- Categories -->
<div class="container ">
    <div class="row p-1 justify-content-center m-4">
        <div class="col-lg-4 col-md-12 col-sm-12">


            <div class="card" style="width: 18rem;">
                <a href="{{URL('/nastaleekh')}}">
                    <img src="{{asset('/admin/'.$setting->category_1_picture)}}" class="d-block w-100" height="100%">
                    <div class="card-body justify-content-center">
                        <!-- <h3 class="card-title justify-content-center">{{$setting->category_1_name}}</h3> -->
                    </div>
                </a>
            </div>

        </div>


        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card" style="width: 18rem;">
                <a href="{{URL('/sulus')}}">
                    <img src="{{asset('/admin/'.$setting->category_2_picture)}}" class="d-block w-100" height="100%">
                    <div class="card-body justify-content-center">
                        <!-- <h3 class="card-title justify-content-center">{{$setting->category_2_name}}</h3> -->
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12">
            <a href="{{URL('/mix')}}">
                <div class="p-2 card" style="width: 18rem;">
                    <img src="{{asset('/admin/'.$setting->category_3_picture)}}" class="d-block w-100" height="100%">                  <div class="card-body justify-content-center">
                        <!-- <h3 class="card-title justify-content-center">{{$setting->category_3_name}}</h3> -->
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>


@endsection