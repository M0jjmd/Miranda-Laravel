@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Us</h1>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" class="form-control" value="{{ old('subject') }}" required>
            @error('subject')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="comment">Message</label>
            <textarea name="comment" id="comment" class="form-control" rows="5" required>{{ old('comment') }}</textarea>
            @error('comment')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-3">Send Message</button>
    </form>
</div>
@endsection