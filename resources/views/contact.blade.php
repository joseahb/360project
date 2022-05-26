@extends('layouts.main')
@section('content')
    <div class="title_div">
        <div class="container text-center text-xl-start">
            <h1 class="title_div_heading"><strong>CONTACT US&nbsp;</strong><br></h1>
        </div>
    </div>
    <section class="section_padding">
        <div class="container">
            <div class="row mx-0">
                <div class="col col-12 col-lg-6 px-0 d-flex d-lg-none align-items-center justify-content-center">
                    <div class="w-100"><img class="w-100" src="{{asset('assets/img/contact_respon_img.png')}}"></div>
                </div>
                <div class="col col-12 col-lg-6 px-0 mt-3 mt-lg-0">
                    <form class="register_form">
                        <div>
                            <div><span class="contact_desc_span">Use the form below to drop us an email.&nbsp;We are open hours: 9-5 Mon-Fri&nbsp;<br></span></div>
                            <div class="mt-4"><label class="form-label form_label"><strong>FULL NAME&nbsp; *&nbsp;</strong></label><input class="form-control" type="text"></div>
                            <div class="mt-2"><label class="form-label form_label"><strong>E-MAIL ADDRESS&nbsp;*</strong><br></label><input class="form-control" type="email"></div>
                            <div class="mt-2"><label class="form-label form_label"><strong>PHONE NUMBER&nbsp;</strong><br></label><input class="form-control" type="number"></div>
                            <div class="mt-2"><label class="form-label form_label"><strong>Message</strong><br></label><textarea class="form-control" rows="5"></textarea></div>
                            <div class="mt-5"><button class="btn submit_btn" type="submit">Submit</button></div>
                        </div>
                    </form>
                </div>
                <div class="col col-12 col-lg-6 px-0 d-none d-lg-flex align-items-center justify-content-center">
                    <div><img class="w-100" src="{{asset('assets/img/contact_img.jpg')}}"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container-fluid p-0"><img class="w-100" src="{{asset('assets/img/Vector.png')}}"></div>
    </section>
    @endsection
