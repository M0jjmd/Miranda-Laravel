@extends('layouts.app')

@section('title', 'Offers')

@vite(['resources/scss/pages/offers.scss' , 'resources/js/swiper.js', 'resources/js/openMenu.js' ])

@section('content')
<section class="home-local-page">
    <div class="home-local-page__title">
        <h2>THE ULTIMATE LUXURY</h2>
        <h3>Our Offers</h3>
    </div>
    <div class="home-local-page__home-info">
        <div class="home-local-page__home-info__home">
            <a href="{{ url('/') }}" class="home-page">Home</a>
            <p class="separation"> | </p>
            <p class="home-title">Offers</p>
        </div>
    </div>
</section>

<section class="offer">
    <div class="offer__image">
        <img src="../img/minDuplexRoom.avif" alt="luxury-room">
        <div class="offer__image__text">
            <p class="offer__image__oldPrice">$500/Night</p>
            <p class="offer__image__newPrice">$345/Night</p>
        </div>
    </div>
    <div class="caption">
        <hr class="caption-line">
        <div class="offer__description">
            <div class="offer__description__title">
                <h2 class="offer__description__titl__name">DOUBLE BED</h2>
                <h3 class="offer__description__titl__fullName">LUXURY DOUBLE BED</h3>
            </div>
            <div class="offer__description__title-price">
                <p class="offer__description__titl__oldPrice">$500/Night</p>
                <p class="offer__description__titl__newPrice">$345/Night</p>
            </div>
        </div>

        <div class="offer__items">
            <div class="offer__items__text">
                <p class="offer__items__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi
                    ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit
                    esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                <a href="{{ url('/room-details') }}" class="offer__items__book button">BOOK NOW</a>
            </div>

            <ul class="offer__items__specs">
                <li><img src="../img/aminities/AirConditioner.png" alt="" />Air conditioner</li>
                <li><img src="../img/aminities/breakfast.png" alt="" />Breakfast</li>
                <li><img src="../img/aminities/cleaning.png" alt="" />Cleaning</li>
                <li><img src="../img/aminities/grocery.png" alt="" />Grocery</li>
                <li><img src="../img/aminities/shop.png" alt="" />Shop near</li>
            </ul>
            <ul class="offer__items__specs">
                <li><img src="../img/aminities/wifi.png" alt="" />High speed WiFi</li>
                <li><img src="../img/aminities/kitchen.png" alt="" />Kitchen</li>
                <li><img src="../img/aminities/shower.png" alt="" />Shower</li>
                <li><img src="../img/aminities/bed.png" alt="" />Single bed</li>
                <li><img src="../img/aminities/towels.png" alt="" />Towels</li>
            </ul>
        </div>
    </div>
</section>

<section class="offer">
    <div class="offer__image">
        <img src="../img/minDuplexRoom.avif" alt="luxury-room">
        <div class="offer__image__text">
            <p class="offer__image__oldPrice">$500/Night</p>
            <p class="offer__image__newPrice">$345/Night</p>
        </div>
    </div>
    <div class="caption">
        <hr class="caption-line">
        <div class="offer__description">
            <div class="offer__description__title">
                <h2 class="offer__description__titl__name">DOUBLE BED</h2>
                <h3 class="offer__description__titl__fullName">LUXURY DOUBLE BED</h3>
            </div>
            <div class="offer__description__title-price">
                <p class="offer__description__titl__oldPrice">$500/Night</p>
                <p class="offer__description__titl__newPrice">$345/Night</p>
            </div>
        </div>

        <div class="offer__items">
            <div class="offer__items__text">
                <p class="offer__items__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi
                    ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit
                    esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                <a href="{{ url('/room-details') }}" class="offer__items__book button">BOOK NOW</a>
            </div>

            <ul class="offer__items__specs">
                <li><img src="../img/aminities/AirConditioner.png" alt="" />Air conditioner</li>
                <li><img src="../img/aminities/breakfast.png" alt="" />Breakfast</li>
                <li><img src="../img/aminities/cleaning.png" alt="" />Cleaning</li>
                <li><img src="../img/aminities/grocery.png" alt="" />Grocery</li>
                <li><img src="../img/aminities/shop.png" alt="" />Shop near</li>
            </ul>
            <ul class="offer__items__specs">
                <li><img src="../img/aminities/wifi.png" alt="" />High speed WiFi</li>
                <li><img src="../img/aminities/kitchen.png" alt="" />Kitchen</li>
                <li><img src="../img/aminities/shower.png" alt="" />Shower</li>
                <li><img src="../img/aminities/bed.png" alt="" />Single bed</li>
                <li><img src="../img/aminities/towels.png" alt="" />Towels</li>
            </ul>
        </div>
    </div>
</section>

<section class="offer">
    <div class="offer__image">
        <img src="../img/minDuplexRoom.avif" alt="luxury-room">
        <div class="offer__image__text">
            <p class="offer__image__oldPrice">$500/Night</p>
            <p class="offer__image__newPrice">$345/Night</p>
        </div>
    </div>
    <div class="caption">
        <hr class="caption-line">
        <div class="offer__description">
            <div class="offer__description__title">
                <h2 class="offer__description__titl__name">DOUBLE BED</h2>
                <h3 class="offer__description__titl__fullName">LUXURY DOUBLE BED</h3>
            </div>
            <div class="offer__description__title-price">
                <p class="offer__description__titl__oldPrice">$500/Night</p>
                <p class="offer__description__titl__newPrice">$345/Night</p>
            </div>
        </div>

        <div class="offer__items">
            <div class="offer__items__text">
                <p class="offer__items__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi
                    ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit
                    esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                <a href="{{ url('/room-details') }}" class="offer__items__book button">BOOK NOW</a>
            </div>

            <ul class="offer__items__specs">
                <li><img src="../img/aminities/AirConditioner.png" alt="" />Air conditioner</li>
                <li><img src="../img/aminities/breakfast.png" alt="" />Breakfast</li>
                <li><img src="../img/aminities/cleaning.png" alt="" />Cleaning</li>
                <li><img src="../img/aminities/grocery.png" alt="" />Grocery</li>
                <li><img src="../img/aminities/shop.png" alt="" />Shop near</li>
            </ul>
            <ul class="offer__items__specs">
                <li><img src="../img/aminities/wifi.png" alt="" />High speed WiFi</li>
                <li><img src="../img/aminities/kitchen.png" alt="" />Kitchen</li>
                <li><img src="../img/aminities/shower.png" alt="" />Shower</li>
                <li><img src="../img/aminities/bed.png" alt="" />Single bed</li>
                <li><img src="../img/aminities/towels.png" alt="" />Towels</li>
            </ul>
        </div>
    </div>
</section>

<section class="offer">
    <div class="offer__image">
        <img src="../img/minDuplexRoom.avif" alt="luxury-room">
        <div class="offer__image__text">
            <p class="offer__image__oldPrice">$500/Night</p>
            <p class="offer__image__newPrice">$345/Night</p>
        </div>
    </div>
    <div class="caption">
        <hr class="caption-line">
        <div class="offer__description">
            <div class="offer__description__title">
                <h2 class="offer__description__titl__name">DOUBLE BED</h2>
                <h3 class="offer__description__titl__fullName">LUXURY DOUBLE BED</h3>
            </div>
            <div class="offer__description__title-price">
                <p class="offer__description__titl__oldPrice">$500/Night</p>
                <p class="offer__description__titl__newPrice">$345/Night</p>
            </div>
        </div>

        <div class="offer__items">
            <div class="offer__items__text">
                <p class="offer__items__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi
                    ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit
                    esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                <a href="{{ url('/room-details') }}" class="offer__items__book button">BOOK NOW</a>
            </div>

            <ul class="offer__items__specs">
                <li><img src="../img/aminities/AirConditioner.png" alt="" />Air conditioner</li>
                <li><img src="../img/aminities/breakfast.png" alt="" />Breakfast</li>
                <li><img src="../img/aminities/cleaning.png" alt="" />Cleaning</li>
                <li><img src="../img/aminities/grocery.png" alt="" />Grocery</li>
                <li><img src="../img/aminities/shop.png" alt="" />Shop near</li>
            </ul>
            <ul class="offer__items__specs">
                <li><img src="../img/aminities/wifi.png" alt="" />High speed WiFi</li>
                <li><img src="../img/aminities/kitchen.png" alt="" />Kitchen</li>
                <li><img src="../img/aminities/shower.png" alt="" />Shower</li>
                <li><img src="../img/aminities/bed.png" alt="" />Single bed</li>
                <li><img src="../img/aminities/towels.png" alt="" />Towels</li>
            </ul>
        </div>
    </div>
</section>

<section class="popular-list">
    <div class="popular-list__title">
        <h2>POPULAR LIST</h2>
        <h3>Popular Rooms</h3>
    </div>

    <div class="swiper arrows-swiper">
        <div class="swiper-wrapper" style="height: auto;">
            <div class="swiper-slide">
                <img src="../img/minDuplexRoom.avif" alt="luxuryRoom-1" class="swiper-img" />
                <div class="swiper-description">
                    <div class="swiper-description__img">
                        <img src="../img/swiperImageDesc.png" alt="Room-description" />
                    </div>
                    <div class="swiper-description__desc">
                        <h2 class="swiper-description__desc__title">Minimal Duplex Room</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="swiper-description__desc__book-now">
                            <h2 class="swiper-description__desc__book-now__price">$345/Night</h2>
                            <h2 class="swiper-description__desc__book-now__now">Booking Now</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="../img/minDuplexRoom.avif" alt="luxuryRoom-1" class="swiper-img" />
                <div class="swiper-description">
                    <div class="swiper-description__img">
                        <img src="../img/swiperImageDesc.png" alt="Room-description" />
                    </div>
                    <div class="swiper-description__desc">
                        <h2 class="swiper-description__desc__title">Minimal Duplex Room</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="swiper-description__desc__book-now">
                            <h2 class="swiper-description__desc__book-now__price">$345/Night</h2>
                            <h2 class="swiper-description__desc__book-now__now">Booking Now</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="../img/minDuplexRoom.avif" alt="luxuryRoom-1" class="swiper-img" />
                <div class="swiper-description">
                    <div class="swiper-description__img">
                        <img src="../img/swiperImageDesc.png" alt="Room-description" />
                    </div>
                    <div class="swiper-description__desc">
                        <h2 class="swiper-description__desc__title">Minimal Duplex Room</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="swiper-description__desc__book-now">
                            <h2 class="swiper-description__desc__book-now__price">$345/Night</h2>
                            <h2 class="swiper-description__desc__book-now__now">Booking Now</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev custom-swiper-button"></div>
        <div class="swiper-button-next custom-swiper-button"></div>
    </div>
    <div class="popular-room-gallery">
        <div class="popular-room-gallery__item">
            <img src="../img/minDuplexRoom.avif" alt="luxuryRoom-1" class="swiper-img" />
            <div class="swiper-description">
                <div class="swiper-description__img">
                    <img src="../img/swiperImageDesc.png" alt="Room-description" />
                </div>
                <div class="swiper-description__desc">
                    <h2 class="swiper-description__desc__title">Minimal Duplex Room</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="swiper-description__desc__book-now">
                        <h2 class="swiper-description__desc__book-now__price">$345/Night</h2>
                        <h2 class="swiper-description__desc__book-now__now">Booking Now</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="popular-room-gallery__item">
            <img src="../img/minDuplexRoom.avif" alt="luxuryRoom-1" class="swiper-img" />
            <div class="swiper-description">
                <div class="swiper-description__img">
                    <img src="../img/swiperImageDesc.png" alt="Room-description" />
                </div>
                <div class="swiper-description__desc">
                    <h2 class="swiper-description__desc__title">Minimal Duplex Room</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="swiper-description__desc__book-now">
                        <h2 class="swiper-description__desc__book-now__price">$345/Night</h2>
                        <h2 class="swiper-description__desc__book-now__now">Booking Now</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="popular-room-gallery__item">
            <img src="../img/minDuplexRoom.avif" alt="luxuryRoom-1" class="swiper-img" />
            <div class="swiper-description">
                <div class="swiper-description__img">
                    <img src="../img/swiperImageDesc.png" alt="Room-description" />
                </div>
                <div class="swiper-description__desc">
                    <h2 class="swiper-description__desc__title">Minimal Duplex Room</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="swiper-description__desc__book-now">
                        <h2 class="swiper-description__desc__book-now__price">$345/Night</h2>
                        <h2 class="swiper-description__desc__book-now__now">Booking Now</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection