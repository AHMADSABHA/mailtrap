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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- loader-->
    <link href="{{ asset('dashboard-assets/css/pace.min.css') }}" rel="stylesheet" />

  <title>صفحة الدخول</title>
  <style>
    body {
      background: linear-gradient(to right, #007bff, #6610f2);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .card {
      border: none;
      border-radius: 20px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
    .btn-primary {
      background: linear-gradient(to right, #007bff, #6610f2);
      border: none;
    }
    .btn-primary:hover {
      background: linear-gradient(to right, #6610f2, #007bff);
    }
    .form-control {
      border-radius: 30px;
    }
    .welcome-icon {
      font-size: 4rem;
      color: #6610f2;
    }
    .animate-fade {
      animation: fadeIn 1.5s ease-in-out;
    }
  </style>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper animate__animated animate__fadeIn">
    
       <!--start content-->
       <main class="authentication-content mt-5">
        <div class="container-fluid">
         <div class="row">
          <div class="col-12 col-lg-6 mx-auto"> <!-- تم تغيير col-lg-4 إلى col-lg-6 -->
            <div class="card shadow rounded-5 overflow-hidden animate__animated animate__zoomIn">
                  <div class="card-body p-4 p-sm-5">
                   <center> 
                     <i class="bi bi-person-circle welcome-icon"></i>
                     <h5 class="card-title mt-3">تسجيل الدخول</h5>
                   </center>
                    
                    <form class="form-body mt-4" method="POST" action="{{ route('auth.action.view') }}" >
                      @csrf

                      @if ($errors->any())
                      <div class="alert alert-danger animate__animated animate__shakeX">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                     
                      <div class="row g-3">
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">البريد الالكتروني</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input  name="email" type="email" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email Address">
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">كلمة المرور</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                               
                              </div>
                              <input name="password" type="password" class="form-control radius-30 ps-5 pe-5" id="inputChoosePassword" placeholder="Enter Password">
                              <button type="button" class="btn btn-light position-absolute top-50 translate-middle-y" id="togglePassword" style="right: 10px; border: none; padding: 0; background: transparent;">
                                <i class="bi bi-eye-fill" id="togglePasswordIcon"></i>
                              </button>
                            </div>
                          </div>
                         
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">تسجيل الدخول</button>
                            </div>
                          </div>
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

  <script>
    document.getElementById('togglePassword').addEventListener('click', function () {
      const passwordField = document.getElementById('inputChoosePassword');
      const passwordIcon = document.getElementById('togglePasswordIcon');
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        passwordIcon.classList.remove('bi-eye-fill');
        passwordIcon.classList.add('bi-eye-slash-fill');
      } else {
        passwordField.type = 'password';
        passwordIcon.classList.remove('bi-eye-slash-fill');
        passwordIcon.classList.add('bi-eye-fill');
      }
    });
  </script>

</body>

</html>