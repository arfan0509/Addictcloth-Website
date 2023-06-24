<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Font --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/akun.css') }}">
    <title>Addictive Clothing</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="d-flex justify-content-center align-items-center min-vh-100 container">

        <!----------------------- Login Container -------------------------->

        <div class="row rounded-5 box-area border bg-white p-3 shadow">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-3">
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_8ywcoffy.json"
                        background="transparant" speed="1" style="width: 400px; height: 400px;" loop autoplay
                        class="animasi">
                    </lottie-player>
                </div>

            </div>

            <!-------------------- ------ Right Box ---------------------------->
            @yield('register')
            @yield('login')
            {{-- Lottie --}}
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>
