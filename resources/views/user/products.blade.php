<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
                                            <div class="box">
                                                <img src="img/iconProfilePicture.7975761176487dc62e25536d9a36a61d.png"
                                                    alt="">
                                            </div>
                                            <div class="hello">
                                                <div class="box">
                                                    <span>Hello</span>
                                                </div>
                                                <div class="box">
                                                    <h4>Islam Bahaa</h4>
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
                                        <a class="dropdown-item" href="{{url('user/viewProucts')}}">
                                            <i class="fa-solid fa-right-from-bracket"></i>
                                            <span>View Products</span>
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

            </div>
        </div>
    </div>


    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Products</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{url('user')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Products</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            
                            <div class="dropdown ml-4">

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($products as $value)

                    
                    <div  class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        
                        <div style="width: 300px; height: 400px;" class="card product-item -0 mb-4">
                            <center>
                                <div style="width: 200px; height: 200px;" class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <a href="{{ url("user/details/".$value->id) }}">
                                        <img  class="img-fluid w-100" src="{{asset('images/'.$value->image)}}"  alt="">
                                    </a>
                                </div>
                            </center>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{ $value->name }}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>${{ $value->price }}</h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="{{ url("user/details/".$value->id) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="{{url("user/addToCart/".$value->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                <a href="{{ url("user/viewCart") }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Cart</a>
                            </div>
                        </div>
                    </div>
                
                    @endforeach



                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    @include('user.includes.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    @include('user.includes.js')
</body>

</html>