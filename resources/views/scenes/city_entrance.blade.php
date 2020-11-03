@extends('layouts')

@section('content')
    <main class="index">
        @include ('layouts.partials.header')
        <section class="container mx-auto px-4 pt-16">
            <h1>City Entrance</h1>
        </section>
        <div class="image">
            <div id="video-toggle" style="display: none">
                @include('layouts.videos.css')

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
            @include('layouts.videos.js')
        </div>
    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection
