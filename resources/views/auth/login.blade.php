@extends('layout.auth')
@section('form')
<div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Sign in</h4>
                <div class="nk-block-des">
                    <p>Sign in to {{ env('APP_NAME') }} Account</p>
                </div>
            </div>
        </div>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Enter your Username">
                </div>
            </div>
            <div class="form-group">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="{{ route('password.request') }}">Reset Password!</a>
                </div>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>
                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your Password">
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block">Sign in</button>
            </div>
        </form>
        <div class="form-note-s2 text-center pt-4"> Don't have an account? <a href="{{ route('register') }}"><strong>Create new Account!</strong></a>
        </div>
    </div>
</div>
@endsection