@extends('layouts')

@section('content')
    <main class="m-0">
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
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
                <li class="layer-content z-40"  data-depth="0">
                    <div class="box-title">
                        <p class="subtext">You are at the:</p>
                        <h1 class="title">city</h1>
                    </div>
                    <div class="arrow_container" style="bottom:20vh; right:10vw;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter" >
                            <a href="{{ route('city-slum') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform: rotate(80deg); transform-origin: 50% 50%;"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the Slum</p>
                        </div>
                    </div>
                    <div class="arrow_container" style="bottom:20vh; left:10vw;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter" >
                            <a href="{{ route('city-rich') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform: rotate(280deg); transform-origin: 50% 50%;"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the Rich</p>
                        </div>
                    </div>
                    <div class="arrow_container" style="bottom:20vh; right:25vw;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter" >
                            <a href="{{ route('city-school') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform: rotate(0deg); transform-origin: 50% 50%;"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the School</p>
                        </div>
                    </div>
                    <div class="arrow_container" style="bottom:5%; left:45%;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter" >
                            <a href="{{ route('main-road') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform: rotate(180deg); transform-origin: 50% 50%;"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go back to the Main Road</p>
                        </div>
                    </div>
                </li>
                <li class="layer layer-4-mainroad z-50" data-depth="0"style="">
                    @include ('layouts.partials.header')
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
