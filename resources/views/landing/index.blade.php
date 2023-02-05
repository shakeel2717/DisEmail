@extends('layout.landing')
@section('content')
<section class="section features-section overflow-hidden" id="aboutus">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-5 d-flex">
                <div class=" mb-30 m-md-0 position-relative wow fadeIn" data-wow-duration="1500ms">
                    <img src="{{ asset('assets/images/fireball.jpg') }}" class="w-100 shape-radius" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section active" id="howitworks">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <p>Mobile User?</p>
                    <h3>Download Our Mobile App</h3>
                </div>
            </div>
        </div>
        <div class="how-works-block">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="how-works-box mb-4 m-md-0 wow fadeInUp" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <img src="images/works/1.png" class="img-fluid mx-auto d-block" alt="">
                        <div class="text-center">
                            <h4 class="mt-4">{{ env('APP_NAME') }} For Android</h4>
                            <p class="mb-0">Click to Download our {{ env('APP_NAME') }} App Directly From Play Store</p>
                            <a href="#" target="_blank">
                                <br>
                                <img src="https://lh3.googleusercontent.com/q1k2l5CwMV31JdDXcpN4Ey7O43PxnjAuZBTmcHEwQxVuv_2wCE2gAAQMWxwNUC2FYEOnYgFPOpw6kmHJWuEGeIBLTj9CuxcOEeU8UXyzWJq4NJM3lg=s0" alt="PlayStore Icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection