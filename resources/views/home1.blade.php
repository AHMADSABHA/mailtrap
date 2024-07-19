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
    <title>Welcome Page</title>
    <!-- Include Bootstrap CSS -->
    <link href="{{ asset('dashboard-assets/css/app.css') }}" rel="stylesheet">
</head>
<body class="forgot-password">
    <div class="container text-center mt-5">
        <img src="{{ asset('dashboard-assets/images/mobile2.png') }}" alt="Mobile Image" class="img-fluid-small">
        <h1 class="mt-3">Welcome to My Website (MAIL TRAP )</h1>
        <p class="lead">Get started by logging in:</p>
        <a href="{{ route('auth.view') }}" class="btn btn-primary">Login</a>
    </div>
    <!-- Include Bootstrap JS (optional) -->
    <script src="{{ asset('dashboard-assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('dashboard-assets/js/pace.min.js') }}"></script>

</body>
</html>
