// password.keyup(function() { checkPassword(); });
// confirmPassword.keyup(function() { checkPassword(); });
// email.keyup(function() { checkEmail(); });










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
