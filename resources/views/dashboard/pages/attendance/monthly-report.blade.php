@extends('dashboard.layout.layout')

@section('page-title', 'تقرير الحضور الشهري')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>تقرير التفقد الشهري</h1>
                        <p>من {{ $startOfMonth->format('Y-m-d') }} إلى {{ $endOfMonth->format('Y-m-d') }}</p>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">القائمة</a></li>
                            <li class="breadcrumb-item active">التقرير الشهري</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Filter Form -->
        <section class="content">
            <div class="container-fluid">
                <form method="GET" action="{{ route('attendance.monthly.report') }}">
                    <div class="row">
                        <div class="col-md-4">
                            <select name="department_id" class="form-control">
                                <option value="">-- اختر قسم --</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}" {{ request('department_id') == $department->id ? 'selected' : '' }}>
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">تصفية</button>
                        </div>
                    </div>
                </form>
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
                            <th>القسم</th>
                            <th>أيام الحضور</th>
                            <th>ايام الغياب</th>
                            <th>السبب</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                            @php
                                $totalWorkingDays = $startOfMonth->diffInDaysFiltered(function ($date) {
                                    return !in_array($date->dayOfWeek, [5, 6]); // استثناء الجمعة والسبت
                                }, $endOfMonth);

                                $daysPresent = $employee->attendances->where('is_present', true)->count();
                                $daysAbsent = $totalWorkingDays - $daysPresent;
                            @endphp
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->department->name ?? 'No Department' }}</td>
                                <td>{{ $daysPresent }}</td>
                                <td>{{ $daysAbsent }}</td>
                                <td>
                                    @php
                                        $leaves = $employee->leaves->filter(function ($leave) use ($startOfMonth, $endOfMonth) {
                                            return $leave->start_date >= $startOfMonth->format('Y-m-d') &&
                                                   $leave->start_date <= $endOfMonth->format('Y-m-d');
                                        });
                                    @endphp

                                    @if($leaves->isNotEmpty())
                                        <ul class="list-group">
                                            @foreach($leaves as $leave)
                                                <li class="list-group-item">
                                                    <strong>التاريخ:</strong> {{ $leave->start_date }}
<br/>
                                                    <strong>السبب:</strong> {{ $leave->reason ?? 'N/A' }}<br>
                                                   <br/>
                                                    <strong>عدد الايام:</strong> {{ $leave->days }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <span class="text-muted">لايوجد نتائج</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Attendance Chart -->
        <div class="container mt-5">
            <canvas id="attendanceChart"></canvas>
        </div>

        <script>
            const ctx = document.getElementById('attendanceChart').getContext('2d');
            const attendanceChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($employees->pluck('name')), // أسماء الموظفين
                    datasets: [
                        {
                            label: 'Days Present',
                            data: @json($employees->map(fn($e) => $e->attendances->where('is_present', true)->count())),
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Days Absent',
                            data: @json($employees->map(fn($e) => $totalWorkingDays - $e->attendances->where('is_present', true)->count())),
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>