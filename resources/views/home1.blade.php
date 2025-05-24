<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('dashboard-assets/images/favicon-32x32.png') }}" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('dashboard-assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard-assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard-assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard-assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- loader-->
    <link href="{{ asset('dashboard-assets/css/pace.min.css') }}" rel="stylesheet" />
    <title>صفحة الترحيب</title>
    <style>
        body {
            background: linear-gradient(to right, rgba(106, 17, 203, 0.8), rgba(37, 117, 252, 0.8)), url('{{ asset('dashboard-assets/images/mobile.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff; 
        }
        .welcome-container {
            margin-top: 5rem;
            text-align: center;
            background: rgba(0, 0, 0, 0.5); 
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }
        .welcome-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ffffff;
        }
        .welcome-text {
            font-size: 1.2rem;
            color: #e0e0e0;
        }
        .btn-custom {
            font-size: 1.5rem;
            padding: 10px 30px;
            width: auto;
            background: linear-gradient(to right, #2575fc, #6a11cb); 
            border: none;
            color: #fff;
        }
        .btn-custom:hover {
            background: linear-gradient(to right, #6a11cb, #2575fc);      
        }
    </style>
</head>
<body class="forgot-password">
    <div class="container text-center welcome-container">

        <h1 class="mt-3 welcome-title">أهلا بكم في موقعنا الالكتروني (MAIL TRAP)</h1>
        <p class="lead welcome-text">لتستمتعوا بخدمتنا يجب القيام بتسجيل الدخول</p>
        
        
        <a href="{{ route('auth.view') }}" class="btn btn-primary btn-custom">
            <i class="bi bi-box-arrow-in-right"></i> قم بتسجيل الدخول
        </a>
    </div>
   
    <script src="{{ asset('dashboard-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/pace.min.js') }}"></script>
</body>
</html>
