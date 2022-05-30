@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products Table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Products Table</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <div class="card"style="width: 1230px;">

                        <!-- /.card-header -->
                        <div class="card-body">


                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th>Products Name</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key=>$product)
                                    <tr>
                                        <td>{{$product}}</td>
                                        <td>{{$quantity[$key]}}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <form action="{{url('admin/status/'.$product_id)}}" method="POST">
                            @csrf
                            <label for="cars">Choose Status:</label>

                            <select name="status" id="">
                            <option value="Charged">Charged</option>
                            <option value="Recieved">Recieved</option>
                            <option value="Not Charged">Not Charged</option>
                            <option value="Not Recieved">Not Recieved</option>
                            </select>
                            <button>Submit</button>
                        </form>
                        </div>

                </div>


            </div>

        </div><!-- /.container-fluid -->
    </section>

<!-- /.content-wrapper -->
@endsection
