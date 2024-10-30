@extends('layouts.app')

@section('title', 'Welcome to Hotel Miranda')

@vite(['resources/scss/pages/index.scss', 'resources/js/formatDates.js', 'resources/js/swiper.js', 'resources/js/openMenu.js'])

@section('content')
<section class="home-detail">
    <div class="home-detail__title">
        <h2>THE ULTIMATE LUXURY EXPERIENCE</h2>
        <h3>The Perfect<br /> Base For You</h3>
    </div>
    <div class="home-detail__home-info">
        <button class="home-detail__home-info__tour button">TAKE A TOUR</button>
        <button class="home-detail__home-info__more button">LEARN MORE</button>
    </div>
</section>

<section class="date-select">
    <div class="date-select__availability">
        <div class="date-select__availability__date">
            <label for="checkin">Arrival Date</label>
            <div class="date-select__availability__date__container">
                <input type="date" id="checkin" value="">
                <span id="checkin-fecha-visible"></span>
            </div>
        </div>
        <div class="date-select__availability__date">
            <label for="checkout">LeDeparture Date</label>
            <div class="date-select__availability__date__container">
                <input type="date" id="checkout">
                <span id="checkout-fecha-visible"></span>
            </div>
        </div>
        <div class="date-select__availability__button">
            <button class="button">CHECK AVAILABILITY</button>
        </div>
    </div>
</section>

<div class="page-info-container">
    <section class="about-us">
        <p class="about-us__title">About Us</p>
        <div class="about-us__description">
            <h2>Discover Our
                Underground.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut
                aliquip ex ea commodo consequat.</p>
            <button class="about-us__button button">Book Now</button>
        </div>
    </section>

    <section class="team-component">
        <div class="team-component__container">
            <img src="{{ asset('/img/index/strongTeam.avif') }}" class="team-component__container__strong-team-img">
            <div class="team-component__container__desc">
                <img src="./img/index/Group.png" alt="Equipo fuerte"
                    class="team-component__container__desc__group-image">
                <h2 class="team-component__container__desc__title">Strong Team</h2>
                <p class="team-component__container__desc__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                    ut
                    labore
                    et
                    dolore magna aliqua.
                </p>
            </div>
        </div>
    </section>

    <section class="luxury-room">
        <div class="luxury-room__container">
            <img src="./img/index/luxuryRoom.avif" class="luxury-room__container__img">
            <div class="luxury-room__container__desc">
                <img src="./img/index/luxuryRoomLogo.png" alt="logo" class="luxury-room__container__desc__logo">
                <h2 class="luxury-room__container__desc__title">Luxury Room</h2>
                <p class="luxury-room__container__desc__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                </p>
            </div>
        </div>
    </section>
</div>

<section class="picked-rooms">
    <div class="picked-rooms__title">
        <h2>ROOMS</h2>
        <h3>Hand Picked Rooms</h3>
    </div>

    <div class="swiper arrows-swiper">
        <div class="swiper-wrapper" style="height: auto;">
            <div class="swiper-slide">
                <div class="descrition-img">
                    <img src="./img/swiperImageDesc.png" alt="Room-description" />
                </div>
                <img src="./img/minDuplexRoom.avif" alt="luxuryRoom-1" class="swiper-img" />
                <div class="swiper-description">
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
                <div class="descrition-img">
                    <img src="./img/swiperImageDesc.png" alt="Room-description" />
                </div>
                <img src="./img/minDuplexRoom.avif" alt="luxuryRoom-1" class="swiper-img" />
                <div class="swiper-description">
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
                <div class="descrition-img">
                    <img src="./img/swiperImageDesc.png" alt="Room-description" />
                </div>
                <img src="./img/minDuplexRoom.avif" alt="luxuryRoom-1" class="swiper-img" />
                <div class="swiper-description">
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
                <div class="descrition-img">
                    <img src="./img/swiperImageDesc.png" alt="Room-description" />
                </div>
                <img src="./img/minDuplexRoom.avif" alt="luxuryRoom-1" class="swiper-img" />
                <div class="swiper-description">
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
                <div class="descrition-img">
                    <img src="./img/swiperImageDesc.png" alt="Room-description" />
                </div>
                <img src="./img/minDuplexRoom.avif" alt="luxuryRoom-1" class="swiper-img" />
                <div class="swiper-description">
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
</section>

<section class="intro-video">
    <div class="intro-video__container">
        <div class="intro-video__container__intro">
            <div class="intro-video__container__intro__cont">
                <p class="intro-video__container__intro__cont__title">INTRO VIDEO</p>
                <h2>Meet With Our Luxury Place.</h2>
                <p class="intro-video__container__intro__cont__text">Lorem ipsum dolor sit amet, consectetur
                    adipisicingelit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat you have to understand this.</p>
                <button class="intro-video__container__button button">Book Now</button>
            </div>
        </div>
        <div class="iframe-container">
            <iframe id="video-iframe"
                src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&end=75&controls=0&modestbranding=1&showinfo=0"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</section>

