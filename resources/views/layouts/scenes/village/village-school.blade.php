@extends('layouts')

@section('content')
    <main class="index overflow-hidden m-0 ">
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer layer-1-school z-10" data-depth="0.70" style="">
                    <div class="background-school-1" id="sky">
                    </div>
                </li>
                <li class="layer layer-2-school z-20" data-depth="0.60" data-depth-y="0.10" style="">
                    <div class="background-school-2">
                    </div>
                </li>
                <li class="layer-info z-30" data-depth="0.60" data-depth-y="0.10">
                    <div id="popup-button1" class="infobutton popup-button" style="bottom:47vh; left:40vw;">
                    </div>

                    <div id="popup-button2" class="infobutton popup-button" style="bottom:50vh; left:20vw;">
                    </div>
                </li>
                <li class="layer-content z-50"  data-depth="0">
                    <div class="box-title">
                        <p class="subtext">You are at the:</p>
                        <h1 class="title">school</h1>
                    </div>
                    <div class="arrow_container" style="bottom:10vh; left:50vw;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter" >
                            <a href="{{ route('village-entrance') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform: rotate(180deg); transform-origin: 50% 50%;"/>
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
                                <source src="videos/village-school.mp4" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>

                            <h1 class="text-title">the teacher</h1>
                            <p>Teachers in rural area schools are often underpaid or
                                not paid at all. This demotivates people from becoming
                                teachers. This in turn causes a great absence of teachers
                                in villages, as many simply choose not to take a teaching
                                job or have to work another job next to their teaching
                                one to make a living. Because of this it is not uncommon
                                to find classrooms without a teacher in these village schools.
                            </p>
                        </div>
                    </div>

                    <div id="popup-modal2" class="popup-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span id="popup-close2" class="close" onclick="quitVideo()">&times;</span>
                            <video controls controlsList="nodownload" disablePictureInPicture id="video">
                                <source src="videos/school-village2.mp4" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>

                            <h1 class="text-title">the student</h1>
                            <p>Not only are there a lot less opportunities for village
                                kids to go to school, due to there being less schools and
                                higher poverty rate in villages, they often also receive
                                worse education than children in cities. This is caused
                                by the tough conditions they have to study in and the
                                tough conditions their teachers go through. Children in
                                villages often have to travel quite far to get
                                to school and this already discourages many of them. Furthermore
                                schools in rural areas are often in bad condition, there
                                are often no toilets, no library and the grass thatched roofs
                                provide no protection from rain. </p>
                        </div>
                    </div>
                </li>
                <li class="layer z-50" data-depth="0"style="">
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
