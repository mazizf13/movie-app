@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        {{-- Popular Shows Start --}}
        <div class="popular-tv">
            <h2 class="uppercase tracking-wider text-orange-500 font-semibold">
                Popular Shows
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow" />
                @endforeach
            </div>
        </div>
        {{-- Popular Shows End --}}
    
        {{-- Now Playing Start --}}
        <div class="popular-tv">
            <h2 class="uppercase tracking-wider text-orange-500 font-semibold">
                Top Rated Shows
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($topRatedTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow" />
                @endforeach
            </div>
        </div>
    </div>
    {{-- Now Playing End --}}
@endsection