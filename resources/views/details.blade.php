@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <img width="500" src="/img/tuyen-vo-B2wLLcFi4Z0-unsplash.jpg" alt="">
            <div class="title">
                pizza --{{ $id }}
            </div>
        </div>
        <section>
        </section>
    </div>
@endsection
