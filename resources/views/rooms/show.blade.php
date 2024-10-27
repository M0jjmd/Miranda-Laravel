@extends('layouts.app')

@section('content')
<div class="room-details-container">
    <h1>Room {{ $room->room_number }} details</h1>

    <div class="room-details-card">
        <img src="{{ $room->photo }}" class="room-details-img-top" alt="Foto de la habitación">
        <div class="room-details-card-body">
            <p class="room-details-text"><strong>Bed Type:</strong> {{ $room->bed_type }}</p>
            <p class="room-details-text"><strong>Price:</strong> ${{ $room->c }}</p>
            <p class="room-details-text"><strong>Discounted Price:</strong> ${{ $room->offer_price }}</p>
            <p class="room-details-text"><strong>Status:</strong> {{ $room->status }}</p>

            <p class="room-details-text"><strong>Facilities:</strong>
            <ul class="room-details-facilities-list">
                @foreach ($room->facilities as $facility)
                <li class="room-details-facility-item">{{ $facility->facility_name }}</li>
                @endforeach
            </ul>
            </p>

            <div class="room-details-btn-container">
                <button id="startBooking" class="room-details-btn-primary">Start Booking</button>
                <a href="{{ route('rooms.index') }}" class="room-details-btn-secondary">Back to Rooms</a>
            </div>

            <div id="bookingForm" style="display:none;" class="room-details-booking-form">
                <form action="{{ route('bookings.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="room_id" value="{{ $room->id }}">

                    <div class="room-details-form-group">
                        <label for="check_in">Check-in</label>
                        <input type="date" name="check_in" id="check_in" class="room-details-form-control" required>
                    </div>

                    <div class="room-details-form-group">
                        <label for="check_out">Check-out</label>
                        <input type="date" name="check_out" id="check_out" class="room-details-form-control" required>
                    </div>

                    <div class="room-details-form-group">
                        <label for="special_request">Special Request</label>
                        <textarea name="special_request" id="special_request" class="room-details-form-control" rows="3" placeholder="Any special requests"></textarea>
                    </div>

                    <button type="submit" class="room-details-btn-submit">Book room</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var isAuthenticated = <?php echo json_encode(\Illuminate\Support\Facades\Auth::check()); ?>;
</script>

<script src="{{ asset('js/booking.js') }}"></script>
@endsection