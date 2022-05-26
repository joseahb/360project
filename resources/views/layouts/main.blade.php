<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css')}}">
</head>

<body class="position-relative">
    @include('layouts.nav')
    @yield('content')
    <footer class="footer_section">
        <div class="container">
            <div class="row mx-0">
                <div class="col col-12 col-lg-2">
                    <div><img src="{{ asset('assets/img/footer_logo.png') }}"></div>
                </div>
                <div class="col col-10 d-none d-xl-flex align-items-center">
                    <div class="w-100">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center"><a class="footer_span me-4"
                                    href="index.html">home<br></a><a class="footer_span me-4"
                                    href="new-developments.html">sales</a><a class="footer_span me-4"
                                    href="about.html">about</a><a class="footer_span me-4"
                                    href="services.html">services</a><a class="footer_span me-4"
                                    href="marketing.html">marketing</a><a class="footer_span me-4"
                                    href="register.html">register</a><a class="footer_span me-4"
                                    href="contact.html">contact</a></div>
                            <div class="ms-auto"><img class="me-2"
                                    src="{{ asset('assets/img/facebook.png') }}"><img class="me-2"
                                    src="{{ asset('assets/img/instagram.png') }}"><img
                                    src="{{ asset('assets/img/linkedin.png') }}"></div>
                        </div>
                        <hr class="footer_hr">
                        <div class="d-flex align-items-center"><span class="footer_span_sm"><strong>PRIVACY
                                    POLICY/DISCLAIMER/TERMS AND CONDITIONS&nbsp;</strong></span><span
                                class="footer_span_sm ms-auto"><strong>INFO@THREESIXTY.CO.UK</strong><br></span></div>
                        <div class="d-flex align-items-center mt-3"><span class="footer_span_sm"><strong>COPYRIGHT 2022
                                    THREE SIXTY PROPERTY</strong><br></span><span
                                class="footer_span_sm ms-auto"><strong>+44 7770 070 070</strong><br></span></div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 d-flex d-xl-none">
                <div class="col col-6">
                    <ul class="footer_link_list">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg><a class="footer_span" href="index.html">Home</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg><a class="footer_span" href="new-developments.html"><strong>SALES</strong><br></a>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg><a class="footer_span" href="about.html"><strong>ABOUT</strong><br></a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg><a class="footer_span" href="services.html"><strong>SERVICES</strong><br></a></li>
                    </ul>
                </div>
                <div class="col col-6">
                    <ul class="footer_link_list">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg><a class="footer_span" href="marketing.html"><strong>MARKETING</strong><br></a>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg><a class="footer_span" href="register.html"><strong>REGISTER</strong><br></a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                viewBox="0 0 16 16" class="bi bi-chevron-right">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg><a class="footer_span" href="contact.html"><strong>CONTACT</strong><br></a></li>
                        <li>
                            <div class="ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-right">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg><img class="me-2" src="{{ asset('assets/img/facebook.png') }}"><img
                                    class="me-2" src="{{ asset('assets/img/instagram.png') }}"><img
                                    src="{{ asset('assets/img/linkedin.png') }}"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="alert alert-dismissible text-center cookiealert" role="alert">
                <div>
                    <h1 class="cookie_main_heading">Cookie Settings</h1>
                </div>
                <div class="cookiealert-container">We use cookies, some of them are essential, others are optional.<a
                        href="http://cookiesandyou.com/" target="_blank">Learn more</a>


                </div>
                <hr>
                <div>
                    <button type="button" class="btn btn-sm submit_btn acceptcookies py-auto py-lg-2"
                        aria-label="Close">
                        Accept
                    </button>
                    <button type="button" class="btn btn-sm submit_btn acceptcookies mt-2 mt-md-0 py-auto py-lg-2"
                        aria-label="Close">
                        Preferences
                    </button>
                </div>
            </div>
        </div>
    </footer>
    <div class="register_btn_div">
        <div class="d-flex flex-column align-items-center justify-content-center h-100">
            <h1 class="register_div_heading"><strong>Register your&nbsp;</strong><br><strong>interest</strong><br></h1>
            <a class="btn register_div_btn" role="button" href="register.html">Register<br></a>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
</body>

</html>
