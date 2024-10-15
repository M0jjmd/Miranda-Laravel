<!-- resources/views/activities/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Activity</h1>

    <form action="{{ route('activities.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">User ID</label>
            <input type="number" name="user_id" id="user_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="datetime" class="form-label">Date & Time</label>
            <input type="datetime-local" name="datetime" id="datetime" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="paid" class="form-label">Paid</label>
            <input type="checkbox" name="paid" id="paid">
        </div>

        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <textarea name="notes" id="notes" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="satisfaction" class="form-label">Satisfaction (0-10)</label>
            <input type="number" name="satisfaction" id="satisfaction" class="form-control" min="0" max="10">
        </div>

        <button type="submit" class="btn btn-primary">Create Activity</button>
    </form>
</div>
@endsection