@extends('layout.app')
@section('head')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">{{ $user->name }} Account Report</h3>
            <h4 class="nk-block-title page-title">Username:{{ $user->username }}</h4>
            <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Go Back </a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="nk-block">
    <div class="row">
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">Full Name</h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ $user->name }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">Email</h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ $user->email }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">Available Balance</h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ number_format(balance($user->id),2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">Total Profit</h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ number_format(totalProfitEarn($user->id),2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">Total Deposit</h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ number_format(totalDeposit($user->id),2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">Total Withdraw</h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ number_format(totalWithdraw($user->id),2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">First Level Deposit</h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ number_format(firstLevelDeposit($user->id),2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">Second Level Deposit</h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ number_format(secondLevelDeposit($user->id),2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">Third Level Deposit</h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ number_format(thirdLevelDeposit($user->id),2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">First Level Withdraw</h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ number_format(firstLevelWithdraw($user->id),2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">Second Level Withdraw</h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ number_format(secondLevelWithdraw($user->id),2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">Third Level Withdraw</h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ number_format(thirdLevelWithdraw($user->id),2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">MarketCap</h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ number_format(marketCap($user->id),2) }} | {{ marketCapRatio($user->id) }}%</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">Total Team Deposit </h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ number_format(firstLevelDeposit($user->id) + secondLevelDeposit($user->id) + thirdLevelDeposit($user->id),2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2 mb-2">
            <div class="card card-bordered shadow card-full">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="m-2">
                        <h5 class="amount">Total Team Withdraw </h5>
                    </div>
                    <div class="m-2 text-end">
                        <h5 class="amount">{{ number_format(firstLevelWithdraw($user->id) + secondLevelWithdraw($user->id) + thirdLevelWithdraw($user->id),2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection