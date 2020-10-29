@extends('layouts')

@section('content')
    <main class="index">
        @include ('layouts.partials.header')
        <section class="container mx-auto px-4 pt-16">
            <div id="scene">
                <div data-depth="0.2">My first Layer!</div>
                <div data-depth="0.6">My second Layer!</div>
            </div>
        </section>
    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection
