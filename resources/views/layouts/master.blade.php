
<!doctype html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<title>MEDIC_BD</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

		<!-- Favicons -->
		<link href="{{url('backend/assets/img/favicon.png')}}" rel="icon">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{url('backend/assets/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{url('backend/assets/css/font-awesome.min.css')}}">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{url('backend/assets/css/feathericon.min.css')}}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{url('backend/assets/css/style.css')}}">
		<link rel="stylesheet" href="{{url('backend/assets/plugins/morris/morris.css')}}">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
  <body>
	<!-- Main Wrapper -->
    <div class="main-wrapper">


    @include('admin.header')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

            <div class="row">


            @include('admin.sidebar')


    {{-- @include('backend.partial.header') --}}

    @yield('content')

</div>
</div>
</div>





    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"  crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
      <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>


  </body>
</html>
