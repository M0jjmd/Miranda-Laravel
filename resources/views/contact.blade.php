@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<x-toast />
<section class="home-local-page">
    <div class="home-local-page__title">
        <h2>THE ULTIMATE LUXURY</h2>
        <h3>New Details</h3>
    </div>
    <div class="home-local-page__home-info">
        <div class="home-local-page__home-info__home">
            <a href="{{ url('/') }}" class="home-page">Home</a>
            <p class="separation"> | </p>
            <p class="home-title">Blog</p>
        </div>
    </div>
</section>

<section class="hotel-address-container">
    <div class="hotel-address">
        <div class="hotel-address__background-number">01</div>
        <div class="hotel-address__content">
            <img src="../img/email.png" alt="email" class="hotel-address__content__icon">
            <div class="hotel-address__content__text">
                <h2>Hotel Address</h2>
                <p>19/A, Cirikon City hall Tower<br>New York, NYC</p>
            </div>
        </div>
    </div>

    <div class="hotel-address">
        <div class="hotel-address__background-number">02</div>
        <div class="hotel-address__content">
            <img src="../img/phone.png" alt="email" class="hotel-address__content__icon">
            <div class="hotel-address__content__text">
                <h2>Phone Number</h2>
                <p>+ 97656 8675 7864 7<br>+ 876 766 8675 765 6</p>
            </div>
        </div>
    </div>

    <div class="hotel-address">
        <div class="hotel-address__background-number">03</div>
        <div class="hotel-address__content">
            <img src="../img/email.png" alt="email" class="hotel-address__content__icon">
            <div class="hotel-address__content__text">
                <h2>Email</h2>
                <p>info@webmail.com<br>jobs.webmail@mail.com</p>
            </div>
        </div>
    </div>
</section>

<section class="contact">
    <img src="../img/hotel.jpg" alt="" class="contact__img">
    <div class="contact__form-container">
        <form class="contact__form-container__form" action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="form__field">
                <img src="../img/subject.png" alt="Subject Icon" class="form__field__icon">
                <input type="text" placeholder="Enter Subject" class="form__field__input" name="subject" id="subject" value="{{ old('subject') }}" required>
                @error('subject')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form__field form-text-field">
                <img src="../img/enterMessage.png" alt="Message Icon" class="form__field__messageIcon">
                <textarea placeholder="Enter message" class="form__field__input" name="comment" id="comment" class="form-control" rows="5" required>{{ old('comment') }}</textarea>
            </div>
            <button type="submit" class="form__button button">SEND</button>
        </form>
    </div>
</section>
@endsection