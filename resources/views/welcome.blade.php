@extends('layout.app')

@section('content')
<section class="banner-area-one rts-shape-move">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-xl-1 order-lg-1 order-sm-2 order-2">
                <div class="banner-content-one">
                    <div class="inner">
                        <h1 class="title-banner">
                            Discover the Magic of <br> Learning at <span>{{ env('APP_NAME') }}</span>
                            <img src="{{ asset('assets/images/banner/title-shape-1.svg') }}" alt="banner">
                        </h1>
                        <p class="disc">Welcome to Studyhub where each day brings new opportunities for
                            discovery and growth. Our vibrant community is dedicated.</p>
                        <div class="banner-btn">
                            <a href="about.html" class="rts-btn btn-primary border-radius">Explore Now</a>
                            <div class="video-btn-area">
                                <div class="vedio-icone">
                                    <a class="video-play-button play-video popup-video"
                                        href="https://www.youtube.com/watch?v=ezbJwaLmOeM">
                                        <span class="icon"><img src="{{ asset('assets/images/banner/play.svg') }}"
                                                alt=""></span>
                                    </a>
                                    <div class="video-overlay">
                                        <a class="video-overlay-close">×</a>
                                    </div>
                                </div>
                                <p class="intro">Watch Video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-change order-lg-2 order-sm-1 order-1">
                <div class="banner-right-img">
                    <img src="{{ asset('assets/images/banner/01.png') }}" width="672" alt="banner">
                </div>
            </div>
        </div>
    </div>
    <img class="banner-bg-shape-2" src="{{ asset('assets/images/banner/banner-bg-1.png') }}" alt="">
    <div class="shape-image">
        <div class="shape one" data-speed="0.04" data-revert="true"><img src="{{ asset('assets/images/banner/shape/01.svg') }}"
                alt="shape_image"></div>
        <div class="shape two" data-speed="0.04"><img src="{{ asset('assets/images/banner/shape/02.svg') }}" alt="shape_image">
        </div>
        <div class="shape three" data-speed="0.04" data-revert="true"><img
                src="{{ asset('assets/images/banner/shape/03.svg') }}" alt="shape_image"></div>
        <div class="shape four" data-speed="0.04" data-revert="true"><img
                src="{{ asset('assets/images/banner/shape/04.svg') }}" alt="shape_image"></div>
        <div class="shape five" data-speed="0.04"><img src="{{ asset('assets/images/banner/shape/05.svg') }}"
                alt="shape_image"></div>
        <div class="shape six" data-speed="0.04"><img src="{{ asset('assets/images/banner/shape/06.svg') }}" alt="shape_image">
        </div>
        <div class="shape seven" data-speed="0.04" data-revert="true"><img
                src="{{ asset('assets/images/banner/shape/07.svg') }}" alt="shape_image"></div>
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
                        <img src="{{ asset('assets/images/about/about-01.png') }}" width="630" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title-area">
                            <p class="pre-title"><img src="{{ asset('assets/images/banner/title-img.svg') }}"
                                    alt="">About Us</p>
                            <h2 class="section-title">Discover Our Mission for <br> {{ env('APP_NAME') }} Academy</h2>
                            <p class="desc">Welcome to Sutdykids, where education meets inspiration, and every
                                <br> child's journey is a story of growth and discovery.</p>
                        </div>
                        <ul class="about-wrapper">
                            <li class="wrapper-list">
                                <div class="list-inner">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/01.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Our Mission</h4>
                                        <p class="desc">At {{ env('APP_NAME') }} our mission is to cultivate <br>
                                            an environment where curiosity is sparked.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="wrapper-list">
                                <div class="list-inner">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/02.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Our Commitment</h4>
                                        <p class="desc">As we embark on the journey of education <br>
                                            together, we remain committed to providing.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="about-btn-area">
                            <a href="about.html" class="rts-btn btn-primary border-radius">About More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-image">
        <div class="shape one" data-speed="0.04" data-revert="true"><img src="{{ asset('assets/images/banner/shape/08.svg') }}"
                alt="shape_image"></div>
        <div class="shape two" data-speed="0.04" data-revert="true"><img src="{{ asset('assets/images/banner/shape/09.svg') }}"
                alt="shape_image"></div>
        <div class="shape three" data-speed="0.04"><img src="{{ asset('assets/images/banner/shape/10.svg') }}"
                alt="shape_image"></div>
    </div>
</section>
<!-- about area end -->

<!-- class area start -->
<section class="rts-class-area">
    <div class="container">
        <div class="section-title-area text-center">
            <p class="pre-title justify-content-center"><img src="{{ asset('assets/images/banner/title-img.svg') }}"
                    alt="">Classes</p>
            <h2 class="section-title">Find Classes For Every Age</h2>
            <p class="desc">Marked by significant growth and exploration as <br> toddlers transition from infancy
            </p>
        </div>
        <div class="section-inner">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="class-wrapper">
                        <div class="wrapper-inner">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/03.svg') }}" alt="">
                            </div>
                            <a href="program-details.html">
                                <h4 class="title">Toddler</h4>
                            </a>
                            <p class="period">( 1 - 3 years)</p>
                            <p class="desc">A toddler is a child typically between the ages of 1 and 3 years old.
                            </p>
                            <div class="shape-icon"><img src="{{ asset('assets/images/banner/blink.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="class-wrapper two">
                        <div class="wrapper-inner">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/04.svg') }}" alt="">
                            </div>
                            <a href="program-details.html">
                                <h4 class="title">Preschool</h4>
                            </a>
                            <p class="period">( 2 - 3 years)</p>
                            <p class="desc">A toddler is a child typically between the ages of 1 and 3 years old.
                            </p>
                            <div class="shape-icon"><img src="{{ asset('assets/images/banner/blink.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="class-wrapper three">
                        <div class="wrapper-inner">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/05.svg') }}" alt="">
                            </div>
                            <a href="program-details.html">
                                <h4 class="title">Kindergarden</h4>
                            </a>
                            <p class="period">( 3 - 4 years)</p>
                            <p class="desc">A toddler is a child typically between the ages of 1 and 3 years old.
                            </p>
                            <div class="shape-icon"><img src="{{ asset('assets/images/banner/blink.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="class-wrapper four">
                        <div class="wrapper-inner">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/06.svg') }}" alt="">
                            </div>
                            <a href="program-details.html">
                                <h4 class="title">Pre-K Program</h4>
                            </a>
                            <p class="period">( 5 - 6 years)</p>
                            <p class="desc">A toddler is a child typically between the ages of 1 and 3 years old.
                            </p>
                            <div class="shape-icon"><img src="{{ asset('assets/images/banner/blink.svg') }}" alt="">
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
            <p class="pre-title justify-content-center"><img src="{{ asset('assets/images/banner/title-img.svg') }}"
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
                                    <img src="{{ asset('assets/images/course/01.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <a href="course-details.html">
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
                                    <img src="{{ asset('assets/images/course/02.jpg') }}" alt="">
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
                                    <img src="{{ asset('assets/images/course/03.jpg') }}" alt="">
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
        <img class="banner-bg-shape-3" src="{{ asset('assets/images/banner/banner-bg-2.png') }}" alt="">
    </div>
    <div class="shape-image">
        <div class="shape one" data-speed="0.04" data-revert="true"><img src="{{ asset('assets/images/banner/shape/11.svg') }}"
                alt="shape_image"></div>
        <div class="shape two" data-speed="0.04" data-revert="true"><img src="{{ asset('assets/images/banner/shape/12.svg') }}"
                alt="shape_image"></div>
    </div>
</section>
<!-- course area end -->

<!-- category area start -->
<section class="rts-category-area rts-section-gap">
    <div class="container">
        <div class="section-title-area text-center">
            <p class="pre-title justify-content-center"><img src="{{ asset('assets/images/banner/title-img.svg') }}"
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
                                        <img src="{{ asset('assets/images/icon/07.svg') }}" alt="">
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
                                        <img src="{{ asset('assets/images/icon/08.svg') }}" alt="">
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
                                        <img src="{{ asset('assets/images/icon/09.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="course.html">Math</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- single swiper style -->
                    <!-- single swiper style -->
                    <div class="swiper-slide">
                        <div class="category-wrapper four">
                            <div class="wrapper-inner">
                                <div class="icon">
                                    <a href="course.html">
                                        <img src="{{ asset('assets/images/icon/10.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="course.html">Music</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- single swiper style -->
                    <!-- single swiper style -->
                    <div class="swiper-slide">
                        <div class="category-wrapper five">
                            <div class="wrapper-inner">
                                <div class="icon">
                                    <a href="course.html">
                                        <img src="{{ asset('assets/images/icon/11.svg') }}" alt="">
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

<!-- course area start -->
<section class="rts-course-area style-2">
    <div class="container">
        <div class="section-title-area text-center">
            <p class="pre-title justify-content-center"><img src="{{ asset('assets/images/banner/title-img.svg') }}"
                    alt="">Classes</p>
            <h2 class="section-title">Popular Classes</h2>
            <p class="desc">Marked by significant growth and exploration <br> as toddlers transition from infancy
            </p>
        </div>
        <div class="slider-inner">
            <div class="swiper mySwiper-category-1 swiper-data"
                data-swiper='{
                        "spaceBetween":30,
                        "slidesPerView":4,
                        "loop": true,
                        "speed": 1500,
                        "navigation":{
                            "nextEl":".swiper-button-next2",
                            "prevEl":".swiper-button-prev2"
                        },
                        "autoplay":{
                            "delay":"4500"
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
                            "slidesPerView":2,
                            "spaceBetween":30},
                        "768":{
                            "slidesPerView":2,
                            "spaceBetween":30},
                        "991":{
                            "slidesPerView":3,
                            "spaceBetween":30},
                        "1200":{
                            "slidesPerView":4,
                            "spaceBetween":30}
                        }
                    }'>
                <div class="swiper-wrapper">
                    <!-- single swiper style -->
                    <div class="swiper-slide">
                        <div class="course-wrapper-style-2">
                            <div class="wrapper-inner bg-one">
                                <div class="image">
                                    <img src="{{ asset('assets/images/course/04.jpg') }}" alt="">
                                    <div class="wishlist save-icon" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal-login"><i
                                            class="fa-regular fa-heart bg-one"></i></div>
                                </div>
                                <div class="content">
                                    <ul class="meta-wrapper">
                                        <li class="wrapper-list">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/icon/12.svg') }}" alt="">
                                            </div>
                                            <p class="desc">Ages 3-8</p>
                                        </li>
                                        <li class="wrapper-list">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/icon/13.svg') }}" alt="">
                                            </div>
                                            <p class="desc">50 Min</p>
                                        </li>
                                    </ul>
                                    <a href="course-details.html">
                                        <h5 class="title">Little Adventurers Travel the World Together! (Ages 7-9)
                                        </h5>
                                    </a>
                                    <div class="review-area">
                                        <ul class="star-rating-area">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-regular fa-star"></i></li>
                                        </ul>
                                        <p class="desc">4.5 (124)</p>
                                    </div>
                                    <div class="bottom-wrapper">
                                        <div class="author-area">
                                            <div class="autor-image">
                                                <img src="{{ asset('assets/images/course/author-01.png') }}" width="40"
                                                    alt="">
                                            </div>
                                            <p class="author-name">Maria Sofa</p>
                                        </div>
                                        <h5 class="price">$15.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single swiper style -->
                    <!-- single swiper style -->
                    <div class="swiper-slide">
                        <div class="course-wrapper-style-2">
                            <div class="wrapper-inner bg-four">
                                <div class="image">
                                    <img src="{{ asset('assets/images/course/05.jpg') }}" alt="">
                                    <div class="wishlist save-icon" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal-login"><i
                                            class="fa-regular fa-heart bg-four"></i></div>
                                </div>
                                <div class="content">
                                    <ul class="meta-wrapper">
                                        <li class="wrapper-list">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/icon/12.svg') }}" alt="">
                                            </div>
                                            <p class="desc">Ages 3-8</p>
                                        </li>
                                        <li class="wrapper-list">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/icon/13.svg') }}" alt="">
                                            </div>
                                            <p class="desc">50 Min</p>
                                        </li>
                                    </ul>
                                    <a href="course-details.html">
                                        <h5 class="title">Weekly English Language
                                            Arts Club (Age 9-13)</h5>
                                    </a>
                                    <div class="review-area">
                                        <ul class="star-rating-area">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-regular fa-star"></i></li>
                                        </ul>
                                        <p class="desc">4.5 (90)</p>
                                    </div>
                                    <div class="bottom-wrapper">
                                        <div class="author-area">
                                            <div class="autor-image">
                                                <img src="{{ asset('assets/images/course/author-02.png') }}" width="40"
                                                    alt="">
                                            </div>
                                            <p class="author-name">Arya Stark</p>
                                        </div>
                                        <h5 class="price">$10.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single swiper style -->
                    <!-- single swiper style -->
                    <div class="swiper-slide">
                        <div class="course-wrapper-style-2">
                            <div class="wrapper-inner bg-two">
                                <div class="image">
                                    <img src="{{ asset('assets/images/course/06.jpg') }}" alt="">
                                    <div class="wishlist save-icon" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal-login"><i
                                            class="fa-regular fa-heart bg-two"></i></div>
                                </div>
                                <div class="content">
                                    <ul class="meta-wrapper">
                                        <li class="wrapper-list">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/icon/12.svg') }}" alt="">
                                            </div>
                                            <p class="desc">Ages 3-8</p>
                                        </li>
                                        <li class="wrapper-list">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/icon/13.svg') }}" alt="">
                                            </div>
                                            <p class="desc">50 Min</p>
                                        </li>
                                    </ul>
                                    <a href="course-details.html">
                                        <h5 class="title">Dragon, Monster & Magical
                                            Creature Drawing Club</h5>
                                    </a>
                                    <div class="review-area">
                                        <ul class="star-rating-area">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-regular fa-star"></i></li>
                                        </ul>
                                        <p class="desc">4.5 (88)</p>
                                    </div>
                                    <div class="bottom-wrapper">
                                        <div class="author-area">
                                            <div class="autor-image">
                                                <img src="{{ asset('assets/images/course/author-03.png') }}" width="40"
                                                    alt="">
                                            </div>
                                            <p class="author-name">Rosabell</p>
                                        </div>
                                        <h5 class="price">$16.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single swiper style -->
                    <!-- single swiper style -->
                    <div class="swiper-slide">
                        <div class="course-wrapper-style-2">
                            <div class="wrapper-inner bg-three">
                                <div class="image">
                                    <img src="{{ asset('assets/images/course/07.jpg') }}" alt="">
                                    <div class="wishlist save-icon" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal-login"><i
                                            class="fa-regular fa-heart bg-three"></i></div>
                                </div>
                                <div class="content">
                                    <ul class="meta-wrapper">
                                        <li class="wrapper-list">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/icon/12.svg') }}" alt="">
                                            </div>
                                            <p class="desc">Ages 3-8</p>
                                        </li>
                                        <li class="wrapper-list">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/icon/13.svg') }}" alt="">
                                            </div>
                                            <p class="desc">50 Min</p>
                                        </li>
                                    </ul>
                                    <a href="course-details.html">

                                        <h5 class="title">Bloxburg 1 on 1 Class Learn
                                            to Build or Improve</h5>
                                    </a>
                                    <div class="review-area">
                                        <ul class="star-rating-area">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-regular fa-star"></i></li>
                                        </ul>
                                        <p class="desc">4.5 (44)</p>
                                    </div>
                                    <div class="bottom-wrapper">
                                        <div class="author-area">
                                            <div class="autor-image">
                                                <img src="{{ asset('assets/images/course/author-04.png') }}" width="40"
                                                    alt="">
                                            </div>
                                            <p class="author-name">Morgan Jofs</p>
                                        </div>
                                        <h5 class="price">$35.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single swiper style -->

                </div>
            </div>
            <div class="swiper-btn swiper-button-next2">
                <div class="inner">
                    <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.6918 20C1.80148 20.0006 1.91019 19.9796 2.01173 19.9381C2.11326 19.8967 2.2056 19.8356 2.28347 19.7583L9.0918 12.95C9.47983 12.5629 9.78769 12.1032 9.99774 11.5969C10.2078 11.0907 10.3159 10.5481 10.3159 10C10.3159 9.45194 10.2078 8.90926 9.99774 8.40305C9.78769 7.89685 9.47983 7.43705 9.0918 7.05L2.28347 0.241678C2.20577 0.163979 2.11353 0.102345 2.01201 0.0602948C1.91049 0.0182446 1.80169 -0.00339842 1.6918 -0.00339842C1.58192 -0.00339842 1.47311 0.0182446 1.3716 0.0602948C1.27008 0.102345 1.17784 0.163979 1.10014 0.241678C1.02244 0.319376 0.960803 0.411618 0.918753 0.513136C0.876703 0.614655 0.85506 0.723461 0.85506 0.833344C0.85506 0.943226 0.876703 1.05203 0.918753 1.15355C0.960803 1.25507 1.02244 1.34731 1.10014 1.42501L7.90847 8.23333C8.37664 8.70209 8.6396 9.3375 8.6396 10C8.6396 10.6625 8.37664 11.2979 7.90847 11.7667L1.10014 18.575C1.02203 18.6525 0.960034 18.7446 0.917726 18.8462C0.875419 18.9477 0.853638 19.0566 0.853638 19.1667C0.853638 19.2767 0.875419 19.3856 0.917726 19.4871C0.960034 19.5887 1.02203 19.6809 1.10014 19.7583C1.178 19.8356 1.27035 19.8967 1.37188 19.9381C1.47341 19.9796 1.58213 20.0006 1.6918 20Z"
                            fill="#262626" />
                    </svg>
                </div>
            </div>
            <div class="swiper-btn swiper-button-prev2">
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
</section>
<!-- course area end -->

