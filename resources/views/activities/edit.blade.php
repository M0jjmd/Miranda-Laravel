@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Activity</h1>

    <form action="{{ route('activities.update', $activity->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-control" required>
                <option value="surf" {{ $activity->type == 'surf' ? 'selected' : '' }}>Surf</option>
                <option value="windsurf" {{ $activity->type == 'windsurf' ? 'selected' : '' }}>Windsurf</option>
                <option value="kayak" {{ $activity->type == 'kayak' ? 'selected' : '' }}>Kayak</option>
                <option value="atv" {{ $activity->type == 'atv' ? 'selected' : '' }}>ATV</option>
                <option value="hot air balloon" {{ $activity->type == 'hot air balloon' ? 'selected' : '' }}>Hot Air Balloon</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">User ID</label>
            <input type="number" name="user_id" id="user_id" class="form-control" value="{{ $activity->user_id }}" required>
        </div>

        <div class="mb-3">
            <label for="datetime" class="form-label">Date & Time</label>
            <input type="datetime-local" name="datetime" id="datetime" class="form-control" value="{{ \Carbon\Carbon::parse($activity->datetime)->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="mb-3">
            <label for="paid" class="form-label">Paid</label>
            <input type="checkbox" name="paid" id="paid" {{ $activity->paid ? 'checked' : '' }}>
        </div>

        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <textarea name="notes" id="notes" class="form-control">{{ $activity->notes }}</textarea>
        </div>

        <div class="mb-3">
            <label for="satisfaction" class="form-label">Satisfaction (0-10)</label>
            <select name="satisfaction" id="satisfaction" class="form-control">
                @for ($i = 0; $i <= 10; $i++)
                    <option value="{{ $i }}" {{ $activity->satisfaction == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Activity</button>
    </form>
</div>
@endsection