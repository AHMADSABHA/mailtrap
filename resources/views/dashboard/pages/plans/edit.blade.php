@extends('dashboard.layout.layout')

@section('page-title', 'تعديل بريد');

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                       
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">القائمة</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('plans.list.view') }}">البريد</a></li>
                            <li class="breadcrumb-item active">تعديل بريد</li>
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
                                <h3 class="card-title">تعديل</h3>
                            </div>
                          
                            <form action="{{ route('plans.update', ['id' => $plan['id']]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                   
                                    <div class="form-group">
                                        <label for="title">الاسم</label>
                                        <textarea name="name" class="form-control @error('name') is-invalid  @enderror" id="title"
                                            placeholder="Enter name">{{ old('name', $plan['name']) }}</textarea>
                                        @error('title')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">البريد الالكتروني</label>
                                        <input name="email" type="text"
                                            class="form-control @error('email') is-invalid  @enderror" id="email"
                                            placeholder="Enter email" value="{{ old('email', $plan['email']) }}">
                                        @error('content')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    
                                       
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">تعديل </button>
                                </div>
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