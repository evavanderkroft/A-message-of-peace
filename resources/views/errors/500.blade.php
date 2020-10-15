@extends ('layouts')
@section('pageTitle', 'error?')

@section ('content')

    {{--header--}}
    @include ('layouts.partials.header')
    <main>
        <div class="error">
            <div class="error-title">
                <div>
                    <h2>Something went kaput</h2>
                    <p class="error-code">500 error</p>
                    <p class="error-message">I couldn't find your page! please feel free to return to the <a href="/">front page</a>. I am very sorry for any inconvenience.</p>
                </div>
            </div>
        </div>
    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')

@endsection
