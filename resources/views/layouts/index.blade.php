@extends('layouts')


@section('content')

    <main class="index" id="transition">

        @include ('layouts.partials.header')

        <section class="container mx-auto text-intro flex justify-center">
            <div class="vlak">
                <h1 class="text-title">a message of peace</h1>
                <h2>A Message of Peace is an interactive experience demonstrating the social inequalities in Uganda.
                    <br>
                    A Message of Peace is a sequel to the humanitarian documentary <a class="hover:text-blue-400 underline" href="https://www.meetthesoldier.com">Meet the Soldier</a>.
                    <br>
                    The purpose of A Message of Peace is both to raise awareness and to educate those who interact with the experience.
                </h2>

                <a class="button" href="{{route('intro.transition')}}">start</a>
            </div>
        </section>


    </main>
    <script>

    </script>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection
