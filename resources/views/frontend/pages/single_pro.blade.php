@extends('frontend.layouts.master')

@section('title','E-SHOP || About Us')

@section('main-content')


<!-- Single shop Banner  -->
<div class="container">
    <div class="col-12">
        <h2 class="single_product_image">Our Package</h2>
        <div class="row">
            @php
            $i = 0;
            $p = 1;
            @endphp
            <div class="single-banner row pt-5 col-9">
                @foreach($single_shops as $key =>$data)

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
                @endforeach
            </div>
            <!-- ============================== -->
            <!-- =============side bar========= -->
            <div class="col-3 single_pro_side_bar">
                <h5>Duration of service</h5>
                <div class="content">
                    <label for="from">Service Start Time:</label>
                    <input type="datetime-local" name="" id="">
                    <label for="yo">Service end Time:</label>
                    <input type="datetime-local" name="" id="">
                </div>
                <h5>select your Package</h5>
                <div class="content">
                    <p>
                        <input type="checkbox" name="all_pac" id="" checked><span> Full packages ($1200)</span>
                    </p>
                    @foreach($single_shops as $key =>$data)
                    <p>
                        <input type="checkbox" name="{{$data->item_name}}_pac" id=""><span> {{$data->item_name}} ($500)</span>
                    </p>
                    @endforeach
                </div>
                <!-- ================================== -->
                <!-- ==========review section========== -->
                <div class="review_points">
                    <!-- ===========review star============ -->
                    <div class="row">
                        <div class="col-8 dots_container">
                            <div class="row">
                                <div class="offset-1 col-2">
                                    <span class="dot d1"></span>
                                </div>
                                <div class="col-2">
                                    <span class="dot d2"></span>
                                </div>
                                <div class="col-2">
                                    <span class="dot d3"></span>
                                </div>
                                <div class="col-2">
                                    <span class="dot d4"></span>
                                </div>
                                <div class="col-2">
                                    <span class="dot d5"></span>
                                </div>

                                <div class="col-2  offset-2">
                                    <img class="stars" src="{{asset('images/review/single_star.png')}}" alt="">
                                </div>
                                <div class="col-2">
                                    <img class="stars" src="{{asset('images/review/single_star.png')}}" alt="">
                                </div>
                                <div class="col-2">
                                    <img class="stars" src="{{asset('images/review/single_star.png')}}" alt="">
                                </div>
                                <div class="col-2">
                                    <img class="stars" src="{{asset('images/review/single_star.png')}}" alt="">
                                </div>
                                <div class="col-2">
                                    <img class="stars" src="{{asset('images/review/single_star.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <h5 class="cu_star_point">4.9</h5>
                        </div>

                    </div>
                    <!-- ================================== -->
                    <!-- ==========customer reviews======== -->
                    <h5>CLIENT REVIEWS</h5>
                    <div class="customer_review" style="background: #f6deff;">
                        <div class="cu_profile_img">
                            <img src="{{asset('images/review/single_star.png')}}" alt="">
                        </div>
                        <div class="cu_content">
                            <h6>customer name</h6>
                            <p>2022-jan-20</p>
                        </div>
                        <div class="review">
                            <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>

                        </div>
                    </div>
                    <div class="customer_review">
                        <div class="cu_profile_img">
                            <img src="{{asset('images/review/single_star.png')}}" alt="">
                        </div>
                        <div class="cu_content">
                            <h6>customer name</h6>
                            <p>2022-jan-20</p>
                        </div>
                        <div class="review">
                            <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>

                        </div>
                    </div>
                    <div class="customer_review" style="background: #f6deff;">
                        <div class="cu_profile_img">
                            <img src="{{asset('images/review/single_star.png')}}" alt="">
                        </div>
                        <div class="cu_content">
                            <h6>customer name</h6>
                            <p>2022-jan-20</p>
                        </div>
                        <div class="review">
                            <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>

                        </div>
                    </div>
                    <!-- ================================== -->
                    <input type="button" value="Write a Review" class="review dou_button" attr="review" data-toggle="modal" data-target="#modalContactForm">
                    <input type="button" value="Ask a Question" class="question dou_button" attr="question" data-toggle="modal" data-target="#modalContactForm">
                </div>
                <!-- ================================== -->
            </div>
        </div>
    </div>
</div>


<!-- bottom payment bar -->
<div class="final_pay ">
    <div class="container">
        <div class="row">
            <span class="col-3"><i class="fa-solid fa-circle-exclamation"></i></span>
            @foreach($shops as $shop)
            <h5 class="col-5">{{$shop->company_name}}</h5>
            <p class="col-2" style="color: #fff; font-size: 15px;"><span style=" color: red; font-size: 15px;">Total Price:<del> $ <span class="to_price" style="font-size: 15px;padding:0px;">{{$shop->price}}</span></del></span><br>Final Price: $ <span class="fin_price" style="font-size: 15px;padding:0px;">{{$shop->price}}</span></p>
            @endforeach
            <div class="content col-2">
                <a href="#">Pay Now</a>
            </div>
        </div>
    </div>
</div>
<!-- /End Single shop Banner  -->


<!-- ================contect form and review form====================== -->
<div class="review_form">
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100 font-weight-bold">Write to us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="nt_form"></div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- <div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" >Launch
    Modal Contact Form</a>
</div> -->
<!-- ================================================================== -->

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