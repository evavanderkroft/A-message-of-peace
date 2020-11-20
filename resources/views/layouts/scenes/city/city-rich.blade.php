@extends('layouts')

@section('content')
    <main class="index overflow-hidden  m-0 ">
        @include ('layouts.partials.header')
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer layer-1 z-10" data-depth="0.90" data-depth-y="0.20" style="">
                    <div class="background-layer-1">
                    </div>
                    <div class="arrow_container" style="top:50%; left:45%;" >
                        <svg height="120" width="120" style="transform:rotate(180deg)">
                            <a href="{{ route('city-entrance') }}" >
                                <polygon class="arrow" points=" 45,5 85,95 45,75 5,95"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go back to the City</p>
                        </div>
                    </div>
                    <div class="button-blue" onclick="showPopup()">
                    </div>
                    <div id="popup" class="popup">

                        <h1>Wealth in the Cities</h1>
                        <p>The bigger cities in Uganda are home to the more wealthy citizens.
                            Their cities are a lot better developed and offer better homes and
                            a more luxurious life in comparison to the villages. Banking options
                            are also mainly available in urban areas, there are just about
                            5 million bank accounts for a population of just over 40 million.
                            Public investment for bigger cities also favors the rich,
                            such as construction of modern hospitals, something the poor
                            could never make use of. </p>
                    </div>
                </li>
                <li class="layer layer-2 z-0" data-depth="0.10" style="">
                    <img src="{{ asset('/images/sky.jpg') }}" alt="">
                    <div class="background-layer-2">

                    </div>
                </li>
            </div>
        </section>
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
