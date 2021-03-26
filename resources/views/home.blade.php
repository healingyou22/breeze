@extends('layouts/template')

@section('title', 'BeQueen Cafe Beach | Home')

@section('home')
<!-- ***** Main Banner Area Start ***** -->
<section class="section" id="top">
    <div class="container-booking">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>BeQueen cafe beach</h4><br>
                        <h6>THE BEST EXPERIENCE <br>✿◕ ‿ ◕✿</h6><br>
                        <p>to enjoy your meal, <br>bon appetit ♥</p>
                        <div class="main-white-button scroll-to-section">
                            <a href="book">RESERVATION NOW!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/s1.jfif" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/s2.jfif" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/s3.jfif" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>We Leave A Delicious Memory For You</h2>
                    </div>
                    <p>BeQueen Cafe Beach is one of the best restaurant. It is a very nice place
                        to be at, right in front of the beach. You can enjoy atmosphere and live music,
                        make a Sunday morning vibe!<br><br>
                        Amazing food and amazing place to eat right next to the beach.
                        And also great sunset dinner, and affordable food.</p>
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/images/about-01.jfif" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/about-02.jfif" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/about-03.jfif" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-content">
                    <div class="thumb">
                        <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                        <img src="assets/images/about-video-bg.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Klassy Week</h6>
                    <h2>This Week’s Special Meal Offers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <ul>
                                        <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Breakfast</a></li>
                                        <li><a href='#tabs-2'><img src="assets/images/tab-icon-03.png" alt="">Dinner</a></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                @foreach($menus1 as $menu)
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/{{$menu->menu_image}}" alt="">
                                                        <h4>{{ $menu->menu_name }}</h4>
                                                        <p>{{ $menu->menu_desc }}</p>
                                                        <div class="price">
                                                            <h6>Rp {{ $menu->menu_price }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                @foreach($menus2 as $menu)
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/{{$menu->menu_image}}" alt="">
                                                        <h4>{{ $menu->menu_name }}</h4>
                                                        <p>{{ $menu->menu_desc }}</p>
                                                        <div class="price">
                                                            <h6>${{ $menu->menu_price }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                @foreach($menus3 as $menu)
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/{{$menu->menu_image}}" alt="">
                                                        <h4>{{ $menu->menu_name }}</h4>
                                                        <p>{{ $menu->menu_desc }}</p>
                                                        <div class="price">
                                                            <h6>${{ $menu->menu_price }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                @foreach($menus4 as $menu)
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/{{$menu->menu_image}}" alt="">
                                                        <h4>{{ $menu->menu_name }}</h4>
                                                        <p>{{ $menu->menu_desc }}</p>
                                                        <div class="price">
                                                            <h6>${{ $menu->menu_price }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->

<!-- ***** Reservation Us Area Starts ***** -->
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Here You Can Make a Reservation or <br>Just Walkin to Our Cafe</h2>
                    </div>
                    <div class="main-pink-button scroll-to-section">
                        <a href="book">♥ Make A Reservation ♥</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Reservation Area Ends ***** -->

<!-- ***** Chefs Area Starts ***** -->
<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Our Chefs</h6>
                    <h2>We offer the best ingredients for you</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <img src="assets/images/chefs-01.jpg" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>Eggi Tresna F</h4>
                        <span>Ice Cream Chef</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                        <img src="assets/images/chefs-02.jpg" alt="Chef #2">
                    </div>
                    <div class="down-content">
                        <h4>Safitri Herdian R</h4>
                        <span>Cookie Chef</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                        <img src="assets/images/chefs-03.jpg" alt="Chef #3">
                    </div>
                    <div class="down-content">
                        <h4>Chandra Wira H</h4>
                        <span>Chocolate Chef</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->
@endsection