@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <img src="{{ env('APP_LOGO_URL') }}" alt="logo" width="80" class="mb-5 mt-2">
                    <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">{{ config('app.name') }}</span></h4>
                    <p class="text-muted">Sebelum masuk ke akun, login dulu yuk ayy.</p>
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="form-control" name="username" value="{{ old('username', session()->get('username')) }}" tabindex="1" required autofocus>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                <label class="custom-control-label" for="remember-me">Remember Me</label>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <a href="{{ route('password.request') }}" class="float-left mt-3">
                                Forgot Password?
                            </a>
                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                Login
                            </button>
                        </div>

                        <div class="mt-5 text-center">
                            Belum punya akun? <a href="{{ route('register') }}">Buat disini yang 💙</a>
                        </div>
                    </form>

                    @include('auth.social-login')
                    @include('layouts.footers.simple-footer')
                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="../assets/images/login/login-bg.jpg">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold">Good <span id="greetings"></span> </h1>
                            <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
                        </div>
                        Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const greetings = () => {
            const myDate = new Date();
            const hrs = myDate.getHours();
            let greet;

            if (hrs < 12)
                greet = 'Morning';
            else if (hrs >= 12 && hrs <= 17)
                greet = 'Afternoon';
            else if (hrs >= 17 && hrs <= 24)
                greet = 'Evening';

            document.getElementById("greetings").innerHTML = greet;
        }

        greetings();
    </script>
@endsection
