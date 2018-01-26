$(document).ready(function(){


$('input:text:first').focus();

/* VARIABLES */
var pages       = ["aboutYou", "yourCar", "insurance", "application", "references"];
var currentPage = pages[0];
var length      = pages.length;
var formIsValid = true;
var mForm        = $('#form');
var password            = $('#password');
var passwordHint        = password.siblings('#password-size');
var confirmPassword     = $('#confirmPassword');
var confirmPasswordHint = confirmPassword.siblings('#password-match'); 

/* NAVIGATION FUNCTIONS */
function goTo(newPage) {
    currentPageObj = $('#' + currentPage + 'Page');
    currentPageObj.addClass('d-none');
    currentPageObj.removeClass('current-page');

    newPageObj = $('#' + newPage + 'Page');
    newPageObj.addClass('current-page');
    newPageObj.removeClass('d-none');

    // console.log('currentPage: ' + currentPage);
    // console.log('newPage: ' + newPage);

    currentPage = newPage;
    
    // console.log('currentPage: ' + currentPage);
    console.log('goTo(' + newPage + ')');
    // console.trace();

    updateProgressLinks();

    newPageObj.find('input:text:not(.upload-text):first').focus();

    return newPageObj;
}

function updateProgressLinks() {

    $('#progress-links .underlined').removeClass('underlined');

    for (i = 0; i < length; i++) {
        
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
    for (i = 0; i < length; i++ ) {
        if (pages[i] == currentPage) {
            return pages[i+1];
            break;
        }
    }
}

function getPreviousPage() {
    for (i = 0; i < length; i++ ) {
        if (pages[i] == currentPage) {
            return pages[i-1];
            break;
        }
    }
}

function getPageForLinkID(linkID) {;
    return linkID.replace('Link', '');
}

function firstPageWithErrors() {
    return $('.page:has(.scoopm-is-invalid)').first().attr('id').replace('Page', '');
}



/* VALIDATION */
function markAsValid(obj) {
    obj.removeClass('scoopm-is-invalid');
    obj.addClass('scoopm-is-valid');
    obj.addClass(':valid');
}

function markAsInvalid(obj) {
    mForm.addClass('scoopm-was-validated');
    obj.addClass(':invalid');
    obj.addClass('scoopm-is-invalid');
    formIsValid = false;
}

function formValidates() {
    // var currentPageId = '#' + $('.current-page').attr('id');

    // EMPTY TEXT FIELDS
    $('input:text').each( function() {
        if (!$(this).val()) {
            markAsInvalid($(this))
        } else {
            markAsValid($(this));
        }
    });

    // EMAIL
    // $('input.email').each(function() {
    //     if (! /.+@.+\..+/.test( $(this).val() ) ) {
    //         console.log('email is invalid');
    //         markAsInvalid($(this))
    //     } else {
    //         console.log('email is valid');
    //         markAsValid($(this))
    //     }
    // });

    checkPassword();

    // $('#form').addClass('was-validated'); //not using because the browsers get in the way

    return formIsValid;
}

function checkPassword() {
    //check first password
    if (password.val().length < 6) {
        markAsInvalid(password);
        passwordHint.addClass('invalid-feedback');
        passwordHint.removeClass('text-muted');
    } else {
        markAsValid(password);
        passwordHint.removeClass('invalid-feedback');
        passwordHint.addClass('text-muted');

        //only now do we check the second password
        if (password.val().length != 0) { // only check if they entered the first password
            if (password.val() !== confirmPassword.val()) {
                markAsInvalid(confirmPassword);
                confirmPasswordHint.removeClass('d-none');
            } else {
                markAsValid(confirmPassword);
                confirmPasswordHint.addClass('d-none');
            }    
        }
    }
}

/* CONTROL FLOW */

if (mForm.attr('class') == 'scoopm-was-validated') { //if they've submitted with errors to to the relevant page
    console.log('Going from errors');
    
    goTo(firstPageWithErrors());
}

$('.next-button').on('click', function(event) {
    event.preventDefault();
    console.log('going from .next-button click');
    
    goTo(getNextPage());
});

$('.back-button').on('click', function(event) {
    event.preventDefault();
    console.log('going from back-button click');
    
    goTo(getPreviousPage());
});

$('#progress-links a').on('click', function(event) {
    
    event.preventDefault();
    console.log('going from progress links click');
    
    goTo(getPageForLinkID($(this).attr('id')));
});

// mForm.submit(function(event) {
//     // don't want to upload these
//     // event.preventDefault();
    
//     // return true;
//     // console.trace();
    
//     // if (formValidates()) {
//     //     event.preventDefault();
//     //     //carry on...
//     // } else {
//     //     event.preventDefault();
//     //     console.log("There were errors.");
//     //     goTo(firstPageWithErrors());
//     // }
//   });

//keypress 'enter'
$('input').keypress(function(event) {
    console.log( event );

    if ( event.which == 13 ) {
        console.log('Enter pressed');
        if (currentPage == pages[4]) {
            mForm.submit();
            $('input:file').remove();
            console.log('Submitting');

        } else {
        event.preventDefault();
            goTo(getNextPage());
        }
    }
});

$('input:password').keyup(function() {
    checkPassword();
})




}); //END OF $(document).ready()