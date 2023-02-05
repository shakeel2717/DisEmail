@extends('layout.app')
@section('head')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Add new User</h3>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block">
                <div class="nk-data data-list data-list-s2">
                    <form action="{{ route('admin.user.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter User's Full Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="text" name="email" id="email" placeholder="Enter User's Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="username">Username </label>
                            <input type="text" name="username" id="username" placeholder="Enter User's Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile </label>
                            <input type="text" name="mobile" id="mobile" placeholder="Enter User's Mobile" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="refer">Refer </label>
                            <input type="text" name="refer" id="refer" placeholder="Enter User's Refer" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password </label>
                            <input type="text" name="password" id="password" placeholder="Enter User's Password" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary" value="Add User">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection