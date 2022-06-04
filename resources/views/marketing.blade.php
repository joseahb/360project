@extends('layouts.main')
@section('content')

    <div class="title_div">
        <div class="container-fluid ps-0 ps-xl-5 text-center text-xl-start">
            <h1 class="title_div_heading"><strong>MARKETING</strong><br></h1>
        </div>
    </div>
    <section class="py-0 py-lg-5">
        <div class="container-fluid px-0">
            <div>
                <div class="mt-0 mt-lg-4"><img class="w-100" src="{{asset('assets/img/how_market_img.png')}}"></div>
            </div>
        </div>
    </section>
    <section class="section_padding ebooks_section mt-5">
        <div class="container text-center text-lg-start">
            <div class="ps-0 ps-lg-5">
                <h1 class="marketing_desc_heading color_white">EBOOKS </h1>
            </div>
            <div class="owl-carousel owl-theme ebooks_slider ps-5 position-relative d-flex my-5">
                <div class="item me-5 me-md-0">
                    <div><img class="books_slide_img pe-0 pe-md-2 m-auto m-lg-0" src="{{asset('assets/img/ebooks_oneA.png')}}"></div>
                </div>
                <div class="item me-5 me-md-0">
                    <div><img class="pe-2 books_slide_img pe-0 pe-md-2 m-auto m-lg-0" src="{{asset('assets/img/ebooks_twoA.png')}}"></div>
                </div>
                <div class="item me-5 me-md-0">
                    <div><img class="pe-2 books_slide_img pe-0 pe-md-2 m-auto m-lg-0" src="{{asset('assets/img/ebooks_threeA.png')}}"></div>
                </div>
                <div class="item me-5 me-md-0">
                    <div><img class="pe-2 books_slide_img pe-0 pe-md-2 m-auto m-lg-0" src="{{asset('assets/img/ebooks_fourA.png')}}"></div>
                </div>
                <div class="item me-5 me-md-0">
                    <div><img class="pe-2 books_slide_img pe-0 pe-md-2 m-auto m-lg-0" src="{{asset('assets/img/ebooks_fiveA.png')}}"></div>
                </div>
                <div class="item me-5 me-md-0">
                    <div><img class="pe-2 books_slide_img pe-0 pe-md-2 m-auto m-lg-0" src="{{asset('assets/img/ebooks_sixA.png')}}"></div>
                </div>
                <div class="item me-5 me-md-0">
                    <div><img class="books_slide_img pe-0 pe-md-2 m-auto m-lg-0" src="{{asset('assets/img/ebooks_sevenA.png')}}"></div>
                </div>
            </div>
            <div class="ps-0 ps-lg-5"><a class="download_link" href="{{url('/ebooks')}}">DOWNLOAD THE E-BOOK NOW</a></div>
        </div>
    </section>
    <section class="section_padding">
        <div class="container-fluid px-0">
            <div class="mt-4">
                <div class="ps-0 ps-lg-5 text-center text-lg-start">
                    <h1 class="marketing_desc_heading">WEBSITES<br></h1>
                </div>
                <div class="mt-5 ps-0 ps-lg-5">
                    <div class="row mx-0">
                        <div class="col col-12 col-lg-6 ps-0">
                            <div class="text-center"><img class="websit_imgs" src="{{asset('assets/img/website_one.png')}}">
                                <h1 class="website_title"><strong>bellingham mews</strong></h1><a class="web_link" href="www.bellinghammews.co.uk">www.bellinghammews.co.uk</a>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-6 ps-0 mt-4 mt-lg-0">
                            <div class="text-center"><img class="websit_imgs" src="{{asset('assets/img/website_two.png')}}">
                                <h1 class="website_title mt-4"><strong>Quilter house</strong><br></h1><a class="web_link" href="www.quilterhouse.co.uk"><strong>www.quilterhouse.co.uk</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 d-flex d-lg-none">
        <div class="container-fluid p-0"><img class="w-100" src="{{asset('assets/img/Vector.png')}}"></div>
    </section>
    <section class="pt-2 pt-lg-5 pb-0">
        <div class="container-fluid px-0">
            <div class="mt-4">
                <div class="ps-0 ps-lg-5 text-center text-lg-start">
                    <h1 class="marketing_desc_heading">HOARDINGS&nbsp;</h1>
                </div>
                <div class="mt-4"><img class="w-100" src="{{asset('assets/img/hoarding_img.jpg')}}"></div>
                <div class="hoarding_desc_div p-3 p-lg-5">
                    <div class="container">
                        <h1 class="hoarding_desc_heading">DESCRIPTION-</h1>
                        <p class="hoarding_desc_para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 d-flex d-lg-none">
        <div class="container-fluid p-0"><img class="w-100" src="{{asset('assets/img/Vector.png')}}"></div>
    </section>
    <section class="py-2 py-lg-5">
        <div class="container-fluid px-0">
            <div class="row g-0 mx-0 mt-3">
                <div class="col col-12 col-lg-6 m-auto d-flex d-lg-none">
                    <div>
                        <h1 class="design_service_heading text-center text-lg-start d-flex d-lg-none justify-content-center">DESIGN SERVICES AVAILABLE <br></h1><img class="w-100 mt-3" src="{{asset('assets/img/design_img.jpg')}}">
                    </div>
                </div>
                <div class="col col-12 col-lg-6 services_bg_col">
                    <div class="services_desc_div">
                        <h1 class="design_service_heading text-center text-lg-start d-none d-lg-flex">DESIGN SERVICES AVAILABLE <br></h1>
                        <ul class="ps-3 design_service_list mt-4">
                            <li>Creating Hoardings for your development<br></li>
                            <li>CGI’s &amp; 3D CGI’s<br></li>
                            <li>Videography </li>
                            <li>Creating specialised unique websites to generate traction for your development</li>
                            <li>E-Books &amp; Brochures </li>
                            <li>Staging and Interior Design assistance to enable buyers to capture the full potential of their new home</li>
                        </ul>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 m-auto d-none d-lg-flex"><img class="w-100" src="{{asset('assets/img/design_img.jpg')}}"></div>
            </div>
        </div>
    </section>
   @endsection
