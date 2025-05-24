@extends('dashboard.layout.layout')

@section('page-title', 'طلب اجازة')

@section('main-content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>طلب اجازة</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('leaves.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="employee_id">اختر الموظف</label>
                        <select name="employee_id" class="form-control" required>
                            <option value="">-- اختر موظف --</option>
                            @foreach($employees as $employee)
                                <option value="{{ $employee->id }}">
                                    {{ $employee->name }} (الرقم الوظيفي: {{ $employee->id }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="start_date">بداية الاجازة</label>
                        <input type="date" name="start_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="days">عدد الايام</label>
                        <input type="number" name="days" class="form-control" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="reason">سبب الاجازة</label>
                        <textarea name="reason" class="form-control" rows="3" placeholder="Enter the reason for your leave"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">تأكيد الطلب</button>
                </form>
            </div>
        </section>
    </div>
@endsection