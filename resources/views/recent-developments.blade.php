@extends('layouts.main')
@section('content')
    <div class="title_div">
        <div class="container-fluid ps-0 ps-lg-5 text-center text-lg-start">
            <h1 class="title_div_heading"><strong>NEW DEVELOPMENTS-</strong><br></h1>
        </div>
    </div>
    <style>
        #property {
            position: relative;
            overflow: hidden;
        }

        #property::before {
            content: "";
            position: absolute;
            width: 100%;
            top: 20rem;
            left: 20rem;
            z-index: -1;
            -moz-transform: translate(-20rem, -20rem);
            -webkit-transform: translate(-20rem, -20rem);
            -o-transform: translate(-20rem, -20rem);
            -ms-transform: translate(-20rem, -20rem);
            transform: translate(-20rem, -20rem);
        }

    </style>
    <section class="section_padding">
       <div class="container-fluid px-0">
            @foreach ($properties as $key => $property)
                @if ($key % 2 == 0)
                    <a href="{{ url('property/'.$property->id)}}" style="text-decoration:none">
                        <div class="row mx-0 " style="background: url({{ $property->file->url }}) 0 0 repeat"
                            id="property">
                            <div class="col col-12 col-lg-8 px-0">
                                <div class="development_img_div"></div>
                            </div>
                            <div class="col px-0 d-none d-lg-block col-12 col-lg-4">
                                <div class="development_location_div d-flex h-100">
                                    <div class="mt-5 ps-5 py-5">
                                        <h1 class="location_heading">
                                            <strong>{{ $property->town }}</strong>
                                        </h1>
                                        <span class="location_span"><strong>{{ $property->display }}</strong><br><strong>
                                                {{ $property->postcode }} </strong><br>
                                        </span>
                                        <span class="location_span">
                                            <br><strong>
                                                @php
                                                    $arr = json_decode($property->type);
                                                    echo $arr[0];
                                                @endphp
                                            </strong><br>
                                        </span>
                                        <span class="location_span"><strong>{{ $property->bedrooms }}
                                                bedroom</strong><br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @else
                    <a href="{{ url('property/'.$property->id)}}" style="text-decoration:none">
                        <div class="row mx-0 " style="background: url({{ $property->file->url }}) 0 0 repeat" id="property">
                            <div class="col px-0 d-none d-lg-block col-12 col-lg-4">
                                <div class="development_location_div d-flex h-100">
                                    <div class="mt-5 ps-5 py-5">
                                        <h1 class="location_heading">
                                            <strong>{{ $property->town }}</strong>
                                        </h1>
                                        <span class="location_span"><strong>{{ $property->display }}</strong><br><strong>
                                                {{ $property->postcode }} </strong><br>
                                        </span>
                                        <span class="location_span">
                                            <br><strong>
                                                @php
                                                    $arr = json_decode($property->type);
                                                    echo $arr[0];
                                                @endphp
                                            </strong><br>
                                        </span>
                                        <span class="location_span"><strong>{{ $property->bedrooms }}
                                                bedroom</strong><br></span>
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
                    </a>
                @endif
            @endforeach
        </div>
    </section>
@endsection
