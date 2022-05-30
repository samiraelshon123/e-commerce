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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{url('user')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @if(Session::has('cart'))

                            @foreach (Session::get('cart') as $product)
                                    <tr>

                                        <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"> {{$product['name']}}</td>
                                        <td class="align-middle">{{$product['price']}}</td>
                                        <td class="align-middle">
                                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-sm btn-primary btn-minus" >
                                                    <a  href="{{url('user/quantity_minus/'.$product['id'])}}"><i class="fa fa-minus"></i></a>
                                                    </button>
                                                </div>
                                                <input type="text" class="form-control form-control-sm bg-secondary text-center" value="{{$product['quantity']}}">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-sm btn-primary btn-plus">
                                                        <a href="{{url('user/quantity_plus/'.$product['id'])}}"><i  class="fa fa-plus"></i></a>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">{{$product['productTotal']}}</td>
                                        <td class="align-middle"><button class="btn btn-sm btn-primary"><a class="btn btn-sm btn-primary" href= "{{ url('user/deleteChart/'.$product['id'])}}" ><i class="fa fa-times"></i></a></button></td>


                                    </tr>
                            @endforeach
                        @endif



                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-5" action="{{url('user/coupon')}}" method="POST">
                    @csrf

                    <div class="input-group">
                        <input type="text" name="coupon" class="form-control p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>


                </form>
                <form action="{{url('user/checkout')}}" method="POST">
                    @csrf
                    <div class="card border-secondary mb-5">
                        <div class="card-header bg-secondary border-0">
                            <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3 pt-1">
                                <h6 class="font-weight-medium">SubTotal</h6>
                                <h6 class="font-weight-medium">${{session()->get('subTotal')}}</h6>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3 pt-1">
                                <h6 class="font-weight-medium">Discount</h6>
                                <h6 class="font-weight-medium">${{session()->get('discount')}}</h6>
                            </div>

                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h5 class="font-weight-bold">Total</h5>
                                <h5 class="font-weight-bold">${{session()->get('total')}}</h5>
                            </div>
                            <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Cart End -->


    <!-- Footer Start -->
    @include('user.includes.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    @include('includes.js')
</body>

</html>
