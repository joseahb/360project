@extends('layouts.main')
@section('content')
    <div class="title_div">
        <div class="container-fluid ps-0 ps-lg-5 text-center text-lg-start">
            <h1 class="title_div_heading"><strong>NEW DEVELOPMENTS-</strong><br></h1>
        </div>
    </div>
    <section class="section_padding">
        <div class="container-fluid px-0">
            @foreach ($properties as $key => $property)
                @if ($key % 2 == 0)
                    <div class="row mx-0 "  style="background-image:url({{$property->file->url}})">                        <div class="col col-12 col-lg-8 px-0">
                            <div class="development_img_div"></div>
                        </div>
                        <div class="col px-0 col-12 col-lg-4">
                            <div class="development_location_div d-flex justify-content-end h-100">
                                <div class="mt-5 pe-5 text-end py-5">
                                    <h1 class="location_heading"><strong>{{ $property->town }}</strong></h1><span
                                        {{-- class="location_span"><strong>Quilter House</strong><br><strong>Greyhound
                                    Lane</strong><br><strong>SW16&nbsp;</strong><br></span><span --}} {{ $property->street }} class="location_span"><br><strong> {{ $property->available }}
                                            New 1 &amp; {{ $property->bedrooms }}
                                            Bedroom</strong><br><strong>{{ json_decode($property->type)[0] }}</strong><br></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row mx-0 mt-3" style="background-image:url({{$property->file->url}})">
                        <div class="col px-0 d-none d-lg-block col-12 col-lg-4">
                            <div class="development_location_div d-flex h-100">
                                <div class="mt-5 ps-5 py-5">
                                    <h1 class="location_heading"><strong>CATFORD</strong></h1><span
                                        class="location_span"><strong>Bellingham Mews&nbsp;</strong><br><strong>SE6
                                            2PN&nbsp;</strong><br></span><span class="location_span"><br><strong>14
                                            new&nbsp;homes</strong><br></span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-8 px-0">
                            <div class="development_img_div"></div>
                        </div>
                        <div class="col px-0 d-block d-lg-none col-12 col-lg-4">
                            <div class="development_location_div d-flex h-100 justify-content-end">
                                <div class="mt-5 pe-5 py-5 text-end">
                                    <h1 class="location_heading">LOCATION</h1><span class="location_span">NAME OF
                                        PROJECT<br></span><span class="location_span"><strong>Full
                                            Address</strong><br></span><span
                                        class="location_span"><strong>Bedrooms?</strong><br></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
        </div>
    </section>
@endsection
