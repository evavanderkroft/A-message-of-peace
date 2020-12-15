<header class="z-90" style="z-index: 2;">
    <nav class="menu">
        <body>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class="sidenav_item" href="{{route('intro')}}">Homepage</a>
            <a class="sidenav_item" href="#">Map</a>
            <a class="sidenav_item" href="{{route('about')}}">About</a>
            <div class="sidenav_items_bottom">
                <a class="sidenav_item_bottom" href="{{route('policy')}}">Policy</a>
                <a class="sidenav_item_bottom" href="{{route('copyrights')}}">Copyrights</a>
            </div>
        </div>

        <span style="font-size:50px;cursor:pointer; margin-left:20px;" onclick="openNav()">&#9776;</span>
        </body>
    </nav>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "450px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</header>

