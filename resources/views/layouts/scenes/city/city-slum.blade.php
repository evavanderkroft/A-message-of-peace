@extends('layouts')

@section('content')
    <main class="index">
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer layer-1-slum z-10" data-depth="0.70" style="">
                    <div class="background-slum-1" id="sky">
                    </div>
                </li>
                <li class="layer layer-2-slum z-20" data-depth="0.60" data-depth-y="0.10" style="">
                    <div class="background-slum-2">
                    </div>
                </li>
                <li class="layer-info z-30" data-depth="0.60" data-depth-y="0.10">
                    <div id="popup-button1" class="infobutton popup-button" style="bottom:40vh; left:50vw;">
                    </div>

                    <div id="popup-button2" class="infobutton popup-button" style="bottom:44vh; left:14vw;">
                    </div>
                </li>
                <li class="layer-content z-50" data-depth="0">
                    <div class="box-title">
                        <p class="subtext">You are at the:</p>
                        <h1 class="title">slum</h1>
                    </div>
                    <div class="arrow_container" style="bottom:10vh; left:20vw;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter">
                            <a href="{{ route('city-entrance') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform: rotate(260deg); transform-origin: 50% 50%;"/>
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
                                <source src="videos/slum.mp4" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>

                            <h1 class="text-title">homeless people</h1>
                            <p>In the bigger cities and towns, there is also a lot of
                                poverty. Over 40% of the people in Uganda live with less
                                than $1.90 a day. 62% of this amount of money is spent
                                on food, to keep people alive. Although there is still
                                a lot of poverty in Uganda, it is slowly decreasing
                                in relation to a few years back. Uganda’s National Development
                                Plan (NDP) aims to lift the country into middle-income status.
                                Uganda’s current developments focusses trade, tourism and
                                infrastructure development.
                            </p>
                        </div>
                    </div>

                    <div id="popup-modal2" class="popup-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span id="popup-close2" class="close" onclick="quitVideo()">&times;</span>

                            <h1 class="text-title">homeless children</h1>
                            <p>There are at least 15,000 homeless children between 7 and 17,
                                and a lot of these are victims of child traffickers who steal
                                them from their villages. These traffickers want the kids to
                                beg people into giving money, which the kids then have to give
                                to the traffickers. The homeless children in Uganda often
                                experience violence, and physical and sexual abuse. This
                                violence is mostly caused by the authorities, rather than
                                others on the streets. Police use a lot of
                                violence against these children because they think the children
                                stole and begged for money. The children get threatened, beaten
                                and often have to give their money so they won’t receive any
                                further punishment.
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

@endsection
