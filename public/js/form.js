$(function() {

//// first thing
// $('input:text:first').focus();

$('#card1').animate({
    opacity: '1',
    marginTop: '0px'
    },
    700
);

setTimeout(function() {
    $('#card2').animate({
        opacity: '1',
        marginTop: '0px'
        },
        700
    );
}, 300);

setTimeout(function() {
    $('#card3').animate({
        opacity: '1',
        marginTop: '0px'
        },
        700
    );
}, 600);

$('#applyNowLink').click(function(event) {
    event.preventDefault();
    // $('#greeting').animate({height:'0px'},{'complete': function() {
        // $('#greeting').hide();
    // }});
    $('#greeting').slideUp('slow');
    $('body').removeClass('no-scroll');
});




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

function checkPassword() {
    passVal = password.val();
    
    // >6, with letter and number
    if (
        passVal.length < 6
        || !/\d/.test(passVal)
        || !/\D/.test(passVal)
    ) {
        markAsInvalid(password);
        passwordIsValid = false;
    } else {
        markAsNotInvalid(password);

        //only now do we check the second password
        if ( 
            passVal.length != 0
            && confirmPassword.val().length != 0 
        ) {
            if (passVal !== confirmPassword.val()) {
                markAsInvalid(confirmPassword);
                passwordIsValid = false;
            } else {
                markAsNotInvalid(confirmPassword);
                passwordIsValid = true;
            }    
        }
    }

    createAccountButton.updateDisabled();
}

var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

function checkEmail() {
    if (emailRegex.test(email.val())) {
        markAsNotInvalid(email);
        emailIsValid = true;
    } else {
        markAsInvalid(email);
        emailIsValid = false;
    }

    createAccountButton.updateDisabled();
}

submitButton.updateDisabled = function() {
    console.log('uploadsAreValid: ' + uploadsAreValid);
    // console.log(firebase.auth().currentUser);
    
    
    if (firebase.auth().currentUser && uploadsAreValid) {
        submitButton.prop('disabled', false);
    } else {
        submitButton.prop('disabled', true);
    }
}

createAccountButton.updateDisabled = function() {
    this.prop('disabled',
        ((emailIsValid && passwordIsValid) ? false : false)
    )
}

password.keyup(function() { checkPassword(); });
confirmPassword.keyup(function() { checkPassword(); });
email.keyup(function() { checkEmail(); });



mForm.submit(function(event) {

//      firebase.auth().onAuthStateChanged(function(user) {
//         if (user) {
//             var database = firebase.database();
//             var oldRef = database.ref('users/{{userKey}}');
            
//             oldRef.once('value').then(function(snapshot) {
//                 database.ref('users/' + user.uid).set(snapshot.toJSON());
//             });
            
//             oldRef.remove();

// //                window.location.replace('{{path_for("thanks")}}');
//         }
//       });
    $('input:file').remove(); // don't want to upload these
  });


});
