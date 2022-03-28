<!-- =================msg button============= -->
@if(isset(Auth()->user()->id))
<div class="position__fixed">
	@csrf
	<input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
	<input type="hidden" name="shop_id" class="lv_feed">
	<input type="hidden" name="rol" value="customer">
	<input type="checkbox" id="check"> <label class="chat-btn"> <i class="fa fa-commenting comment"></i> </label>
	<div class="wrapper">
		<div class="header">
			<h6>Let's Chat - Online <i class="fa fa-close close"></i></h6>

		</div>
		<div class="text-center p-2"> <span>Please ask a question to start chat!</span></div>

		<div class="chat-form">
			@if(isset($sh_id))
			<textarea class="form-control" placeholder="Your Text Message" name="cu_msg" rows="1"></textarea> <button class="btn btn-success btn-block send_msg"><i class="fas fa-paper-plane-o ml-1"></i></button>
			@endif
		</div>

	</div>
</div>
@endif
<!-- ======================================== -->

<!-- Start Footer Area -->
<footer class="footer">
	<!-- Footer Top -->
	<div class="footer-top section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer about">
						<div class="logo">
							<a href="index.html"><img src="{{asset('backend/img/logo2.png')}}" alt="#"></a>
						</div>
						@php
						$settings=DB::table('settings')->get();
						@endphp
						<p class="text">@foreach($settings as $data) {{$data->short_des}} @endforeach</p>
						<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">@foreach($settings as $data) {{$data->phone}} @endforeach</a></span></p>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-2 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer links">
						<h4>Information</h4>
						<ul>
							<li><a href="{{route('about-us')}}">About Us</a></li>
							<li><a href="#">Faq</a></li>
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="{{route('contact')}}">Contact Us</a></li>
							<li><a href="#">Help</a></li>
						</ul>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-2 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer links">
						<h4>Customer Service</h4>
						<ul>
							<li><a href="#">Payment Methods</a></li>
							<li><a href="#">Money-back</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="#">Shipping</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer social">
						<h4>Get In Tuch</h4>
						<!-- Single Widget -->
						<div class="contact">
							<ul>
								<li>@foreach($settings as $data) {{$data->address}} @endforeach</li>
								<li>@foreach($settings as $data) {{$data->email}} @endforeach</li>
								<li>@foreach($settings as $data) {{$data->phone}} @endforeach</li>
							</ul>
						</div>
						<!-- End Single Widget -->
						<div class="sharethis-inline-follow-buttons"></div>
					</div>
					<!-- End Single Widget -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Footer Top -->
	<div class="copyright">
		<div class="container">
			<div class="inner">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="left">
							<p>Copyright © {{date('Y')}} <a href="#" target="_blank">Developer.</a> - All Rights Reserved.</p>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="right">
							<img src="{{asset('backend/img/payments.png')}}" alt="#">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- /End Footer Area -->

<!-- Jquery -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- Color JS -->
<script src="{{asset('frontend/js/colors.js')}}"></script>
<!-- Slicknav JS -->
<script src="{{asset('frontend/js/slicknav.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
<!-- Waypoints JS -->
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<!-- Countdown JS -->
<script src="{{asset('frontend/js/finalcountdown.min.js')}}"></script>
<!-- Nice Select JS -->
<script src="{{asset('frontend/js/nicesellect.js')}}"></script>
<!-- Flex Slider JS -->
<script src="{{asset('frontend/js/flex-slider.js')}}"></script>
<!-- ScrollUp JS -->
<script src="{{asset('frontend/js/scrollup.js')}}"></script>
<!-- Onepage Nav JS -->
<script src="{{asset('frontend/js/onepage-nav.min.js')}}"></script>
{{-- Isotope --}}
<script src="{{asset('frontend/js/isotope/isotope.pkgd.min.js')}}"></script>
<!-- Easing JS -->
<script src="{{asset('frontend/js/easing.js')}}"></script>

<!-- Active JS -->
<script src="{{asset('frontend/js/active.js')}}"></script>
<!-- <script src="{{asset('frontend/js/bootstrap1.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery1.min.js')}}"></script> -->


