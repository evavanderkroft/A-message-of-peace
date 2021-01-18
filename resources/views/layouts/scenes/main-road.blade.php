@extends('layouts')

@section('content')
    <main class="index overflow-hidden m-0 ">

        <section class=""style="z-index: 1">
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
                <li class="layer-info z-30" data-depth="0.40">
                    <div id="popup-button1" class="infobutton popup-button" style="bottom:34vh; left:55vw;">
                    </div>
                </li>
                <li class="layer-content z-50 " data-depth="0"style="">
                    <div class="box-title">
                        <p class="subtext">You are at the:</p>
                        <h1 class="title">main road</h1>
                    </div>
                    <div class="arrow_container" style="top:75vh; left:15%;">
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter">
                            <a href="{{ route('city-entrance') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform: rotate(280deg); transform-origin: center; margin:10px;"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the City</p>
                        </div>
                    </div>
                    <div class="arrow_container" style="top:75vh; right:15%;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter" >
                            <a href="{{ route('village-entrance') }}">
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform: rotate(80deg); transform-origin: 50% 50%;"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the Village</p>
                        </div>
                    </div>

                    <div id="popup-modal1"  class="popup-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span id="popup-close1" class="close" onclick="quitVideo()">&times;</span>

                            <h1 class="text-title">the roads </h1>
                            <p>Uganda’s current investment plan contains investing in
                                the improvement of the roads and infrastructure. This
                                would undoubtedly benefit travel
                                and trade between cities and villages, as currently many
                                roads are unsuited for traveling with vehicles or carts
                                and transporting goods. But the cost for these improvements
                                are put on the poor citizens in Uganda.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="layer layer-4-mainroad z-50" data-depth="0"style="">
                    @include ('layouts.partials.header')
                </li>
            </div>
        </section>
    </main>
    @include ('layouts.partials.footer')
    <script type="text/javascript">
        var body = document.body;

        body.classList.add("overflow-hidden");

        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }
    </script>

@endsection
