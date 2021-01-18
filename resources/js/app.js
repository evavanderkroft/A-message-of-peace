VANTA.CLOUDS({
    el: '#transition', // element selector string or DOM object reference
    color: 0x000000,
    shininess: 50,
    waveSpeed: 1.5,
    speed: 0.40
})

VANTA.CLOUDS({
    el: '#sky', // element selector string or DOM object reference
    color: 0x000000,
    shininess: 50,
    waveSpeed: 1.5,
    speed: 0.20
})

require('./bootstrap');


var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);


require('./popup');
require('./menu');
