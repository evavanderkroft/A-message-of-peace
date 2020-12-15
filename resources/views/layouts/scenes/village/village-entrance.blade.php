@extends('layouts')

@section('content')
    <main class="index overflow-hidden  m-0 ">
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
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
                <li class="layer layer-4-mainroad z-40" data-depth="0"style="">
                    @include ('layouts.partials.header')
                </li>
            </div>
        </section>
        <div class="box-title z-40" style="bottom:100vh;">
            <p class="subtext">You are at the:</p>
            <h1 class="title">village</h1>
        </div>
        <div class="arrow_container" style="top:60vh; right:40vw;" >
            <svg viewBox="0 0 120 120" height="70px" width="70px" class="test filter">
                <a href="{{ route('village-waterwell') }}" >
                    <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                             style="transform:rotate(10deg); transform-origin: 50%50%;"/>
                </a>
            </svg>
            <div class="arrow_text">
                <p>Go to the Waterwell</p>
            </div>
        </div>
        <div class="arrow_container" style="top:65vh; left:20vw;" >
            <svg viewBox="0 0 120 120" height="70px" width="70px" class="test filter">
                <a href="{{ route('village-farm') }}" >
                    <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                             style="transform:rotate(280deg); transform-origin: 50% 50%;" />
                </a>
            </svg>
            <div class="arrow_text">
                <p>Go to the Farm</p>
            </div>
        </div>
        <div class="arrow_container" style="top:65vh; left:90vw;" >
            <svg viewBox="0 0 120 120" height="70px" width="70px" class="test filter">
                <a href="{{ route('village-school') }}" >
                    <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                             style="transform:rotate(0deg); transform-origin: 50% 50%;" />
                </a>
            </svg>
            <div class="arrow_text">
                <p>Go to the School</p>
            </div>
        </div>
        <div class="arrow_container" style="bottom:10vh; left:50vw;" >
            <svg viewBox="0 0 120 120" height="70px" width="70px" class="test filter" >
                <a href="{{ route('main-road') }}" >
                    <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                             style="transform:rotate(180deg); transform-origin: 50% 50%;" />
                </a>
            </svg>
            <div class="arrow_text">
                <p>Go back to the Main Road</p>
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