<section class="facilities">
    <div class="facilities__title">
        <h2>FACILITIES</h2>
        <h3>CORE FEATURES</h3>
    </div>

    <div class="swiper simple-swiper">
        <div class="swiper-wrapper" style="height: auto;">
            <div class="swiper-slide">
                <div class="swiper-background-number">01</div>
                <div class="swiper-content">
                    <img src="./img/aboutImgs/feature01.png" alt="Feature 1">
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
                    <img src="./img/aboutImgs/feature02.png" alt="Feature 2">
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
                    <img src="./img/aboutImgs/feature03.png" alt="Feature 3">
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
                    <img src="./img/aboutImgs/feature04.png" alt="Feature 4">
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
                    <img src="./img/aboutImgs/feature05.png" alt="Feature 5">
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
                    <img src="./img/aboutImgs/feature06.png" alt="Feature 6">
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
                <img src="./img/aboutImgs/feature01.png" alt="Feature 1">
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
                <img src="./img/aboutImgs/feature02.png" alt="Feature 2">
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
                <img src="./img/aboutImgs/feature03.png" alt="Feature 3">
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
                <img src="./img/aboutImgs/feature04.png" alt="Feature 4">
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
                <img src="./img/aboutImgs/feature05.png" alt="Feature 5">
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
                <img src="./img/aboutImgs/feature06.png" alt="Feature 6">
                <div class="gallery-content__description">
                    <h2>Special Offers</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna..</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="food-menu">
    <div class="menu-img-container">
        <img src="./img/index/donutIcon.png" alt="donut icon">
    </div>
    <div class="food-swiper-container">
        <div class="swiper food-swiper">
            <div class="swiper-wrapper" style="height: auto; margin-bottom: 3rem;">
                <div class="swiper-slide">
                    <div class="food-item">
                        <img src="./img/index/food1.avif" alt="Food 1" class="food-item__img">
                        <div class="food-item__desc">
                            <h3 class="food-item__desc__name">Eggs & Bacon</h3>
                            <p class="food-item__desc__description">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="food-item">
                        <img src="./img/index/food2.avif" alt="Food 2" class="food-item__img">
                        <div class="food-item__desc">
                            <h3 class="food-item__desc__name">Tea or Coffee</h3>
                            <p class="food-item__desc__description">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="food-item">
                        <img src="./img/index/food3.avif" alt="Food 3" class="food-item__img">
                        <div class="food-item__desc">
                            <h3 class="food-item__desc__name">Chia Oatmeal</h3>
                            <p class="food-item__desc__description">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="food-item">
                        <img src="./img/index/food1.avif" alt="Food 1" class="food-item__img">
                        <div class="food-item__desc">
                            <h3 class="food-item__desc__name">Eggs & Bacon</h3>
                            <p class="food-item__desc__description">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="food-item">
                        <img src="./img/index/food2.avif" alt="Food 2" class="food-item__img">
                        <div class="food-item__desc">
                            <h3 class="food-item__desc__name">Tea or Coffee</h3>
                            <p class="food-item__desc__description">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="food-item">
                        <img src="./img/index/food3.avif" alt="Food 3" class="food-item__img">
                        <div class="food-item__desc">
                            <h3 class="food-item__desc__name">Chia Oatmeal</h3>
                            <p class="food-item__desc__description">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="food-item">
                        <img src="./img/index/food1.avif" alt="Food 1" class="food-item__img">
                        <div class="food-item__desc">
                            <h3 class="food-item__desc__name">Eggs & Bacon</h3>
                            <p class="food-item__desc__description">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="food-item">
                        <img src="./img/index/food2.avif" alt="Food 2" class="food-item__img">
                        <div class="food-item__desc">
                            <h3 class="food-item__desc__name">Tea or Coffee</h3>
                            <p class="food-item__desc__description">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="food-item">
                        <img src="./img/index/food3.avif" alt="Food 3" class="food-item__img">
                        <div class="food-item__desc">
                            <h3 class="food-item__desc__name">Chia Oatmeal</h3>
                            <p class="food-item__desc__description">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="food-swiper-buttons-next"></div>
            <div class="food-swiper-buttons-prev"></div>
        </div>
    </div>

    <div class="swiper image-swiper">
        <div class="swiper-wrapper" style="height: auto; margin-bottom:2rem;">
            <div class="swiper-slide">
                <img src="./img/index/restaurant1.avif" alt="Image 1">
            </div>
            <div class="swiper-slide">
                <img src="./img/index/restaurant2.avif" alt="Image 2">
            </div>
            <div class="swiper-slide">
                <img src="./img/index/restaurant3.avif" alt="Image 3">
            </div>
        </div>
        <div class="image-swiper-pagination"></div>
    </div>

    <div class="food-gallery">
        <img src="./img/index/restaurant1.avif" alt="Image 1" class="food-gallery__img">
        <img src="./img/index/restaurant2.avif" alt="Image 2" class="food-gallery__img">
        <img src="./img/index/restaurant3.avif" alt="Image 3" class="food-gallery__img">
    </div>
</section>

<section class="web-info">
    <div class="web-info__contaner">
        <img src="./img/index/webInfo1.png" alt="web info 1">
        <h2>84k+</h2>
        <p>Projects are Completed</p>
    </div>
    <div class="web-info__contaner">
        <img src="./img/index/webInfo2.png" alt="web info 2">
        <h2>10M+</h2>
        <p>Active Backers Around World</p>
    </div>
    <div class="web-info__contaner">
        <img src="./img/index/webInfo3.png" alt="web info 3">
        <h2>02k+</h2>
        <p>Categories Served</p>
    </div>
    <div class="web-info__contaner">
        <img src="./img/index/webInfo4.png" alt="web info 4">
        <h2>100M+</h2>
        <p>Idea Raised Funds</p>
    </div>
</section>
@endsection