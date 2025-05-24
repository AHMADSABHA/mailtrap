@extends('dashboard.layout.layout')

@section('page-title', 'التفقد')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Attendance for {{ \Carbon\Carbon::now()->format('Y-m-d') }}</h1> <!-- عرض تاريخ اليوم -->
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Attendance</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Card -->
                        <div class="card card-primary card-custom">
                            <div class="card-header">
                                <h3 class="card-title">الحضور اليومي({{ \Carbon\Carbon::now()->format('Y-m-d') }})</h3>
                            </div>
                            <style>
                                .card-custom {
                                    width: 80%;
                                    margin-left: auto;
                                    margin-right: auto;
                                }
                            </style>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('attendance.store') }}" method="POST">
                                    @csrf
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>الاسم</th>
                                                <th>موجود</th>
                                                <th>غائب</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($employees as $employee)
                                                <tr>
                                                    <td>{{ $employee->id }}</td>
                                                    <td>{{ $employee->name }}</td>
                                                    <td>
                                                        <input type="radio" name="attendance[{{ $employee->id }}][is_present]" value="1" required>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="attendance[{{ $employee->id }}][is_present]" value="0" required>
                                                    </td>
                                                    <input type="hidden" name="attendance[{{ $employee->id }}][employee_id]" value="{{ $employee->id }}">
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-primary">تأكيد الحضور</button>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection