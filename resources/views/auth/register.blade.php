@extends('layouts.auth_master')
@section('content')
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-12">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="{{ route('login') }}"><img src="{{ env('FAVICON') }}" alt="not found"></a>
                                    </div>
                                    <h4 class="text-center mb-4">Register to get access at host panel</h4>
                                    @if (session('login_error'))
                                        <div class="alert alert-danger">
                                            {{ session('login_error') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('register.post') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Image</strong></label>
                                                    <input type="file" class="form-control" name="img">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>First Name</strong></label>
                                                    <input type="text" class="form-control" placeholder="First Name"
                                                        name="first_name" autofocus>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Last Name</strong></label>
                                                    <input type="text" class="form-control" placeholder="Last Name"
                                                        name="last_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Host Type</strong></label>
                                                    <select class="form-control" name="hostType">
                                                        <option value="">-Select Host Type-</option>
                                                        @foreach ($host_types as $host_type)
                                                            <option value="{{ $host_type->id }}">{{ $host_type->name }}
                                                                ({{ $host_type->descriptions }})</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Date of Birth (DoB)</strong></label>
                                                    <input type="date" class="form-control" name="dob">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Phone</strong></label>
                                                    <input type="text" class="form-control" placeholder="Phone"
                                                        name="phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Email</strong></label>
                                                    <input type="email" class="form-control" placeholder="Email"
                                                        name="email">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Password</strong></label>
                                                    <input type="password" class="form-control" placeholder="Password"
                                                        name="password">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>TIN</strong></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Taxpayer Identification Number" name="tin">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>TID</strong></label>
                                                    <input type="text" class="form-control" placeholder="TID"
                                                        name="tid">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>BIN</strong></label>
                                                    <input type="text" class="form-control" placeholder="BIN"
                                                        name="bin">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Trade License</strong></label>
                                                    <input type="text" class="form-control" placeholder="Trade License"
                                                        name="trade_license">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Country</strong></label>
                                                    <select class="form-control" name="country">
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>City</strong></label>
                                                    <input type="text" class="form-control" value="1" name="city">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Area</strong></label>
                                                    <input type="text" class="form-control" value="1" name="area">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Road</strong></label>
                                                    <input type="text" class="form-control" value="1" name="road">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Plot</strong></label>
                                                    <input type="text" class="form-control" value="1" name="plot">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Sub Locality</strong></label>
                                                    <input type="text" class="form-control" value="1" name="subLocality">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="mb-1"><strong>Address</strong></label>
                                                    <input type="text" class="form-control" placeholder="Address" name="address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3 text-center">
                                        <p>Already have an account? <a class="text-primary"
                                                href="{{ route('login') }}">Login Here</a></p>
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
