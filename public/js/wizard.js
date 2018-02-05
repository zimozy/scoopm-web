$(function() {


var pages       = ["aboutYou", "yourCar", "insurance", "application", "references"];
var currentPage = pages[0];


/* NAVIGATION FUNCTIONS */

function goTo(newPage) {
    currentPageObj = $('#' + currentPage + 'Page');
    currentPageObj.addClass('d-none');
    currentPageObj.removeClass('current-page');

    newPageObj = $('#' + newPage + 'Page');
    newPageObj.addClass('current-page');
    newPageObj.removeClass('d-none');

    currentPage = newPage;
    
    updateProgressLinks();

    newPageObj.find('input:text:not(.upload-text):first').focus();
    return newPageObj;
}

function updateProgressLinks() {

    $('#progress-links .underlined').removeClass('underlined');

    for (i = 0; i < pages.length; i++) {
        
        var currentLink = $('#' + pages[i] + 'Link');
        
        currentLink.addClass('page-visited');
        
        if (pages[i] == currentPage) {
            currentLink.addClass('underlined');
            break;
        }
    }
}


/* PAGE NAME FUNCTIONS */
function getNextPage() {
    for (i = 0; i < pages.length; i++ ) {
        if (pages[i] == currentPage) {
            return pages[i+1];
            break;
        }
    }
}

function getPreviousPage() {
    for (i = 0; i < pages.length; i++ ) {
        if (pages[i] == currentPage) {
            return pages[i-1];
            break;
        }
    }
}

function getPageForLinkID(linkID) {
    return linkID.replace('Link', '');
}

function firstPageWithErrors() {
    return $('.page:has(.scoopm-is-invalid)').first().attr('id').replace('Page', '');
}


/* CONTROL FLOW */

if (mForm.attr('class') == 'scoopm-was-validated') { //if they've submitted with errors to to the relevant page
    goTo(firstPageWithErrors());
} else {
    $('input:text:first').focus();
}

$('.next-button').on('click', function(event) {
    event.preventDefault();
    goTo(getNextPage());
});

$('.back-button').on('click', function(event) {
    event.preventDefault();    
    goTo(getPreviousPage());
});

$('#progress-links a').on('click', function(event) {
    event.preventDefault();
    goTo(getPageForLinkID($(this).attr('id')));
});


// KEYPRESS: 'ENTER'
$('input').on('keydown.nextPage', function(event) {
    if ( event.which == 13 ) {
        event.preventDefault();
        if (currentPage == pages[pages.length - 1]) {
            if (!submitButton.prop('disabled')) {
                mForm.submit();
            }
        } else {
            goTo(getNextPage());
        }
    }
});

// //change the KEYPRESS: 'ENTER' for the user account card
// //add listener in firebaseUser.js
// $('#accountCard input').off('keydown.nextPage');


});