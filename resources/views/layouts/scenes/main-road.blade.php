@extends('layouts')

@section('content')
    <main class="index overflow-hidden  m-0 ">
        @include ('layouts.partials.header')
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer layer-1 z-10" data-depth="0.90" data-depth-y="0.20" style="">
                    <div class="background-layer-1">
                    </div>
{{--                    Onclick zorgt ervoor dat je de popup display block of none--}}
                    <div class="infobutton" style="top:35%; left:60%;" onclick="">
                    </div>

                    <div class="arrow_container" style="top:35%; left:10%;" >
                        <svg height="120" width="120" style="transform:rotate(280deg)">
                            <a href="{{ route('city-entrance') }}" >
                                <polygon class="arrow" points=" 45,5 85,95 45,75 5,95"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the City</p>
                        </div>
                    </div>
                    <div class="arrow_container" style="top:35%; right:10%;" >
                        <svg height="120" width="120" style="transform:rotate(80deg)">
                            <a href="{{ route('village-entrance') }}" >
                                <polygon class="arrow" points=" 45,5 85,95 45,75 5,95"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the Village</p>
                        </div>
                    </div>
                </li>
                <li class="layer layer-2 z-0" data-depth="0.10" style="">
                    <img src="{{ asset('/images/sky.jpg') }}" alt="">
                    <div class="background-layer-2">

                    </div>
                </li>
                <li class="layer layer-3 z-20"  data-depth="0.60" data-depth-y="0.30" style="height:48%">
                    <div class="background-layer-3">
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
