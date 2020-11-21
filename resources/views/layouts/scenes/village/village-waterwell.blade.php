@extends('layouts')

@section('content')
    <main class="index overflow-hidden m-0 ">
        @include ('layouts.partials.header')
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                {{--<li class="layer layer-1-waterwell" data-depth="0.90">

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
                    --}}{{--                    Onclick zorgt ervoor dat je de popup display block of none--}}{{--
                    <div class="infobutton" id="myBtn" style="top:35%; left:60%;" onclick="">
                    </div>
--}}{{--                    <button class="infobutton" id="myBtn"></button>--}}{{--
                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>


                            <video id="video">
                                <source src="videos/1.mp4" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>

                            <div class="content">
                                <button id="pauseBtn" class="myBtn" onclick="pauseVideo()">Play</button>
                                <button id="muteBtn" class="myBtn" onclick="muteVideo()">Unmute</button>
                            </div>
                            <h1 class="text-title">Water Well problems </h1>
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
                    </div>

                </li>--}}
                <li class="layer layer-1-waterwell z-10" data-depth="0.70" style="">
                    <div class="background-waterwell-2" id="sky">
                    </div>


                </li>
                <li class="layer layer-2-waterwell z-20" data-depth="0.60" data-depth-y="0.10" style="">
                    <div class="background-waterwell-2">

                    </div>
                </li>
                <li class="layer layer-nav z-40" data-depth="0.60" data-depth-y="0.10">
                    <div class="arrow_container" style="bottom:20vh; left:7vw;" >
                        <svg viewBox="0 0 120 120" height="60px" width="60px" style="transform:rotate(270deg)">
                            <a href="{{ route('village-entrance') }}" >
                                <polygon class="arrow" points=" 45,5 85,95 45,75 5,95"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go back to the Village</p>
                        </div>
                    </div>
                    {{--                    Onclick zorgt ervoor dat je de popup display block of none--}}
                    <div class="infobutton" id="myBtn" style="bottom:0vh; left:38vw;">
                    </div>
                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close" onclick="">&times;</span>


                            <video id="video">
                                <source src="videos/2.mp4" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>

                            <div class="content">
                                <button id="pauseBtn" class="myBtn" onclick="pauseVideo()">Play</button>
                                <button id="muteBtn" class="myBtn" onclick="muteVideo()">Unmute</button>
                            </div>
                            <h1 class="text-title">Water Well problems </h1>
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


        let video = document.getElementById("video");
        let buttontoggle = document.getElementById("button-toggle");
        let pausebtn = document.getElementById("pauseBtn");
        let mutebtn = document.getElementById("muteBtn");

        let toggle = document.getElementById("video-toggle");

        function showVideo() {
            if (toggle.style.display === "none") {
                toggle.style.display = "block";
                buttontoggle.style.display = "none";
            } else {
                toggle.style.display = "none";
                buttontoggle.style.display = "block";
            }
        }

        function quitVideo() {

            video.pause();
            mutebtn.innerHTML = "Unmute";
            toggle.style.display = "none";
            buttontoggle.style.display = "block";
            pausebtn.innerHTML = "Play";
        }

        function pauseVideo() {
            if (video.paused) {
                video.play();
                pausebtn.innerHTML = "Pause";
            } else {
                video.pause();
                pausebtn.innerHTML = "Play";
            }
        }

        function muteVideo() {
            video.muted = !video.muted
            if (video.muted) {
                mutebtn.innerHTML = "Unmute";
            } else {
                mutebtn.innerHTML = "Mute";
            }
        }


    </script>

@endsection
