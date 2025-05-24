@extends('dashboard.layout.layout')

@section('page-title', 'تعديل موظف')

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>تعديل بيانات موظف</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">القائمة</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('plans.employees.list.view') }}">الموظفين</a></li>
                            <li class="breadcrumb-item active">تعديل</li>
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
                    <style>
                        .card-custom {
                            width: 80%;
                            margin-left: 0;
                        }
                    </style>
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary card-custom">
                            <div class="card-header">
                                <h3 class="card-title">تعديل بيانات موظف</h3>
                            </div>

                            <!-- نموذج تعديل بيانات الموظف ونقله -->
                            <form action="{{ route('plans.employees.transfer', ['id' => $employee['id']]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <!-- تعديل الاسم -->
                                    <div class="form-group">
                                        <label for="name">الاسم</label>
                                        <input name="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" id="name"
                                            placeholder="Enter name" value="{{ old('name', $employee['name']) }}">
                                        @error('name')
                                            <span id="name-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- تعديل البريد الإلكتروني -->
                                    <div class="form-group">
                                        <label for="email">البريد الالكتروني</label>
                                        <input name="email" type="text"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            placeholder="Enter email" value="{{ old('email', $employee['email']) }}">
                                        @error('email')
                                            <span id="email-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- نقل الموظف -->
                                    <div class="form-group">
                                        <label for="department_id">القسم</label>
                                        <select name="department_id" id="department_id" class="form-control" required>
                                            @foreach($departments as $department)
                                                <option value="{{ $department->id }}" {{ $employee->department_id == $department->id ? 'selected' : '' }}>
                                                    {{ $department->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
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