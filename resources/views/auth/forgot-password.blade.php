@extends('layout.auth')
@section('form')
<div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Account Created Successfully</h4>
                <div class="nk-block-des">
                    <hr>
                    <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <div class="form-control-wrap">
                            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email address">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block">Email Password Reset Link</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-note-s2 text-center pt-4"> Remembered Password? <a href="{{ route('login') }}"><strong>Try Login!</strong></a>
        </div>
    </div>
</div>
@endsection