var redirect = false;

firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        if (redirect) {
            window.location.replace('/register');
        } else {
            $('#signUp').addClass('d-none');
            $('#startNewApplication').removeClass('d-none');
        }
    } else {
        $('#startNewApplication').addClass('d-none');
        $('#signUp').removeClass('d-none');
    }
  });

$(function() {

    var createAccountButton = $('#createAccount');
    var email = $('#email');
    var password = $('#password');

    createAccountButton.createAccount = function() {
        createAccountButton.html('Creating user account  <i class="fas fa-circle-notch fa-spin"></i>').addClass('pulse');
        
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

    //SIGN OUT BUTTON
    $('#sign-out').click(function(event) {
        event.preventDefault();

        $(this).html('Signing out <i class="fas fa-circle-notch fa-spin"></i>');

        setTimeout(() => {
        firebase.auth().signOut()
            .then(function() {
                /*success*/
            })
            .catch(function(error) {
                alert('Woops, an error occured signing you out. Please try again.');
            });            
        }, 1200);

    });

});

