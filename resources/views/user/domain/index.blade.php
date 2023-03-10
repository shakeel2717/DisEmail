@extends('layout.app')
@section('head')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Welcome {{ auth()->user()->username }}</h3>
            <div class="nk-block-des text-soft">
                <p class="mb-0">Welcome to {{ env('APP_NAME') }} Dashboard.</p>
                <p class="mt-0">Server Time: {{ now() }} & Your Country: {{ location("geoplugin_countryName") }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="my-2">
        <form action="{{ route('user.domain.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="domain">Add new Domain *</label>
                <input type="text" name="domain" class="form-control" id="domain" required>
            </div>
            <div class="form-group">
                <label for="default">Default Email *</label>
                <input type="text" name="default" class="form-control" id="default" required>
            </div>
            <div class="form-group">
                <label for="password">Email Password *</label>
                <input type="text" name="password" class="form-control" id="password" required>
            </div>
            <div class="form-group">
                <label for="port">PORT</label>
                <input type="text" name="port" class="form-control" id="port" value="993">
            </div>
            <div class="form-group">
                <label for="protocol">PROTOCOL</label>
                <input type="text" name="protocol" class="form-control" id="protocol">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm" type="submit">Add Domain</button>
            </div>
        </form>
    </div>
</div>
<div class="row">
    @forelse ($domains as $domain)
    <div class="col-md-12 mb-2 mb-2">
        <div class="card card-bordered shadow card-full">
            <div class="p-4 d-flex justify-content-between align-items-center">
                <div class="data">
                    <h5 class="amount">{{ $domain->domain }}:{{ $domain->port }} </h5>
                    <p>{{ $domain->default }}{{ "@". $domain->domain }}</p>
                    <p>{{ $domain->created_at->diffForHumans() }}</p>
                </div>
                <form action="{{ route('user.domain.destroy',['domain' => $domain->id]) }}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button class="btn btn-danger btn-sm" type="submit">Remove Domain</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="col-md-12 mb-2 mb-2">
        <div class="card card-bordered shadow card-full">
            <div class="d-flex justify-content-between align-items-center">
                <div class="m-2">
                    <h5 class="amount">No Domain Found</h5>
                </div>
            </div>
        </div>
    </div>
    @endforelse
</div>
@endsection