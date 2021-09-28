@extends('layouts.anonim')

@section('content')

    <div class="container">
        <h2 class="text-capitalize mt-5 mb-4 text-white">Daftar cerita <hr color="white"></h2>
        <ul class="list-group list-group-flush mb-5">
            @forelse ($ceritas as $cerita)
                @if ($cerita -> status == 1)
                    <a href="/bacacerita/{{$cerita->id}}" class="text-decoration-none mt-2">
                        <li class="list-group-item text-white" style="background-color: #3b4442; font-size: 16px;">{{ $cerita->judul }}</li>
                    </a>                                
                @else
                    
                @endif
            @empty
                <div class="container text-center mt-5">
                    <span class="text-white">Empty State</span>
                </div>
            @endforelse
        </ul>
        {{ $ceritas->links() }}
    </div>

@endsection