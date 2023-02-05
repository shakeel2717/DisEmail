@extends('layout.auth')
@section('form')
<div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Account Created Successfully</h4>
                <div class="nk-block-des">
                    <hr>
                    <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>

                    @if (session('status') == 'verification-link-sent')
                    <div class="m-2 text-success">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('verification.send') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block">Resend Email</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block">Sign out</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="form-note-s2 text-center pt-4"> Don't have an account? <a href="{{ route('register') }}"><strong>Create new Account!</strong></a>
        </div>
    </div>
</div>
@endsection