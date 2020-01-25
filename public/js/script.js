// Search Button
function searchFocus() {
    $('#search-button').removeClass('fill-button background-blue');
}

function searchBlur() {
    $('#search-button').addClass('fill-button background-blue');
}

const size = {};
size['assen'] = 14;
size['athena'] = 10;
size['cabinet'] = 4;
size['chair'] = 47;
size['choris'] = 13;
size['coffee-table'] = 4;
size['console-table'] = 11;
size['credenza'] = 3;
size['dining-table'] = 4;
size['divan'] = 3;
size['long-island'] = 5;
size['outdoor'] = 19;
size['rack'] = 3;
size['sheesam'] = 2;
size['side-cabinet'] = 1;
size['side-table'] = 4;
size['wardrobe'] = 5;

//Filter
function filterSelection(keyword, event) {
    if ($(window).scrollTop() > 171) {
        window.scrollTo(0, 171);
    }
    var currentSelection = document.getElementById('active');
    currentSelection.id = '';
    event.target.id = 'active';
    var container = document.getElementById('product-list');

    container.innerHTML = '';
    for (i = 1; i <= size[keyword]; i++)
        container.innerHTML +=
            "<div class='round-border'><div style='background-image: url(\"../img/portfolio/" + keyword + "/" + i + ".png\");' class='background-product'></div></div>";
}

$(function () {
    // Change menubar 
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.navbar-wrapper').addClass('box');
        } else {
            $('.navbar-wrapper').removeClass('box');
        }
    });
});