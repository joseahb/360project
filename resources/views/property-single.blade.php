@extends('layouts.main')
@section('content')
    <section class="mt-0 mt-lg-3">
        <div class="container-fluid px-0">
            <div class="row mx-0">
                <div class="col col-12 col-lg-7 d-flex align-items-end px-0">
                    <div class="camberly_bg_div w-100 h-100 d-flex pb-0 pb-lg-5 align-items-start align-items-lg-end"
                        style="background-image: url({{ $property->files[0]->url }})">
                        <div class="w-100 d-block d-lg-none">
                            <div class="mx-2 p-3 location_responive_info d-flex">
                                <div class="flex-grow-1 me-2">
                                    <h1 class="place_name_heading"><strong>{{ $property->display }}</strong><br></h1>
                                    <div class="mt-2 d-flex align-items-center"><i
                                            class="fas fa-map-marker-alt colored_heading"></i>
                                        <h3 class="place_info_heading mb-0 ms-2 colored_heading">
                                            <strong>{{ $property->town }}</strong><br>
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="place_info_heading"><strong>{{ $property->street }}</strong><br><strong>,
                                            {{ $property->postcode }}</strong><br></h3>
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="place_info_heading"><strong>{{ $property->bedrooms }}
                                            bedrooms&nbsp;</strong><br><strong>@php
                                                $arr = json_decode($property->type);
                                                echo $arr[0];
                                            @endphp</strong><br></h3>
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="place_info_heading"><strong>From {{ $property->price }}</strong><br></h3>
                                </div>
                            </div>
                        </div><a class="btn sales_btn d-none d-lg-flex" role="button"><strong>View
                                Gallery&nbsp;</strong></a>
                    </div>
                </div>
                <div class="col col-12 col-lg-5 px-5 mt-4 mt-lg-0">
                    <div>
                        <div class="row">
                            <div class="col col-6 d-none d-lg-flex">
                                <div>
                                    <h1 class="place_name_heading"><strong>{{ $property->display }}</strong><br></h1>
                                    <h3 class="place_info_heading mt-4">
                                        <strong>{{ $property->street }}</strong><br><strong>{{ $property->postcode }}</strong><br>
                                    </h3>
                                    <h3 class="place_info_heading mt-4">
                                        <strong>{{ $property->bedrooms }}</strong><br><strong>@php
                                            $arr = json_decode($property->type);
                                            echo $arr[0];
                                        @endphp</strong><br>
                                    </h3>
                                    <h3 class="place_info_heading mt-4"><strong>From £{{ $property->price }}</strong><br>
                                    </h3>
                                    <div class="mt-4 d-flex align-items-center"><i class="fas fa-map-marker-alt"></i>
                                        <h3 class="place_info_heading mb-0 ms-2">
                                            <strong>{{ $property->town }}&nbsp;</strong><br>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-lg-6 d-flex justify-content-center">
                                <div><img src="{{ $property->files[1]->url }}" style="width: 300px"></div>
                            </div>
                        </div>
                        <hr class="div_separator div_margin_sale">
                        <div class="py-4">
                            <div class="row mx-0">
                                <div class="col col-12 col-lg-4 px-0 d-flex align-items-center justify-content-center"><img
                                        class="w-75" src="{{ asset('assets/img/ellipse_1.png') }}"></div>
                                <div
                                    class="col col-12 col-lg-8 d-flex align-items-center mt-4 mt-lg-0 justify-content-center justify-content-lg-start">
                                    <div>
                                        <h1 class="sale_name_heading text-center text-lg-start">Scott Marks<br></h1>
                                        <h1 class="sale_position_heading text-center text-lg-start">Director <br></h1>
                                        <h1 class="sale_info_heading mt-5 text-center text-lg-start">07561471669 <br></h1>
                                        <h1 class="sale_info_heading text-center text-lg-start">
                                            scott@threesixtyproperty.co.uk <br></h1>
                                    </div>
                                </div>
                            </div><a class="btn mt-3 sales_btn mx-auto" role="button"><strong>Register Your
                                    Interest&nbsp;</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_padding hoarding_desc_div">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-2">
                    @foreach ($property->files as $file)
                        @if (pathinfo($file->url, PATHINFO_EXTENSION) == 'pdf')
                            <div class="d-grid"><img class="mx-auto"
                                    src="{{ $property->files[0]->url}}" width="200px">
                                    <a class="download_link mt-3"
                                    href="{{$file->url}}">DOWNLOAD THE&nbsp;<br>E-BOOK NOW</a></div>
                        @break
                    @endif
                @endforeach
            </div>
            <div class="col col-12 col-lg-10 mt-4 mt-lg-0">
                <div>
                    <h1 class="book_desc_heading">DESCRIPTION-</h1>
                    <p class="book_desc_para mt-4">
                        {{$property->description}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section_padding">
    <div class="container">
        <div class="row mx-0">
            <div class="col col-12 col-lg-4">
                <div>
                    <h1 class="sale_feature_heading">FEATURES-</h1>
                    <p class="sale_feature_para w-75">The property is of concrete construction, all walls and floors
                        are&nbsp;constructed with reinforced concrete and as such has enhanced&nbsp;sound and fire
                        performance properties which exceed the&nbsp;building regulation requirements.</p>
                </div>
            </div>
            <div class="col d-flex align-items-center">
                <div>
                    <div class="row">
                        @php
                            $points = json_decode($property->bullets);

                        @endphp
                        @foreach ($points->bullet as $key => $bullet)
                            <div class="col col-6 col-md-4">
                                <div><span class="feature_span">{{ $key + 1 }}</span>
                                    <p class="sale_feature_para">{{ $bullet }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container-fluid p-0"><img class="w-100" src="{{ asset('assets/img/Vector.png') }}"></div>
</section>
<section class="section_padding">
    <div class="container">
        <div>
            <h1 class="sale_gallery_heading ms-2">GALLERY-</h1>
            <div class="row mx-0 mt-2">
                @foreach ($property->files as $img)
                    @if (pathinfo($img->url, PATHINFO_EXTENSION) != 'pdf')
                        <div class="col col-12 col-lg-6 col-xl-4 mt-4 text-center text-lg-start"><img
                                class="gallery_img" src="{{ $img->url }}"></div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
