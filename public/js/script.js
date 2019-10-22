// Search Button
function searchFocus() {
    $('#search-button').removeClass('fill-button background-blue');
}

function searchBlur() {
    $('#search-button').addClass('fill-button background-blue');
}

$(function() {
    // Change menubar 
    $(window).scroll(function() {
        if($(this).scrollTop() > 0) {
            $('.navbar-wrapper').addClass('box');
        } else {
            $('.navbar-wrapper').removeClass('box');
        }
    });
});