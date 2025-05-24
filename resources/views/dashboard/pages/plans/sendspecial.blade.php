
@extends('dashboard.layout.layout')

@section('page-title', 'ارسال بريد مخصص')

@section('main-content')
<d class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>اضافة</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">القائمة</a></li>
                        <li class="breadcrumb-item active">الاقسام</li>
                        <li class="breadcrumb-item active">اضافة</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
        <div class="card-header">
    <h3 class="card-title">ارسال بريد</h3>
</div>
    <style>.card-custom{
        width:80%;
        margin-left:0 ;
    }</style>
    <form action="{{ route('plans.send.email') }}" method="POST">
        @csrf
        <div class="card-body card-custom">
        <div class="form-group">
            <label for="email">اختر بريد الكتروني:</label>
            <select name="email" id="email" class="form-control" required>
                <option value="">-- اختر بريد --</option>
                @foreach ($emails as $email)
                    <option value="{{ $email->email }}">{{ $email->name }} ({{ $email->email }})</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="title">عنوان البريد:</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid  @enderror" value="{{old('title')}}">
            @error('title')
            <span id="exampleInputEmail1-error"
                class="error invalid-feedback">{{ $message }}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="body">محتوى البريد:</label>
            <textarea name="body" id="body" class="form-control" rows="5" required>{{old('body')}}</textarea>
            @error('body')
            <span id="exampleInputEmail1-error"
                class="error invalid-feedback">{{ $message }}</span>
        @enderror
        </div>
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">ارسال</button>
        </div>
    </form>
</div>
</div>
</div>
</section>
</div>
</div>
@endsection