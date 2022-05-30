<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    @include('user.includes.css')
</head>

<body>
    <!-- Topbar Start -->
    @include('user.includes.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                       
                        @foreach ($category as $value)
                        <a href="{{url('user/shop/'.$value->id)}}" class="nav-item nav-link">{{$value->name}}</a>
                        @endforeach
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">

                            <a href="{{url('user')}}" class="nav-item nav-link">Home</a>
                            <a href="{{url('user/contact')}}" class="nav-item nav-link">Contact</a>
                            <a href="{{url('user/viewCart')}}" class="nav-item nav-link">View Cart</a>
                            <a href="{{url('user/viewProucts')}}" class="nav-item nav-link">View Products</a>
                            <a href="{{url('user/viewOrders')}}" class="nav-item nav-link">View My Orders</a>


                        </div>

                    </div>
                    <div class="navbar-nav ml-auto py-0">

                        <div class="account">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="img/iconProfilePicture.7975761176487dc62e25536d9a36a61d.png" alt="">
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                    <div class="profile">
                                        <div class="text">
                                            
                                            <div class="hello">
                                                <div class="box">
                                                    <span>Hello</span>
                                                </div>
                                                <div class="box">
                                                    <h4>{{$user_name}}</h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <li>
                                        <a class="dropdown-item" href="{{url('user/viewCart')}}">
                                            <i class="fa-solid fa-right-from-bracket"></i>
                                            <span>View Cart</span>
                                        </a>

                                    </li>
                                    
                                    <li>
                                        <a class="dropdown-item" href="{{url('user/viewOrders')}}">
                                            <i class="fa-solid fa-right-from-bracket"></i>
                                            <span>View My Orders</span>
                                        </a>

                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="{{url('logout')}}">
                                            <i class="fa-solid fa-right-from-bracket"></i>
                                            <span>Log Out</span>
                                        </a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        @foreach ($image as $value)
                             @if ($loop->first)
                             <div class="carousel-item active" style="height: 410px;">
                                <img class="img-fluid" src="{{asset('images/'.$value->name)}}" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">{{$value->title}}</h3>

                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="carousel-item" style="height: 410px;">
                                <img class="img-fluid" src="{{asset('images/'.$value->name)}}" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">{{$value->title}}</h3>

                                    </div>
                                </div>
                            </div>
                             @endif

                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar End -->



    <!-- Footer Start -->
    @include('user.includes.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('user.includes.js')
</body>

</html>
