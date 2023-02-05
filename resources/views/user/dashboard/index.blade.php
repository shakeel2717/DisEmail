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
@livewire('emails')
@endsection