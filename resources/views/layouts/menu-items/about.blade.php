@extends('layouts')

@section('content')
    @include ('layouts.partials.header')

    <div class="about-title">
        <h1>about us</h1>
    </div>

    <div class="about-section hack-the-planet">
        <h1>about <a href="https://hack-the-planet.io/">hack the planet</a></h1>
        <p>We change the game by solving global challenges using pragmatic hands-on engineering.</p>
        <p>Many courageous organisations are taking on major humanitarian and
            sustainability challenges. Hack The Planet offers these organisations
            new perspectives on challenges, accelerating their efforts by creating
            and implementing smart and pragmatic technologies in collaborative projects.</p>
    </div>

    <div class="about-section Q42">
        <h1>powered by <a href="https://www.q42.nl/en">q42</a></h1>
        <p>Hack the Planet is a department within Q42, a strategic technology agency
            based in the Netherlands. Or as we like to say: we’re 80 nerds who like to
            make things with impact. Things that make people smile. With the support
            and extensive knowledge and experience of Q42, Hack the Planet can take on important
            global challenges and battle them with pragmatic tech.</p>
    </div>

    <div class="about-section contact">
        <h1>contact us at:</h1>
        <div class="contact-logos">
            <a href="https://twitter.com/h4ck_the_planet">
                <img src="https://hack-the-planet.io/wp-content/uploads/2019/07/twitter-300x300.png" alt="Twitter">
            </a>
            <a href="https://hack-the-planet.io/">
                <img src="https://hack-the-planet.io/wp-content/uploads/2019/09/cropped-LogoFourthWebsite-1.png" alt="Hack the Planet">
            </a>
        </div>
    </div>

@endsection
