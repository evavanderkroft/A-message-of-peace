<script>
    let video = document.getElementById("video");
    let buttontoggle = document.getElementById("button-toggle");
    let pausebtn = document.getElementById("pauseBtn");
    let mutebtn = document.getElementById("muteBtn");

    let toggle = document.getElementById("video-toggle");

    function showVideo() {
        if (toggle.style.display === "none") {
            toggle.style.display = "block";
            buttontoggle.style.display = "none";
        } else {
            toggle.style.display = "none";
            buttontoggle.style.display = "block";
        }
    }

    function quitVideo() {

        video.pause();
        mutebtn.innerHTML = "Unmute";
        toggle.style.display = "none";
        buttontoggle.style.display = "block";
        pausebtn.innerHTML = "Play";
    }

    function goBack() {
        history.back()
    }

    function pauseVideo() {
        if (video.paused) {
            video.play();
            pausebtn.innerHTML = "Pause";
        } else {
            video.pause();
            pausebtn.innerHTML = "Play";
        }
    }

    function muteVideo() {
        video.muted = !video.muted
        if (video.muted) {
            mutebtn.innerHTML = "Unmute";
        } else {
            mutebtn.innerHTML = "Mute";
        }
    }
</script>
