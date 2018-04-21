jQuery(document).ready(function($){
    //Examples of how to assign the Colorbox event to elements
    $(".ajax").colorbox();
    $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
    $('[data-toggle="tooltip"]').tooltip();
    window.addEventListener("load", function (event) {lazyload();});
});