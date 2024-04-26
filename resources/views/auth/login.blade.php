<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('components.styleAdmin')
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter email">
                        <input class="input100" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password" required>
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="{{ route('register') }}">
                            Tidak punya akun? Ayo register
                        </a>
                        <br>
                        <a class="txt1" href="#">
                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    @include('components.script')

</body>

</html>
