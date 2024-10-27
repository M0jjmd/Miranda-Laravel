@extends('layouts.app')

@section('title', 'Rooms')

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

<table class="table">
    <thead>
        <tr>
            <th>Photo</th>
            <th>Room Number</th>
            <th>Bed Type</th>
            <th>Rate</th>
            <th>Discounted price</th>
            <th>State</th>
            <th>Accions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rooms as $room)
        @if($room->status === 'available')
        <tr>
            <td>
                <img src="{{ $room->photo }}" class="card-img-top" alt="Foto de la habitación" style="width: 100px; height: auto;">
            </td>
            <td>{{ $room->room_number }}</td>
            <td>{{ $room->bed_type }}</td>
            <td>${{ $room->rate }}</td>
            <td>${{ $room->offer_price }}</td>
            <td>{{ ucfirst($room->status) }}</td>
            <td>
                <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-info">View</a>
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
@endsection