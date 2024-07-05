<!doctype html>
<html lang="en" data-bs-theme="main-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!--favicon-->

    <!-- loader-->
    <link href="{{ asset('maxton/assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('maxton/assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('maxton/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('maxton/assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('maxton/assets/plugins/metismenu/mm-vertical.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('maxton/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('maxton/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('maxton/sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('maxton/sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('maxton/sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('maxton/sass/responsive.css') }}" rel="stylesheet">

</head>

<body>


    <!--authentication-->

    <div class="mx-3 mx-lg-0">

        <div class="card my-5 col-xl-9 col-xxl-8 mx-auto rounded-4 overflow-hidden p-4">
            <div class="row g-4">
                <div class="col-lg-6 d-flex">
                    <div class="card-body">
                        <h4 class="fw-bold">Get Started Now</h4>
                        <p class="mb-0">Enter your credentials to login your account</p>
                        <div class="row gy-2 gx-0 my-4">
                            <div class="col-12 col-lg-12">
                                <button
                                    class="btn btn-filter py-2 px-4 font-text1 fw-bold d-flex align-items-center justify-content-center w-100">
                                    <span class=""><img src="{{asset('maxton/assets/images/apps/05.png')}}" width="20"
                                            class="me-2" alt="">Sign in with Google</span>
                                </button>
                            </div>
                            <div class="col-12 col-lg-12">
                                <button
                                    class="btn btn-filter py-2 px-4 font-text1 fw-bold d-flex align-items-center justify-content-center w-100">
                                    <span class=""><img src="{{asset('maxton/assets/images/apps/17.png')}}" width="20"
                                            class="me-2" alt="">Sign in with Facebook</span>
                                </button>
                            </div>
                            <div class="col-12 col-lg-12">
                                <button
                                    class="btn btn-filter py-2 px-4 font-text1 fw-bold d-flex align-items-center justify-content-center w-100">
                                    <span class=""><img src="{{asset('maxton/assets/images/apps/18.png')}}" width="20"
                                            class="me-2" alt="">Sign in with LinkedIn</span>
                                </button>
                            </div>
                        </div>

                        <div class="separator">
                            <div class="line"></div>
                            <p class="mb-0 fw-bold">OR SIGN IN WITH</p>
                            <div class="line"></div>
                        </div>
                        <div class="form-body mt-4">
                            <form class="row g-3" action="{{route('login')}}" method="post">
                                @csrf
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Email</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="inputEmailAddress" placeholder="jhon@example.com">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="inputChoosePassword" value="12345678" placeholder="Enter Password">
                                        <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                class="bi bi-eye-slash-fill"></i></a>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end"> <a href="auth-cover-forgot-password.html">Forgot
                                        Password ?</a>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-start">
                                        <p class="mb-0">Don't have an account yet? <a
                                                href="{{url('register')}}">Sign up here</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex d-none">
                    <div class="p-3 rounded-4 w-100 d-flex align-items-center justify-content-center bg-grd-primary">
                        <img src="{{ asset('maxton/assets/images/auth/login1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>

            </div><!--end row-->
        </div>

    </div>

    <!--authentication-->




    <!--plugins-->
    <script src="{{ asset('maxton/assets/js/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash-fill");
                    $('#show_hide_password i').removeClass("bi-eye-fill");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                    $('#show_hide_password i').addClass("bi-eye-fill");
                }
            });
        });
    </script>

</body>

</html>