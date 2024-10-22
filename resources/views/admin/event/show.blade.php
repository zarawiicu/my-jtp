@extends('admin.layout')

@section('content')
    <div class="container">
        <h1>{{ $event->judul }}</h1>

        <div>
            <strong>Description:</strong>
            <p>{{ $event->deskripsi }}</p>
        </div>

        <div>
            <strong>Image:</strong><br>
            @if($event->gambar)
                <img src="{{ asset('storage/' . $event->gambar) }}" alt="Event Image" style="width: 300px;">
            @else
                <p>No image available.</p>
            @endif
        </div>

        <div>
            <a href="{{ route('events.index') }}">Back to Events List</a>
        </div>
    </div>
@endsection
