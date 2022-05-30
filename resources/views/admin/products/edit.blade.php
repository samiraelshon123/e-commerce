@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add New</h1>
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
    <div class="container-fluid">
        <div class="row">


            <div class="card card-primary" style="width: 500px;">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card-header">
                    <h3 class="card-title">Add Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form action="{{ url('admin/update_product/'.$product->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" value="{{$product->name}}"
                                id="exampleInputEmail1" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="text" class="form-control" value="{{$product->price}}"
                                id="exampleInputEmail1" name="price" placeholder="Enter price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Color</label>
                            <input type="text" class="form-control" value="{{$product->color}}"
                                id="exampleInputEmail1" name="color" placeholder="Enter color">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Size</label>
                            <input type="text" class="form-control" value="{{$product->size}}"
                                id="exampleInputEmail1" name="size" placeholder="Enter size">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">About</label>
                            <input type="text" class="form-control" value="{{$product->about}}"
                                id="exampleInputEmail1" name="about" placeholder="Enter about">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Descreption</label>
                            <input type="text" class="form-control" value="{{$product->descreption}}"
                                id="exampleInputEmail1" name="descreption" placeholder="Enter descreption">
                        </div>
                        <div class="form-group">
                            <label>Select Category</label>
                            <select class="form-control select2" name="category_id" style="width: 100%;">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>


        </div>

    </div><!-- /.container-fluid -->
</section>
<!-- /.content-wrapper -->
@endsection
