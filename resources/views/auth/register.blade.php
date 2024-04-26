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
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Register
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter name">
                        <input class="input100" id="name" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter email">
                        <input class="input100" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password" required>
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Confirm password">
                        <input class="input100" id="password-confirm" type="password" name="password_confirmation" placeholder=" Confirm Password" required>
                        <span class="focus-input100" data-placeholder="&#xf190;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Register
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="{{ route('login') }}">
                            Login jika sudah punya akun
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
