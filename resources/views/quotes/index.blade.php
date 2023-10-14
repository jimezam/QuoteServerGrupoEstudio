@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-2">Todas las citas</h1>

        @if (count($quotes) > 0)
            @foreach ($quotes as $quote)
                <div class="card mb-2 shadow-sm p-3 bg-white rounded">
                    <div class="card-body">
                        <p class="card-text">{{ $quote->message }}</p>
                        <h6 class="card-title">{{ $quote->author }}</h6>
                        <a href="#" class="card-link">Ver perfil de {{ $quote->user->name }}</a>
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-warning" role="alert">
                ¡No hay citas para mostrar!
            </div>
        @endif

        {{ $quotes->links() }}
    </div>
@endsection
