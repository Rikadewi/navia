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
size['cabinet'] = 5;
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

function filterScrollSelection(keyword, event) {
    var currentSelection = document.getElementById('active-scroll');
    currentSelection.id = '';
    if (event == 'type' || event == 'collection') {
        $('.first-' + event).attr('id', 'active-scroll');
    } else {
        event.target.id = 'active-scroll';
    }

    var container = document.getElementById('product-list');

    container.innerHTML = '';
    for (i = 1; i <= size[keyword]; i++)
        container.innerHTML +=
            "<div class='round-border'><div style='background-image: url(\"../img/portfolio/" + keyword + "/" + i + ".png\");' class='background-product'></div></div>";
}

// Categorize
function filterCategorize(currentCategorize) {
    if (currentCategorize == 'type') {
        oldCategorize = 'collection';
        $('#type-button').removeClass('passive-left');
        $('#collection-button').addClass('passive-right');
        filterScrollSelection('chair', 'type');
    } else {
        oldCategorize = 'type';
        $('#collection-button').removeClass('passive-right');
        $('#type-button').addClass('passive-left');
        filterScrollSelection('assen', 'collection');
    }
    $('#' + currentCategorize + '-scroll').removeClass('non-active-categorize');
    $('#' + oldCategorize + '-scroll').addClass('non-active-categorize');

    $('#' + oldCategorize + '-button').removeClass('active');
    $('#' + currentCategorize + '-button').removeClass('passive');
    $('#' + oldCategorize + '-button').addClass('passive');
    $('#' + currentCategorize + '-button').addClass('active');

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