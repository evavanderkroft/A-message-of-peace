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
                <li class="layer layer-nav z-40"  data-depth="0.10">
                    <div class="box-title z-40">
                        <p class="subtext">You are at the:</p>
                        <h1 class="title">slum</h1>
                    </div>
                    <div class="arrow_container" style="top:70%; left:45%;" >
                        <svg height="120" width="120" style="transform:rotate(180deg)">
                            <a href="{{ route('city-entrance') }}" >
                                <polygon class="arrow" points=" 45,5 85,95 45,75 5,95"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go back to the City</p>
                        </div>
                    </div>
                </li>
            </div>
        </section>
    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection
