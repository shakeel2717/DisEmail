@extends('layout.auth')
@section('form')
<div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Register</h4>
                <div class="nk-block-des">
                    <p>Create New {{ env('APP_NAME') }} Account</p>
                </div>
            </div>
        </div>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter your name">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="name">Choose Username</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-lg" id="name" name="username" placeholder="Enter your name">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <div class="form-control-wrap">
                    <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email address">
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="mobile">Mobile #</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control form-control-lg" id="mobile" name="mobile" placeholder="Enter your Mobile #">
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>
                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your Password">
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="password_confirmation">Confirm Password</label>
                <div class="form-control-wrap">
                    <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                </div>
            </div>
            @if($refer != "default")
            <div class="form-group">
                <label class="form-label" for="refer">Refer</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control form-control-lg" id="refer" name="refer" value="{{ $refer }}" readonly>
                </div>
            </div>
            @endif
            <div class="form-group">
                <div class="custom-control custom-control-xs custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox" required>
                    <label class="custom-control-label" for="checkbox">I agree to {{ env('APP_NAME') }} <a href="{{ route('landing.privacy') }}">Privacy Policy</a> &amp; <a href="{{ route('landing.privacy') }}"> Terms.</a></label>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block">Register</button>
            </div>
        </form>
        <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="{{ route('login') }}"><strong>Sign in instead</strong></a>
        </div>
    </div>
</div>
@endsection