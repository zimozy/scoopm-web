firebase.auth().onAuthStateChanged(function(user) {
    if (user) { //logged in

        // GET USER DETAILS
        email.val(user.email); //email
        $('#userID').val(user.uid); //userID
        
        //userId Token (logins)
        user.getIdToken(true).then(function(idToken) {
            $('#userIdToken').val(idToken);
        });

        //POPULATE FORM (only happens in GET method, not POST)
        if ($('#populateForm').length) {
            populateForm(user);
        }

    } else { // not logged in
        // REDIRECT TO SIGN-IN SCREEN
        window.location.replace('/application-login');
    }
});

var middleName = null; // global context
$(function() {

    //// SUBMIT BUTTON ////
    //TOOLTIP
    disabledSubmitButtonTooltip = $('#disabled-submit-button-tooltip');
    disabledSubmitButtonTooltip.tooltip();

    //HIDE/SHOW REAL BUTTON OR FAKE, DISABLED BUTTON
    submitButton.updateDisabled = function() {
        if (uploadsAreValid) {        
            disabledSubmitButtonTooltip.removeClass('d-inline-block').addClass('d-none');
            submitButton.removeClass('d-none');
        } else {
            submitButton.addClass('d-none');
            disabledSubmitButtonTooltip.addClass('d-inline-block').removeClass('d-none');
        }
    }

    //// FORM SUBMISSION ////
    mForm.submit(function(event) {
        $('input:file').remove(); // don't want to upload these
    })

    ////MISC
    //Disable checkbox when clicked
    middleName = $("#middleName");
    var noMiddleName = $('#noMiddleName');

    middleName.updateDisabled = function() {
        console.log('nomiddlename: '+ noMiddleName.prop('checked'));
        
        this.prop('disabled', noMiddleName.prop('checked'));
    }

    noMiddleName.on('change', function() {
        middleName.updateDisabled();
    });
    
});
