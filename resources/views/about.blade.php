@extends('layouts.app')

@section('title', 'About')

@vite(['resources/scss/pages/about.scss', 'resources/js/swiper.js'])

@section('content')
<section class="home-local-page">
    <div class="home-local-page__title">
        <h2>THE ULTIMATE LUXURY</h2>
        <h3>About Us</h3>
    </div>
    <div class="home-local-page__home-info">
        <div class="home-local-page__home-info__home">
            <a href="{{ url('/') }}" class="home-page">Home</a>
            <p class="separation"> | </p>
            <p class="home-title">About</p>
        </div>
    </div>
</section>
<div class="about">
    <section class="video-show">
        <div class="iframe-container">
            <iframe id="video-iframe"
                src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&end=75&controls=0&modestbranding=1&showinfo=0"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <div class="video-description">
            <p>Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</p>
        </div>
        <div class="image-container">
            <img src="../img/aboutImgs/Breakfast.png" alt="Breakfast">
            <img src="../img/aboutImgs/Airport pickup.png" alt="Airport pickup">
            <img src="../img/aboutImgs/City Guide.png" alt="City Guide">
            <img src="../img/aboutImgs/BBQ Party.png" alt="BBQ Party" class="bbq-img">
            <img src="../img/aboutImgs/Luxury room.png" alt="Luxury room">
        </div>
    </section>

    <section class="hotel-restaurant">
        <div class="hotel-restaurant__img">
            <img src="../img/aboutImgs/hotel-restaurant.jpg" alt="hotel restaurant">
            <p class="hotel-restaurant__title">RESTAURANT</p>
        </div>

        <div class="hotel-restaurant__description">
            <h2>Get Restaurant Facilities & Many Other More</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut
                labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut
                aliquip.</p>
        </div>
        <button class="hotel-restaurant button">TAKE A TOUR</button>
    </section>
</div>

<section class="facilities">
    <div class="facilities__title">
        <h2>FACILITIES</h2>
        <h3>CORE FEATURES</h3>
    </div>

    <div class="swiper simple-swiper" id="facilitie-swiper">
        <div class="swiper-wrapper" style="height: auto;">
            <div class="swiper-slide">
                <div class="swiper-background-number">01</div>
                <div class="swiper-content">
                    <img src="../img/aboutImgs/feature01.png" alt="Feature 1">
                    <div class="swiper-content__description">
                        <h2>Have High Rating</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-background-number">02</div>
                <div class="swiper-content">
                    <img src="../img/aboutImgs/feature02.png" alt="Feature 2">
                    <div class="swiper-content__description">
                        <h2>Quiet Hours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-background-number">03</div>
                <div class="swiper-content">
                    <img src="../img/aboutImgs/feature03.png" alt="Feature 3">
                    <div class="swiper-content__description">
                        <h2>Best Locations</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-background-number">04</div>
                <div class="swiper-content">
                    <img src="../img/aboutImgs/feature04.png" alt="Feature 4">
                    <div class="swiper-content__description">
                        <h2>Free Cancellation</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-background-number">05</div>
                <div class="swiper-content">
                    <img src="../img/aboutImgs/feature05.png" alt="Feature 5">
                    <div class="swiper-content__description">
                        <h2>Payment Options</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-background-number">06</div>
                <div class="swiper-content">
                    <img src="../img/aboutImgs/feature06.png" alt="Feature 6">
                    <div class="swiper-content__description">
                        <h2>Special Offers</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="facilities__gallery">
        <div class="facilities__gallery__page">
            <div class="facilities__gallery__page__number">01</div>
            <div class="gallery-content">
                <img src="../img/aboutImgs/feature01.png" alt="Feature 1">
                <div class="gallery-content__description">
                    <h2>Have High Rating</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna..</p>
                </div>
            </div>
        </div>
        <div class="facilities__gallery__page">
            <div class="facilities__gallery__page__number">02</div>
            <div class="gallery-content">
                <img src="../img/aboutImgs/feature02.png" alt="Feature 2">
                <div class="gallery-content__description">
                    <h2>Quiet Hours</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna..</p>
                </div>
            </div>
        </div>
        <div class="facilities__gallery__page">
            <div class="facilities__gallery__page__number">03</div>
            <div class="gallery-content">
                <img src="../img/aboutImgs/feature03.png" alt="Feature 3">
                <div class="gallery-content__description">
                    <h2>Best Locations</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna..</p>
                </div>
            </div>
        </div>
        <div class="facilities__gallery__page">
            <div class="facilities__gallery__page__number">04</div>
            <div class="gallery-content">
                <img src="../img/aboutImgs/feature04.png" alt="Feature 4">
                <div class="gallery-content__description">
                    <h2>Free Cancellation</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna..</p>
                </div>
            </div>
        </div>
        <div class="facilities__gallery__page">
            <div class="facilities__gallery__page__number">05</div>
            <div class="gallery-content">
                <img src="../img/aboutImgs/feature05.png" alt="Feature 5">
                <div class="gallery-content__description">
                    <h2>Payment Options</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna..</p>
                </div>
            </div>
        </div>
        <div class="facilities__gallery__page">
            <div class="facilities__gallery__page__number">06</div>
            <div class="gallery-content">
                <img src="../img/aboutImgs/feature06.png" alt="Feature 6">
                <div class="gallery-content__description">
                    <h2>Special Offers</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna..</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fun-facts">
    <h2>COUNTER</h2>
    <h3>Some Fun Facts</h3>
    <div class="fun-facts-container">
        <div class="fun-facts__blocks">
            <img src="../img/aboutImgs/happyUsers.png" alt="Happy Users">
            <div class="fun-facts__blocks__texts">
                <p class="texts-number">8000</p>
                <p class="texts-content">Happy Users</p>
            </div>
            <img class="fun-facts__blocks__arrow" src="../img/aboutImgs/arrow.png" alt="Right arrow">
        </div>
        <div class="fun-facts__blocks">
            <img src="../img/aboutImgs/reviews.png" alt="Reviews & Appreciate">
            <div class="fun-facts__blocks__texts">
                <p class="texts-number">10M</p>
                <p class="texts-content">Reviews & Appreciate</p>
            </div>
            <img class="fun-facts__blocks__arrow" src="../img/aboutImgs/arrow.png" alt="Right arrow">
        </div>
        <div class="fun-facts__blocks">
            <img src="../img/aboutImgs/coverage.png" alt="Country Coverage">
            <div class="fun-facts__blocks__texts">
                <p class="texts-number">100</p>
                <p class="texts-content">Country Coverage</p>
            </div>
            <img class="fun-facts__blocks__arrow" src="../img/aboutImgs/arrow.png" alt="Right arrow">
        </div>
    </div>
</section>

<div class="swiper image-swiper" id="hotl-imgs">
    <div class="swiper-wrapper" style="height: auto;">
        <div class="swiper-slide">
            <img src="../img/aboutImgs/happyPeopleHotel.jpg" alt="Image 1">
        </div>
        <div class="swiper-slide">
            <img src="../img/aboutImgs/happyPeopleHotel2.jpg" alt="Image 2">
        </div>
    </div>
    <div class="image-swiper-pagination"></div>
</div>

<div class="hotel-images">
    <img src="../img/aboutImgs/happyPeopleHotel.jpg" alt="Image 1">
    <img src="../img/aboutImgs/happyPeopleHotel2.jpg" alt="Image 2">
</div>
@endsection