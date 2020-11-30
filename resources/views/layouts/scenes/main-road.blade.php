@extends('layouts')

@section('content')
    <main class="index overflow-hidden m-0 ">
        @include ('layouts.partials.header')
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer layer-1-mainroad z-0" data-depth="0.90" data-depth-y="0.20" style="">
                    <div class="background-mainroad-1" id="sky">
                    </div>
                </li>
                <li class="layer layer-2-mainroad z-10" data-depth="0.40" style="">
                    <div class="background-mainroad-2">
                    </div>
                </li>
                <li class="layer layer-3-mainroad z-20"  data-depth="0.30" >
                    <div class="background-mainroad-3">
                    </div>
                </li>
                <li class="layer layer-nav z-40"  data-depth="0.10">
                    <div class="arrow_container" style="top:50vh; left:15%;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="test filter">
                            <a href="{{ route('city-entrance') }}" >
                                <polygon class="arrow" points=" 45,5 85,95 45,75 5,95"
                                         style="transform: rotate(280deg); transform-origin: 50% 50%;"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the City</p>
                        </div>
                    </div>
                    <div class="arrow_container" style="top:50vh; right:15%;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="test filter" >
                            <a href="{{ route('village-entrance') }}">
                                <polygon class="arrow" points=" 45,5 85,95 45,75 5,95"
                                         style="transform: rotate(80deg); transform-origin: 50% 50%;"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the Village</p>
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
