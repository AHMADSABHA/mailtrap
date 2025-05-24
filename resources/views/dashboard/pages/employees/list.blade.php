
@extends('dashboard.layout.layout')
@section('page-title', 'قائمة الموظفين')
@section('main-content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-10" style="margin-left: -20px;">
                        <div class="card card-primary card-custom">
                            <div class="card-header">
                                <h3 class="card-title">قائمة الموظفين</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>الرقم </th>
                                            <th>الاسم </th>
                                            <th>البريد  الالكتروني</th>
                                            <th>القسم</th>
                                            <th>عدد الغيابات</th>
                                            <th>الاجراء</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($employees as $employee)
                                            <tr>
                                                <td>{{  $employee->id  }}</td>
                                                <td>{{ $employee->name }}</td>
                                                <td>{{ $employee->email }}</td>
                                                <td>{{ $employee->department ? $employee->department->name : 'لايوجد قسم' }}</td>
                                                <td>{{ $employee->absenceCount() }}</td>
                                                <td>
                                                 
                                                    <a href="{{ route('plans.employees.view', ['id' => $employee->id]) }}" class="btn btn-outline-success btn-sm w-auto d-flex align-items-center">
                                                        <i class="bi bi-arrow-right-circle me-1"></i> نقل
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection