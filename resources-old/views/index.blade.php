@extends('layouts.main')

@section('content')
        <div class="title_div">
        <div class="container-fluid ps-0 ps-xl-5 text-center text-xl-start">
            <h1 class="title_div_heading"><strong>PROJECTS</strong><br></h1>
        </div>
    </div>
    <header class="header_section">
        <div class="position-relative"><img class="w-100" src="{{ asset('assets/img/headerHome_bg_img.jpg') }}">
            <div class="position-absolute header_div d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <h1 class="header_heading"><strong>&nbsp;the New Homes and Off</strong><br></h1>
                    <h1 class="header_heading"><strong>PLAN SPECIALIST COMPANY</strong><br></h1>
                    <h1 class="header_heading"><strong>IN LONDON.</strong><br></h1><a class="btn lg_btns mt-3 mt-lg-5"
                        role="button" href="{{url('recent')}}"><strong>View Gallery</strong><br></a>
                </div>
            </div>
        </div>
    </header>
    <section class="section_padding">
        <div class="container">
            <div>
                <div>
                    <p class="section_paragraph">We find prospective homeowners for New Build developments before the
                        development has reached practical completion. Saving both the property developer and the new owner:
                        time, hassle and stress. Have a look at the new homes we have to sell on our website or feel free to
                        contact us if you are looking to sell a new development off-plan with us. Sourcing and selling
                        off-market Land opportunities for residential and commercial developments.<br></p>
                    <p class="section_paragraph">Have a look at the new homes we have to sell on our website or feel free to
                        contact us if you are looking to sell a new development off-plan with us.<br></p>
                </div>
                <div class="mt-5">
                    <h3 class="list_title"><strong>OUR 3 core services</strong></h3>
                    <ol class="services_list mt-3">
                        <li class="mb-4">Creating and implementing bespoke off plan sales strategies for new
                            developments including tailor made marketing packages to pricing new developments honestly and
                            accurately.&nbsp;<br></li>
                        <li class="mb-4">Full 360 sales service including offering our buyers access to the latest
                            most exclusive developments in London and guiding our buyers through the buying process from
                            mortgage qualification to ease of exchange and completion.<br></li>
                        <li>Sourcing and selling off-market Land opportunities for residential and commercial
                            developments.<br></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="title_div">
            <div class="container-fluid ps-0 ps-xl-5 text-center text-xl-start">
                <h1 class="title_div_heading"><strong>map</strong><br></h1>
            </div>
        </div>
        <div class="container-fluid p-0"><img class="w-100" src="{{ asset('assets/img/Map.jpg') }}"></div>
        <div class="title_div mb-5">
            <div class="container">
                <div class="text-center my-4"><a class="btn lg_btns" role="button" href="all-sites.html"><strong>View
                            Map</strong></a></div>
            </div>
        </div>
    </section>
@endsection
