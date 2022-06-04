<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css?v=1.0') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css')}}">
</head>

<body class="position-relative">
    @include('layouts.nav')
    @yield('content')
    <footer class="footer_section">
        <div class="container">
            <div class="row mx-0">
                <div class="col col-12 col-lg-2">
                    <div><img src="{{asset('assets/img/footer_logo.png')}}"></div>
                </div>
                <div class="col col-10 d-none d-xl-flex align-items-center">
                    <div class="w-100">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center"><a class="footer_span me-4" href="index.html">home<br></a><a class="footer_span me-4" href="new-developments.html">sales</a><a class="footer_span me-4" href="about.html">about</a><a class="footer_span me-4" href="services.html">services</a><a class="footer_span me-4" href="marketing.html">marketing</a><a class="footer_span me-4" href="register.html">register</a><a class="footer_span me-4" href="contact.html">contact</a></div>
                            <div class="ms-auto"><a href="https://www.facebook.com/Three-Sixty-Property-100116886065770"><img class="me-2" src="{{asset('assets/img/facebook.png')}}"></a><a href="https://www.instagram.com/threesixtynewbuild/"><img class="me-2" src="{{asset('assets/img/instagram.png')}}"></a><a href="https://www.linkedin.com/company/three-sixty-property"><img src="{{asset('assets/img/linkedin.png')}}"></a></div>
                        </div>
                        <hr class="footer_hr">
                        <div class="d-flex align-items-center"><a class="footer_span" href="privacy-policy.html"><strong>PRIVACY POLICY</strong><br></a><span class="footer_span">/</span><a class="footer_span" href="{{url('/disclaimer')}}" target="_blank"><strong>DISCLAIMER</strong><br></a><span class="footer_span">/</span><a class="footer_span" href="#"><strong>TERMS AND CONDITIONS&nbsp;</strong><br></a><a class="footer_span_sm ms-auto text-decoration-none" href="mailto:info@threesixty.co.uk"><strong>INFO@THREESIXTY.CO.UK</strong><br></a></div>
                        <div class="d-flex align-items-center mt-3"><span class="footer_span_sm"><strong>COPYRIGHT 2022 THREE SIXTY PROPERTY</strong><br></span><span class="footer_span_sm ms-auto"><strong>+44 7770 070 070</strong><br></span></div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 d-flex d-xl-none">
                <div class="col col-6">
                    <ul class="footer_link_list">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg><a class="footer_span" href="index.html">Home</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg><a class="footer_span" href="new-developments.html"><strong>SALES</strong><br></a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg><a class="footer_span" href="about.html"><strong>ABOUT</strong><br></a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg><a class="footer_span" href="services.html"><strong>SERVICES</strong><br></a></li>
                    </ul>
                </div>
                <div class="col col-6">
                    <ul class="footer_link_list">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg><a class="footer_span" href="marketing.html"><strong>MARKETING</strong><br></a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg><a class="footer_span" href="register.html"><strong>REGISTER</strong><br></a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg><a class="footer_span" href="contact.html"><strong>CONTACT</strong><br></a></li>
                        <li>
                            <div class="ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-right">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                </svg><a href="https://www.facebook.com/Three-Sixty-Property-100116886065770"><img class="me-2" src="{{asset('assets/img/facebook.png')}}"></a><a href="https://www.instagram.com/threesixtynewbuild/"><img class="me-2" src="{{asset('assets/img/instagram.png')}}"></a><a href="https://www.linkedin.com/company/three-sixty-property"><img src="{{asset('assets/img/linkedin.png')}}"></a></div>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="footer_hr">
            <div class="d-flex d-xl-none align-items-center"><a class="footer_span" href="privacy-policy.html"><strong>PRIVACY POLICY</strong><br></a><span class="footer_span">/</span><a class="footer_span" href="{{url('/disclaimer')}}"><strong>DISCLAIMER</strong><br></a><span class="footer_span">/</span><a class="footer_span" href="#"><strong>TERMS AND CONDITIONS&nbsp;</strong><br></a></div>
            <div class="d-grid d-xl-none mt-2"><a class="footer_span_sm text-decoration-none text-start" href="mailto:info@threesixty.co.uk"><strong>INFO@THREESIXTY.CO.UK</strong><br></a><span class="footer_span_sm mt-2 text-start"><strong>+44 7770 070 070</strong><br></span></div>
            <div class="mt-3 d-flex d-xl-none align-items-center justify-content-center"><span class="footer_span_sm"><strong>COPYRIGHT 2022 THREE SIXTY PROPERTY</strong><br></span></div>
        </div>
        <div><div class="alert alert-dismissible text-center cookiealert" role="alert">
    <div><h1 class="cookie_main_heading">Cookie Settings</h1></div>
  <div class="cookiealert-container">We use cookies, some of them are essential, others are optional.<a href="http://cookiesandyou.com/" target="_blank">Learn more</a>


  </div>
    <hr>
    <div>
        <button type="button" class="btn btn-sm submit_btn acceptcookies py-auto py-lg-2" aria-label="Close" onclick="acceptCookieConsent()">
          Accept
      </button>
        <button type="button" class="btn btn-sm submit_btn pref_btn acceptcookies mt-2 mt-md-0 py-auto py-lg-2" aria-label="Close" data-toggle="modal" data-target="#prefrencesModal">
          Preferences
      </button>
    </div>
</div></div>
    </footer>
    <div class="register_btn_div">
        <div class="d-flex flex-column align-items-center justify-content-center h-100">
            <h1 class="register_div_heading"><strong>Register your&nbsp;</strong><br><strong>interest</strong><br></h1><a class="btn register_div_btn" role="button" href="register.html">Register<br></a>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="prefrencesModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header flex-column align-items-start pref_modal_div">
                    <div class="d-flex align-items-center w-100">
                        <h4 class="modal-title modal_title_heading">Your Cookie Preferences</h4><button class="btn ms-auto btn-close modal_close_btn" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <p class="modal_para mt-3">We use different types of cookies to optimize your experience on our website. You may choose which types of cookies to allow and can change your preferences at any time. Remember that disabling cookies may affect your experience on the website. You can learn more about how we use cookies by visiting our&nbsp;<a class="modal_para" href="privacy-policy.html" style="color: #ecf0f1;">Privacy Policy</a>.<br></p><button type="button" class="btn-close d-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pref_modal_div">
                    <div>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label modal_label" for="formCheck-1">BASIC</label></div>
                            <p class="ms-4">These cookies are necessary to the core functionality of our website and some of its features.<br></p>
                        </div>
                        <hr>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label modal_label" for="formCheck-2">FUNCTIONAL<br></label></div>
                            <p class="ms-4">These cookies are used to enhance the performance and functionality of our websites but are nonessential to their use. However, without these cookies, certain functionality may become unavailable.<br></p>
                        </div>
                        <hr>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label modal_label" for="formCheck-3">ALL COOKIES<br></label></div>
                            <p class="ms-4">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.&nbsp;<br></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pref_modal_div"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn" type="button" style="background: #B97242;color: #ffffff;" data-bs-dismiss="modal">Save</button></div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/js/script.min.js')}}"></script>
</body>

</html>
