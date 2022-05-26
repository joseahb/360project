@extends('layouts.main')
@section('content')

    <div class="title_div">
        <div class="container text-center text-xl-start">
            <h1 class="title_div_heading"><strong>about</strong><br></h1>
        </div>
    </div>
    <section class="pt-5 d-none d-lg-flex">
        <div class="container">
            <div>
                <div>
                    <h1 class="marketing_desc_heading">THE COMPANY </h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid px-0">
            <div class="mt-4">
                <div class="mt-4"><img class="w-100" src="{{ asset('assets/img/company_img.jpg')}}"></div>
            </div>
        </div>
    </section>
    <section class="pb-5">
        <div class="container">
            <div class="mt-4 px-2">
                <h1 class="marketing_desc_heading text-center text-lg-start">WHY US? </h1>
                <p class="approach_para">With an in depth knowledge of the intricacies of the new homes sector and geographical understanding of London, we are best placed to give our clients the best possible experience and service in buying their new home. With 360, we pride ourselves in providing a one-to-one service in that your point of contact does not change, allowing consistency and a professional approach to business that gets our clients’ developments sold and our buyer’s successfully moved into their new home. </p>
            </div>
        </div>
    </section>
    <section class="section_padding">
        <div class="container">
            <div class="px-2">
                <h1 class="about_tittle_heading"><strong>Have a Look at what our developers have said about us</strong></h1>
                <div class="about_reviews_div">
                    <div>
                        <h1 class="about_name_heading"><span class="colored_heading">Rowan Stewart</span>&nbsp; - Featherstone Homes&nbsp;<br></h1>
                        <p class="about_company_para">Blueprint sold out Parker Road, Croydon - 6 houses at full asking price of £600k, sold 5 units in Streatham Imperial court. 2020/2021</p>
                        <p class="about_company_desc position-relative">Blueprint and Featherstone Homes have been dealing with each other now on several of our schemes notably Blackheath Road, Imperial Court Streatham and Parker Road Croydon. We have found Blueprint to be extremely knowledgeable with off plan sales and marketing and their success on our schemes speaks for itself.<img class="quote_one_img" src="{{ asset('assets/img/quote_one.png')}}"><img class="quote_two_img" src="{{ asset('assets/img/quote_two.png')}}"></p>
                    </div>
                </div>
                <div class="about_reviews_div">
                    <div>
                        <h1 class="about_name_heading"><span class="colored_heading">Michael Mccauley</span>&nbsp; - Northridge Capital<br></h1>
                        <p class="about_company_para">Sold 100% of 41 units in Abbeville Place for Michael. 2019/20</p>
                        <p class="about_company_desc position-relative"><strong>My name is Michael Mccauley and I work for Northridge Capital. Raj, Scott and Karam were involved in the sale of Abbeville Place, 41 units in Clapham and Northridge were the funders. It was a pleasure and delight to work with a team that knew what they were doing from meeting the surveyors on site with comparables to get the correct mortgage valuation to sales progression on all units simultaneously</strong><img class="quote_one_img" src="{{ asset('assets/img/quote_one.png')}}"><img class="quote_two_img" src="{{ asset('assets/img/quote_two.png')}}"></p>
                    </div>
                </div>
                <div class="about_reviews_div">
                    <div>
                        <h1 class="about_name_heading"><span class="colored_heading">Lily Lawson</span>&nbsp; - Finlaw Property<br></h1>
                        <p class="about_company_para">Sold 100% of phase 1 Knapton Mews Tooting. 2021</p>
                        <p class="about_company_desc position-relative"><strong>My name is Lily Lawson and I own Finlaw Property. We appointed Blueprint Realty for their expertise and knowledge in off plan sales. We were able to dis-instruct our previous agent who hadn't sold any of the units. We were both surprised and amazed that Scott and his team were able to reserve the first phase 100% in a matter of weeks. I hope to work with Blueprint in the future. Kind regards, Lily.</strong><img class="quote_one_img" src="{{ asset('assets/img/quote_one.png')}}"><img class="quote_two_img" src="{{ asset('assets/img/quote_two.png')}}"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="d-flex d-lg-none justify-content-center">
            <h1 class="marketing_desc_heading">OUR GOALS </h1>
        </div>
        <div class="about_mission_section mt-3 mt-lg-0">
            <div class="d-flex h-100 align-items-center about_mission_overlay">
                <div class="container">
                    <div class="about_overlay_div d-flex align-items-center">
                        <h1 class="about_bg_heading">Our Mission is to deliver exceptional service to our clients and customers alike.<br></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_padding">
        <div class="container">
            <div class="mt-4 px-2">
                <div>
                    <h1 class="marketing_desc_heading d-none d-lg-flex">OUR GOALS </h1>
                    <ul class="approach_para fw-bold ps-4">
                        <li>To deliver high quality “360” services in the new homes market throughout London. This involves helping our buyers with, for example, new build mortgages, solicitors, valuations and surveys.</li>
                        <li class="mt-3">For our developer clients, we provide a 360 service to get your development up and functioning correctly for the best possible opportunity to get off plan sales for your development. This includes, for example, marketing packages, honest and independent pricing, market analysis and interior design recommendations.</li>
                        <li class="mt-3">We aim to take advantage of innovative technologies to improve the quality of customer experience we provide at 360 property. From virtual viewings to high tech land sourcing software, we are well placed.</li>
                    </ul>
                </div>
            </div>
            <div class="mt-4 px-2">
                <div>
                    <h1 class="marketing_desc_heading">Our Ethos </h1>
                    <p class="approach_para fw-bold mt-3">360 Property was formed through a merger of an off-plan sales specialist business and a national residential property developer. This allows 360 Property to cover all aspects of new homes in detail through the land sourcing, planning, financing, marketing and sales of new developments.<br></p>
                </div>
            </div>
            <div class="mt-4 px-2">
                <div>
                    <h1 class="marketing_desc_heading">Mission statement </h1>
                    <p class="approach_para fw-bold mt-3">Our Mission is to deliver exceptional service to our clients and customers alike.&nbsp;<br></p>
                </div>
            </div>
            <div class="mt-4 px-2">
                <div>
                    <h1 class="marketing_desc_heading">WHY SELL WITH US? </h1>
                    <p class="approach_para fw-bold mt-3">360 Property is an off-plan sales specialist company, we understand the property development industry and the advantages of New Homes and New Homes portals unlike the traditional high street estate agent.<br><br>Knowing the intricacies of selling properties before they have been built isn’t for everyone, but it is for us. Maximising the use of government schemes such as Help-to-buy and preparing for those pesky moments when things inevitably go wrong during construction is what we do on a daily basis.<br><br>360 Property isn’t a conglomerate, we’re a team of professionals who want to work with our developers to deliver exceptional results.&nbsp;<br></p>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container-fluid p-0"><img class="w-100" src="{{ asset('assets/img/Vector.png')}}"></div>
    </section>
    <section class="section_padding">
        <div class="container-fluid px-0">
            <div class="text-center text-lg-start">
                <div class="px-5">
                    <h1 class="marketing_desc_heading">THE TEAM&nbsp;<br></h1>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col col-12 col-lg-6 px-0 d-block d-lg-none">
                    <div class="p-5 team_img_div text-center"><img class="w-50" src="{{ asset('assets/img/team_vector.png')}}"></div>
                </div>
                <div class="col col-12 col-lg-6 px-0">
                    <div class="p-5 team_info_div">
                        <h1 class="team_name_heading">Scott Marks<br></h1>
                        <h3 class="team_post_heading colored_heading">DIRECTOR&nbsp;<br></h3>
                        <p class="approach_para">Scott Leads the 360 Property team having had years of experience in development funding in China, Land Sourcing in the Uk &amp; Ireland and finally, leading new homes teams for top london estate agents.</p>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 px-0 d-none d-lg-block">
                    <div class="p-5 team_img_div"></div>
                </div>
            </div>
            <div class="row mx-0 mt-0 mt-lg-3">
                <div class="col col-12 col-lg-6 px-0 d-block d-lg-none">
                    <div class="p-5 team_img_div text-center"><img class="w-50" src="{{ asset('assets/img/team_vector.png')}}"></div>
                </div>
                <div class="col col-12 col-lg-6 px-0">
                    <div class="p-5 team_info_div">
                        <h1 class="team_name_heading">Peter Doyle&nbsp;<br></h1>
                        <h3 class="team_post_heading colored_heading"><strong>Land &amp; New Homes DIRECTOR</strong><br></h3>
                        <p class="approach_para">Peter runs the Land &amp; New Homes division of 360 property. Having previously worked as a Business Development &amp; Property consultant at a top London estate agent.<br></p>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 px-0 d-none d-lg-block">
                    <div class="p-5 team_img_div"></div>
                </div>
            </div>
            <div class="row mx-0 mt-0 mt-lg-3">
                <div class="col col-12 col-lg-6 px-0 d-block d-lg-none">
                    <div class="p-5 team_img_div text-center"><img class="w-50" src="{{ asset('assets/img/team_vector.png')}}"></div>
                </div>
                <div class="col col-12 col-lg-6 px-0">
                    <div class="p-5 team_info_div">
                        <h1 class="team_name_heading">Tim Kingston<br></h1>
                        <h3 class="team_post_heading colored_heading"><strong>Sales Director</strong><br></h3>
                        <p class="approach_para">Peter runs the Land &amp; New Homes division of 360 property. Having previously worked as a Business Development &amp; Property consultant at a top London estate agent.<br></p>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 px-0 d-none d-lg-block">
                    <div class="p-5 team_img_div"></div>
                </div>
            </div>
            <div class="row mx-0 mt-0 mt-lg-3">
                <div class="col col-12 col-lg-6 px-0 d-block d-lg-none">
                    <div class="p-5 team_img_div text-center"><img class="w-50" src="{{ asset('assets/img/team_vector.png')}}"></div>
                </div>
                <div class="col col-12 col-lg-6 px-0">
                    <div class="p-5 team_info_div">
                        <h1 class="team_name_heading">Harvey Marks<br></h1>
                        <h3 class="team_post_heading colored_heading"><strong>Office Manager</strong><br></h3>
                        <p class="approach_para">Harvey joined the team in 2020 and has excelled in his role of keeping the team and office in check.&nbsp;<br></p>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 px-0 d-none d-lg-block">
                    <div class="p-5 team_img_div"></div>
                </div>
            </div>
            <div class="row mx-0 mt-0 mt-lg-3">
                <div class="col col-12 col-lg-6 px-0 d-block d-lg-none">
                    <div class="p-5 team_img_div text-center"><img class="w-50" src="{{ asset('assets/img/team_vector.png')}}"></div>
                </div>
                <div class="col col-12 col-lg-6 px-0">
                    <div class="p-5 team_info_div">
                        <h1 class="team_name_heading">Lisa Farrow<br></h1>
                        <h3 class="team_post_heading colored_heading"><strong>Operations Manager</strong><br></h3>
                        <p class="approach_para">Lisa is currently the Operations Manager for 360 Property, having previously spent 8 years as a Recruiter within the Financial Services industry. As Operations Manager Lisa works closely with each member of the team with a focus on administrative duties, sales progression, marketing, HR responsibilities, diary management, finances, and the overall operational processes of 360 Property.<br></p>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 px-0 d-none d-lg-block">
                    <div class="p-5 team_img_div h-100"></div>
                </div>
            </div>
        </div>
    </section>
   @endsection
