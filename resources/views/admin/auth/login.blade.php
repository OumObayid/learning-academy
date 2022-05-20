<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        {{-- Login --}}
        <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('uploads/setting') }}/favicon.png">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/bootstrap/css') }}/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/font-awesome-4.7.0/css') }}/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/Linearicons-Free-v1.0.0') }}/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/animate') }}/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/css-hamburgers') }}/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/animsition/css') }}/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/select2') }}/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/daterangepicker') }}/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css') }}/util.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css') }}/main.css">
    <!--===============================================================================================-->


</head>

<body>
   
    <div class="limiter">
		<div class="container-login100" style="background-image: url('https://www.itlearning-campus.com/wp-content/uploads/2021/05/main_slide.jpeg');">
			<div class="wrap-login100 p-t-30 p-b-50">

				 @include('admin.inc.errors')
                    <form class="login100-form validate-form p-b-33 p-t-5 " method="POST" action="{{ route('admin.doLogin')  }}">
                        @csrf
					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="email" required name="email"  placeholder="Email">
						<span class="focus-input100" data-placeholder="&#9993;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" required name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

    {{-- end login 2 --}}

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>

    <!--===============================================================================================-->
	<script src="{{ asset('admin/vendor/jquery') }}/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('admin/vendor/animsition/js') }}/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('admin/vendor/bootstrap/js') }}/popper.js"></script>
        <script src="{{ asset('admin/vendor/bootstrap/js') }}/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('admin/vendor/select2') }}/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('admin/vendor/daterangepicker') }}/moment.min.js"></script>
        <script src="{{ asset('admin/vendor/daterangepicker') }}/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('admin/vendor/countdowntime') }}/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('admin/js') }}/main.js"></script>

</body>

</html>
