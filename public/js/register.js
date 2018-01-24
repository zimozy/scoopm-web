$(document).ready(function(){


/* VARIABLES */
var pages       = ["aboutYou", "yourCar", "insurance", "application", "references"];
var currentPage = pages[0];
var length      = pages.length;
var formIsValid = true;
var form        = $('#form');
 

/* NAVIGATION FUNCTIONS */
function goTo(newPage) {
    currentPageObj = $('#' + currentPage + 'Page');
    currentPageObj.addClass('d-none');
    currentPageObj.removeClass('.current-page');

    newPageObj = $('#' + newPage + 'Page');
    newPageObj.addClass('current-page');
    newPageObj.removeClass('d-none');

    currentPage = newPage;

    updateProgressLinks();
}

function updateProgressLinks() {

    $('#progress-links .underlined').removeClass('underlined');

    for (i = 0; i < length; i++) {
        
        var currentLink = $('#' + pages[i] + 'Link');
        currentLink.removeClass('text-muted');
        
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
    obj.removeClass('.scoopm-is-invalid');
    obj.addClass('.scoopm-is-valid');
    obj.addClass(':valid');
}

function markAsInvalid(obj) {
    obj.addClass(':invalid');
    obj.addClass('.scoopm-is-invalid');
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
    $('input.email').each(function() {
        if (! /.+@.+\..+/.test( $(this).val() ) ) {
            console.log('email is invalid');
            markAsInvalid($(this))
        } else {
            console.log('email is valid');
            markAsValid($(this))
        }
    });

    // PASSWORD
    var password            = $('#password');
    var passwordHint        = password.siblings('#password-size');
    var confirmPassword     = $('#confirmPassword');
    var confirmPasswordHint = confirmPassword.siblings('#password-match');
    
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

    // $('#form').addClass('was-validated'); //not using because the browsers get in the way
    return formIsValid;
}



/* CONTROL FLOW */

if (form.attr('class') == 'scoopm-was-validated') { //if they've submitted with errors to to the relevant page
    goTo(firstPageWithErrors());
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

form.submit(function( event ) {
    if (!formValidates()) {   /// DISABLED FOR TESTING!!!!!!
        //carry on...
    } else {
        console.log("There were errors.");
        event.preventDefault();
        goTo(firstPageWithErrors());
    }
  });

//keypress 'enter'
$('input').keypress(function(event) {
    if ( event.which == 13 ) {
       event.preventDefault();
       if (currentPage == pages[3]) {
        form.submit();
       } else {
        goTo(getNextPage());
       }

    }
});

//custom upload field
$('input:file').on('change', function() {
    $(this).parent().parent().children('.form-control').val(this.files[0].name);
})




}); //END OF $(document).ready()