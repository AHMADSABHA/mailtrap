@extends('dashboard.layout.layout')

@section('page-title','اضافة قسم جديد')

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>اضافة قسم جديد</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">القائمة</a></li>
                            <li class="breadcrumb-item active">الاقسام</li>
                            <li class="breadcrumb-item active">اضافة</li>
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
                        <div class="card card-primary card-custom">
                            <div class="card-header">
                                <h3 class="card-title">اضافة قسم جديد</h3>
                            </div>
                            <style>.card-custom{
                                width:80%;
                                margin-left:0 ;
                            }</style>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('plans.department.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body ">
                                    
                                    <div class="form-group">
                                        <label for="name">اسم القسم</label>
                                        <input name="name" type="text"
                                            class="form-control @error('name') is-invalid  @enderror" id="name"
                                            placeholder="Enter name" value="">
                                        @error('name')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                   

                                    </div>
                                </div>
                                
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">تأكيد</button>
                                </div>
                            </form>
                            <div class="mb-3">
                                
                               
                              </div>
                            
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