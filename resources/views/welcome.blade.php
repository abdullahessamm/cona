<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/welcomepage.css')}}">
    <link rel="stylesheet" href="{{asset('css/mobile/welcomepage.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title> {{env('APP_NAME')}} </title>
</head>

<body>
    <header>
        <nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="d-none d-sm-block logo">
                            <div>
                                <img src="{{asset('img/logo.png')}}" alt="Logo" class="no-selection">
                                <span class="logo-name no-selection"> Cona </span>
                            </div>
                        </div>
                        <div class="d-block d-sm-none logo mobile">
                            <div>
                                <img src="{{asset('img/logo.png')}}" alt="Logo" class="no-selection">
                                <span class="logo-name" class="no-selection"> Cona </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-none d-sm-block text-right" id="nav-right-section">
                        <div class="btn btn-danger login-btn"> Login </div>
                        <span id="or-nav" class="no-selection"> OR </span>
                        <div class="btn signup-btn"> Sign up for free </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div id="cover">
        <img src="{{asset('img/cover2.jpg')}}" alt="Cover" class="no-selection">
        <div id="cover-content">
            <div class="h-center v-center p-absolute w-100">
                <h2 id="welcome-text" class="text-center no-selection"> Welcome to <span class="logo-name no-selection"> Cona </span> </h2>
                <div class="text-center no-selection disc">
                    Wanna connect to your family and friends? <br class="no-selection">
                    This app provide this serve with different style 
                </div>
            </div>
            <div class="h-center p-absolute" id="scroll-btn-container">
                <div id="scroll-btn" class="text-center">
                    <i class="fas fa-arrow-down"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Login screen -->
    <div id="login-screen-container" class="d-none d-md-flex">
        <div id="login-screen">
            <h3 class="text-center">Login</h3>
            <form action="{{ url('/login') }}" method="post">
                @csrf
                <div class="input-div">
                    <input type="email" name="email" placeholder="Email">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="input-div">
                    <i class="fas fa-eye" id="show-password"></i>
                    <input type="password" name="password" placeholder="Password">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="text-right">
                    <a href="{{url('/reset-password')}}"> Forgot password? </a>
                </div>
                <div class="text-center">
                    <button class="btn btn-danger" type="submit"> <i class="fas fa-sign-in-alt"></i> Login </button>
                </div>
                <fieldset class="separetor">
                    <legend class="text-center"> Login with </legend>
                </fieldset>
                <div class="text-center">
                    <div id="facebook-btn" class="btn social-login text-center"> <i class="fab fa-facebook-f"></i> </div>
                    <div id="soundcloud-btn" class="btn social-login text-center"> <i class="fab fa-soundcloud"></i> </div>
                    <div id="google-btn" class="btn social-login text-center">
                        <img src="{{ asset('img/google-logo.png') }}" style="width:150%;height:100%">
                    </div>
                </div>
            </form>
            <div class="d-inline-flex" id="close-login-btn">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>
    <!-- End of login screen -->
    <script>
        // set dimentions
        function init_dimentions () {
            let window_dimentions  = {
                window_height: window.innerHeight,
                window_width: window.innerWidth
                },
                elements = {
                    cover: document.querySelector('#cover'),
                    v_center: document.querySelectorAll('.v-center'),
                    h_center: document.querySelectorAll('.h-center'),
                };
            elements.cover.style.height = window_dimentions.window_height + 'px';
            elements.h_center.forEach(el => el.style.left = (window_dimentions.window_width - el.offsetWidth)/2 + 'px');
            elements.v_center.forEach(el => el.style.top = (window_dimentions.window_height - el.offsetHeight)/2 + 'px');
        }
        init_dimentions();
        // on resize function
        window.addEventListener('resize', init_dimentions);

    </script>
    <script src="{{asset('js/plugins/mainpage.js')}}"></script>
</body>
</html>