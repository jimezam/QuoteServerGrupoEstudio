@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cita al azar</h1>

        <div class="ml-4">
            <blockquote class="blockquote w-100">
                <p class="mb-3">
                    {{ $quote->message }}
                </p>
                <footer class="blockquote-footer">
                    {{ $quote->author }}
                </footer>
            </blockquote>
        </div>

        Esta cita fue publicada por: <strong>{{ $quote->user->name }}</strong>.
    </div>
@endsection
