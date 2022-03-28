@extends('frontend.layouts.master')

@section('title', 'E-SHOP || Register Page')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Shop Login -->
    {{-- <section class="shop login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="login-form">
                        <h2>Register</h2>
                        <p>Please register in order to checkout more quickly</p>
                        <!-- Form -->
                        <form class="form" method="post" action="{{ route('register.submit') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Name<span>*</span></label>
                                        <input type="text" name="name"  required="required"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Email<span>*</span></label>
                                        <input type="text" name="email" placeholder="" required="required"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Password<span>*</span></label>
                                        <input type="password" name="password" placeholder="" required="required"
                                            value="{{ old('password') }}">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Confirm Password<span>*</span></label>
                                        <input type="password" name="password_confirmation" placeholder=""
                                            required="required" value="{{ old('password_confirmation') }}">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" type="submit">Register</button>
                                        <a href="{{ route('login.form') }}" class="btn">Login</a>
                                        OR
                                        <a href="{{ route('login.redirect', 'facebook') }}" class="btn btn-facebook"><i
                                                class="ti-facebook"></i></a>
                                        <a href="{{ route('login.redirect', 'github') }}" class="btn btn-github"><i
                                                class="ti-github"></i></a>
                                        <a href="{{ route('login.redirect', 'google') }}" class="btn btn-google"><i
                                                class="ti-google"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="shop login section">
        <div class="container">
            <div class="row">
                <div class="container register">
                    <div class="row">
                        <div class="col-md-3 register-left">
                            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                            <h3>Welcome</h3>
                            <p>Ready To Rock</p>

                        </div>
                        <div class="col-md-9 register-right">
                            <form class="form" method="post" action="{{ route('register.submit') }}">
                                @csrf
                                @csrf
                                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                            aria-controls="home" aria-selected="true">User</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false">Customer</a>
                                    </li>
                                </ul>
                                <div class="row col-md-9 ml-4 mb-2">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Your Name<span>*</span></label>
                                            <input type="text" name="name" required="required" value="{{ old('name') }}"
                                                class="form-control" placeholder="Enter Your Name"
                                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Your Email<span>*</span></label>
                                            <input type="text" name="email" required="required" value="{{ old('email') }}"
                                                placeholder="Enter Your Email" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Your Password<span>*</span></label>
                                            <input type="password" name="password" required="required"
                                                value="{{ old('password') }}" placeholder="Enter Your Password"
                                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Confirm Password<span>*</span></label>
                                            <input type="password" name="password_confirmation" required="required"
                                                value="{{ old('password_confirmation') }}"
                                                placeholder="Enter Your Password" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2">
                                            @error('password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group login-btn">
                                            <button class="btn" type="submit">Register</button>
                                            <a href="{{ route('login.form') }}" class="btn">Login</a>
                                            OR
                                            <a href="{{ route('login.redirect', 'facebook') }}"
                                                class="btn btn-facebook"><i class="ti-facebook"></i></a>
                                            <a href="{{ route('login.redirect', 'github') }}" class="btn btn-github"><i
                                                    class="ti-github"></i></a>
                                            <a href="{{ route('login.redirect', 'google') }}" class="btn btn-google"><i
                                                    class="ti-google"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        </div>
        </div>
    </section>
    <!--/ End Login -->
@endsection

@push('styles')
    <style>
        .shop.login .form .btn {
            margin-right: 0;
        }

        .btn-facebook {
            background: #39579A;
        }

        .btn-facebook:hover {
            background: #073088 !important;
        }

        .btn-github {
            background: #444444;
            color: white;
        }

        .btn-github:hover {
            background: black !important;
        }

        .btn-google {
            background: #ea4335;
            color: white;
        }

        .btn-google:hover {
            background: rgb(243, 26, 26) !important;
        }

        input {
            border: lightblue;
        }

    </style>
@endpush
