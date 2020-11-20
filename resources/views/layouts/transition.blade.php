@extends('layouts')


@section('content')
    <main class="index" id="transition">
        @include ('layouts.partials.header')

        <section class="container mx-auto text-intro flex justify-center">
            <div class="vlak">
                <h1>By going through the application you will follow the lives</h1>
                    <br>
                <h1> of Ugandan citizens through their perspective and thereby </h1>
                    <br>
                <h1> experiencing the issues of social inequality in Uganda.</h1>
                <a class="button" href="{{ route('main-road') }}">start</a>
            </div>
        </section>


    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection



