@extends('layouts')

@section('content')
    <main class="index">
        @include ('layouts.partials.header')
        <section class="container mx-auto px-4 pt-16">
            <h1>City Entrance</h1>
        </section>
        <div class="image">
            <div id="video-toggle" style="display: none">

                    </div>
                </li>
            </div>
        </section>
        <div class="box-title z-40">
            <p class="subtext">You are at the:</p>
            <h1 class="title">slum</h1>
        </div>
        <div class="arrow_container" style="top:70%; left:45%;" >
            <svg viewBox="0 0 120 120" height="70px" width="70px" class="test filter">
                <a href="{{ route('city-entrance') }}" >
                    <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                             style="transform: rotate(180deg); transform-origin: 50% 50%;"/>
                </a>
            </svg>
            <div class="arrow_text">
                <p>Go back to the City</p>
            </div>
        </div>
    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection
