@extends('layouts')

@section('content')
    <main class="index overflow-hidden  m-0 ">
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer layer-1 z-10" data-depth="0.90" data-depth-y="0.20" style="">
                    <div class="background-layer-1">
                    </div>
                </li>
                <li class="layer layer-2 z-0" data-depth="0.10" style="">
                    <img src="{{ asset('/images/sky.jpg') }}" alt="">
                    <div class="background-layer-2">
                    </div>
                </li>
                <li class="layer layer-4-mainroad z-40" data-depth="0"style="">
                    @include ('layouts.partials.header')
                </li>
            </div>
        </section>
        <div class="box-title z-40" style="bottom: 100vh">
            <p class="subtext">You are at the:</p>
            <h1 class="title">school</h1>
        </div>
        <div class="arrow_container" style="top:50%; left:45%;" >
            <svg viewBox="0 0 120 120" height="70px" width="70px" class="test filter" >
                <a href="{{ route('city-entrance') }}" >
                    <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                             style="transform: rotate(80deg); transform-origin: 50% 50%;"/>
                </a>
            </svg>
            <div class="arrow_text">
                <p>Go back to the City</p>
            </div>
        </div>
    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')


    <script type="text/javascript">
        var body = document.body;

        body.classList.add("overflow-hidden");

        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }
    </script>

@endsection
