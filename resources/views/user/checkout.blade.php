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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{url('user')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
    <div class="container-fluid pt-5">
        <form action="{{url('user/order')}}" method="POST">
            @csrf
            <div class="row px-xl-5">
                
                    <div class="col-lg-8">
                        <div class="mb-4">
                            <h4 class="font-weight-semi-bold mb-4">Order Shipping</h4>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="Enter Name" name="name">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="number" placeholder="Enter Mobile" name="mobile">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Address </label>
                                    <input class="form-control" type="text" placeholder="Enter Address" name="address">
                                </div>

                            </div>

                        </div>
                        <div class="card border-secondary mb-5">

                            <div class="card-footer border-secondary bg-transparent">
                                <button  class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Take Order</button>
                            </div>
                        </div>

                    </div>
        </form>
                    <div class="col-lg-4">
                        <div class="card border-secondary mb-5">
                            <div class="card-header bg-secondary border-0">
                                <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                            </div>

                            <div class="card-body">
                                <h5 class="font-weight-medium mb-3">Products</h5>
                                @if(Session::has('cart'))

                                    @foreach (Session::get('cart') as $product)
                                            <tr>
                                                <div class="d-flex justify-content-between">
                                                    <p>{{$product['name']}}</p>
                                                    <p>{{$product['price']}}</p>
                                                </div>


                                            </tr>
                                    @endforeach
                                @endif

                                <hr class="mt-0">
                                <div class="d-flex justify-content-between mb-3 pt-1">
                                    <h6 class="font-weight-medium">Subtotal</h6>
                                    <h6 class="font-weight-medium">${{session()->get('subTotal')}}</h6>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-medium">Discount</h6>
                                    <h6 class="font-weight-medium">${{session()->get('discount')}}</h6>
                                </div>
                            </div>
                            <div class="card-footer border-secondary bg-transparent">
                                <div class="d-flex justify-content-between mt-2">
                                    <h5 class="font-weight-bold">Total</h5>
                                    <h5 class="font-weight-bold">${{session()->get('total')}}</h5>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>


    </div>
    <!-- Checkout End -->


    <!-- Footer Start -->
    @include('user.includes.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('includes.js')
</body>

</html>
