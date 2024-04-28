<!doctype html>
<html lang="en" class="light-theme">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="{{asset('public/backend/assets/css/pace.min.css')}}" rel="stylesheet" />
  <script src="{{asset('public/backend/assets/js/pace.min.js')}}"></script>
  <link rel="shortcut icon" href="{{asset('public/logo/logo-2.png')}}" >
  <!--plugins-->
  <link href="{{asset('public/backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{asset('public/backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/backend/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset('public/backend/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('public/backend/assets/css/icons.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.7.2/font/bootstrap-icons.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">

  <title>Mr 4 Services</title>
</head>

<body>

  <div class="login-bg-overlay au-sign-in-basic"></div>

  <!--start wrapper-->
  <div class="wrapper">
    
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
          <div class="card radius-10">
            <div class="card-body p-4">
              <div class="text-center">
                <h4>Sign In</h4>
                <p>Sign In to your account</p>
              </div>
              <form class="form-body row g-3" method="post" action="{{route('login')}}">
                @csrf
                <div class="col-12 col-lg-12">
                  
                </div>
                
                <div class="col-12">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="inputEmail" placeholder="abc@example.com">
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Your password">
                </div>
                
                <div class="col-12 col-lg-12">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-dark">Sign In</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="my-5">
      <div class="container">
        <div class="text-center">
          <p class="mb-0">Copyright © 2023 Constructions.</p>
        </div>
      </div>
    </footer>
  </div>
  <!--end wrapper-->


</body>
</html>