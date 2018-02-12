firebase.auth().onAuthStateChanged(function(user) {
    if (user) {    
        email.val(user.email);
        $('#userID').val(user.uid);
    } else {
        window.location.replace('/application-login');
    }
});


$(function() {

    //initialize tooltip
    $('#disabled-submit-button-tooltip').tooltip();

    function markAsValid(obj) {
        obj.removeClass('scoopm-is-invalid');
        obj.addClass('scoopm-is-valid');
    }

    function markAsNotInvalid(obj) {
        obj.removeClass('scoopm-is-invalid');
    }

    function markAsInvalid(obj) {
        mForm.addClass('scoopm-was-validated');

        obj.removeClass('scoopm-is-valid');
        obj.addClass('scoopm-is-invalid');
        formIsValid = false;
    }

    submitButton.updateDisabled = function() {
        // firebase.auth().currentUser &&
        if (uploadsAreValid) {        
            $('#disabled-submit-button-tooltip').removeClass('d-inline-block').addClass('d-none');
            submitButton.removeClass('d-none');
        } else {
            submitButton.addClass('d-none');
            $('#disabled-submit-button-tooltip').addClass('d-inline-block').removeClass('d-none');
        }
    }

    mForm.submit(function(event) {
        $('input:file').remove(); // don't want to upload these
    })

});