<!-- Active JS -->
<script src="{{asset('js/common.js')}}"></script>

@stack('scripts')
<script>
	// if ($('.section_alert').text() != '') {
	// 	$('.selected_d').addClass('show_p');
	// 	setTimeout(function() {
	// 		$('.selected_d').removeClass('show_p');
	// 	}, 10000);
	// };
	$('.section_alert').html($('.section_alert').text());
	setTimeout(function() {
		$('.alert').slideUp();
	}, 5000);
	$(function() {

		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
		$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
			event.preventDefault();
			event.stopPropagation();

			$(this).siblings().toggleClass("show");


			if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
			}
			$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
			});

		});
	});

	/////////////////////price change///////////////////////////////
	$('.single_pro_side_bar input[type="checkbox"]').on("click", function() {
		var val = $('.single_pro_side_bar input[type="checkbox"]').map(function() {
			if ($(this).is(':checked')) {
				return 'on';
			} else {
				return 'off';
			}
		})
		if (val[0] == 'on') {
			$('.to_price').text('1200');
			$('.fin_price').text('1200');
		} else {
			var service_price = 0;
			for (let q = 1; q < val.length; q++) {
				if (val[q] == 'on') {
					service_price = service_price + 500;
				}
				$('.to_price').text(service_price);
				$('.fin_price').text(service_price);
			}
		}
	});

	$('body').on({
		'click': function() {
			var val = $('.review_form .form-control').map(function() {
				if ($(this).val() != '') {
					return 'right';
				} else {
					$(this).closest('div').find('label').removeClass('mg_top-');
					$(this).removeClass('bx_shadow');
				}
			})
			$(this).closest('div').find('label').addClass('mg_top-');
			$(this).addClass('bx_shadow');
		}
	}, '.review_form .form-control');
	// $('.dou_button').on('click', function() {
	// 	if ($(this).attr('attr') == 'review') {
	// 		$('.nt_form').html('<div class="modal-body mx-3"><div class="md-form mb-5 pt-3"><i class="fas fa-user prefix grey-text"></i><label data-error="wrong" data-success="right" for="form34">Your name</label><input type="text" name="username" id="form34" style="border: none;border-bottom: 1px solid #ccc; box-shadow: none; width: 90%;"class="form-control validate"></div><div class="md-form mb-5" style="padding-left: 10%;"><label data-error="wrong" data-success="right" for="form32" style="position: relative;">How satisfied were you with the service?</label><div class="row"><div class="col-2"><img class="stars" src="'+baseURL+'/images/review/single_star.png" alt="1"></div><div class="col-2"><img class="stars" src="'+baseURL+'/images/review/single_star.png" alt="2"></div><div class="col-2"><img class="stars" src="'+baseURL+'/images/review/single_star.png" alt="3"></div><div class="col-2"><img class="stars" src="'+baseURL+'/images/review/single_star.png" alt="4"></div><div class="col-2"><img class="stars" src="'+baseURL+'/images/review/single_star.png" alt="5"></div></div><input type="hidden" id="stars" name="stars" value=""></div><div class="md-form"><i class="fas fa-pencil prefix grey-text" style="color: transparent !important;"></i><label data-error="wrong" data-success="right" for="form8">Your message</label><textarea type="text" id="form8" class="md-textarea form-control"style="border: none;border-bottom: 1px solid #ccc; box-shadow: none; width: 90%;" rows="3"></textarea></div></div>');
	// 		$('.review_form .btn-unique').html('Leave Feedback  <i class="fas fa-pencil prefix grey-text"></i>');
	$('.review_form .modal-title').html('Leave feedback about this service').css('padding', '0px 5px 10px 10px');
	$('.review_form .stars').attr('src', baseURL + '/images/review/single_star.png');
	$('.lv_feed').val($('.company_DET').attr('attr_id'));


	$('.position__fixed .chat-btn').on('click', function() {
		$('.position__fixed .chat-btn').css('display', 'none');
		$('.position__fixed .wrapper').removeAttr('style').css({
			'display': 'block',
			'opacity': '1'
		});
	})
	$(".position__fixed .close").on('click', function() {
		$('.position__fixed .chat-btn').css('display', 'flex');
		$('.position__fixed .wrapper').removeAttr('style').css({
			'display': 'none',
			'opacity': '0'
		});
	})
	// } else {
	// 	$('.nt_form').html('<div class="modal-body mx-3"><div class="md-form mb-5 pt-3"><i class="fas fa-user prefix grey-text"></i><label data-error="wrong" data-success="right" for="form34">Your name</label><input type="text" id="form34" style="border: none;border-bottom: 1px solid #ccc; box-shadow: none; width: 90%;" class="form-control validate"></div><div class="md-form mb-5"><i class="fas fa-envelope prefix grey-text"></i><label data-error="wrong" data-success="right" for="form29">Your email</label><input type="email" id="form29"style="border: none;border-bottom: 1px solid #ccc; box-shadow: none; width: 90%;"  class="form-control validate"></div><div class="md-form mb-5"><i class="fas fa-tag prefix grey-text"></i><label data-error="wrong" data-success="right" for="form32">Subject</label><input type="text" id="form32" style="border: none;border-bottom: 1px solid #ccc; box-shadow: none; width: 90%;" class="form-control validate"></div><div class="md-form"><i class="fas fa-pencil prefix grey-text" style="color: transparent !important;"></i><label data-error="wrong" data-success="right" for="form8">Your message</label><textarea type="text" id="form8" class="md-textarea form-control" style="border: none;border-bottom: 1px solid #ccc; box-shadow: none; width: 90%;" rows="3"></textarea></div></div>');
	// 	$('.review_form .btn-unique').html('Send <i class="fas fa-paper-plane-o ml-1"></i>');
	// 	$('.review_form .modal-title').html('What do you want to know about this service?').css('padding', '0px 5px 20px 10px');
	// 	}
	// })

	$('body').on({
		'click': function() {
			$('.review_form .stars').removeClass("star_checked");
			var count = $(this).attr('alt');
			for (let y = 1; y <= parseInt(count); y++) {
				$('.review_form .stars[alt="' + y + '"]').addClass('star_checked');
			}
			$('#review_stars').val(count);
		}
	}, '.review_form .stars');
	$('.position__fixed .chat-btn').hide();
	$('.position__fixed .wrapper').css({
		'opacity': '1'
	});
	$(document).ready(function() {
		if ($('.st_po').attr('id').replace('star_points_', '') != 0) {
			var to_points = $('.st_po').attr('id').replace('star_points_', '').split('___');
			var to_point = to_points[1] * 5;
			final_point = to_points[0] / to_point * 5;
			// console.log(final_point);
			final_point = final_point.toFixed(1);
			$('.cu_star_point').text(final_point);
			////////////////////////review//////////////////////

			var point = final_point.split('.');
			for (let w = 1; w <= parseInt(point[0]); w++) {
				$("<style type='text/css'> .review_points .dot.d" + w + "{background-image: conic-gradient( transparent 0deg, #ffd358 0);} </style>").appendTo("head");
			}
			if (parseInt(point[1]) != 0) {
				var e = parseInt(point[0]);
				var ls_point = e + 1;
				var fn_point = 360 / 100 * parseInt(point[1]) * 10;
				fn_point = 360 - fn_point;
				$("<style type='text/css'> .review_points .dot.d" + ls_point + "{background-image: conic-gradient( transparent " + fn_point + "deg, #ffd358 0);} </style>").appendTo("head");
			}
		}

		$('.send_msg').on('click', function() {
			var myKeyVals = {
				'_token': $('.position__fixed [name="_token"]').val(),
				'user_id': $('[name="user_id"]').val(),
				'shop_id': $('[name="shop_id"]').val(),
				'cu_msg': $('[name="cu_msg"]').val(),
				'rol': $('[name="rol"]').val()
			}
			console.log(baseURL + "/chart");
			$.ajax({
				type: 'POST',
				url: baseURL + "/chart",
				data: myKeyVals,
				// dataType: "text",
				success: function(resultData) {
					// console.log(resultData.length);
					for (let p = 0; p < resultData.length; p++) {
						resultData.each(function(index, value) {
							console.log(value)
						});
					}
				}
			});
		})
	})
</script>