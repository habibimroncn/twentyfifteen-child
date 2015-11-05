var $=jQuery.noConflict();
$(document).ready(function () {
$('.sub-menu').hide();
$('.menu-item-has-children').hover(function() {
$(this).children('.sub-menu').stop().slideToggle(1000);
    });
});
