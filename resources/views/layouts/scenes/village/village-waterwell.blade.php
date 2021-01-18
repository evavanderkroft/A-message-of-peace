@extends('layouts')

@section('content')
    <main class="index overflow-hidden m-0 ">
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer layer-1-waterwell z-10" data-depth="0.70" style="">
                    <div class="" id="sky">
                    </div>
                </li>
                <li class="layer layer-2-waterwell z-20" data-depth="0.60" data-depth-y="0.10" style="">
                    <div class="background-waterwell-2">
                    </div>
                </li>
                <li class="layer-info z-30" data-depth="0.60" data-depth-y="0.10">
                    <div id="popup-button1" class="infobutton popup-button" style="bottom:40vh; left:38vw;">
                    </div>
                    <div id="popup-button2" class="infobutton popup-button" style="bottom:40vh; left:30vw;">
                    </div>
                </li>
                <li class="layer-content z-50" data-depth="0" data-depth-y="0">
                    <div class="box-title">
                        <p class="subtext">You are at the:</p>
                        <h1 class="title">water well</h1>
                    </div>
                    <div class="arrow_container" style="bottom:20vh; left:7vw;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter" >
                            <a href="{{ route('village-entrance') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform:rotate(270deg); transform-origin: 50% 50%;"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go back to the Village</p>
                        </div>
                    </div>
                    <div id="popup-modal1"  class="popup-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span id="popup-close1" class="close" onclick="quitVideo()">&times;</span>
                            <video controls controlsList="nodownload" disablePictureInPicture id="video">
                                <source src="videos/2.mp4" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                            <h1 class="text-title">water well problems </h1>
                                <p>Ugandan citizens often do not have access to running water.
                                    More than 21 million people in Uganda still don’t have clean
                                    water, that’s about half of the population. The water that
                                    is available in Uganda like open waters and swamplands,
                                    are undrinkable. In villages it is very uncommon for people
                                    to have access to water in their own home. This results in
                                    them needing to get the water from water wells, far away
                                    from their hometown. This water is free but it takes a long
                                    time and a lot of effort for the people to get their water
                                    from a water well. Another way to get water is to buy it at
                                    a water vendor. These are people who sell water in bottles
                                    or in jerry cans, but you have to pay money for it, this
                                    makes this option too expensive for a lot of Ugandan citizens.
                                </p>
                        </div>
                    </div>
                    <div id="popup-modal2" class="popup-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span id="popup-close2" class="close" onclick="quitVideo()">&times;</span>

                            <h1 class="text-title">women's job</h1>
                                <p>Women are often the ones in charge of taking
                                    care of the household and making sure that
                                    there is an availability to water at home.
                                    If they do not have running water at home,
                                    this means that they have to get it elsewhere.
                                    Women often have to walk a long way to the
                                    water wells where they have to get the water
                                    and walk back to their villages. These women
                                    often carry this water in a jerry can on their
                                    heads. This is less heavy for the rest of their
                                    bodies rather than carrying it around in their
                                    arms. All this takes up a lot of time and this
                                    prevents these women from being able to have a
                                    paid job or do other services that can provide money.</p>
                        </div>
                    </div>
                </li>
                <li class="layer z-50" data-depth="0"style="">
                    @include ('layouts.partials.header')
                </li>
            </div>
        </section>
    </main>
    @include ('layouts.partials.footer')

    <script type="text/javascript">
        var body = document.body;

        body.classList.add("overflow-hidden");

        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }

    </script>
@endsection
