$("[data-menu-underline-from-center] a").addClass("underline-from-center");



$(window).scroll(function() {
var height = $(window).scrollTop();
if (height > 140) {
    $('#back2Top').fadeIn();
} else {
    $('#back2Top').fadeOut();
}
});
$(document).ready(function() {
$("#back2Top").click(function(event) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
});
});


function myFunction() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
  x.className += " responsive";
} else {
  x.className = "topnav";
}
}
