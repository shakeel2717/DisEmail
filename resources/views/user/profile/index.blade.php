@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">My Profile</h3>
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
                <a class="nav-link active" href="{{ route('user.profile.index') }}"><em class="icon ni ni-user-fill-c"></em><span>Personal</span></a>
            </li>
        </ul>
        <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Personal Information</h4>
                    <div class="nk-block-des">
                        <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                    </div>
                </div>
            </div>
            <div class="nk-block">
                <div class="nk-data data-list data-list-s2">
                    <div class="data-head">
                        <h6 class="overline-title">Basics</h6>
                    </div>
                    <form action="{{ route('user.profile.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="Full Name" value="{{ auth()->user()->name }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" placeholder="Username" value="{{ auth()->user()->username }}" class="form-control" readonly disabled>
                            <small>* Please Contact support if you want to update your username</small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" value="{{ auth()->user()->email }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="refer">Sponser's Username</label>
                            <input type="text" name="refer" id="refer" placeholder="Refer" value="{{ auth()->user()->refer }}" class="form-control" readonly disabled>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary" value="Update Profile">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection