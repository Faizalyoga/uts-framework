@extends('landing.layouts.app')
@section('content')
<!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="shape1 float-bob-y"><img src="assets/images/shapes/page-header-shape1.png" alt=""></div>
            <div class="shape2 float-bob-y"><img src="assets/images/shapes/page-header-shape2.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>About Us</h2>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><span>//</span></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About One Start -->
        <section class="about-one about-one--about">
            <div class="about-one-shape-1 float-bob-y">
                <img src="assets/images/shapes/about-one-shape-1.png" alt="about-one-shape">
            </div>
            <div class="about-one-shape-2 float-bob-y">
                <img src="assets/images/shapes/about-one-shape-2.png" alt="about-one-shape">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="about-one__left">
                            <div class="about-one__img-box">
                                <div class="about-one__img">
                                    <img src="assets/images/resources/about-one-img-1.jpg" alt="about-one-img">
                                </div>
                                <div class="about-one__img-two-and-content">
                                    <div class="about-one__img-two-counter">
                                        <div class="about-one__img-two-counter-count">
                                            <h3 class="odometer" data-count="27">00</h3>
                                            <span class="plus">+</span>
                                        </div>
                                        <div class="about-one__img-two-counter-count-title">
                                            <h4>Years of Experience</h4>
                                        </div>
                                    </div>
                                    <div class="about-one__img-2">
                                        <img src="assets/images/resources/about-one-img-2.jpg" alt="about-one-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="about-one__right">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <p class="section-title__tagline">About Us</p>
                                    <div class="section-title__tagline-shape"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Explore Our Dedication
                                    to Healthy Skin</h2>
                            </div>
                            <p class="about-one__text">We are passionate about helping you achieve healthy, glowing skin
                                through gentle and effective care. Our journey began with a simple belief that true
                                beauty starts with skin wellness.</p>
                            <div class="about-one__point-box">
                                <ul class="about-one__point">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Natural Skin Therapy</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Expert Skin Therapy</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="about-one__point two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Botanical Beauty Treatment</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Skin Renewal Treatment</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-one__btn-and-author-box">
                                <div class="about-one__btn-box">
                                    <a class="thm-btn" href="#">Explore Now
                                        <span class="fas fa-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="about-one__author-box">
                                    <div class="about-one__author-img">
                                        <img src="assets/images/resources/about-one-author-img.jpg" alt="author-img">
                                    </div>
                                    <div class="about-one__author-contetn">
                                        <h5>Emma Watson</h5>
                                        <p>Founder CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End -->
@endsection