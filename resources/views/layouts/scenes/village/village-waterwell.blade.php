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
                            <a href="{{ route('village-entrance') }}" >
                                <polygon class="arrow" points=" 45,5 85,95 45,75 5,95"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go back to the Village</p>
                        </div>
                    </div>
                    <div class="button-blue" onclick="showPopup()">
                    </div>
                    <div id="popup" class="popup">

                        <h1></h1>
                        <p>Ugandan citizens often do not have access to running water.
                            More than 21 million people in Uganda still don’t have clean
                            water, that’s about half of the population. The water that
                            is available in Uganda like open waters and swamplands,
                            are undrinkable. In villages it is very uncommon for people
                            to have access to water in their own home. This results in
                            them needing to get the water from water wells, far away
                            from their hometown. This water is free but it takes a long
                            time and a lot of effort for the people to get their water
                            from a water well. Another way to get water is to buy it at
                            a water vendor. These are people who sell water in bottles
                            or in jerry cans, but you have to pay money for it, this
                            makes this option too expensive for a lot of Ugandan citizens. </p>
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
