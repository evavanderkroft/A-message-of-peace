@extends('layouts')

@section('content')
    <main class="index">
        @include ('layouts.partials.header')
        <section class="container mx-auto px-4 pt-16">
            <h1>By going through the application you will follow the lives
                <br>
                of Ugandan citizens through their perspective and thereby
                <br>
                experiencing the issues of social inequality in Uganda.
            </h1>

        </section>
    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection
