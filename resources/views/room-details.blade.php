@extends('layouts.app')

@section('title', 'Room Details')

@vite(['resources/scss/pages/roomDetails.scss'])

@section('content')
<section class="home-local-page">
    <div class="home-local-page__title">
        <h2>THE ULTIMATE LUXURY</h2>
        <h3>New Details</h3>
    </div>
    <div class="home-local-page__home-info">
        <div class="home-local-page__home-info__home">
            <a href="{{ url('/') }}" class="home-page">Home</a>
            <p class="separation"> | </p>
            <p class="home-title">Room Details</p>
        </div>
    </div>
</section>
<div class="main-container">
    <section class="room-info">
        <div class="room-info__type">
            <h2>DOUBLE BED</h2>
            <h3>Luxury Double Bed</h3>
            <h4><span class="price">$345</span><span>/Night</span></h4>
            <img src="../img/minDuplexRoom.avif" alt="Room Image">
        </div>
    </section>

    <section class="room-availability">
        <div class="room-availability__availability">
            <h2>Check Availability</h2>
            <div class="room-availability__availability__date">
                <label for="checkin">Check In</label>
                <div class="room-availability__availability__date__container">
                    <span id="checkin-fecha-visible"></span>
                    <input type="date" id="checkin" value="">
                </div>
            </div>
            <div class="room-availability__availability__date">
                <label for="checkout">Check Out</label>
                <div class="room-availability__availability__date__container">
                    <span id="checkout-fecha-visible"></span>
                    <input type="date" id="checkout">
                </div>
            </div>
        </div>
        <div class="room-availability__Check-Availability">
            <button class="room-availability__Check-Availability__button button">CHECK AVAILABILITY</button>
        </div>
    </section>

    <div class="room-info-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore
            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt
            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium
            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
            architecto
            beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
            aut fugit,
            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
            est, qui
            dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
    </div>

    <section class="room-amenities">
        <div class="room-amenities__title">
            <h2>Amenities</h2>
            <hr />
        </div>
        <div class="room-amenities__items">
            <div class="room-amenities__items__container">
                <ul class="room-amenities__items__container__specs">
                    <li><img src="../img/aminities/AirConditioner.png" alt="Air conditioner" />Air conditioner
                    </li>
                    <li><img src="../img/aminities/breakfast.png" alt="Breakfast" />Breakfast</li>
                    <li><img src="../img/aminities/cleaning.png" alt="Cleaning" />Cleaning</li>
                    <li><img src="../img/aminities/grocery.png" alt="Grocery" />Grocery</li>
                    <li><img src="../img/aminities/shop.png" alt="Shop near" />Shop near</li>
                    <li><img src="../img/aminities/onlineSupport.png" alt="24/7 Online Support" />24/7 Online
                        Support
                    </li>
                    <li><img src="../img/aminities/smartSecurity.png" alt="Smart Security" />Smart Security</li>
                </ul>
            </div>

            <div class="room-amenities__items__container">
                <ul class="room-amenities__items__container__specs">
                    <li><img src="../img/aminities/wifi.png" alt="High speed WiFi" />High speed WiFi</li>
                    <li><img src="../img/aminities/kitchen.png" alt="Kitchen" />Kitchen</li>
                    <li><img src="../img/aminities/shower.png" alt="Shower" />Shower</li>
                    <li><img src="../img/aminities/bed.png" alt="Single bed" />Single bed</li>
                    <li><img src="../img/aminities/towels.png" alt="Towels" />Towels</li>
                    <li><img src="../img/aminities/strongLocker.png" alt="Strong Locker" />Strong Locker</li>
                    <li><img src="../img/aminities/expertTeam.png" alt="Expert Team" />Expert Team</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="room-testimonial">
        <div class="room-testimonial__image-container">
            <img src="../img/aminities/fotoPerfilMujer.jpg" alt="Rosalina D. William"
                class="room-testimonial__image" />
            <div class="room-testimonial__tick">
                <img src="../img/aminities/backgroundTick.png" alt="TickBackground"
                    class="room-testimonial__tick-background" />
                <img src="../img/aminities/tick.png" alt="Tick Icon" class="room-testimonial__tick-icon" />
            </div>
        </div>
        <h3 class="room-testimonial__name">Rosalina D. William</h3>
        <p class="room-testimonial__position">FOUNDER, QUX CO.</p>
        <p class="room-testimonial__text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et
            dolore.
        </p>
    </section>

    <section class="cancellation">
        <h2>Cancellation</h2>
        <hr />
        <p>Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis,
            consequat
            metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get
            a
            full
            refund.</p>
    </section>

    <section class="related-rooms">
        <div class="related-rooms__title">
            <h2>Related Rooms</h2>
            <hr />
        </div>

        <div class="swiper arrows-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../img/minDuplexRoom.avif" alt="luxuryRoom-1" class="swiper-img" />
                    <div class="swiper-description">
                        <div class="swiper-description__img">
                            <img src="../img/swiperImageDesc.png" alt="Room-description" />

                        </div>
                        <div class="swiper-description__desc">
                            <h2 class="swiper-description__desc__title">Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.
                            </p>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.
                            </p>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.
                            </p>
                            <div class="swiper-description__desc__book-now">
                                <h2 class="swiper-description__desc__book-now__price">$345/Night</h2>
                                <h2 class="swiper-description__desc__book-now__now">Booking Now</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div class="related-room-gallery">
            <div class="related-room-gallery__item">
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

            <div class="related-room-gallery__item">
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
</div>
@endsection