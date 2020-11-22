@extends('layouts')

@section('content')
    <main class="m-0">
        @include ('layouts.partials.header')
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer scene1-layer-1 z-10" data-depth="0.90" data-depth-y="0.20" style="">
                    <div class="scene1-background-layer-1">
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
                <li class="layer scene1-layer-2 z-0" data-depth="0.10" style="">
                    <div class="scene1-background-layer-2">

                    </div>
                </li>
                <li class="layer scene1-layer-3 z-20" data-depth="0.60" data-depth-y="0.30" style="">
                    <div class="scene1-background-layer-3">

                    </div>
                </li>
                <li class="layer layer-1-city z-0" data-depth="0.90" data-depth-y="0.20" style="">
                    <div class="background-city-1" id="sky">
                    </div>
                </li>
                <li class="layer layer-2-city z-10" data-depth="0.40" style="">
                    <div class="background-city-2">
                    </div>
                </li>
                <li class="layer layer-3-city z-20"  data-depth="0.30" >
                    <div class="background-city-3">
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
