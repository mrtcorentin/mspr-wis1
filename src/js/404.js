window.$ = window.jQuery = require('jquery');

let pageX = $(document).width();
let pageY = $(document).height();
let mouseY=0;
let mouseX=0;

$(document).mousemove(function( event ) {

    mouseY = event.pageY;
    yAxis = (pageY/2-mouseY)/pageY*300;

    mouseX = event.pageX / -pageX;
    xAxis = -mouseX * 100 - 100;

    $('.box__ghost-eyes').css({ 'transform': 'translate('+ xAxis +'%,-'+ yAxis +'%)' });

});