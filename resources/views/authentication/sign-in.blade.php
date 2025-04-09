<!doctype html>
<html lang="en" class="semi-dark" dir="rtl">

<head>
  <!-- Required meta tags -->
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

  <title>LOGIN PAGE</title>
</head>

<body class="bg-login">

  <!--start wrapper-->
  <div class="wrapper">
    
       <!--start content-->
       <main class="authentication-content mt-5">
        <div class="container-fluid">
         <div class="row">
          <div class="col-12 col-lg-4 mx-auto">
            <div class="card shadow rounded-5 overflow-hidden">
                  <div class="card-body p-4 p-sm-5">
                   <center> <h5 class="card-title">SIGN IN</h5></center>
                    {{-- <p class="card-text mb-5">See your growth and get consulting support!</p> --}}
                    <form class="form-body" method="POST" action="{{ route('auth.action.view') }}" >
                      @csrf

                      @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                      {{-- <div class="d-grid">
                        <a class="btn btn-white radius-30" href="javascript:;"><span class="d-flex justify-content-center align-items-center">
                            <img class="me-2" src="{{ asset('dashboard-assets/images/icons/search.svg') }}" width="16" alt="">
                            <span>Sign in with Google</span>
                          </span>
                        </a>
                      </div> --}}
                      {{-- <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
                        <hr>
                      </div> --}}
                        <div class="row g-3">
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input  name="email" type="email" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email Address">
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input name="password" type="password" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Enter Password">
                            </div>
                          </div>
                          <div class="col-6">
                            {{-- <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                              <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                            </div> --}}
                          </div>
                          {{-- <div class="col-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
                          </div> --}}
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                            </div>
                          </div>
                         
                          {{-- <div class="col-12">
                            <p class="mb-0">Don't have an account yet? <a href="authentication-signup.html">Sign up here</a></p>
                          </div> --}}
                        </div>
                    </form>
                    <br/>
                    
                 </div>
            </div>
          </div>
        </div>
        </div>
       </main>
        
       <!--end page main-->

  </div>
  <!--end wrapper-->


  <!--plugins-->
  <script src="{{ asset('dashboard-assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('dashboard-assets/js/pace.min.js') }}"></script>


</body>

</html>