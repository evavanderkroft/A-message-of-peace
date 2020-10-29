@extends('layouts')

@section('content')
    <main class="index">
        @include ('layouts.partials.header')
        <section class="container mx-auto px-4 pt-16">
            <h1>Index</h1>
        </section>
    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection
