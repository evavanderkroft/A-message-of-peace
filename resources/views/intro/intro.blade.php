@extends('layouts')
{{--<link rel="stylesheet" href="{{URL::asset('css/intro.css')}}" />--}}

@section('content')
    <main class="index">
        @include ('layouts.partials.header')
        <section class="container mx-auto px-4 pt-16">
            <h1>A Message of Peace</h1>
            <h2>A Message of Peace is an interactive experience demonstrating the social inequalities in Uganda.
                A Message of Peace is a sequel to the humanitarian documentary Meet the Soldier (, showcasing the reunification of two tribes and their leaders through VR.)
                The purpose of A Message of Peace is both to raise awareness and to educate those who interact with the experience.
            </h2>
            <a class="bg-blue-500 hover:bg-blue-700 rounded pl-5 pr-5 pt-2 pd-2 text-center" href="{{route('intro.transition')}}">start</a>

        </section>
    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection
