@extends('dashboard.layout.layout')

@section('page-title', 'استيرادايميلات')

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>اضافة ايميلات</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Sections</li>
                            <li class="breadcrumb-item active">ADDMAILES Action</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- column -->
                    <style>.card-custom{
                        width:80%;
                        margin-left:0 ;
                    }</style>
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary card-custom">
                            <div class="card-header">
                                <h3 class="card-title">استيراد</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('plans.import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input  class="form-control" type="file" name="file" id="formFile" required>
                                <br/>
                                &nbsp;&nbsp;     <button type="submit" class="btn btn-success">استيراد</button>
                            </form>
                        <!-- /.card -->

                    </div>
                    <!--/.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection