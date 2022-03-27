@extends('frontend.layouts.master')

@section('title','E-SHOP || About Us')

@section('main-content')


<!-- Single shop Banner  -->
<div class="container">
    <div class="col-12">
        <h2 class="single_product_image">Our Package</h2>
        <div class="row">
            <div class="col-9">
                <div class="row">
                    @php
                    $i = 0;
                    $p = 1;
                    @endphp
                    <div class="single-banner row col-12">
                        @foreach($single_shops as $key =>$data)

                        @if($i == $p)
                        <div class="col-5 d-none d-md-block mb-5" attr="{{$key}}" style="font-size: 30px;height: auto;text-align: center;background-image: url('{{asset('images/items/'.$data->image_path)}}');background-size: cover;">
                            <!-- <img src="" alt=""> -->
                        </div>
                        <div class="col-7 d-none d-md-block mb-5" style="margin: auto;">
                            <P style="margin-bottom: 10px;font-weight: 400;font-size: 20px;"> {{$data->item_name}}</P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus finibus leo a auctor. Pellentesque erat ex, tempus ac quam sollicitudin, laoreet lacinia felis. Maecenas eget pulvinar nunc. Praesent eget eros id sem tempor consectetur sed ullamcorper massa. Integer efficitur pretium nunc, ac interdum leo convallis cursus. Aliquam eu dignissim turpis. Curabitur mauris urna, dignissim vitae purus id, dictum fermentum dolor. Ut risus mauris, iaculis eu tempus a, rhoncus eu tellus. Nunc metus dolor, pretium eu est eget, consequat aliquet nulla. Suspendisse non enim ut urna dictum vestibulum. Cras posuere nunc enim, at mollis odio vehicula et. Maecenas ut quam eget dui pretium posuere.
                        </div>
                        @php
                        $p++;
                        @endphp
                        @else
                        <div class="col-7 d-none d-md-block mb-5" style="margin: auto;">
                            <P style="margin-bottom: 10px;font-weight: 400;font-size: 20px;"> {{$data->item_name}}</P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus finibus leo a auctor. Pellentesque erat ex, tempus ac quam sollicitudin, laoreet lacinia felis. Maecenas eget pulvinar nunc. Praesent eget eros id sem tempor consectetur sed ullamcorper massa. Integer efficitur pretium nunc, ac interdum leo convallis cursus. Aliquam eu dignissim turpis. Curabitur mauris urna, dignissim vitae purus id, dictum fermentum dolor. Ut risus mauris, iaculis eu tempus a, rhoncus eu tellus. Nunc metus dolor, pretium eu est eget, consequat aliquet nulla. Suspendisse non enim ut urna dictum vestibulum. Cras posuere nunc enim, at mollis odio vehicula et. Maecenas ut quam eget dui pretium posuere.
                        </div>
                        <div class="col-5 d-none d-md-block mb-5" attr="{{$key}}" style="font-size: 30px;height: auto;text-align: center;background-image: url('{{asset('images/items/'.$data->image_path)}}');background-size: cover;">
                            <!-- <img src="" alt=""> -->
                        </div>
                        @php
                        $i++;
                        @endphp
                        @endif
                        <div class="col-12 d-md-none mb-5" attr="{{$key}}" style="font-size: 30px;height: auto;text-align: center;">
                            <img src="{{asset('images/items/'.$data->image_path)}}" alt="">
                        </div>
                        <div class="col-12 d-md-none mb-5" style="margin: auto;">
                            <P style="margin-bottom: 10px;font-weight: 400;font-size: 20px;"> {{$data->item_name}}</P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus finibus leo a auctor. Pellentesque erat ex, tempus ac quam sollicitudin, laoreet lacinia felis. Maecenas eget pulvinar nunc. Praesent eget eros id sem tempor consectetur sed ullamcorper massa. Integer efficitur pretium nunc, ac interdum leo convallis cursus. Aliquam eu dignissim turpis. Curabitur mauris urna, dignissim vitae purus id, dictum fermentum dolor. Ut risus mauris, iaculis eu tempus a, rhoncus eu tellus. Nunc metus dolor, pretium eu est eget, consequat aliquet nulla. Suspendisse non enim ut urna dictum vestibulum. Cras posuere nunc enim, at mollis odio vehicula et. Maecenas ut quam eget dui pretium posuere.
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- ============================== -->
            <!-- =============side bar========= -->
            <div class="col-3">
                <div class="row">
                    <div class="col-12 single_pro_side_bar">
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
                                        <div class="col-2  offset-2">
                                            <img class="stars dot d1" src="{{asset('images/review/single_star.png')}}" alt="">
                                        </div>
                                        <div class="col-2">
                                            <img class="stars dot d2" src="{{asset('images/review/single_star.png')}}" alt="">
                                        </div>
                                        <div class="col-2">
                                            <img class="stars dot d3" src="{{asset('images/review/single_star.png')}}" alt="">
                                        </div>
                                        <div class="col-2">
                                            <img class="stars dot d4" src="{{asset('images/review/single_star.png')}}" alt="">
                                        </div>
                                        <div class="col-2">
                                            <img class="stars dot d5" src="{{asset('images/review/single_star.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <h5 class="cu_star_point">0.0</h5>
                                </div>

                            </div>
                            <!-- ================================== -->
                            <!-- ==========customer reviews======== -->
                            <h5>CLIENT REVIEWS @php echo '('.count($reviews).')'; $cou = 0; @endphp</h5>
                            @if(count($reviews) != '')
                            @foreach($reviews as $review)
                            @if($cou < 3) @if($cou==1) <div class="customer_review" style="background: #f6deff;">
                                @else
                                <div class="customer_review">

                                    @endif
                                    <div class="cu_profile_img">
                                        <img src="{{asset('images/review/single_star.png')}}" alt="">
                                    </div>
                                    <div class="cu_content">
                                        <h6>{{$review->name}}</h6>
                                        <p>{{$review->on_date}}</p>
                                    </div>
                                    <div class="review">
                                        <p>{{$review->description}}</p>

                                    </div>
                                </div>

                                @php
                                $cou++;
                                @endphp
                                @endif
                                @endforeach
                                @endif
                                <!-- ================================== -->
                                @if(isset(Auth()->user()->id))
                                <input type="button" value="Write a Review" class="review dou_button" attr="review" data-toggle="modal" data-target="#modalContactForm">
                                @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================== -->
        </div>
    </div>
