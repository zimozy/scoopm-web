firebase.auth().onAuthStateChanged(function(user) {
    if (user) {    

        // GET USER DETAILS
        //email
        email.val(user.email);
        //userID
        $('#userID').val(user.uid);
        //userId Token (logins)
        user.getIdToken(true).then(function(idToken) {
            $('#userIdToken').val(idToken);
        }).catch(function(error) {
            // console.log(error);
        });

    } else {
        // REDIRECT TO SIGN-IN SCREEN
        window.location.replace('/application-login');
    }
});


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

});
