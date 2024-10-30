@extends('layouts.app')

@section('title', 'Rooms')

@vite(['resources/scss/pages/rooms.scss', 'resources/js/numbered-swiper.js'])

@section('content')
<section class="home-local-page">
    <div class="home-local-page__title">
        <h2>THE ULTIMATE LUXURY</h2>
        <h3>Ultimate Room</h3>
    </div>
    <div class="home-local-page__home-info">
        <div class="home-local-page__home-info__home">
            <a href="{{ url('/') }}" class="home-page">Home</a>
            <p class="separation"> | </p>
            <p class="home-title">Rooms</p>
        </div>
    </div>
</section>

<div class="swiper numbered-swiper">
    <div class="swiper-wrapper" style="height: auto; display: flex;">
        {{-- Verifica que haya habitaciones para mostrar --}}
        @if($rooms->isNotEmpty())
        {{-- Inicializar la primera diapositiva --}}
        <div class="swiper-slide">
            {{-- Iterar por cada habitación --}}
            @foreach ($rooms as $index => $room)
            <div class="swiper-item">
                <img src="{{ asset('img/minDuplexRoom.avif') }}" alt="Room Image" class="swiper-img" />
                <div class="swiper-description">
                    <div class="swiper-img_container">
                        <div class="swiper-description__img">
                            <img src="{{ asset('img/swiperImageDesc.png') }}" alt="Room-description" />
                        </div>
                    </div>
                    <div class="swiper-description__desc">
                        <div class="swiper-description-container">
                            <h2 class="swiper-description__desc__title">{{ $room->bed_type }}</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="swiper-description__desc__book-now">
                            <h2 class="swiper-description__desc__book-now__price">{{ $room->offer_price }}/Night</h2>
                            <hr class="swiper-description__desc__book-now__custom-line">
                            <h2 class="swiper-description__desc__book-now__now">{{ ucfirst($room->status) }}</h2>
                            <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-info">View</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Cerrar y abrir una nueva slide cada vez que alcanzamos 10 elementos, excepto al final --}}
            @if (($index + 1) % 10 === 0 && $index < count($rooms) - 1)
                </div> <!-- Cerrar la slide actual -->
                <div class="swiper-slide"> <!-- Abrir una nueva slide -->
                    @endif
                    @endforeach
                </div> <!-- Cerrar la última slide fuera del bucle -->
                @endif
        </div>


        <!-- Controles de paginación -->
        <div class="pagination-container">
            <button class="btn-go-start">&lt;&lt;</button>
            <div class="swiper-pagination"></div>
            <button class="btn-go-end">&gt;&gt;</button>
        </div>
    </div>
    @endsection