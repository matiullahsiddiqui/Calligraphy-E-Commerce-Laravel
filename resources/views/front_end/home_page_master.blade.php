<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negaristan</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NEGARISTAN</title>
    <link rel="icon" type="image/x-icon" href="{{URL('Negaristan.com.jpg')}}" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="{{URL('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL('frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL('frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL('frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL('frontend/css/style.css')}}" type="text/css">
    <link rel="preload" href="{{URL('fonts/JameelNooriNastaleeq.ttf')}}" as="font" type="font/woff2" crossorigin="">



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="{% static 'css/stylesheet.css'%}" type="text/css">

    <style>
        .card {
            border-radius: 4px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            padding: 14px 80px 18px 36px;
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }

        .product__item:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }




        Cart Styles .main-section {
            background-color: #F8F8F8;
        }

        .dropdown {
            float: right;
            padding-right: 30px;
        }

        .btn {
            border: 0px;
            margin: 10px 0px;
            box-shadow: none !important;
        }

        .dropdown .dropdown-menu {
            padding: 20px;
            top: 30px !important;
            width: 350px !important;
            left: -110px !important;
            box-shadow: 0px 5px 30px black;
        }

        .total-header-section {
            border-bottom: 1px solid #d2d2d2;
        }

        .total-section p {
            margin-bottom: 20px;
        }

        .cart-detail {
            padding: 15px 0px;
        }

        .cart-detail-img img {
            width: 100%;
            height: 100%;
            padding-left: 15px;
        }

        .cart-detail-product p {
            margin: 0px;
            color: #000;
            font-weight: 500;
        }

        .cart-detail .price {
            font-size: 12px;
            margin-right: 10px;
            font-weight: 500;
        }

        .cart-detail .count {
            color: #C2C2DC;
        }

        .checkout {
            border-top: 1px solid #d2d2d2;
            padding-top: 15px;
        }

        .checkout .btn-primary {
            border-radius: 50px;
            height: 50px;
        }

        .dropdown-menu:before {
            content: " ";
            position: absolute;
            top: -20px;
            right: 50px;
            border: 10px solid transparent;
            border-bottom-color: #fff;
        }

        .thumbnail {
            position: relative;
            padding: 0px;
            margin-bottom: 20px;
        }

        .thumbnail img {
            width: 100%;
        }

        .thumbnail .caption {
            margin: 7px;
        }

        .page {
            margin-top: 50px;
        }

        .btn-holder {
            text-align: center;
        }

        .table>tbody>tr>td,
        .table>tfoot>tr>td {
            vertical-align: middle;
        }

        @media screen and (max-width: 600px) {
            table#cart tbody td .form-control {
                width: 20%;
                display: inline !important;
            }

            .actions .btn {
                width: 36%;
                margin: 1.5em 0;
            }

            .actions .btn-info {
                float: left;
            }

            .actions .btn-danger {
                float: right;
            }

            table#cart thead {
                display: none;
            }

            table#cart tbody td {
                display: block;
                padding: .6rem;
                min-width: 320px;
            }

            table#cart tbody tr td:first-child {
                background: #333;
                color: #fff;
            }

            table#cart tbody td:before {
                content: attr(data-th);
                font-weight: bold;
                display: inline-block;
                width: 8rem;
            }

            table#cart tfoot td {
                display: block;
            }

            table#cart tfoot td .btn {
                display: block;
            }



            @font-face {
                font-family: 'JameelNooriNastaleeq';
                src: url('/fonts/JameelNooriNastaleeq.ttf');
            }

            .body{
                font-family: "JameelNooriNastaleeq";
            }
        }
    </style>
</head>

<body>


    <div class="container-fluid">

        <!-- Header -->

        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__left">
                                <ul>
                                    <li><i class="fa fa-envelope"> {{$setting->admin_email}}</i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__right">
                                <div class="header__top__right__social">
                                    <a href="{{$setting->admin_facebook}}"><i class="fa fa-facebook"></i></a>
                                    <a href="{{$setting->admin_twitter}}"><i class="fa fa-twitter"></i></a>
                                    <a href="{{$setting->admin_linkedin}}"><i class="fa fa-linkedin"></i></a>
                                    <a href="{{$setting->admin_instagram}}"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                           <a href="{{URL('/')}}"> <img src="{{asset('/admin/'.$setting->logo)}}" class="d-block w-50" height="30%"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="{{URL('/home_page')}}">Home</a></li>

                                <li><a href="">Categories</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="{{URL('/nastaleekh')}}">{{$setting->category_1_name}}</a></li>
                                        <li><a href="{{URL('/sulus')}}">{{$setting->category_2_name}}</a></li>
                                        <li><a href="{{URL('/mix')}}">{{$setting->category_3_name}}</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{URL('/contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <!-- <li><a href="{{URL('/shopping_cart')}}"><i class="fa fa-shopping-cart"></i> <span>3</span></a></li> -->
                                <li><a href="{{URL('/cart')}}"><i class="fa fa-shopping-cart"></i><span></span> </a>

                            </ul>
                            <div class="header__top__right__auth">
                                <a href="{{URL('/login')}}"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>

        @yield('content')

        @yield('scripts')


        <!-- Footer Section Begin -->
        <footer class="footer spad">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__about__logo">
                                <a href="{{URL('/home_page')}}"><img src="{{asset('/admin/'.$setting->logo)}}" alt=""></a>
                            </div>
                            <ul>
                                <li>Address: {{$setting->admin_address}}</li>
                                <li>Phone: {{$setting->admin_phone}}</li>
                                <li>Email: {{$setting->admin_email}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                        <div class="footer__widget">
                            <h6>Useful Links</h6>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery infomation</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="{{URL('/contact')}}">Contact</a></li>
                                <li><a href="{{$setting->admin_address}}">Our Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__widget">
                            <h6>Join Our Newsletter Now</h6>
                            <p>Get E-mail updates about our latest shop and special offers.</p>
                            <form action="#">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit" class="site-btn">Subscribe</button>
                            </form>
                            <div class="footer__widget__social">
                                <a href="{{$setting->admin_facebook}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$setting->admin_twitter}}"><i class="fa fa-twitter"></i></a>
                                <a href="{{$setting->admin_linkedin}}"><i class="fa fa-linkedin"></i></a>
                                <a href="{{$setting->admin_instagram}}"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__copyright">
                            <div class="footer__copyright__text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="{{URL('/')}}" target="_blank">Khalid Arts</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                            <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Js Plugins -->
        <script src="{{URL('frontend/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{URL('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{URL('frontend/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{URL('frontend/js/jquery-ui.min.js')}}"></script>
        <script src="{{URL('frontend/js/jquery.slicknav.js')}}"></script>
        <script src="{{URL('frontend/js/mixitup.min.js')}}"></script>
        <script src="{{URL('frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{URL('frontend/js/main.js')}}"></script>

    </div>


</body>

</html>