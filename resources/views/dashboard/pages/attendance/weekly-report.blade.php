@extends('dashboard.layout.layout')

@section('page-title', 'تقرير الحضور الاسبوعي')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <?php
\Carbon\Carbon::setLocale('ar');?>
                        <h1>تقرير الحضور الاسبوعي</h1>
                        <p>من {{ $startOfWeek->format('Y-m-d') }} إلى {{ $endOfWeek->format('Y-m-d') }}</p>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">القائمة</a></li>
                            <li class="breadcrumb-item active">تقرير الحضور الاسبوعي</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>أيام الغياب</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>
                                    @php
                                        // استبعاد أيام العطلة الأسبوعية (الجمعة والسبت)
                                        $absences = $employee->attendances->where('is_present', false)->filter(function ($attendance) {
                                            $dayOfWeek = \Carbon\Carbon::parse($attendance->date)->format('l');
                                            return $dayOfWeek !== 'Friday' && $dayOfWeek !== 'Saturday';
                                        });
                                    @endphp

                                    {{ $absences->count() }}
                                    @if($absences->count() > 0)
                                        ({{ $absences->pluck('date')->map(function($date) {
                                            return \Carbon\Carbon::parse($date)->translatedFormat('l'); // طباعة اسم اليوم بالعربية
                                        })->implode(', ') }})
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection