@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{{ env('APP_LOGO_URL') }}" alt="logo" width="100">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>Lupa Password</h4></div>

                        <div class="card-body">
                            <p class="text-muted">Tetap tenang jangan panik, okey? Ntar kita kasi link ubah passwordnya</p>
                            <form method="POST" action="{{ route('password.email') }}" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Lupa Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @include('layouts.footers.simple-footer')
                </div>
            </div>
        </div>
    </section>
@endsection
