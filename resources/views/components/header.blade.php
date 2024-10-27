<div class="header__text">
    <p>We Make You Feel Comfortable</p>
</div>
<header class="header" id="header">
    <div class="header__menu" id="header__menu">
    </div>

    <div class="header__title">
        <div class="header__title__logo">
            <p>H</p>
        </div>

        <div class="header__title__titl">
            <h1>HOTEL</h1>
            <h2>MIRANDA</h2>
        </div>
    </div>

    <div class="header__login-search">
        @if(Auth::check())
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <img src="{{ asset('img/logout.png') }}" alt="user-logged-logo" class="header__login-search__imgs">
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @else
        <a href="{{ route('login') }}">
            <img src="{{ asset('img/userLogo.png') }}" alt="user-logo" class="header__login-search__imgs">
        </a>
        @endif
        <img src="{{ asset('img/searchLogo.png') }}" alt="search-logo" class="header__login-search__imgs">
    </div>

    <ul class="header__links" id="header__links">
        <li><a href="{{ url('/about') }}">About Us</a></li>
        <li><a href="{{ url('/rooms') }}">Rooms</a></li>
        <li><a href="{{ url('/offers') }}">Offers</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
        @if(Auth::check())
        <li><a href="{{ route('bookings.index') }}">Bookings</a></li>
        <li><a href="{{ route('activities.index') }}">Activities</a></li>
        @endif
    </ul>
</header>