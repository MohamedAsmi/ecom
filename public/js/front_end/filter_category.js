$(document).on('click', '.btn', function() {
    const baseURL = $('meta[name="base_url"]').attr('content');
    const csrfToken = $('meta[name="csrf_token"]').attr('content');

    var cat_id = $(this).attr('data-filter');


    $.ajax({
        url: '/filter',
        data: {
            'id': cat_id,
        },
        success: function(data) {
            $('#sub').html(data);
            $('#specific').html('');
        }
    })

});