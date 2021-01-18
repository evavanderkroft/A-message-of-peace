@extends('layouts')

@section('content')
    <main class="index overflow-hidden  m-0 ">
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer layer-1-village z-10" data-depth="0.70" style="">
                    <div class="background-village-1" id="sky">
                        <div class="container-bird">
                            <div class="bird-container bird-container--one">
                                <div class="bird bird--one"></div>
                            </div>

                            <div class="bird-container bird-container--two">
                                <div class="bird bird--two"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="layer layer-2-village z-20" data-depth="0.60" data-depth-y="0.10" style="">
                    <div class="background-village-2">

                    </div>
                </li>
                <li class="layer layer-3-village z-30" data-depth="0.50" data-depth-y="0.20"  style="">
                    <div class="background-village-3">

                    </div>
                </li>
                <li class="layer-info z-40" data-depth="0.60" data-depth-y="0.10">
                    <div id="popup-button1" class="infobutton popup-button" style="bottom:50vh; left:45vw;">
                    </div>

                    <div id="popup-button2" class="infobutton popup-button" style="bottom:45vh; left:25vw;">
                    </div>

                    <div id="popup-button3" class="infobutton popup-button" style="bottom:45vh; left:65vw;">
                    </div>

                    <div id="popup-button5" class="infobutton popup-button" style="bottom:55vh; left:30vw;">
                    </div>

                    <div id="popup-button4" class="infobutton popup-button" style="bottom:45vh; left:40vw;">
                    </div>
                </li>
                <li class="layer layer-content z-50" data-depth="0">
                    <div class="box-title z-40">
                        <p class="subtext">You are at the:</p>
                        <h1 class="title">village</h1>
                    </div>
                    <div class="arrow_container" style="top:50vh; right:43vw;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter">
                            <a href="{{ route('village-waterwell') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                          style="transform:rotate(10deg); transform-origin: 50%50%;"/>
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the Waterwell</p>
                        </div>
                    </div>
                    <div class="arrow_container" style="top:58vh; left:20vw;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter">
                            <a href="{{ route('village-farm') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform:rotate(280deg); transform-origin: 50% 50%;" />
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the Farm</p>
                        </div>
                    </div>
                    <div class="arrow_container" style="top:50vh; left:85vw;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter">
                            <a href="{{ route('village-school') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform:rotate(0deg); transform-origin: 50% 50%;" />
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go to the School</p>
                        </div>
                    </div>
                    <div class="arrow_container" style="bottom:10vh; left:50vw;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter" >
                            <a href="{{ route('main-road') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform:rotate(180deg); transform-origin: 50% 50%;" />
                            </a>
                        </svg>
                        <div class="arrow_text">
                            <p>Go back to the Main Road</p>
                        </div>
                    </div>
                    <div id="popup-modal1"  class="popup-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span id="popup-close1" class="close" onclick="quitVideo()">&times;</span>

                            <h1 class="text-title">houses and huts</h1>
                            <p>The huts in the villages of Uganda are often made of mud with a
                                roof made of straw. These huts are often filled with a whole family.
                                Inside these huts there are no beds and no proper availability of
                                sanitation. Also, the villages are often crowded with people from one tribe.
                            </p>
                        </div>
                    </div>

                    <div id="popup-modal2" class="popup-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span id="popup-close2" class="close" onclick="quitVideo()">&times;</span>

                            <h1 class="text-title">mother</h1>
                            <p>Women in Uganda are often seen as the opperior person. Women in
                                Uganda often have to do the chores like cooking, washing, taking
                                care of the children and getting the water from the water well.
                                Young girls are forced into early marriages, placing them and their
                                children at risk of dying in childbirth and increasing their chances
                                of living in poverty. Also, there is a lot of violence against women
                                in Uganda, which is a major obstacle if we look at empowerment, for
                                this is often caused because women in are seen as lower than men. On
                                the other hand, looking at rural work, almost as many women as men
                                are paid for their work. </p>
                        </div>
                    </div>

                    <div id="popup-modal3"  class="popup-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span id="popup-close3" class="close" onclick="quitVideo()">&times;</span>

                            <h1 class="text-title">father</h1>
                            <p>It is not unusual for men and fathers to be uninvolved in the household
                                and the caretaking of the children. Care International Uganda is an
                                organisation which set up the project The Role Model Men and Boys (RMMB).
                                RMMB focuses on helping men and boys reflect upon unequal power relations,
                                gender roles and rigid social
                                norms that impact on the behaviour of all genders. Because of this project,
                                men are encouraged to make a change in their own behaviour and thereby motivate
                                other men/fathers in their environment to do the same.
                            </p>
                        </div>
                    </div>


                    <div id="popup-modal4" class="popup-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span id="popup-close4" class="close" onclick="quitVideo()">&times;</span>

                            <h1 class="text-title">children</h1>
                            <p>Women in Uganda often get a lot of children. This is because of
                                the bad sexual education given on the schools in Uganda. In these
                                schools they often teach the students that condoms are not useful,
                                so a lot of people do not wear them. Some of the children in Uganda
                                go to schools in the village or in the bigger cities, but some of the children need to work for their parents.
                                34% of the children between 6 and 13 do not go to school and need
                                to work. 96% of the kids that need to work, work in the agricultural sector.
                                The remaining 4 percent of these kids work in mining and in service. </p>
                        </div>
                    </div>

                    <div id="popup-modal5"  class="popup-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span id="popup-close5" class="close" onclick="quitVideo()">&times;</span>

                            <h1 class="text-title">waste & litter</h1>
                            <p>A major problem in Ugandan villages is the poor sanitation.
                                The village streets are often very littered because of the
                                lack of public and private restrooms. There is not a lot of
                                education  taught about these sanitary issues and the dangers
                                of these poor conditions. Around 87% of
                                Uganda’s population does also not have access to clean water.
                                This causes more health problems for the villagers and attracts
                                animals. As a result, around 4,500 children in Uganda die every
                                year because of this.
                            </p>
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
