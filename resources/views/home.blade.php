<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} where faith meets the passion </title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-6.css">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.css">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="assets/css/vendor/metismenu.css">
    <!-- custom style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        #popup {
            display: none;
            position: fixed;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -30%);
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            border-radius: 8px;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        #closeBtn {
            margin-top: 10px;
            padding: 5px 10px;
        }

        .modal-dialog-centered {
            display: flex;
            align-items: center;
            min-height: calc(100% - 1rem);
        }
    </style>

</head>

<body>

    <div class="modal fade" id="dailyPopup" tabindex="-1" aria-labelledby="dailyPopupLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title w-100" id="dailyPopupLabel">Daily Reminder</h5>
                </div>
                <div class="modal-body">
                    <h4>Message from the Principal</h4>
                    <hr>
                    <h5>As-salamu Alaikum wa Rahmatullahi wa Barakatuh,</h5>
                    <p>It is my honor and privilege to welcome you to Al-Hamd Islamic School—a place where knowledge is
                        pursued
                        with purpose, character is cultivated through faith, and innovation is embraced with open
                        hearts.
                        At Al-Hamd, we strive to create a nurturing environment where students grow academically,
                        spiritually, and
                        socially. Our curriculum blends Islamic teachings with advanced instruction in STEM and
                        Robotics, allowing
                        our students to become forward-thinkers grounded in Islamic values.
                        Every learner at Al-Hamd is guided to develop a strong identity, a love for learning, and the
                        skills needed
                        for success in today’s world. Our faculty and staff are passionate educators committed to
                        helping students
                        reach their full potential—in this life and the next, insha’Allah.
                        I warmly invite you to visit our school, meet our team, and experience the inspiring atmosphere
                        of Al-Hamd
                        Islamic School.
                        Warm regards,
                        Mrs. Imtiaz Bibi
                        Principal, Al-Hamd Islamic School
                        <br>
                        Welcome to Al-Hamd Islamic School, where the foundation of education is laid with Taqwa
                        (God-consciousness)
                        and built with the tools of modern knowledge.
                        Our vision was to create a school where students don’t have to choose between faith and future.
                        Through
                        high-quality academic programs, a focus on Islamic character, and state-of-the-art STEM &
                        Robotics labs, we
                        are equipping the next generation with the tools to lead, serve, and succeed.
                        Al-Hamd was founded with a mission: to inspire students to become faithful, capable, and
                        compassionate
                        leaders of tomorrow. We believe in holistic development—nurturing the soul, sharpening the mind,
                        and
                        building the skills needed to thrive in a complex world.
                        I extend my heartfelt gratitude to our staff, parents, and community who continue to support
                        this noble
                        mission. May Allah (SWT) guide our efforts and bless our students with success in both worlds.
                        Sincerely,
                        Mr. Qazi Muhammad Waqas
                        Managing Director, Al-Hamd Islamic School
                    </p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay, Got it!</button>
                </div>
            </div>
        </div>
    </div>
    <!-- header style one -->
    <header class="header-one header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-one-wrapper">
                        <div class="left-side-header">
                            <a href="{{ url('/') }}" class="logo-area">
                                <img src="{{ asset('assets/images/logo.png') }}" width="80px" alt="logo">
                            </a>
                        </div>

                        <div class="main-nav-one">
                            <nav>
                                <ul>
                                    <li style="position: static;">
                                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ url('/Contact') }}">Contact</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ url('/About') }}">About Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="header-right-area-one">
                            <div class="buttons-area">
                                <a href="{{ url('/Contact') }}" class="rts-btn btn-primary border-radius">Admission
                                    Now</a>
                            </div>
                            <div class="menu-btn" id="menu-btn">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect width="20" height="2" fill="#1F1F25"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header style end -->

    <!-- banner area start -->
    <section class="banner-area-one rts-shape-move">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-xl-1 order-lg-1 order-sm-2 order-2">
                    <div class="banner-content-one">
                        <div class="inner">
                            <h1 class="title-banner">
                                Welcome to <span>{{ env('APP_NAME') }}</span> Islamic School
                                <img src="assets/images/banner/title-shape-1.svg" alt="banner">
                            </h1>
                            <p class="disc">At Al-Hamd Islamic School, we believe that education is a journey of both
                                the heart and the mind. As a leading private Islamic high school, we are proud to offer
                                a unique blend of strong Islamic values and cutting-edge STEM and Robotics education.
                                Our goal is to nurture confident, ethical, and forward-thinking individuals who will
                                become tomorrow’s leaders—in both the Ummah and the world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-change order-lg-2 order-sm-1 order-1">
                    <div class="banner-right-img">
                        <img src="{{ asset('assets/images/banner/m.png') }}" width="672" alt="child">
                    </div>
                </div>
            </div>
        </div>
        <img class="banner-bg-shape-2" src="assets/images/banner/banner-bg-1.png" alt="">
        <div class="shape-image">
            <div class="shape one" data-speed="0.04" data-revert="true"><img src="assets/images/banner/shape/01.svg"
                    alt="shape_image"></div>
            <div class="shape two" data-speed="0.04"><img src="assets/images/banner/shape/02.svg" alt="shape_image">
            </div>
            <div class="shape three" data-speed="0.04" data-revert="true"><img
                    src="assets/images/banner/shape/03.svg" alt="shape_image"></div>
            <div class="shape four" data-speed="0.04" data-revert="true"><img
                    src="assets/images/banner/shape/04.svg" alt="shape_image"></div>
            <div class="shape five" data-speed="0.04"><img src="assets/images/banner/shape/05.svg"
                    alt="shape_image">
            </div>
            <div class="shape six" data-speed="0.04"><img src="assets/images/banner/shape/06.svg" alt="shape_image">
            </div>
            <div class="shape seven" data-speed="0.04" data-revert="true"><img
                    src="assets/images/banner/shape/07.svg" alt="shape_image"></div>
        </div>
        <div class="banner-bg-grid-shape">
        </div>
    </section>
    <!-- banner area end -->

    <!-- about area start -->
    <section class="rts-about-area rts-shape-move rts-section-gap">
        <div class="container">
            <div class="section-inner">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="{{ asset('assets/images/about/second.jpg') }}" width="630" alt="uimfg">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title-area">
                                <p class="pre-title"><img src="assets/images/banner/title-img.svg"
                                        alt="">About Us</p>
                                <h2 class="section-title">Inspiring Excellence with Faith and Innovation
                                </h2>
                                <p class="desc">Al-Hamd Islamic School was founded with a vision to provide
                                    high-quality education grounded in Islamic values. We are more than just a school—we
                                    are a community that nurtures academic achievement, personal growth, and spiritual
                                    development.
                                </p>
                            </div>
                            <ul class="about-wrapper">
                                <li class="wrapper-list">
                                    <div class="list-inner">
                                        <div class="icon"><img src="assets/images/icon/01.svg" alt="">
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Our Mission</h4>
                                            <p class="desc">To provide a holistic education that integrates Islamic
                                                teachings with STEM and robotics, fostering critical thinking,
                                                creativity, and ethical leadership
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wrapper-list">
                                    <div class="list-inner">
                                        <div class="icon"><img src="assets/images/icon/02.svg" alt="">
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Our Vision</h4>
                                            <p class="desc">
                                                We aim to nurture future innovators who uphold Islamic values while
                                                excelling in science and technology for the betterment of society
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-btn-area">
                                <a href="{{ url('/About') }}" class="rts-btn btn-primary border-radius">About
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-image">
            <div class="shape one" data-speed="0.04" data-revert="true"><img src="assets/images/banner/shape/08.svg"
                    alt="shape_image"></div>
            <div class="shape two" data-speed="0.04" data-revert="true"><img src="assets/images/banner/shape/09.svg"
                    alt="shape_image"></div>
            <div class="shape three" data-speed="0.04"><img src="assets/images/banner/shape/10.svg"
                    alt="shape_image"></div>
        </div>
    </section>
    <!-- about area end -->

    <section class="rts-about-area area-3 rts-section-gap">
        <div class="container">
            <div class="section-inner">
                <div class="section-bg-area">
                    <img src="{{ asset('assets/images/about/about-bg.png') }}" alt="">
                </div>
                <div class="content-inner rts-shape-move">
                    <div class="image-area">
                        <img src="{{ asset('assets/images/about/about-03.jpg') }}" width="295" alt="">
                        <img class="shape-img" src="{{ asset('assets/images/about/shape-01.png') }}" alt="">
                        <img class="shape-img2" src="{{ asset('assets/images/banner/shape/02.svg') }}"
                            alt="">
                    </div>
                    <div class="right-side-content">
                        <h2 class="heading-title">Our History</h2>
                        <p class="desc">
                            Al Hamd Islamic School was established in 2022 with a commitment to providing quality
                            education rooted in Islamic values. Initially, the school started with pre-primary and
                            primary classes, focusing on foundational learning and character development. In 2024, the
                            school expanded to include matric classes, offering a comprehensive curriculum to support
                            academic excellence. Recognizing the importance of modern education, in 2025, Al Hamd
                            Islamic School introduced STEM and robotics education, equipping students with essential
                            skills in science, technology, engineering, and mathematics while staying true to Islamic
                            principles
                        </p>
                    </div>
                </div>
                <div class="shape-image">
                    <div class="shape one" data-speed="0.04" data-revert="true"><img
                            src="{{ asset('assets/images/about/01.svg') }}" alt="shape_image"></div>
                    <div class="shape two" data-speed="0.04"><img src="{{ asset('assets/images/about/02.svg') }}"
                            alt="shape_image"></div>
                    <div class="shape three" data-speed="0.04" data-revert="true"><img
                            src="{{ asset('assets/images/about/03.svg') }}" alt="shape_image"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- class area start -->
    <section class="rts-class-area">
        <div class="container">
            <div class="section-title-area text-center">
                <p class="pre-title justify-content-center"><img src="assets/images/banner/title-img.svg"
                        alt="">Academic</p>
                <h2 class="section-title">Academic Excellence with a Future-Focused Approach</h2>
                <p class="desc">At Al-Hamd Islamic School, our academic program combines rigorous standards with
                    real-world relevance. Our curriculum is aligned with national education benchmarks while offering
                    enriched programs in:
                </p>
            </div>
            <div class="section-inner">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="class-wrapper">
                            <div class="wrapper-inner">
                                <div class="icon">
                                    <img src="assets/images/icon/03.svg" alt="">
                                </div>
                                <a href="program-details.html">
                                    <h4 class="title">STEM</h4>
                                </a>
                                <p class="desc">Science, Technology, Engineering & Math (STEM)

                                </p>
                                <div class="shape-icon"><img src="assets/images/banner/blink.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="class-wrapper two">
                            <div class="wrapper-inner">
                                <div class="icon">
                                    <img src="assets/images/icon/04.svg" alt="">
                                </div>
                                <a href="program-details.html">
                                    <h4 class="title">Robotics & Coding </h4>
                                </a>
                                <p class="period"></p>
                                <p class="desc">Building future minds through Robotics and Coding.
                                </p>
                                <div class="shape-icon"><img src="assets/images/banner/blink.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="class-wrapper three">
                            <div class="wrapper-inner">
                                <div class="icon">
                                    <img src="assets/images/icon/05.svg" alt="">
                                </div>
                                <a href="#">
                                    <h4 class="title">Nazra e Qur'an</h4>
                                </a>
                                <p class="desc">Nazra e Qur'an is the subjective recitation of the Quran in Al-Hamd.
                                </p>
                                <div class="shape-icon"><img src="assets/images/banner/blink.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="class-wrapper four">
                            <div class="wrapper-inner">
                                <div class="icon">
                                    <img src="assets/images/icon/06.svg" alt="">
                                </div>
                                <a href="#">
                                    <h4 class="title">Social Sciences & Ethics</h4>
                                </a>
                                <p class="desc">Understanding people and values for a better world.
                                </p>
                                <div class="shape-icon"><img src="assets/images/banner/blink.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- class area end -->

    <!-- course area start -->
    <section class="rts-course-area rts-shape-move section-bg">
        <div class="container">
            <div class="section-title-area text-center">
                <p class="pre-title justify-content-center"><img src="assets/images/banner/title-img.svg"
                        alt="">Courses</p>
                <h2 class="section-title">Kids Courses at {{ env('APP_NAME') }}</h2>
                <p class="desc">Discover the exciting and enriching courses tailored <br> for young minds at
                    {{ env('APP_NAME') }}</p>
            </div>
            <div class="slider-inner">
                <div class="swiper mySwiper-category-1 swiper-data"
                    data-swiper='{
                            "spaceBetween":30,
                            "slidesPerView":3,
                            "loop": true,
                            "speed": 1500,
                            "pagination":{
                                "el": ".swiper-paginations",
                                "clickable": "true"
                            },
                            "autoplay":{
                                "delay":"4000"
                            },
                            "breakpoints":{
                            "0":{
                                "slidesPerView":1,
                                "spaceBetween":30},
                            "320":{
                                "slidesPerView":1,
                                "spaceBetween":30},
                            "480":{
                                "slidesPerView":1,
                                "spaceBetween":30},
                            "768":{
                                "slidesPerView":2,
                                "spaceBetween":30},
                            "840":{
                                "slidesPerView":2,
                                "spaceBetween":30},
                            "1140":{
                                "slidesPerView":3,
                                "spaceBetween":30}
                            }
                        }'>
                    <div class="swiper-wrapper">
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="course-wrapper">
                                <div class="wrapper-inner">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/brand/seven.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <a href="#">
                                            <h4 class="title">Early Explorers (Ages 3-5)</h4>
                                        </a>
                                        <p class="desc">An introduction to colors, shapes, and basic artistic
                                            expressions.</p>
                                        <ul class="feature-wrapper">
                                            <li class="wrapper-list">ABC Adventure</li>
                                            <li class="wrapper-list">Little Scientists</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="course-wrapper two">
                                <div class="wrapper-inner">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/brand/third.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <a href="course-details.html">
                                            <h4 class="title">Primary School (Ages 6-11)</h4>
                                        </a>
                                        <p class="desc">An introduction to colors, shapes, and basic artistic
                                            expressions.</p>
                                        <ul class="feature-wrapper">
                                            <li class="wrapper-list">Math Mania</li>
                                            <li class="wrapper-list">Science Safari</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="course-wrapper three">
                                <div class="wrapper-inner">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/brand/five.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <a href="course-details.html">
                                            <h4 class="title">Middle School (Ages 12-14)</h4>
                                        </a>
                                        <p class="desc">An introduction to colors, shapes, and basic artistic
                                            expressions.</p>
                                        <ul class="feature-wrapper">
                                            <li class="wrapper-list">Coding</li>
                                            <li class="wrapper-list">Robotics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->

                    </div>
                </div>
                <div class="swiper-paginations"></div>
            </div>
            <img class="banner-bg-shape-3" src="assets/images/banner/banner-bg-2.png" alt="">
        </div>
        <div class="shape-image">
            <div class="shape one" data-speed="0.04" data-revert="true"><img src="assets/images/banner/shape/11.svg"
                    alt="shape_image"></div>
            <div class="shape two" data-speed="0.04" data-revert="true"><img src="assets/images/banner/shape/12.svg"
                    alt="shape_image"></div>
        </div>
    </section>
    <!-- course area end -->

    <!-- category area start -->
    <section class="rts-category-area rts-section-gap">
        <div class="container">
            <div class="section-title-area text-center">
                <p class="pre-title justify-content-center"><img src="assets/images/banner/title-img.svg"
                        alt="">Category</p>
                <h2 class="section-title">Popular class topics</h2>
                <p class="desc">marked by significant growth and exploration as <br> toddlers transition from infancy
                </p>
            </div>
            <div class="slider-inner">
                <div class="swiper mySwiper-category-1 swiper-data"
                    data-swiper='{
                        "spaceBetween":80,
                        "slidesPerView":5,
                        "loop": true,
                        "speed": 1500,
                        "navigation":{
                            "nextEl":".swiper-button-next",
                            "prevEl":".swiper-button-prev"
                        },
                        "pagination":{
                            "el": ".swiper-pagination2",
                            "clickable": "true"
                        },
                        "autoplay":{
                            "delay":"4000"
                        },
                        "breakpoints":{
                        "0":{
                            "slidesPerView":1,
                            "spaceBetween":30},
                        "320":{
                            "slidesPerView":1,
                            "spaceBetween":80},
                        "500":{
                            "slidesPerView":2,
                            "spaceBetween":80},
                        "640":{
                            "slidesPerView":2,
                            "spaceBetween":80},
                        "840":{
                            "slidesPerView":3,
                            "spaceBetween":80},
                        "1140":{
                            "slidesPerView":5,
                            "spaceBetween":80}
                        }
                    }'>
                    <div class="swiper-wrapper">
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="category-wrapper">
                                <div class="wrapper-inner">
                                    <div class="icon">
                                        <a href="course.html">
                                            <img src="assets/images/icon/07.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="course.html">Languages</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="category-wrapper two">
                                <div class="wrapper-inner">
                                    <div class="icon">
                                        <a href="course.html">
                                            <img src="assets/images/icon/08.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="course.html">Coding</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="category-wrapper three">
                                <div class="wrapper-inner">
                                    <div class="icon">
                                        <a href="course.html">
                                            <img src="assets/images/icon/09.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="course.html">Math</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-wrapper five">
                                <div class="wrapper-inner">
                                    <div class="icon">
                                        <a href="course.html">
                                            <img src="assets/images/icon/11.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="course.html">Writing</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class="swiper-btn swiper-button-next">
                    <div class="inner">
                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.6918 20C1.80148 20.0006 1.91019 19.9796 2.01173 19.9381C2.11326 19.8967 2.2056 19.8356 2.28347 19.7583L9.0918 12.95C9.47983 12.5629 9.78769 12.1032 9.99774 11.5969C10.2078 11.0907 10.3159 10.5481 10.3159 10C10.3159 9.45194 10.2078 8.90926 9.99774 8.40305C9.78769 7.89685 9.47983 7.43705 9.0918 7.05L2.28347 0.241678C2.20577 0.163979 2.11353 0.102345 2.01201 0.0602948C1.91049 0.0182446 1.80169 -0.00339842 1.6918 -0.00339842C1.58192 -0.00339842 1.47311 0.0182446 1.3716 0.0602948C1.27008 0.102345 1.17784 0.163979 1.10014 0.241678C1.02244 0.319376 0.960803 0.411618 0.918753 0.513136C0.876703 0.614655 0.85506 0.723461 0.85506 0.833344C0.85506 0.943226 0.876703 1.05203 0.918753 1.15355C0.960803 1.25507 1.02244 1.34731 1.10014 1.42501L7.90847 8.23333C8.37664 8.70209 8.6396 9.3375 8.6396 10C8.6396 10.6625 8.37664 11.2979 7.90847 11.7667L1.10014 18.575C1.02203 18.6525 0.960034 18.7446 0.917726 18.8462C0.875419 18.9477 0.853638 19.0566 0.853638 19.1667C0.853638 19.2767 0.875419 19.3856 0.917726 19.4871C0.960034 19.5887 1.02203 19.6809 1.10014 19.7583C1.178 19.8356 1.27035 19.8967 1.37188 19.9381C1.47341 19.9796 1.58213 20.0006 1.6918 20Z"
                                fill="#262626" />
                        </svg>
                    </div>
                </div>
                <div class="swiper-btn swiper-button-prev">
                    <div class="inner">
                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.30869 20C9.19901 20.0006 9.09029 19.9796 8.98876 19.9381C8.88723 19.8966 8.79488 19.8355 8.71702 19.7583L1.90869 12.95C1.52066 12.5629 1.2128 12.1031 1.00275 11.5969C0.792694 11.0907 0.68457 10.548 0.68457 9.99998C0.68457 9.45192 0.792694 8.90924 1.00275 8.40303C1.2128 7.89683 1.52066 7.43703 1.90869 7.04998L8.71702 0.241658C8.79472 0.163959 8.88696 0.102325 8.98848 0.0602752C9.09 0.018225 9.1988 -0.00341797 9.30869 -0.00341797C9.41857 -0.00341797 9.52737 0.018225 9.62889 0.0602752C9.73041 0.102325 9.82265 0.163959 9.90035 0.241658C9.97805 0.319357 10.0397 0.411599 10.0817 0.513117C10.1238 0.614635 10.1454 0.723442 10.1454 0.833324C10.1454 0.943207 10.1238 1.05201 10.0817 1.15353C10.0397 1.25505 9.97805 1.34729 9.90035 1.42499L3.09202 8.23332C2.62385 8.70207 2.36088 9.33748 2.36088 9.99998C2.36088 10.6625 2.62385 11.2979 3.09202 11.7666L9.90035 18.575C9.97846 18.6524 10.0405 18.7446 10.0828 18.8462C10.1251 18.9477 10.1469 19.0566 10.1469 19.1666C10.1469 19.2766 10.1251 19.3856 10.0828 19.4871C10.0405 19.5887 9.97846 19.6808 9.90035 19.7583C9.82248 19.8355 9.73014 19.8966 9.62861 19.9381C9.52708 19.9796 9.41836 20.0006 9.30869 20Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="swiper-pagination2"></div>
            </div>
        </div>
    </section>
    <!-- category area end -->
    <!-- testimonials area start -->
    <section class="rts-testimonials-area section-bg">
        <div class="container">
            <div class="section-title-area text-center">
                <p class="pre-title justify-content-center"><img src="assets/images/banner/title-img.svg"
                        alt="">Testimonials</p>
                <h2 class="section-title">What Parents Say About Us</h2>
                <p class="desc">The success and happiness of our students are at the heart <br> of everything we do.
                    But don't just take our word</p>
            </div>
            <div class="slider-inner">
                <div class="swiper mySwiper-category-1 swiper-data"
                    data-swiper='{
                            "spaceBetween":30,
                            "slidesPerView":3,
                            "loop": true,
                            "speed": 1500,
                            "navigation":{
                                "nextEl":".swiper-button-next3",
                                "prevEl":".swiper-button-prev3"
                            },
                            "autoplay":{
                                "delay":"4000"
                            },
                            "breakpoints":{
                            "0":{
                                "slidesPerView":1,
                                "spaceBetween":30},
                            "320":{
                                "slidesPerView":1,
                                "spaceBetween":30},
                            "480":{
                                "slidesPerView":1,
                                "spaceBetween":30},
                            "640":{
                                "slidesPerView":1,
                                "spaceBetween":30},
                            "840":{
                                "slidesPerView":1,
                                "spaceBetween":30},
                            "1140":{
                                "slidesPerView":1,
                                "spaceBetween":30}
                            }
                        }'>
                    <div class="swiper-wrapper">
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="testimonials-wrapper">
                                <div class="wrapper-inner">
                                    <div class="content">
                                        <h4 class="author">Mr. Abid Ali</h4>
                                        <p class="desc">Incredible teachers and a nurturing environment — my child
                                            loves going to school every day!
                                        </p>
                                        <ul class="star-rating-area">
                                            <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-light fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="testimonials-shape-image">
                                        <div class="shape one"><img src="assets/images/banner/shape/13.svg"
                                                alt="shape_image"></div>
                                        <div class="shape two"><img src="assets/images/banner/shape/14.svg"
                                                alt="shape_image"></div>
                                        <div class="shape three"><img src="assets/images/banner/shape/15.svg"
                                                alt="shape_image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonials-wrapper">
                                <div class="wrapper-inner">
                                    <div class="content">
                                        <h4 class="author">Rana Zain Khan</h4>
                                        <p class="desc">
                                            A perfect blend of academics, creativity, and values. Truly a second home
                                            for students!
                                        </p>
                                        <ul class="star-rating-area">
                                            <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-light fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="testimonials-shape-image">
                                        <div class="shape one"><img src="assets/images/banner/shape/13.svg"
                                                alt="shape_image"></div>
                                        <div class="shape two"><img src="assets/images/banner/shape/14.svg"
                                                alt="shape_image"></div>
                                        <div class="shape three"><img src="assets/images/banner/shape/15.svg"
                                                alt="shape_image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonials-wrapper">
                                <div class="wrapper-inner">
                                    <div class="content">
                                        <h4 class="author">Nabeel Anwaar</h4>
                                        <p class="desc">
                                            My child has grown academically and socially thanks to this amazing school
                                            community.
                                        </p>
                                        <ul class="star-rating-area">
                                            <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa-light fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="testimonials-shape-image">
                                        <div class="shape one"><img src="assets/images/banner/shape/13.svg"
                                                alt="shape_image"></div>
                                        <div class="shape two"><img src="assets/images/banner/shape/14.svg"
                                                alt="shape_image"></div>
                                        <div class="shape three"><img src="assets/images/banner/shape/15.svg"
                                                alt="shape_image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class="swiper-btn swiper-button-next3">
                    <div class="inner">
                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.6918 20C1.80148 20.0006 1.91019 19.9796 2.01173 19.9381C2.11326 19.8967 2.2056 19.8356 2.28347 19.7583L9.0918 12.95C9.47983 12.5629 9.78769 12.1032 9.99774 11.5969C10.2078 11.0907 10.3159 10.5481 10.3159 10C10.3159 9.45194 10.2078 8.90926 9.99774 8.40305C9.78769 7.89685 9.47983 7.43705 9.0918 7.05L2.28347 0.241678C2.20577 0.163979 2.11353 0.102345 2.01201 0.0602948C1.91049 0.0182446 1.80169 -0.00339842 1.6918 -0.00339842C1.58192 -0.00339842 1.47311 0.0182446 1.3716 0.0602948C1.27008 0.102345 1.17784 0.163979 1.10014 0.241678C1.02244 0.319376 0.960803 0.411618 0.918753 0.513136C0.876703 0.614655 0.85506 0.723461 0.85506 0.833344C0.85506 0.943226 0.876703 1.05203 0.918753 1.15355C0.960803 1.25507 1.02244 1.34731 1.10014 1.42501L7.90847 8.23333C8.37664 8.70209 8.6396 9.3375 8.6396 10C8.6396 10.6625 8.37664 11.2979 7.90847 11.7667L1.10014 18.575C1.02203 18.6525 0.960034 18.7446 0.917726 18.8462C0.875419 18.9477 0.853638 19.0566 0.853638 19.1667C0.853638 19.2767 0.875419 19.3856 0.917726 19.4871C0.960034 19.5887 1.02203 19.6809 1.10014 19.7583C1.178 19.8356 1.27035 19.8967 1.37188 19.9381C1.47341 19.9796 1.58213 20.0006 1.6918 20Z"
                                fill="#262626" />
                        </svg>
                    </div>
                </div>
                <div class="swiper-btn swiper-button-prev3">
                    <div class="inner">
                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.30869 20C9.19901 20.0006 9.09029 19.9796 8.98876 19.9381C8.88723 19.8966 8.79488 19.8355 8.71702 19.7583L1.90869 12.95C1.52066 12.5629 1.2128 12.1031 1.00275 11.5969C0.792694 11.0907 0.68457 10.548 0.68457 9.99998C0.68457 9.45192 0.792694 8.90924 1.00275 8.40303C1.2128 7.89683 1.52066 7.43703 1.90869 7.04998L8.71702 0.241658C8.79472 0.163959 8.88696 0.102325 8.98848 0.0602752C9.09 0.018225 9.1988 -0.00341797 9.30869 -0.00341797C9.41857 -0.00341797 9.52737 0.018225 9.62889 0.0602752C9.73041 0.102325 9.82265 0.163959 9.90035 0.241658C9.97805 0.319357 10.0397 0.411599 10.0817 0.513117C10.1238 0.614635 10.1454 0.723442 10.1454 0.833324C10.1454 0.943207 10.1238 1.05201 10.0817 1.15353C10.0397 1.25505 9.97805 1.34729 9.90035 1.42499L3.09202 8.23332C2.62385 8.70207 2.36088 9.33748 2.36088 9.99998C2.36088 10.6625 2.62385 11.2979 3.09202 11.7666L9.90035 18.575C9.97846 18.6524 10.0405 18.7446 10.0828 18.8462C10.1251 18.9477 10.1469 19.0566 10.1469 19.1666C10.1469 19.2766 10.1251 19.3856 10.0828 19.4871C10.0405 19.5887 9.97846 19.6808 9.90035 19.7583C9.82248 19.8355 9.73014 19.8966 9.62861 19.9381C9.52708 19.9796 9.41836 20.0006 9.30869 20Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <img class="banner-bg-shape-3" src="assets/images/banner/banner-bg-2.png" alt="">
    </section>
    <!-- testimonials area end -->
    <div class="rts-footer-area section-bg">
        <div class="container">
            <div class="footer-top">
                <form action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <h3 class="form-title">Don’t Miss Awesome Story From Our Alumni</h3>
                    <div class="form-inner">
                        <input type="email" name="Email" placeholder="Enter Your mail" required>
                        <button type="submit" class="rts-btn btn-primary border-radius">Subscribe Now</button>
                    </div>
                </form>
            </div>
            <div class="row ptb--65">
                <div class="col-lg-12">
                    <!-- footer main wrapper -->
                    <div class="footer-one-main-wrapper">
                        <!-- single sized  footer  -->
                        <div class="footer-single-wized left-logo">
                            <div class="head">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('assets/images/logo.png') }}" width="100px" alt="logo"
                                        loading="lazy">
                                </a>
                            </div>
                            <div class="body">
                                <p class="dsic">
                                    We are passionate education dedicated to providing high-quality resources learners
                                    all backgrounds.
                                </p>
                                <ul class="wrapper-list">
                                    <li><i class="fa-regular fa-location-dot"></i>Mohalla Rarrieyan, Malkiyar, Haripur
                                    </li>
                                    <li><i class="fa-regular fa-phone"></i><a href="tel:+92 313 0567126">
                                            +92 313 0567126</a></li>
                                    <li><i class="fa-regular fa-envelope"></i>
                                        info@alhamdschool.com</li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                        <!-- single sized  footer  -->
                        <div class="footer-single-wized">
                            <div class="head">
                                <h6 class="title">About {{ env('APP_NAME') }}</h6>
                            </div>
                            <div class="body">
                                <ul class="menu">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/About') }}">About Us</a></li>
                                    <li><a href="{{ url('/Contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                    </div>
                    <!-- footer main wrapper end -->
                </div>
            </div>
        </div>
        <div class="copyright-area-one-border">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area-one">
                            <p>Copyright © 2024 All Rights Reserved by {{ env('APP_NAME') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer call to action area end -->
    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="inner-content">
                <h4 class="title">We Build Building and Great Constructive Homes.</h4>
                <p class="disc">
                    We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly
                    master new technologies.
                </p>
                <div class="footer">
                    <h4 class="title">Got a project in mind?</h4>
                    <a href="{{ url('/') }}" class="rts-btn btn-primary">Let's talk</a>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li>
                        <a href="{{ url('/') }}" class="main">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/About') }}" class="main">About Us</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/Contact') }}" class="main">Contact Us</a>
                    </li>
                </ul>
            </nav>

            {{-- <div class="buttons-area">
                <a href="#" class="rts-btn btn-border">Log In</a>
                <a href="#" class="rts-btn btn-primary">Sign Up</a>
            </div> --}}

            <div class="rts-social-style-one pl--20 mt--50">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->

    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="txt-loading">
                <span data-text-preloader="A" class="letters-loading first">
                    A
                </span>
                <span data-text-preloader="L" class="letters-loading first">
                    L
                </span>
                <span data-text-preloader="H" class="letters-loading first">
                    H
                </span>
                <span data-text-preloader="A" class="letters-loading first">
                    A
                </span>
                <span data-text-preloader="M" class="letters-loading first">
                    M
                </span>
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts backto top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- rts backto top end -->

    <!-- offcanvase search -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <!-- offcanvase search -->
    <div id="anywhere-home" class="">
    </div>

    <!-- all scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const popupKey = "lastPopupDate";
            const today = new Date().toISOString().slice(0, 10); // YYYY-MM-DD

            const lastShown = localStorage.getItem(popupKey);

            if (lastShown !== today) {
                const myModal = new bootstrap.Modal(document.getElementById('dailyPopup'));
                myModal.show();
                localStorage.setItem(popupKey, today);
            }
        });
    </script>
    <!-- jquery min js -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <!-- jquery ui js -->
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <!-- metismenu js -->
    <script src="assets/js/vendor/metismenu.js"></script>
    <!-- magnific popup js-->
    <script src="assets/js/vendor/magnifying-popup.js"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="assets/js/plugins/swiper.js"></script>
    <!-- counterup js -->
    <script src="assets/js/plugins/counterup.js"></script>
    <!-- waypoint js -->
    <script src="assets/js/vendor/waypoint.js"></script>
    <!-- wow js -->
    <script src="assets/js/vendor/waw.js"></script>
    <!-- isotop mesonary -->
    <script src="assets/js/plugins/isotop.js"></script>
    <!-- jquery imageloaded -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- resize sensor js -->
    <script src="assets/js/plugins/resizer-sensor.js"></script>
    <!-- sticky sidebar -->
    <script src="assets/js/plugins/sticky-sidebar.js"></script>
    <!-- gsap twinmax js -->
    <script src="assets/js/plugins/twinmax.js"></script>
    <!-- chroma js -->
    <script src="assets/js/vendor/chroma.min.js"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <!-- dymanic Contact Form -->
    <script src="assets/js/plugins/contact.form.js"></script>
    <!-- calender js -->
    <script src="assets/js/plugins/calender.js"></script>
    <!-- main Js -->
    <script src="assets/js/main.js"></script>


</body>

</html>
