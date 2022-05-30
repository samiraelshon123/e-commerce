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
            <h1 class="font-weight-semi-bold text-uppercase mb-3"> Shop Details</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{url('user')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div style="width: 400px; height: 350px;" id="product-carousel" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner border">

                        <div style="width: 400px; height: 350px;" class="carousel-item active">
                            <img class="w-100 h-100" src="{{asset('images/'.$product->image)}}" alt="Image">
                        </div>

                    </div>


                </div>

            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold">{{$product->name}}</h3>
                
                <h3 class="font-weight-semi-bold mb-4">${{$product->price}}</h3>
                <p class="mb-4"> {{$product->about}}</p>
                <div class="d-flex mb-3">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Size:</p>
                    <form>
                        <div class="">
                            <label class="" for="">{{$product->size}}</label>
                        </div>

                    </form>
                </div>
                <div class="d-flex mb-4">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Color:</p>
                    <form>

                        <div class="">

                            <label class="" for="">{{$product->color}}</label>
                        </div>
                    </form>
                </div>
                <div class="d-flex align-items-center mb-4 pt-2">

                    <a href="{{ url("user/addToCart/".$product_id) }}" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</a>
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">About</a>
                    
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Product Description</h4>
                        <p>{{$product->descreption}}</p>

                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">Product About</h4>
                        <p>{{$product->about}}</p>
                        
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-4">1 review for "Colorful Stylish Shirt"</h4>
                                <div class="media mb-4">
                                    <img src="{{asset('img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                    <div class="media-body">
                                        <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                        <div class="text-primary mb-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Leave a review</h4>
                                <small>Your email address will not be published. Required fields are marked *</small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Your Rating * :</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="message">Your Review *</label>
                                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Your Name *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->





    <!-- Footer Start -->
    @include('user.includes.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('user.includes.js')
</body>

</html>
