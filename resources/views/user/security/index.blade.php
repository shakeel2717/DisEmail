@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Account Security</h3>
        <div class="nk-block-des">
            <p>You have full control to manage your own account setting.</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="nk-block">
    <div class="card card-bordered">
        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
            <li class="nav-item active current-page">
                <a class="nav-link active" href="{{ route('user.profile.index') }}"><em class="icon ni ni-lock-alt-fill"></em><span>Security Setting</span></a>
            </li>
        </ul>
        <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Security Settings</h4>
                    <div class="nk-block-des">
                        <p>These settings are helps you keep your account secure.</p>
                    </div>
                </div>
            </div>
            <div class="nk-block">
                <div class="nk-data data-list data-list-s2">
                    <div class="data-head">
                        <h6 class="overline-title">Basics</h6>
                    </div>
                    <form action="{{ route('user.security.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="cpassword">Current Password</label>
                            <input type="password" name="cpassword" id="cpassword" placeholder="Current Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" name="password" id="password" placeholder="New Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm New Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm New Password" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary" value="Update Password">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection