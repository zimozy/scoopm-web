$(document).ready(function(){


/* VARIABLES */
var pages       = ["aboutYou", "yourCar", "insurance", "application", "references"];
var currentPage = pages[0];
var length      = pages.length;
var formIsValid = true;
var form        = $('#form');
var password            = $('#password');
var passwordHint        = password.siblings('#password-size');
var confirmPassword     = $('#confirmPassword');
var confirmPasswordHint = confirmPassword.siblings('#password-match'); 

var storageRef = firebase.storage().ref();


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
    obj.removeClass('scoopm-is-invalid');
    obj.addClass('scoopm-is-valid');
    obj.addClass(':valid');
}

function markAsInvalid(obj) {
    form.addClass('scoopm-was-validated');
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
    $('input:file').each(function() {
        $(this).files
    });
    // if (formValidates()) {
    //     event.preventDefault();
    //     //carry on...
    // } else {
    //     event.preventDefault();
    //     console.log("There were errors.");
    //     goTo(firstPageWithErrors());
    // }
  });

//keypress 'enter'
$('input').keypress(function(event) {
    if ( event.which == 13 ) {
       event.preventDefault();
       if (currentPage == pages[4]) {
        form.submit();
       } else {
        goTo(getNextPage());
       }

    }
});

//custom upload field
$('input:file').each(function() {
    var input      = $(this);
    var inputGroup = $(this).parent().parent().first();
    var button     = $(this).siblings('label').first();
    var label      = inputGroup.children('.form-control').first();

    label.on('focus', function() {
        $(this).blur();
        input.click();
    });

    input.on('change', function() {
        label.val(this.files[0].name);

        button.text('Uploading...');

        inputGroup.removeClass('scoopm-is-valid');    
        inputGroup.removeClass('scoopm-is-invalid');
        inputGroup.addClass('scoopm-is-uploading');

        var file = this.files[0];
        var uploadTask = storageRef.child('images/' + file.name).put(file);

        uploadTask.on(firebase.storage.TaskEvent.STATE_CHANGED, function(snapshot) {
            switch (snapshot.state) {
                case firebase.storage.TaskState.PAUSED: // or 'paused'
                    console.log(file.name + ' upload is paused');
                    break;
                case firebase.storage.TaskState.RUNNING: // or 'running'
                    console.log(file.name + ' upload is running');
                    break;
            }

        }, function(error) {
            button.text('Try Again...');
            
            inputGroup.removeClass('scoopm-is-valid');
            inputGroup.removeClass('scoopm-is-uploading');
            inputGroup.addClass('scoopm-is-invalid');
            
        }, function() { //success
            button.text('Change File...');
            
            inputGroup.removeClass('scoopm-is-invalid');
            inputGroup.removeClass('scoopm-is-uploading');
            inputGroup.addClass('scoopm-is-valid');

            console.log('Upload success.');
        });
    });
});

$('input:password').keyup(function() {
    checkPassword();
})




}); //END OF $(document).ready()