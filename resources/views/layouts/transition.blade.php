@extends('layouts')

<body>
@section('content')
    <main class="index">
        @include ('layouts.partials.header')
        <section class=" container mx-auto text-intro vlak">
            <h1>By going through the application you will follow the lives</h1>
                <br>
            <h1> of Ugandan citizens through their perspective and thereby </h1>
                <br>
            <h1> experiencing the issues of social inequality in Uganda.</h1>
        </section>

        <div class="container">
            <a class="button" href="{{ route('main-road') }}">start</a>
        </div>

    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection
</body>


