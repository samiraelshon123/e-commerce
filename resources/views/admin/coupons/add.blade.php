@extends('layouts.admin')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Coupon Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">



<div class="card card-primary" style="width: 750px;">
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
        <h3 class="card-title">Add Coupon</h3>
    </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form action="{{url('admin/table_add_coupon')}}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="card-body">

            <div class="form-group">
                <label for="exampleInputEmail1">Code Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="code_name" placeholder="Enter Code Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Discount</label>
                <input type="integer" class="form-control" id="exampleInputEmail1" name="discount" placeholder="Enter Discount">
            </div>


            

        </div>
                <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @endsection
