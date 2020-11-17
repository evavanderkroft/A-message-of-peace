@extends('layouts')

<body>
@section('content')
    <main class="index">
        @include ('layouts.partials.header')
        <section class="container mx-auto text-intro vlak">
            <h1 class="text-title">a message of peace</h1>
            <h2>A Message of Peace is an interactive experience demonstrating the social inequalities in Uganda.
                <br>
                A Message of Peace is a sequel to the humanitarian documentary Meet the Soldier.
                <br>
                The purpose of A Message of Peace is both to raise awareness and to educate those who interact with the experience.
            </h2>
        </section>

        <div class="container">
            <a class="button" href="{{route('intro.transition')}}">start</a>
            <div class="infobutton" style="top:65%; left:50%;"></div>
            <div class="arrow_container" style="top:75%; left:50%;" >
                <svg height="120" width="120" style="transform:rotate(90deg)">
                    <polygon class="arrow" points=" 45,5 85,95 45,75 5,95"/>
                </svg>
                <div class="arrow_text">
                    <p>City entrance</p>
                </div>
            </div>
        </div>

    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection
</body>
