$(document).on('click', '.btn', function() {
    const baseURL = $('meta[name="base_url"]').attr('content');
    const csrfToken = $('meta[name="csrf_token"]').attr('content');

    var cat_id = $(this).attr('data-filter');


    $.ajax({
        url: '/filter',
        data: {
            'id': cat_id,
        },
        success: function(response) {
            $('.shop_details').empty();
            $.each(response, function(k, v) {

                $('.shop_details').html('<div class="col-lg-4 col-md-4 col-6"><div class="single-banner"><img src="" alt=""><div class="content"><p>' + v.service_type + '</p><h3>' + v.company_name + '</h3><a href="' + v.id + '">Shop Now</a></div></div></div>');
            })

        }

    })

});