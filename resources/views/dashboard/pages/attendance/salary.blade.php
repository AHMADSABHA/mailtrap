@extends('dashboard.layout.layout')

@section('page-title', 'تقرير الرواتب')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>التفقد ل {{ \Carbon\Carbon::now()->format('Y-m-d') }}</h1> <!-- عرض تاريخ اليوم -->
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">القائمة</a></li>
                            <li class="breadcrumb-item active">الرواتب</li>
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
                                <h3 class="card-title">تقرير الرواتب</h3>
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
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الاسم</th>
                                            <th>الراتب الاصلي</th>
                                            <th>مجموع الخصم</th>
                                            <th>الراتب النهائي</th>
                                            <th>الغياب</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($employees as $employee)
                                            <tr>
                                                <td>{{ $employee->id }}</td>
                                                <td>{{ $employee->name }}</td>
                                                <td>{{ $employee->salary ?? 'N/A' }}</td>
                                                <td>{{ $employee->total_deduction ?? 'N/A' }}</td>
                                                <td>{{ $employee->final_salary ?? 'N/A' }}</td>
                                                <td>
                                                    <ul>
                                                        @if(!empty($employee->absences_with_deductions) && $employee->absences_with_deductions->isNotEmpty())
                                                            @foreach($employee->absences_with_deductions as $absence)
                                                            @php
                                                            $dayOfWeek = \Carbon\Carbon::parse($absence['date'])->format('l');
                                                        @endphp
                                                        @if($dayOfWeek !== 'Friday' && $dayOfWeek !== 'Saturday')
                                                            <li>
                                                                التاريخ: {{ $absence['date'] }}, الخصم: {{ $absence['deduction'] }}
                                                            </li>
                                                        @endif
                                                            @endforeach
                                                        @else
                                                            <li>لايوجد غياب</li>
                                                        @endif
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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