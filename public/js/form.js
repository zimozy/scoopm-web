firebase.auth().onAuthStateChanged(function(user) {
    if (user) {    
        email.val(user.email);
        $('#userID').val(user.uid);
    } else {
        window.location.replace('/application-login');
    }
});



$(function() {

//enable tooltip
submitButton.tooltip();

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

// function checkPassword() {
//     passVal = password.val();
    
//     // >6, with letter and number
//     if (
//         passVal.length < 6
//         || !/\d/.test(passVal)
//         || !/\D/.test(passVal)
//     ) {
//         markAsInvalid(password);
//         passwordIsValid = false;
//     } else {
//         markAsNotInvalid(password);

//         //only now do we check the second password
//         if ( 
//             passVal.length != 0
//             && confirmPassword.val().length != 0 
//         ) {
//             if (passVal !== confirmPassword.val()) {
//                 markAsInvalid(confirmPassword);
//                 passwordIsValid = false;
//             } else {
//                 markAsNotInvalid(confirmPassword);
//                 passwordIsValid = true;
//             }    
//         }
//     }

//     createAccountButton.updateDisabled();
// }

// var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

// function checkEmail() {
//     if (emailRegex.test(email.val())) {
//         markAsNotInvalid(email);
//         emailIsValid = true;
//     } else {
//         markAsInvalid(email);
//         emailIsValid = false;
//     }

//     createAccountButton.updateDisabled();
// }

submitButton.updateDisabled = function() {
    // console.log('uploadsAreValid: ' + uploadsAreValid);
    // console.log(firebase.auth().currentUser);
    
    // firebase.auth().currentUser &&
    if (uploadsAreValid) {
        submitButton.prop('disabled', false);
        submitButton.tooltip('disable');
    } else {
        submitButton.prop('disabled', true);
        submitButton.tooltip('enable');
    }
}

// createAccountButton.updateDisabled = function() {
//     this.prop('disabled',
//         ((emailIsValid && passwordIsValid) ? false : false)
//     )
// }

// password.keyup(function() { checkPassword(); });
// confirmPassword.keyup(function() { checkPassword(); });
// email.keyup(function() { checkEmail(); });



mForm.submit(function(event) {
    $('input:file').remove(); // don't want to upload these
});


});
