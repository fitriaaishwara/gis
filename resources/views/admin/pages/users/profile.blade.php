@extends('admin.layouts.app')
@section('content')
@section('title', 'Profile')

<!-- Hero -->
    <div class="bg-image" style="background-image: url('{{ asset ('assets/admin/media/photos/photo12@2x.jpg') }}');">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                <div class="my-3">
                    <img class="img-avatar img-avatar-thumb" src="{{ auth()->user()->photo != '' ? asset('storage/images/profile/' . auth()->user()->photo) : asset('storage/images/profile/avatar.png') }}" alt="">
                </div>
                    <h1 class="h2 text-white mb-0">{{ auth()->user()->name }}</h1>
                    @if (auth()->user()->role == 0)
                        <span class="text-white-75">Super Admin</span>
                    @elseif (auth()->user()->role == 1)
                        <span class="text-white-75">Admin</span>
                    @elseif (auth()->user()->role == 2)
                        <span class="text-white-75">Staff</span>
                    @endif
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Stats -->
    {{-- <div class="bg-body-extra-light">
        <div class="content content-boxed">
            <div class="row items-push text-center">
                <div class="col-6 col-md-3">
                    <div class="fs-sm fw-semibold text-muted text-uppercase">Joined</div>
                    <a class="link-fx fs-3" href="javascript:void(0)">27</a>
                </div>
                <div class="col-6 col-md-3">
                    <div class="fs-sm fw-semibold text-muted text-uppercase">Article Upload</div>
                    <a class="link-fx fs-3" href="javascript:void(0)">17980</a>
                </div>
                <div class="col-6 col-md-3">
                    <div class="fs-sm fw-semibold text-muted text-uppercase">Joined</div>
                    <a class="link-fx fs-3" href="javascript:void(0)">1360</a>
                </div>
                <div class="col-6 col-md-3">
                    <div class="fs-sm fw-semibold text-muted text-uppercase mb-2">Joined </div>
                    <span class="text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </span>
                    <span class="fs-sm text-muted">(4.9)</span>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- END Stats -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <div class="col-lg-12 mb-4">
            <a class="btn btn-dark" href="{{ url ('/dashboard')}}"><i class="fa fa-arrow-left"></i>  Dashboard</a>
        </div>
        <!-- User Profile -->
        <div class="block block-rounded block-themed">
            <div class="block-header bg-modern-darker">
                <h3 class="block-title">User Profile</h3>
            </div>
            <div class="block-content">
                <form action="{{ url('admin/profile/update/'.$user->id) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="fs-sm text-muted">
                                Your account’s vital info. Your username will be publicly visible.
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Your Avatar</label>
                                <div class="mb-4">
                                <img class="img-avatar" src="{{ $user->photo != '' ? asset('storage/images/profile/' . $user->photo) : asset('assets/admin/media/avatars/avatar0.jpg') }}" alt="">
                                </div>
                                <div class="mb-4">
                                <label class="form-label">Choose a new avatar</label>
                                <input class="form-control" type="file" id="photo" name="photo">
                                </div>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-dark">
                                Update
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END User Profile -->

        <!-- Change Password -->
        <div class="block block-rounded block-themed">
            <div class="block-header bg-modern-darker">
                <h3 class="block-title">Change Password</h3>
            </div>
            <div class="block-content">
                <form action="{{ url('admin/profile/update/password/'.$user->id) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="fs-sm text-muted">
                                Changing your sign in password is an easy way to keep your account secure.
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            {{-- <div class="mb-4">
                                <label class="form-label" for="one-profile-edit-password">Current Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div> --}}
                            <div class="row mb-4">
                                <div class="col-12">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <label class="form-label">Confirm New Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                </div>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-dark">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Change Password -->
    </div>

@endsection
