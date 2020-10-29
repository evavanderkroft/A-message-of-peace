@extends('layouts')

@section('content')
    <main class="index">
        @include ('layouts.partials.header')
        <section class="container mx-auto px-4 pt-16">
            <h1>Cit Entrance</h1>
        </section>
        @include('layouts.videos.css')

        <video poster autoplay muted loop id="myVideo">
            <source src="videos/1.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>

        <div class="content">
            <h1>Heading</h1>
            <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
            <button id="myBtn" onclick="myFunction()">Pause</button>
            <button id="myBtn" onclick="myFunction()">Mute</button>
        </div>

        @include('layouts.videos.js')
    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection
