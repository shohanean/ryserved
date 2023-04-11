@extends('layouts.auth_master')
@section('content')
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="{{ route('login') }}"><img src="{{ env('FAVICON') }}" alt="not found"></a>
                                    </div>
                                    <h4 class="text-center mb-4">Login to your host panel</h4>
                                    @if (session('login_error'))
                                        <div class="alert alert-danger">
                                            {{ session('login_error') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('login.post') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Phone Number</strong></label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" name="phone" autofocus value="{{ old('phone') }}">
                                            @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3 text-center">
                                        <p>Don't have an account? <a class="text-primary" href="{{ route('register') }}">Register Here</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
