@extends('layouts')

@section('content')
    <main class="index overflow-hidden  m-0 ">
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer layer-1-farm z-10" data-depth="0.70" style="">
                    <div class="background-farm-1" id="sky">
                    </div>
                </li>
                <li class="layer layer-2-farm z-20" data-depth="0.60" data-depth-y="0.10" style="">
                    <div class="background-farm-2">
                    </div>
                </li>
                <li class="layer-info z-30" data-depth="0.60" data-depth-y="0.10">
                    <div id="popup-button1" class="infobutton popup-button" style="bottom:43vh; left:59vw;">
                    </div>


                </li>
                <li class="layer-content z-50"  data-depth="">
                    <div class="box-title">
                        <p class="subtext">You are at the:</p>
                        <h1 class="title">farm</h1>
                    </div>
                    <div class="arrow_container" style="bottom:14vh; left:20vw;" >
                        <svg viewBox="0 0 120 120" height="70px" width="70px" class="svg_arrow filter">
                            <a href="{{ route('village-entrance') }}" >
                                <polygon class="arrow" points="55,15 95,105 55,85 15,105"
                                         style="transform: rotate(260deg); transform-origin: 50% 50%;"/>
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
                                <source src="videos/farm.mp4" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                            <h1 class="text-title">the farmers </h1>
                            <p>There are many villages in Uganda, often reproducing coffee,
                                tea, cotton, tobacco and cocoa. Besides that, many farmers
                                also reproduce cassava, maize, fresh flowers, vanilla,
                                asparagus and medicinal plants. About 70 percent of the
                                workforce in Uganda are farmers of any kind. Also, this
                                sector is dominated by smallholder farming. Besides crops,
                                there are also a lot of farmers who own livestock. Because
                                of diseases, drought and degraded grasslands, the size of
                                herds have cut in size, causing higher levels of poverty
                                and malnutrition. Agriculture contributes half of Uganda’s
                                export earnings. Since most of the Ugandan
                                citizens live in rural areas and practice farming, a development
                                plan to raise agricultural incomes is currently in development.
                                This eventually is trying to create more jobs, especially for
                                women and for the youth.
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
