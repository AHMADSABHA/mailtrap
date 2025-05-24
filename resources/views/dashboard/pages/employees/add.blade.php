@extends('dashboard.layout.layout')

@section('page-title', 'اضافة موظف')

@section('main-content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>اضافة موظف</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">القائمة</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('plans.employees.list.view') }}">الموظفين</a></li>
                            <li class="breadcrumb-item active">اضافة</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-custom">
                            <div class="card-header">
                                <h3 class="card-title">اضافة موظف</h3>
                            </div>

                            <form action="{{ route('plans.employees.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">الاسم</label>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Enter name" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">البريد الالكتروني</label>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="department_id">القسم</label>
                                        <select name="department_id" id="department_id" class="form-control" required>
                                            <option value="" disabled selected>اختر قسم</option>
                                            @foreach($departments as $department)
                                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="salary">الراتب</label>
                                        <input type="number" name="salary" id="salary" class="form-control" placeholder="Enter salary" step="0.01" required>
                                    </div> 
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">إضافة</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection