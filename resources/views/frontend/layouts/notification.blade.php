@if(session('success'))
<div class="alert alert-success alert-dismissable fade show text-center">
    <button class="close" data-dismiss="alert" aria-label="Close">×</button>
    {{session('success')}}
</div>
@endif


@if(session('error'))
<div class="alert alert-danger alert-dismissable fade show text-center selected_d">
    <button class="close" data-dismiss="alert" aria-label="Close">×</button>
    <div class="section_alert">
        {{session('error')}}
    </div>
</div>
@endif

@if(session('points'))
<span id="star_points_{{session('points')}}" class="hidden_p st_po"></span>
@endif