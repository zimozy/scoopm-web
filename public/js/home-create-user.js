//HIDE THE SIGN-UP BOX IF THEY'RE LOGGED IN
firebase.auth().onAuthStateChanged(function(user) {    
    if (user) {
        //THEY'VE LOGGED IN
        firebase.database()
            .ref('users/' + user.uid + '/submitted')
            .once('value',
                function(snapshot) {
                    if (snapshot.val()) { //if 'submitted' is true...
                        $('#application-entrypoint').html('<h1 class="deep-blue">Thanks!</h1>Application Submitted.');
                    } else {
                        $('#application-entrypoint').html('<a href="/register" class="btn btn-lg btn-outline-primary">Continue Application</a>');
                    }   
                }
            );

        //SHOW/HIDE SECTIONS
        $('#sign-up-section').hide();
        
        if (! $('#invalid-car-data').length) { //if were no problems with CarQuery validation, hide the car fields
            $('#sign-up-form').hide();
            $('#alternate-message-section').removeClass('d-none');
        }
        
    } else {
        //THEY LOGGED OUT
        $('#alternate-message-section').addClass('d-none');//hide alternate message
        $('#sign-up-section').show();//re-show sign up section
        $('#sign-up-form').show();//show form
    }
  });

//jQUERY
$(function() {
    var signUpForm = $('#sign-up-form');
    var errorMessage = $('#errorMessage');
    var email = $('#email');
    var password = $('#password');
    var createAccountButton = $('#createAccount');

    var readyToSubmit = false;

    signUpForm.submit(function(event) {

        if (readyToSubmit || $('#invalid-car-data').length) {
            $('#sign-up-form').hide();
            //...submit the form...
        } else {

            //don't submit form
            event.preventDefault();

            //show loading message
            createAccountButton.html('Creating user account  <i class="fas fa-circle-notch fa-spin"></i>')
                .addClass('pulse');
            
            //create account
            firebase.auth().createUserWithEmailAndPassword(email.val(), password.val())
                .then(
                    //SUCCESS
                    function(user) {
                        //set the user id and id token
                        $('#userId').val(user.uid);
                        user.getIdToken(true).then(function(idToken) {
                            $('#userIdToken').val(idToken);
                            
                            //send them on their way...
                            readyToSubmit = true;
                            signUpForm.submit();
                        });
                    },
                    //FAILURE
                    function(error) {
                        //set error message
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
                                errorMessage.text('Sorry, there was an error creating a user account. Please try again, or contact us.')
                                break;
                        }
                    
                        //show error message
                        errorMessage.removeClass('d-none');

                        //reset createAccountButton
                        createAccountButton.removeClass('pulse')
                            .text('Try again');
                    }
                );
        }
    });

    //SIGN OUT BUTTON
    $('#sign-out').click(function(event) {
        event.preventDefault();

        $(this).html('Signing out <i class="fas fa-circle-notch fa-spin"></i>');

        setTimeout(function() {
            firebase.auth().signOut()
                .catch(
                    function(error) {
                        alert('Woops, an error occured signing you out. Please try again.');
                    });            
            }, 1000);
    });

});

