<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title>Forgot Password</title>
        <link rel="shortcut icon" href="{{ url('assets/client/images/GIS/logo.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ url('assets/client/images/GIS/logo.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/client/images/GIS/logo.png') }}">
        <link rel="stylesheet" id="css-main" href="{{ url('assets/admin/css/oneui.min.css') }}">
    </head>
    <body>
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
                                        Welcome to Global Inspeksi Sertifikasi website.
                                    </p>
                                </div>
                            </div>
                            <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                                <p class="fw-medium text-white-50 mb-0">
                                <strong>PT Global Inspeksi Sertifikasi</strong> &copy; <span data-toggle="year-copy"></span>
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
                                    <div class="text-center mb-5">
                                        <a href="{{ url('/')}}">
                                            <img src="{{ url('assets/client/images/GIS/logo.png') }}" width="100" alt="GIS">
                                        </a>
                                        {{-- <p class="fw-medium text-muted">
                                            Welcome, please login or <a href="{{ route('register') }}">sign up</a> for a new account.
                                        </p> --}}
                                    </div>
                                    <h2 class="fw-bold mb-2">
                                        Forgot Password
                                    </h2>
                                    <p class="fw-medium text-muted">
                                        Forgot your password? No problem. Just let us know your email address <br> and we will email you a password reset link that will allow you to choose a new one.
                                    </p>
                                </div>
                                    <div class="row g-0 justify-content-center">
                                        <div class="col-sm-8 col-xl-4">
                                            <!-- Session Status -->
                                            <x-auth-session-status class="mb-4" :status="session('status')" />
                                            <!-- Validation Errors -->
                                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                            <form class="js-validation-reminder" method="POST" action="{{ route('password.email') }}">
                                                @csrf
                                                <div class="mb-4">
                                                    <input class="form-control form-control-lg form-control-alt py-3" id="email" type="email" name="email" placeholder="Insert your email" :value="old('email')" required autofocus >
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-lg btn-alt-primary">
                                                        <i class="fa fa-fw fa-envelope me-1 opacity-50"></i> Send Mail
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                                <p class="fw-medium text-black-50 py-2 mb-0">
                                    <strong>PT. Global Inspeksi Sertifikasi </strong> &copy; <span data-toggle="year-copy"></span>
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
    <script src="{{ url('assets/admin/js/pages/op_auth_reminder.min.js') }}"></script>
    </body>
</html>
