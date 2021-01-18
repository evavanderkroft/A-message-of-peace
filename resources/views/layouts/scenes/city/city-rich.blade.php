@extends('layouts')

@section('content')
    <main class="index overflow-hidden  m-0 ">
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer layer-1-city-rich z-10" data-depth="0.90" data-depth-y="0.20" style="">
                    <div class="background-city-rich-1" id="sky">
                    </div>
                </li>
                <li class="layer layer-2-city-rich z-10" data-depth="0.10" style="">
                    <div class="background-city-rich-2">
                    </div>
                </li>
                <li class="layer-info z-30" data-depth="0.10">
                    <div id="popup-button1" class="infobutton popup-button" style="bottom:26vh; left:25vw;">
                    </div>

                    <div id="popup-button2" class="infobutton popup-button" style="bottom:26vh; left:76vw;">
                    </div>
                </li>
                <li class="layer-content z-40"  data-depth="0">
                    <div class="box-title">
                        <p class="subtext">You are at the:</p>
                        <h1 class="title">rich</h1>
                    </div>
                    <div class="arrow_container" style="bottom:5vh; left:50vw;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter" >
                            <a href="{{ route('city-entrance') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform: rotate(180deg); transform-origin: 50% 50%;"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go back to the City</p>
                        </div>
                    </div>

                    <div id="popup-modal1"  class="popup-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span id="popup-close1" class="close" onclick="quitVideo()">&times;</span>
                            <video controls controlsList="nodownload" disablePictureInPicture id="video">
                                <source src="videos/city.mp4" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                            <h1 class="text-title">rich people</h1>
                            <p>The bigger cities in Uganda are home to the more wealthy
                                citizens. Their cities are a lot better developed and
                                offer better homes and a more luxurious life in comparison to the villages. Banking options are also mainly available in urban areas, there are just about 5 million
                                bank accounts for a population of just over 40 million.
                                Public investment for bigger cities also favors the rich,
                                such as construction of modern hospitals, something the
                                poor could never make use of.
                            </p>
                        </div>
                    </div>

                    <div id="popup-modal2" class="popup-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span id="popup-close2" class="close" onclick="quitVideo()">&times;</span>

                            <h1 class="text-title">store</h1>
                            <p>In bigger cities in Uganda there is a blend of two different
                                shopping worlds. You have the traditional markets where people
                                have shopped for hundreds of years and you have the new, modern
                                shopping centers where you find everything from designer clothing
                                to high-tech gadgets. This is mostly in the bigger towns and cities;
                                in the smaller towns the rural markets still rule. These rural markets often
                                sell crops made on their own land. There is a lot of competition
                                between sellers, because for example neighbours sell the same crops.
                                This causes a lack of trade and results in a weak economy in these rural areas.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="layer z-50" data-depth="0" style="">
                    @include ('layouts.partials.header')
                </li>
            </div>
        </section>
    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')


    <script type="text/javascript">
        var body = document.body;

        body.classList.add("overflow-hidden");

        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }
    </script>

@endsection
