@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Activities</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <a href="{{ route('activities.create') }}" class="btn btn-primary">Create Activity</a>

    <table class="table">
        <thead>
            <tr>
                <th>Type</th>
                <th>User ID</th>
                <th>Date & Time</th>
                <th>Paid</th>
                <th>Satisfaction</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activities as $activity)
            <tr>
                <td>{{ $activity->type }}</td>
                <td>{{ $activity->user_id }}</td>
                <td>{{ $activity->datetime }}</td>
                <td>{{ $activity->paid ? 'Yes' : 'No' }}</td>
                <td>{{ $activity->satisfaction }}</td>
                <td>
                    <a href="{{ route('activities.show', $activity->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection