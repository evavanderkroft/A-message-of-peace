@extends('layouts')

@section('content')
    <main class="index overflow-hidden  m-0 ">
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer layer-1-city-school z-10" data-depth="0.90" data-depth-y="0.20" style="">
                    <div class="background-city-school-1" id="sky">
                    </div>
                </li>
                <li class="layer layer-2-city-school z-10" data-depth="0.10" style="">
                    <div class="background-city-school-2">
                    </div>
                </li>
                <li class="layer-info z-30" data-depth="0.10">
                    <div id="popup-button1" class="infobutton popup-button" style="bottom:25vh; left:38vw;">
                    </div>

                    <div id="popup-button2" class="infobutton popup-button" style="bottom:44vh; left:18vw;">
                    </div>
                </li>
                <li class="layer-content z-50"  data-depth="0">
                    <div class="box-title">
                        <p class="subtext">You are at the:</p>
                        <h1 class="title">school</h1>
                    </div>
                    <div class="arrow_container" style="bottom:5vh; left:75vw;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter" >
                            <a href="{{ route('city-entrance') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform: rotate(90deg); transform-origin: 50% 50%;"/>
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

                            <h1 class="text-title">the school</h1>
                            <p>There is quite a big difference between city schools
                                and rural schools. The schools in these urban areas
                                have a higher probability of marketing their schools
                                and therefore receiving more students. It is often
                                well centered in the city, which makes it more accessible for students.
                                These schools are mostly privately owned, which makes
                                it easy to run by the owner if any mistakes are made.
                                This is because if these mistakes are made, the owner is
                                messing with his or her own life or business savings.
                            </p>
                        </div>
                    </div>

                    <div id="popup-modal2" class="popup-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span id="popup-close2" class="close" onclick="quitVideo()">&times;</span>
                            <video controls controlsList="nodownload" disablePictureInPicture id="video">
                                <source src="videos/school-city.mp4" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                            <h1 class="text-title">the student</h1>
                            <p>Not only are there more students going to school
                                in the city, the students from city schools often
                                seem to be the students passing exams. They are
                                normally high performers
                                because these regions offer better accommodations
                                and more well paid and educated teachers who can easily
                                meet the needs of the children. Students in city schools
                                are often more well educated and see school as important.
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
