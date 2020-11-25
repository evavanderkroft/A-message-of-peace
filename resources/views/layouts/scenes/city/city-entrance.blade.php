@extends('layouts')

@section('content')
    <main class="m-0">
        @include ('layouts.partials.header')
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
                <li class="layer layer-nav z-40" data-depth="0.60" data-depth-y="0.10">
                    <div class="arrow_container" style="bottom:20%; left:45%;" >
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
