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

            <a class="button" href="{{route('intro.transition')}}">start</a>

        </section>


    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection
</body>
