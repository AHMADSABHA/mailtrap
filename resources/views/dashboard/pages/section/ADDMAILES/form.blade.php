@extends('dashboard.layout.layout')

@section('page-title', 'Process Section');

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
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">اضافة ايميلات</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    
                                    <div class="form-group">
                                        <label for="name">الاسم</label>
                                        <input name="name" type="text"
                                            class="form-control @error('name') is-invalid  @enderror" id="name"
                                            placeholder="Enter name" value="{{ old('name', $sectionData['name']) }}">
                                        @error('name')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="email">البريد الالكتروني</label>
                                        <input name="email" type="text"
                                            class="form-control @error('email') is-invalid  @enderror" id="email"
                                            placeholder="Enter email" value="{{ old('email', $sectionData['email']) }}">
                                        @error('email')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>
                                
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">تاكيد</button>
                                </div>
                            </form>
                            <h1> استيراد</h1>
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="text_file" required>
                                <button type="submit">استيراد</button>
                            </form>
                        </div>
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