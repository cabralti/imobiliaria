$(document).ready(function(){
    //$('.sidenav').sidenav();
    //$('.button-collapse').sidenav();
    $('.slider').slider({full_width: true});
    $('select').material_select();
});

function sliderPrev(){
    $('.slider').slider('pause');
    $('.slider').slider('prev');
}

function sliderNext(){
    $('.slider').slider('pause');
    $('.slider').slider('next');
}