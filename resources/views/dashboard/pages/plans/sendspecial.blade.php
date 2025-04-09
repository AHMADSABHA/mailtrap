
@extends('dashboard.layout.layout')

@section('page-title', 'Send Email')

@section('main-content')
<d class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ADDMAILES Action</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sections</li>
                        <li class="breadcrumb-item active">ADDMAILES Action</li>
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
    <h3 class="card-title">Send Email</h3>
</div>
    <style>.card-custom{
        width:80%;
        margin-left:0 ;
    }</style>
    <form action="{{ route('plans.send.email') }}" method="POST">
        @csrf
        <div class="card-body card-custom">
        <div class="form-group">
            <label for="email">Select Email:</label>
            <select name="email" id="email" class="form-control" required>
                <option value="">-- Select an Email --</option>
                @foreach ($emails as $email)
                    <option value="{{ $email->email }}">{{ $email->name }} ({{ $email->email }})</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="title">Email Title:</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid  @enderror" value="{{old('title')}}">
            @error('title')
            <span id="exampleInputEmail1-error"
                class="error invalid-feedback">{{ $message }}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="body">Email Body:</label>
            <textarea name="body" id="body" class="form-control" rows="5" required>{{old('body')}}</textarea>
            @error('body')
            <span id="exampleInputEmail1-error"
                class="error invalid-feedback">{{ $message }}</span>
        @enderror
        </div>
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Send Email</button>
        </div>
    </form>
</div>
</div>
</div>
</section>
</div>
</div>
@endsection