<!-- course area start -->
<section class="rts-team-area section-bg">
    <div class="container">
        <div class="section-title-area text-center">
            <p class="pre-title justify-content-center"><img src="{{ asset('assets/images/banner/title-img.svg') }}"
                    alt="">Teacher</p>
            <h2 class="section-title">Our Expert Teacher</h2>
            <p class="desc">we take pride in our team of dedicated and expert <br> teachers who play a pivotal
                role in shaping.</p>
        </div>
        <div class="slider-inner">
            <div class="swiper mySwiper-category-1 swiper-data"
                data-swiper='{
                        "spaceBetween":30,
                        "slidesPerView":3,
                        "loop": true,
                        "speed": 1500,
                        "pagination":{
                            "el": ".swiper-pagination3",
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
                        "640":{
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
                        <div class="team-wrapper">
                            <div class="wrapper-inner">
                                <div class="image">
                                    <img src="{{ asset('assets/images/instructor/01.jpg') }}" alt="">
                                    <ul class="social-area">
                                        <li><a href="#"><img src="{{ asset('assets/images/instructor/social-01.svg') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/instructor/social-02.svg') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/instructor/social-03.svg') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/instructor/social-04.svg') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="team-details.html">Eleanor Alice</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- single swiper style -->
                    <!-- single swiper style -->
                    <div class="swiper-slide">
                        <div class="team-wrapper">
                            <div class="wrapper-inner">
                                <div class="image">
                                    <img src="{{ asset('assets/images/instructor/02.jpg') }}" alt="">
                                    <ul class="social-area">
                                        <li><a href="#"><img src="{{ asset('assets/images/instructor/social-01.svg') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/instructor/social-02.svg') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/instructor/social-03.svg') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/instructor/social-04.svg') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="team-details.html">Isabella Jane</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- single swiper style -->
                    <!-- single swiper style -->
                    <div class="swiper-slide">
                        <div class="team-wrapper">
                            <div class="wrapper-inner">
                                <div class="image">
                                    <img src="{{ asset('assets/images/instructor/03.jpg') }}" alt="">
                                    <ul class="social-area">
                                        <li><a href="#"><img src="{{ asset('assets/images/instructor/social-01.svg') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/instructor/social-02.svg') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/instructor/social-03.svg') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/instructor/social-04.svg') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="team-details.html">Catherine Avery</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- single swiper style -->
                </div>
            </div>
            <div class="swiper-pagination3"></div>
        </div>
        <img class="banner-bg-shape-3" src="{{ asset('assets/images/banner/banner-bg-2.png') }}" alt="">
    </div>
</section>
<!-- course area end -->

<!-- event area start -->
<section class="rts-event-area rts-section-gapTop">
    <div class="container">
        <div class="section-title-area text-center">
            <p class="pre-title justify-content-center"><img src="{{ asset('assets/images/banner/title-img.svg') }}"
                    alt="">Event</p>
            <h2 class="section-title">Upcoming Events</h2>
            <p class="desc">We are thrilled to announce our upcoming event, <br> Explorer's Day a celebration of
                knowledge</p>
        </div>
        <div class="section-inner">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="event-wrapper">
                        <div class="wrapper-inner bg-one">
                            <div class="date">
                                <span>29</span>
                                January
                                <img src="{{ asset('assets/images/events/01.png') }}" width="132" alt=""
                                    class="shape">
                            </div>
                            <div class="content">
                                <a href="program-details.html">
                                    <h4 class="title">Annual Cultural Programme</h4>
                                    <ul class="meta-wrapper">
                                        <li><i class="fa-regular fa-clock"></i>9:00 Am - 12:00 Pm</li>
                                        <li><i class="fa-light fa-location-dot"></i>55 Clark St, Brooklyn, NY
                                            11201, USA</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="shape-icon"><img src="{{ asset('assets/images/events/event-blink.svg') }}"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-wrapper two">
                        <div class="wrapper-inner bg-four">
                            <div class="date">
                                <span>05</span>
                                March
                                <img src="{{ asset('assets/images/events/01.png') }}" width="132" alt=""
                                    class="shape">
                            </div>
                            <div class="content">
                                <a href="program-details.html">
                                    <h4 class="title">A World of Stories Awaits</h4>
                                </a>
                                <ul class="meta-wrapper">
                                    <li><i class="fa-regular fa-clock"></i>9:00 Am - 12:00 Pm</li>
                                    <li><i class="fa-light fa-location-dot"></i>55 Clark St, Brooklyn, NY 11201,
                                        USA</li>
                                </ul>
                            </div>
                            <div class="shape-icon"><img src="{{ asset('assets/images/events/event-blink.svg') }}"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-wrapper three">
                        <div class="wrapper-inner bg-two">
                            <div class="date">
                                <span>11</span>
                                March
                                <img src="{{ asset('assets/images/events/01.png') }}" width="132" alt=""
                                    class="shape">
                            </div>
                            <div class="content">
                                <a href="program-details.html">
                                    <h4 class="title">World Drawing Day</h4>
                                </a>
                                <ul class="meta-wrapper">
                                    <li><i class="fa-regular fa-clock"></i>9:00 Am - 12:00 Pm</li>
                                    <li><i class="fa-light fa-location-dot"></i>55 Clark St, Brooklyn, NY 11201,
                                        USA</li>
                                </ul>
                            </div>
                            <div class="shape-icon"><img src="{{ asset('assets/images/events/event-blink.svg') }}"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-wrapper four">
                        <div class="wrapper-inner bg-three">
                            <div class="date">
                                <span>19</span>
                                April
                                <img src="{{ asset('assets/images/events/01.png') }}" width="132" alt=""
                                    class="shape">
                            </div>
                            <div class="content">
                                <a href="program-details.html">
                                    <h4 class="title">World Kids Day</h4>
                                </a>
                                <ul class="meta-wrapper">
                                    <li><i class="fa-regular fa-clock"></i>9:00 Am - 12:00 Pm</li>
                                    <li><i class="fa-light fa-location-dot"></i>55 Clark St, Brooklyn, NY 11201,
                                        USA</li>
                                </ul>
                            </div>
                            <div class="shape-icon"><img src="{{ asset('assets/images/events/event-blink.svg') }}"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-area">
            <div class="slider-inner">
                <div class="swiper mySwiper-category-1 swiper-data"
                    data-swiper='{
                            "spaceBetween":30,
                            "slidesPerView":3,
                            "loop": true,
                            "speed": 1500,
                            "autoplay":{
                                "delay":"4000"
                            },
                            "breakpoints":{
                            "0":{
                                "slidesPerView":2,
                                "spaceBetween":30},
                            "320":{
                                "slidesPerView":2,
                                "spaceBetween":30},
                            "480":{
                                "slidesPerView":3,
                                "spaceBetween":30},
                            "640":{
                                "slidesPerView":5,
                                "spaceBetween":30},
                            "840":{
                                "slidesPerView":7,
                                "spaceBetween":30},
                            "1140":{
                                "slidesPerView":7,
                                "spaceBetween":30}
                            }
                        }'>
                    <div class="swiper-wrapper">
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="image"><a href="#"><img src="{{ asset('assets/images/brand/01.svg') }}"
                                        alt=""></a></div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="image"><a href="#"><img src="{{ asset('assets/images/brand/02.svg') }}"
                                        alt=""></a></div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="image"><a href="#"><img src="{{ asset('assets/images/brand/03.svg') }}"
                                        alt=""></a></div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="image"><a href="#"><img src="{{ asset('assets/images/brand/04.svg') }}"
                                        alt=""></a></div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="image"><a href="#"><img src="{{ asset('assets/images/brand/05.svg') }}"
                                        alt=""></a></div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="image"><a href="#"><img src="{{ asset('assets/images/brand/06.svg') }}"
                                        alt=""></a></div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class="swiper-slide">
                            <div class="image"><a href="#"><img src="{{ asset('assets/images/brand/02.svg') }}"
                                        alt=""></a></div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- event area end -->

<!-- testimonials area start -->
<section class="rts-testimonials-area section-bg">
    <div class="container">
        <div class="section-title-area text-center">
            <p class="pre-title justify-content-center"><img src="{{ asset('assets/images/banner/title-img.svg') }}"
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
                                    <h4 class="author">David John</h4>
                                    <p class="desig">Artist and Instructor</p>
                                    <p class="desc">I would highly recommend Michael Richard to anyone interested
                                        the subject matter. It has provided me with invaluable knowledge & a
                                        newfound passion topic.</p>
                                    <ul class="star-rating-area">
                                        <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-sharp fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-light fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="testimonials-shape-image">
                                    <div class="shape one"><img src="{{ asset('assets/images/banner/shape/13.svg') }}"
                                            alt="shape_image"></div>
                                    <div class="shape two"><img src="{{ asset('assets/images/banner/shape/14.svg') }}"
                                            alt="shape_image"></div>
                                    <div class="shape three"><img src="{{ asset('assets/images/banner/shape/15.svg') }}"
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
    <img class="banner-bg-shape-3" src="{{ asset('assets/images/banner/banner-bg-2.png') }}" alt="">
</section>
<!-- testimonials area end -->
@endsection
