@extends('dashboard.layout.layout')

@section('page-title', 'ارسال ايميلات من قسم');

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
                            <li class="breadcrumb-item"><a href="#">القائمة</a></li>
                            <li class="breadcrumb-item active">الاقسام</li>
                            <li class="breadcrumb-item active"> الاقسام</li>
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
                                <h3 class="card-title">ارسال</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <style>.card-custom{
                                width:80%;
                                margin-left:0 ;
                            }</style>
                            <form action="{{ route('mailer.send') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body card-custom">
                                    <div class="form-group">
                                        <label for="department_id">اختر قسم</label>
                                        <select name="department_id" class="form-control" required>
                                            <option value="">-- اختر قسم --</option>
                                            @foreach($departments as $department)
                                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">العنوان</label>
                                        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                            placeholder="Enter title" value="{{ old('title') }}">
                                        @error('title')
                                            <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="body">المحتوى</label>
                                        <textarea name="body" rows="5" class="form-control">{{ old('body') }}</textarea>
                                        @error('body')
                                            <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">إرسال</button>
                                </div>
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