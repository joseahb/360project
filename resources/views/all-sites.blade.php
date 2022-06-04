@extends('layouts.main')
@section('content')
<div class="title_div">
    <div class="container-fluid ps-0 ps-lg-5 text-center text-xl-start">
        <h1 class="title_div_heading"><strong>MAp</strong><br></h1>
    </div>
</div>
<section>
    <div class="container-fluid px-0 position-relative">
        <div class="map_card_div">
            <div class="d-flex">
                <div class="map_grey_div"></div>
                <div class="map_info_div">
                    <h1 class="map_card_title mb-0"><strong>Title&nbsp;</strong></h1><span class="map_card_span">Info</span>
                </div>
            </div>
            <div class="d-flex mt-3">
                <div class="map_grey_div"></div>
                <div class="map_info_div">
                    <h1 class="map_card_title mb-0"><strong>Title&nbsp;</strong></h1><span class="map_card_span">Info</span>
                </div>
            </div>
            <div class="mt-3 d-flex justify-content-center">
                <div class="past_mark_div me-3"><i class="fas fa-map-marker-alt past_mark_icon"></i><span class="map_mark_span mt-2"><strong>PAST PROJECTS</strong></span></div>
                <div class="past_mark_div ms-3"><i class="fas fa-map-marker-alt new_mark_icon"></i><span class="map_mark_span mt-2"><strong>NEW PROJECTS</strong><br></span></div>
            </div>
        </div><iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyBtfhZ_trDn_XdGhtTOtD-ckaGxG1WZLTk&amp;q=Big+Ben%2C+Greenwich&amp;zoom=11" width="100%" height="400" style="height: 600px;"></iframe>
    </div>
</section>

    @endsection
