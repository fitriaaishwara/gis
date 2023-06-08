<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title>Login</title>

        <meta name="description" content="Global Inspeksi Sertifikasi">
        <meta name="author" content="PT. Global Inspeksi Sertifikasi">
        <meta name="robots" content="noindex, nofollow">

        <meta property="og:title" content="Global Inspeksi Sertifikasi">
        <meta property="og:site_name" content="Global Inspeksi Sertifikasi">
        <meta property="og:description" content="Global Inspeksi Sertifikasi">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <link rel="shortcut icon" href="{{ url('assets/client/images/GIS/logo.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ url('assets/client/images/GIS/logo.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/client/images/GIS/logo.png') }}">

        <link rel="stylesheet" id="css-main" href="{{ url('assets/admin/css/oneui.min.css')}}">

    </head>
    <body>
        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
        <div id="page-container">
            <main id="main-container">
                <div class="bg-image" style="background-image: url('{{ url('assets/admin/pic2.png') }}');">
                    <div class="row g-0 bg-primary-dark-op">
                        <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                            <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                                <div class="w-100">
                                    <a class="link-fx fw-semibold fs-2 text-white" href="{{ url('/')}}">
                                        Global Inspeksi<span class="fw-normal"> Sertifikasi</span>
                                    </a>
                                    <p class="text-white-75 me-xl-8 mt-2">
                                        Welcome to Global Inspeksi Sertifikasi website, please login to more access.
                                    </p>
                                </div>
                            </div>
                            <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                                <p class="fw-medium text-white-50 mb-0">
                                    <strong>PT. Global Inspeksi Sertifikasi</strong> &copy; <span data-toggle="year-copy"></span>
                                </p>
                                <ul class="list list-inline mb-0 py-2">
                                    <li class="list-inline-item">
                                        <a class="text-white-75 fw-medium" href="javascript:void(0)">Legal</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-white-75 fw-medium" href="javascript:void(0)">Contact</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-white-75 fw-medium" href="javascript:void(0)">Terms</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light">
                            <div class="p-3 w-100 d-lg-none text-center">
                                <a class="link-fx fw-semibold fs-3 text-dark" href="{{ url('/')}}">
                                Global Inspeksi<span class="fw-normal"> Sertifikasi</span>
                                </a>
                            </div>
                            <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                                <div class="w-100">
                                    <div class="text-center mb-5">
                                        <a href="{{ url('/')}}">
                                            <img src="{{ url('assets/client/images/GIS/logo.png') }}" width="100" alt="GIS">
                                        </a>
                                        {{-- <p class="fw-medium text-muted">
                                            Welcome, please login or <a href="{{ route('register') }}">sign up</a> for a new account.
                                        </p> --}}
                                    </div>
                                    <div class="row g-0 justify-content-center">
                                        <div class="col-sm-8 col-xl-4">
                                            <form class="js-validation-signin" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="mb-4">
                                                    <input type="text" class="form-control form-control-alt form-control-lg" id="username" name="username" :value="old('username')" placeholder="Username" required autofocus>
                                                </div>
                                                <div class="mb-4">
                                                    <input type="password" class="form-control form-control-alt form-control-lg" id="password" name="password" placeholder="Password" required autocomplete="current-password" >
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mb-4">
                                                    <div>
                                                        @if (Route::has('password.request'))
                                                            <a class="text-muted fs-sm fw-medium d-block d-lg-inline-block mb-1" href="{{ route('password.request') }}">
                                                            Forgot Password?
                                                            </a>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-lg btn-alt-danger">
                                                        <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> {{ __('Log In') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                                <p class="fw-medium text-black-50 py-2 mb-0">
                                    <strong>PT. Global Inspeksi Sertifikasi</strong> &copy; <span data-toggle="year-copy"></span>
                                </p>
                                <ul class="list list-inline py-2 mb-0">
                                    <li class="list-inline-item">
                                        <a class="text-muted fw-medium" href="javascript:void(0)">Legal</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted fw-medium" href="javascript:void(0)">Contact</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted fw-medium" href="javascript:void(0)">Terms</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="{{ url('assets/admin/js/oneui.app.min.js') }}"></script>
        <script src="{{ url('assets/admin/js/lib/jquery.min.js') }}"></script>
        <script src="{{ url('assets/admin/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ url('assets/admin/js/pages/op_auth_signin.min.js') }}"></script>
    </body>
</html>
