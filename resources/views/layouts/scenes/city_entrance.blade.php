@extends('layouts')

@section('content')
    <main class="index">
        @include ('layouts.partials.header')
        <section class="container mx-auto px-4 pt-16">
            <h1>City Entrance</h1>
        </section>
        <div class="image">
            <div id="video-toggle" style="display: none">

                <video id="video" poster autoplay loop>
                    <source src="videos/1.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>

                <div class="content">
                    <h1>At the Market</h1><br>
                    <button id="pauseBtn" class="myBtn" onclick="pauseVideo()">Play</button>
                    <button id="muteBtn" class="myBtn" onclick="muteVideo()">Unmute</button>
                    <button id="showVideoBtn" class="myBtn" onclick="quitVideo()">X</button>
                </div>

            </div>
            <div id="button-toggle" style="display: block">
                <button id="showVideoBtn" style="display: block" class="buttoncircle" onclick="showVideo()"></button>
                <button id="backBtn" class="backbtn" onclick="goBack()">Back</button>
            </div>
        </div>
    </main>
    {{--footer--}}
    <script>
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

        function goBack() {
            history.back()
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
    @include ('layouts.partials.footer')

@endsection
