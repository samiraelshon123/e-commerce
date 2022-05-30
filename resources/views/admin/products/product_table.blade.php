@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product Table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Product Table</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @if(session('delete_message'))
        <h1 style="color: rgb(73, 208, 73); font-size: 25px">{{session('delete_message')}}</h1>
        @endif

        @if(session('edit_message'))
        <h1 style="color: rgb(73, 208, 73); font-size: 25px">{{session('edit_message')}}</h1>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <div class="card"style="width: 1230px;">

                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="card-footer">
                                <a href="{{url('admin/add_product')}}" class="btn btn-primary">Add New</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th>Product Name</th>
                                        <th>Category ID</th>
                                        <th>Price</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Photo</th>
                                        <th>Edit</th>
                                        <th>Delete</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($data as $value)
                                    <tr>

                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->category_id }}</td>
                                        <td>{{ $value->price }}</td>
                                        <td>{{ $value->color}}</td>
                                        <td>{{ $value->size}}</td>
                                        <td>
                                            <img src="{{asset('images/'.$value->image)}}" width="100px" height="100px"
                                                alt="">
                                        </td>

                                        <td>
                                            <a class="" href="{{ url('admin/edit_product/'.$value->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="" href="{{ url('admin/delete_product/'.$value->id) }}">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>

                                    </tr>
                                    @endforeach

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div>

                </div>


            </div>

        </div><!-- /.container-fluid -->
    </section>

<!-- /.content-wrapper -->
@endsection
