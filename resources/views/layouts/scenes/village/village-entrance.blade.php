@extends('layouts')

@section('content')
    <main class="index overflow-hidden  m-0 ">
        @include ('layouts.partials.header')
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                {{--<li class="layer layer-1 z-10" data-depth="0.90" data-depth-y="0.20" style="">
                    <div class="background-layer-1">
                    </div>
                    <div class="arrow_container" style="top:35%; right:28%;" >
                        <svg height="120" width="120" style="transform:rotate(10deg)">
                            <a href="{{ route('village-waterwell') }}" >
                                <polygon class="arrow" points=" 45,5 85,95 45,75 5,95"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the Waterwell</p>
                        </div>
                    </div>
                    <div class="arrow_container" style="top:50%; left:45%;" >
                        <svg height="120" width="120" style="transform:rotate(180deg)">
                            <a href="{{ route('main-road') }}" >
                                <polygon class="arrow" points=" 45,5 85,95 45,75 5,95"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go back to the Main Road</p>
                        </div>
                    </div>
                </li>
                <li class="layer layer-2 z-0" data-depth="0.10" style="">
                    <img src="{{ asset('/images/sky.jpg') }}" alt="">
                    <div class="background-layer-2">

                    </div>
                </li>--}}
                <li class="layer layer-1-village z-10" data-depth="0.70" style="">
                    <div class="background-village-" id="sky">
                    </div>


                </li>
                <li class="layer layer-2-village z-20" data-depth="0.60" data-depth-y="0.10" style="">
                    <div class="background-village-2">

                    </div>
                </li>
                <li class="layer layer-3-village z-30" data-depth="0.50" data-depth-y="0.20"  style="">
                    <div class="background-village-3">

                    </div>
                </li>
                <li class="layer layer-nav z-40" data-depth="0.60" data-depth-y="0.10">
                    <div class="arrow_container" style="top:50vh; right:40vw;" >
                        <svg viewBox="0 0 120 120" height="60px" width="60px" style="transform:rotate(10deg)">
                            <a href="{{ route('village-waterwell') }}" >
                                <polygon  class="arrow" points=" 45,5 85,95 45,75 5,95" />
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the Waterwell</p>
                        </div>
                    </div>
                    <div class="arrow_container" style="bottom:10vh; left:50vw;" >
                        <svg viewBox="0 0 120 120" height="60px" width="60px" style="transform:rotate(180deg)">
                            <a href="{{ route('main-road') }}" >
                                <polygon class="arrow" points=" 45,5 85,95 45,75 5,95"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go back to the Main Road</p>
                        </div>
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
