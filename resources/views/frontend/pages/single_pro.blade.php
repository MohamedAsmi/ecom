@extends('frontend.layouts.master')

@section('title','E-SHOP || About Us')

@section('main-content')


@foreach($single_shops as $data)
<!-- Single shop Banner  -->
<div class="col-lg-4 col-md-4 col-6">
    <div class="single-banner">
        <img src="{{asset($data->shop_image)}}" alt="{{$data->shop_image}}">
        <div class="content">
            <p>{{$data->service_type}}</p>
            <h3>{{$data->company_name }}</h3>
            <a href="#">Shop Now</a>
        </div>
    </div>
</div>
<!-- /End Single shop Banner  -->
@endforeach


<!-- Start Shop Services Area -->
<section class="shop-services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Free shiping</h4>
                    <p>Orders over $100</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-reload"></i>
                    <h4>Free Return</h4>
                    <p>Within 30 days returns</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Sucure Payment</h4>
                    <p>100% secure payment</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Best Peice</h4>
                    <p>Guaranteed price</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Services Area -->

@include('frontend.layouts.newsletter')
@endsection