@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Activity Details</h1>

    <ul>
        <li><strong>Type:</strong> {{ $activity->type }}</li>
        <li><strong>User ID:</strong> {{ $activity->user_id }}</li>
        <li><strong>Date & Time:</strong> {{ $activity->datetime }}</li>
        <li><strong>Paid:</strong> {{ $activity->paid ? 'Yes' : 'No' }}</li>
        <li><strong>Notes:</strong> {{ $activity->notes }}</li>
        <li><strong>Satisfaction:</strong> {{ $activity->satisfaction }}</li>
    </ul>

    <a href="{{ route('activities.index') }}" class="btn btn-secondary">Back to Activities</a>
</div>
@endsection