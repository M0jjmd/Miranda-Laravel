@extends('layouts.app')

@section('content')
<div class="bookings-container">
    <h1>Bookings List</h1>
    <x-toast />
    @if($bookings->isEmpty())
    <p class="no-bookings-message">No bookings available at the moment.</p>
    @else
    <table class="bookings-table">
        <thead>
            <tr>
                <th>Room</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Special Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->room->room_number }}</td>
                <td>{{ $booking->check_in }}</td>
                <td>{{ $booking->check_out }}</td>
                <td>{{ $booking->special_request }}</td>
                <td>
                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bookings-btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection