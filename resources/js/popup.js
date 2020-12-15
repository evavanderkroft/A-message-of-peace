// // Get the modal
// var modal = document.getElementsByClassName("popup-modal");
//
// // Get the button that opens the modal
// var btn = document.getElementsByClassName("popup-button");
//
// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];
//
// // When the user clicks on the button, open the modal
// btn.onclick = function() {
//     modal.style.display = "block";
// }
//
// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }
//
// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }
///

let video = document.getElementById("video");

function quitVideo() {
    video.pause();
}

// Get the modal
var modal1 = document.getElementById("popup-modal1");
var modal2 = document.getElementById("popup-modal2");
var modal3 = document.getElementById("popup-modal3");
var modal4 = document.getElementById("popup-modal4");
var modal5 = document.getElementById("popup-modal5");

// Get the button that opens the modal
var btn1 = document.getElementById("popup-button1");
var btn2 = document.getElementById("popup-button2");
var btn3 = document.getElementById("popup-button3");
var btn4 = document.getElementById("popup-button4");
var btn5 = document.getElementById("popup-button5");

// Get the <span> element that closes the modal
var span1 = document.getElementById("popup-close1")
var span2 = document.getElementById("popup-close2")
var span3 = document.getElementById("popup-close3")
var span4 = document.getElementById("popup-close4")
var span5 = document.getElementById("popup-close5")

// When the user clicks on the button, open the modal
btn1.onclick = function() {
    modal1.style.display = "block";
}

btn2.onclick = function() {
    modal2.style.display = "block";
}

btn3.onclick = function() {
    modal3.style.display = "block";
}

btn4.onclick = function() {
    modal4.style.display = "block";
}

btn5.onclick = function() {
    modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}
span2.onclick = function() {
    modal2.style.display = "none";
}
span3.onclick = function() {
    modal3.style.display = "none";
}
span4.onclick = function() {
    modal4.style.display = "none";
}
span5.onclick = function() {
    modal5.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
    if (event.target == modal5) {
        modal5.style.display = "none";
    }
}

