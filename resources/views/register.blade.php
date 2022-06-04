@extends('layouts.main')
@section('content')
    <div class="title_div">
        <div class="container text-center text-xl-start">
            <h1 class="title_div_heading">Register your interest<br></h1>
        </div>
    </div>
    <section>
        <div class="container-fluid px-0">
            <div class="mt-0 mt-lg-0">
                <div class="mt-0 mt-lg-4"><img class="w-100" src="{{asset('assets/img/register_img.jpg')}}"></div>
            </div>
        </div>
    </section>
    <section class="section_padding">
        <div class="container">
            <div class="row mx-0">
                <div class="col col-12 col-lg-6 px-0 d-flex d-lg-none align-items-center justify-content-center">
                    <div>
                        <h1 class="logo_heading">THREE SIXTY<br></h1>
                        <h1 class="logo_form_sub">exceptional service to our<br>clients and customers a like</h1>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 px-0 mt-4 mt-lg-0">
                    <form class="register_form">
                        <div class="row mx-0">
                            <div class="col col-12 col-md-6 ps-0 pe-0 pe-md-2">
                                <div><label class="form-label form_label">WHO ARE YOU ?</label><select class="form-select select_input register_role">
                                        <option value="14">BUYER</option>
                                        <option value="15">DEVELOPER</option>
                                    </select></div>
                            </div>
                            <div class="col col-12 col-md-6 pe-0 ps-0 ps-md-2 mt-4 mt-md-0">
                                <div class="date_input ms-auto"><label class="form-label form_label"><strong>DATE</strong></label><input class="form-control ms-auto w-100" type="date"></div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div><label class="form-label form_label"><strong>FULL NAME&nbsp; *&nbsp;</strong></label><input class="form-control" type="text"></div>
                            <div class="company_input_div d-none mt-2"><label class="form-label form_label"><strong>Company&nbsp; *</strong><br></label><input class="form-control" type="text"></div>
                            <div class="mt-2"><label class="form-label form_label"><strong>E-MAIL ADDRESS&nbsp;*</strong><br></label><input class="form-control" type="email"></div>
                            <div class="mt-2"><label class="form-label form_label"><strong>PHONE NUMBER&nbsp;</strong><br></label><input class="form-control" type="number"></div>
                            <div class="mt-2"><label class="form-label form_label"><strong>AREA *&nbsp;</strong><br></label><select class="form-select"></select></div>
                            <div class="mt-3"><button class="btn submit_btn" type="submit">Submit</button></div>
                        </div>
                    </form>
                </div>
                <div class="col col-12 col-lg-6 px-0 align-items-center justify-content-center d-none d-lg-flex">
                    <div>
                        <h1 class="logo_heading">THREE SIXTY<br></h1>
                        <h1 class="logo_form_sub">exceptional service to our<br>clients and customers a like</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container-fluid p-0"><img class="w-100" src="{{asset('assets/img/Vector.png')}}"></div>
    </section>
@endsection