</div>

<!-- bottom payment bar -->
<div class="final_pay ">
    <div class="container">
        <div class="row">
            <span class="col-3"><i class="fa-solid fa-circle-exclamation"></i></span>
            @foreach($shops as $shop)
            <h5 class="col-5 company_DET" attr_id="{{$shop->id}}">{{$shop->company_name}}</h5>
            <p class="col-2" style="color: #fff; font-size: 15px;"><span style=" color: red; font-size: 15px;">Total Price:<del> $ <span class="to_price" style="font-size: 15px;padding:0px;">{{$shop->price}}</span></del></span><br>Final Price: $ <span class="fin_price" style="font-size: 15px;padding:0px;">{{$shop->price}}</span></p>
            @endforeach

            <div class="content col-2">
                <a href="#">Pay Now</a>
            </div>
        </div>
    </div>
</div>
<!-- /End Single shop Banner  -->


<!-- ================review form====================== -->
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
                @if(isset(Auth()->user()->id))
                <form action="{{route('store-review')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                    <div class="nt_form">
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5 pt-3"><i class="fas fa-user prefix grey-text"></i><label data-error="wrong" data-success="right" for="form34">Your name</label><input type="text" name="username" id="form34" style="border: none;border-bottom: 1px solid #ccc; box-shadow: none; width: 90%;" class="form-control validate"></div>
                            <div class="md-form mb-5" style="padding-left: 10%;"><label data-error="wrong" data-success="right" for="form32" style="position: relative;">How satisfied were you with the service?</label>
                                <div class="row">
                                    <div class="col-2"><img class="stars" src="" alt="1"></div>
                                    <div class="col-2"><img class="stars" src="" alt="2"></div>
                                    <div class="col-2"><img class="stars" src="" alt="3"></div>
                                    <div class="col-2"><img class="stars" src="" alt="4"></div>
                                    <div class="col-2"><img class="stars" src="" alt="5"></div>
                                </div><input type="hidden" id="review_stars" name="review_stars" value="">
                            </div>
                            <div class="md-form"><i class="fas fa-pencil prefix grey-text" style="color: transparent !important;"></i><label data-error="wrong" data-success="right" for="form8">Your message</label>
                                <textarea type="text" name="review_massege" id="form8" class="md-textarea form-control" style="border: none;border-bottom: 1px solid #ccc; box-shadow: none; width: 90%;" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="modal-footer d-flex justify-content-center">
                            <button name="shop_id" class="btn btn-unique lv_feed">Leave Feedback <i class="fas fa-pencil prefix grey-text"></i></button>
                        </div>
                    </div>
                </form>
                @endif
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