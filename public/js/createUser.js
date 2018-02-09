var redirect = false;

firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        if (redirect) {
            window.location.replace('/register');
        } else {
            $('#signUp').addClass('d-none');
            $('#startNewApplication').removeClass('d-none');
        }
        
    }
  });

$(function() {

    var createAccountButton = $('#createAccount');
    var email = $('#email');
    var password = $('#password');

    createAccountButton.createAccount = function() {
        createAccountButton.text('Creating user account...').addClass('pulse');

        redirect = true;

        firebase.auth().createUserWithEmailAndPassword(email.val(), password.val())
            .catch(function(error) {
                
                redirect = false;
                
                var errorMessage = $('#errorMessage');

                switch (error.code) {
                    case 'auth/email-already-in-use':
                    errorMessage.text('Sorry, there is already an account using that email address.');
                    break;
                    
                    case 'auth/invalid-email':
                    errorMessage.text('Invalid email address.');
                    break;
                    
                    case 'auth/weak-password':
                    errorMessage.text('Sorry, that password is not strong enough. Please try a different one.');
                    break;
                    
                    default:
                    errorMessage.text('Sorry, there was an error creating a user account. Please try again or contact us.')
                    break;
                }
                
                errorMessage.removeClass('d-none');

                createAccountButton.removeClass('pulse').text('Try again');

                return false;
            });
    }

    // createAccountButton.click(function() {
    //     createAccountButton.createAccount();
    // });

    $('#sign-up').submit(function(event) {
        event.preventDefault();
        createAccountButton.createAccount();
    });

});

