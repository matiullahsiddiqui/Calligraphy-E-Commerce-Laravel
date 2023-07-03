<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khalid Arts</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
    <header style="padding-top: 10px;" class="width: 15px">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                    <div class="container-fluid col-md-8">

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <a href="https://www.pnytrainings.com/">
                                    <img src="logo.jpg" class="d-block w-50" height="80%">
                                </a>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <p class="nav-link active text-white" aria-current="page"><span><i class="fa fa-phone p-1 m-1 text-info"></i></span>0332-47474882</p>
                                </li>
                                <li class="nav-item">
                                    <p class="nav-link text-white"><Span><i class="fa fa-envelope p-1 m-1 text-info"></i></Span>kmsiddiqui.55@gmail.com</p>
                                </li>
                            </ul>

                        </div>

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="#"><span><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><i class="fa fa-instagram p-1 m-1"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><i class="fa fa-facebook p-1 m-1"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><span><i class="fa fa-linkedin p-1 m-1 text-info"></i></span></a>
                            </li>
                        </ul>
                        <li clas="nav-item p-1">
                            <a class="btn bg-white btn-xs p-1 m-1" href="{{URL('/login')}}" type="submit"><span><i class="fa fa-sign-in"></i></span>Log In</a>
                        </li>

                        <a class="btn bg-danger text-white p-1 m-1" href="{{URL('/register')}}" type="submit">Sign Up</a>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="row">

            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{URL('uploads/img_257613.jpg')}}" class="d-block w-100" >
              </div>
              <div class="carousel-item">
                <img src="{{URL('uploads/img_405964.jpg')}}" class="d-block w-100">
              </div>
              <div class="carousel-item active">
                <img src="{{URL('uploads/img_257613.jpg')}}" class="d-block w-100" >
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
    
    <div class="container">
        <div class="row p-1  justify-content-center">
          <div class="col-md-4 col-sm-12">
            <div class="card" style="width: 18rem;">
            <img src="{{URL('uploads/nastaliq.png')}}" class="d-block w-100" >
              <div class="card-body">
                <h5 class="card-title">Nastaleekh</h5>
                <p class="card-text">All the Calligraphy of Nastaleekh Font</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-12">
            <div class="card" style="width: 18rem;">
              <i class="fa fa-4x fa-graduation-cap m-1 p-1 d-flex justify-content-center"></i>
              <div class="card-body justify-content-center">
                <h5 class="card-title justify-content-center">Sulus</h5>
                <p class="card-text">All the Calligraphy of Sulus Font</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-12">
            <div class="p-2 card" style="width: 18rem;">
              <i class="fa fa-4x fa-desktop m-1 p-1 d-flex justify-content-center" aria-hidden="true" aria-setsize="200px"></i>
              <div class="card-body">
                <h5 class="card-title">Mix</h5>
                <p class="card-text">All the Calligraphy of Mix Font</p>
              </div>
            </div>
        </div>
    </div>


</body>

</html>