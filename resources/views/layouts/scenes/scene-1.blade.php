@extends('layouts')

@section('content')
    <main class="m-0">
        @include ('layouts.partials.header')
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer scene1-layer-1 z-10" data-depth="0.90" data-depth-y="0.20" style="">
                    <div class="scene1-background-layer-1">
                    </div>
                    <a class="z-50 text-gray-500 absolute button-left arrow" href="{{ url('/') }}"></a>
                    <a class="z-50 text-gray-500 absolute button-right arrow" href="{{ url('/') }}"></a>

                </li>
                <li class="layer scene1-layer-2 z-0" data-depth="0.10" style="">
                    <img src="{{ asset('/images/sky.jpg') }}" alt="">
                    <div class="scene1-background-layer-2">

                    </div>
                </li>
                <li class="layer scene1-layer-3 z-20" data-depth="0.60" data-depth-y="0.30" style="">
                    <div class="scene1-background-layer-3">

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
