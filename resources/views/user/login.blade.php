
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>MEDIC_BD</title>

		<!-- Favicons -->
		<link type="image/x-icon" href="{{url("frontend/assets/img/favicon.png")}}" rel="icon">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{url("frontend/assets/css/bootstrap.min.css")}}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{url("frontend/assets/plugins/fontawesome/css/fontawesome.min.css")}}">
		<link rel="stylesheet" href="{{url("/frontend/assets/plugins/fontawesome/css/all.min.css")}}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{url("frontend/assets/css/style.css")}}">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    <title>MEDIC</title>
<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}"/>


    <link rel="canonical" href="{{url("https://getbootstrap.com/docs/5.0/examples/dashboard/")}}">

    <link rel="stylesheet" href="{{url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css")}}"/>

    <!-- Bootstrap core CSS -->
{{-- <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;


      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>






    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>


<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 offset-md-2">
@include('message')
                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 col-lg-6 login-left">
                            <img src={{url("/frontend/assets/img/login-banner.png")}} class="img-fluid" alt="Doccure Login">
                        </div>
                        <div class="col-md-12 col-lg-6 login-right">

                            <div class="login-header">
                                <h3>Login </h3>
                            </div>
                            <form action="{{route('lo')}} " method="post">
                                @csrf
                                @error('email')
                                <div class="error">
                                 {{ $message }}
                                 </div>
                                 @enderror
                                <div class="form-group form-focus">
                                    <input type="email" class="form-control floating @error('email') alert alert-danger @enderror" name="email">
                                    <label class="focus-label">Email</label>
                                </div>
                                @error('password')
                                <div class="error">
                                 {{ $message }}
                                 </div>
                                 @enderror
                                <div class="form-group form-focus">
                                    <input type="password" class="form-control floating @error('password') alert alert-danger @enderror" name="password">
                                    <label value="hidden"class="focus-label">Password</label>
                                </div>

                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>

                                <div class="text-center dont-have">Don’t have an account? <a href="{{route('register')}} ">Register</a></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->

            </div>
        </div>

    </div>

</div>
<!-- /Page Content -->




<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{url("frontend/assets/js/popper.min.js")}}"></script>
    <script src="{{url("frontend/assets/js/bootstrap.min.js")}}"></script>

    <!-- Slick JS -->
    <script src="{{url("frontend/assets/js/slick.js")}}"></script>

    <!-- Custom JS -->
    <script src="{{url("frontend/assets/js/script.js")}}"></script>
<script>
  feather.replace()
</script>


</body>
</html>
