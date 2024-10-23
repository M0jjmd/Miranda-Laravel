@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Room {{ $room->room_number }} details</h1>

    <div class="card mb-4">
        <img src="{{ $room->photo }}" class="card-img-top" alt="Foto de la habitación">
        <div class="card-body">
            <p class="card-text"><strong>Bed Type:</strong> {{ $room->bed_type }}</p>
            <p class="card-text"><strong>Price:</strong> ${{ $room->c }}</p>
            <p class="card-text"><strong>Discounted Price:</strong> ${{ $room->offer_price }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $room->status }}</p>

            <p class="card-text"><strong>Facilities:</strong>
            <ul>
                @foreach ($room->facilities as $facility)
                <li>{{ $facility->facility_name }}</li>
                @endforeach
            </ul>
            </p>
            <button id="startBooking" class="btn btn-primary">Start Booking</button>
            <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Back to Activities</a>
            <div id="bookingForm" style="display:none;">
                <form action="{{ route('bookings.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="room_id" value="{{ $room->id }}">

                    <div class="form-group">
                        <label for="check_in">Check-in</label>
                        <input type="date" name="check_in" id="check_in" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="check_out">Check-out</label>
                        <input type="date" name="check_out" id="check_out" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="special_request">Special Request</label>
                        <textarea name="special_request" id="special_request" class="form-control" rows="3" placeholder="Any special requests"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Book room</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection