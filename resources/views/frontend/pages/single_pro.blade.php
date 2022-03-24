@extends('frontend.layouts.master')

@section('title','E-SHOP || About Us')

@section('main-content')


<!-- Single shop Banner  -->
<div class="container">
    <div class="col-12">
        <h2 class="single_product_image">Our Package</h2>

        @php
        $i = 0;
        $p = 1;
        @endphp
        @foreach($single_shops as $key =>$data)
        <div class="single-banner row pt-5">
            @if($i == $p)
            <div class="col-5 d-none d-md-block" attr="{{$key}}" style="font-size: 30px;height: auto;text-align: center;background-image: url('{{asset('images/items/'.$data->image_path)}}');background-size: cover;">
                <!-- <img src="" alt=""> -->
            </div>
            <div class="col-7 d-none d-md-block">
                <P style="margin-bottom: 10px;font-weight: 400;font-size: 20px;"> {{$data->item_name}}</P>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus finibus leo a auctor. Pellentesque erat ex, tempus ac quam sollicitudin, laoreet lacinia felis. Maecenas eget pulvinar nunc. Praesent eget eros id sem tempor consectetur sed ullamcorper massa. Integer efficitur pretium nunc, ac interdum leo convallis cursus. Aliquam eu dignissim turpis. Curabitur mauris urna, dignissim vitae purus id, dictum fermentum dolor. Ut risus mauris, iaculis eu tempus a, rhoncus eu tellus. Nunc metus dolor, pretium eu est eget, consequat aliquet nulla. Suspendisse non enim ut urna dictum vestibulum. Cras posuere nunc enim, at mollis odio vehicula et. Maecenas ut quam eget dui pretium posuere.
            </div>
            @php
            $p++;
            @endphp
            @else
            <div class="col-7 d-none d-md-block">
                <P style="margin-bottom: 10px;font-weight: 400;font-size: 20px;"> {{$data->item_name}}</P>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus finibus leo a auctor. Pellentesque erat ex, tempus ac quam sollicitudin, laoreet lacinia felis. Maecenas eget pulvinar nunc. Praesent eget eros id sem tempor consectetur sed ullamcorper massa. Integer efficitur pretium nunc, ac interdum leo convallis cursus. Aliquam eu dignissim turpis. Curabitur mauris urna, dignissim vitae purus id, dictum fermentum dolor. Ut risus mauris, iaculis eu tempus a, rhoncus eu tellus. Nunc metus dolor, pretium eu est eget, consequat aliquet nulla. Suspendisse non enim ut urna dictum vestibulum. Cras posuere nunc enim, at mollis odio vehicula et. Maecenas ut quam eget dui pretium posuere.
            </div>
            <div class="col-5 d-none d-md-block" attr="{{$key}}" style="font-size: 30px;height: auto;text-align: center;background-image: url('{{asset('images/items/'.$data->image_path)}}');background-size: cover;">
                <!-- <img src="" alt=""> -->
            </div>
            @php
            $i++;
            @endphp
            @endif
            <div class="col-12 d-md-none" attr="{{$key}}" style="font-size: 30px;height: auto;text-align: center;">
                <img src="{{asset('images/items/'.$data->image_path)}}" alt="">
            </div>
            <div class="col-12 d-md-none">
                <P style="margin-bottom: 10px;font-weight: 400;font-size: 20px;"> {{$data->item_name}}</P>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus finibus leo a auctor. Pellentesque erat ex, tempus ac quam sollicitudin, laoreet lacinia felis. Maecenas eget pulvinar nunc. Praesent eget eros id sem tempor consectetur sed ullamcorper massa. Integer efficitur pretium nunc, ac interdum leo convallis cursus. Aliquam eu dignissim turpis. Curabitur mauris urna, dignissim vitae purus id, dictum fermentum dolor. Ut risus mauris, iaculis eu tempus a, rhoncus eu tellus. Nunc metus dolor, pretium eu est eget, consequat aliquet nulla. Suspendisse non enim ut urna dictum vestibulum. Cras posuere nunc enim, at mollis odio vehicula et. Maecenas ut quam eget dui pretium posuere.
            </div>

        </div>

        @endforeach

    </div>
</div>

<div class="final_pay ">
    <div class="container">
        <div class="row">
            <span class="col-3"><i class="fa-solid fa-circle-exclamation"></i></span>
            @foreach($shops as $shop)
            <h5 class="col-5">{{$shop->company_name}}</h5>
            <p class="col-2" style="color: #fff; font-size: 15px;""><span style=" color: red; font-size: 15px;">Total Price:<del> $ {{$shop->price}}</del></span><br>Final Price: $ {{$shop->price}}</p>
            @endforeach
            <div class="content col-2">
                <a href="#">Pay Now</a>
            </div>
        </div>
    </div>
</div>
<!-- /End Single shop Banner  -->



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

@push('styles')
<style>
    .signle_product_ss {
        width: 90%;
        margin: auto;
        background: #ededed;
        min-height: 160px;
        padding: 70px;
        color: black;
        font-size: 30px;
        font-family: inherit;
        font-weight: 500;
    }

    .single_product_sty {
        padding: 30px 0px;
        text-align: center;
        width: 100%;

    }

    .selected_item {
        width: 102%;
        margin-left: -2%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .single_product_image {
        font-family: fangsong;
        text-align: center;
        width: 100%;
        padding: 30px 0px;
    }

    /* .zoom {
        padding: 50px;
        /* background-color: green; 
        transition: transform .2s;
        width: 200px;
        height: 200px;
        margin: 0 auto;
    }

    .zoom:hover {
        -ms-transform: scale(1.5);
        /* IE 9 */
    /* -webkit-transform: scale(1.5); */
    /* Safari 3-8 */
    /* transform: scale(1.1); */
    /* }  */
</style>
@endpush
@push('scripts')

{{-- <script>
    // $(document).ready(function() {
    //     auto_shadow();

    //     function auto_shadow_timer(counter) {
    //         var len = $('.single_product_sty').map(function() {
    //             return $(this).attr('attr');
    //         });
    //         var timer = setInterval(function() {
    //             $('.signle_product_ss').removeClass('selected_item');
    //             $('.single_product_sty[attr=' + counter + '] .signle_product_ss').addClass('selected_item');
    //             counter++;
    //             if (counter >= len.length) {
    //                 clearInterval(timer);
    //             }
    //             if (counter == len.length) {
    //             console.log('hello');
    //             auto_shadow();
    //         }
    //         }, 5000);
        
    //     }

    //     function auto_shadow() {
    //         var counter = 0;
    //         auto_shadow_timer(counter);
    //     }
    // })
</script> --}}
@endpush