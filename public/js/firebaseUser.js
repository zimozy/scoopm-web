$(function() {

    var database = firebase.database();
    var userKeyInput = $('input#userKey');

    if (userKeyInput.val() == '') { // if this is a first-time-visit

        var userRef = database.ref().child('users').push();
        userRef.set({'complete': false}); //incomplete form        
        
        userKey = userRef.key; // GLOBAL -- APPLICATION KEY NUMBER
        
        userKeyInput.val(userKey); //hidden input

    } else { //they are coming back from a failed Slim validation

        userKey = userKeyInput.val();
        
    }
    
    //if logged in, hide user box
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            $('#accountCard').addClass('border-primary').html('<div class="card-body"><h5 class="card-title">Account Created</h5><p class="card-text">You are logged in as <mark id="userEmailSpan"></mark>.</p></div>');

            $('#userEmailSpan').text(user.email);
            $('#userID').val(user.uid);
            
            submitButton.updateDisabled();
        }
      });

    createAccountButton.createAccount = function() {
        createAccountButton.text('Please Wait').addClass('pulse');

        firebase.auth().createUserWithEmailAndPassword(email.val(), password.val())
            .catch(function(error) {

                email.before('<p id="errorMessage" class="error"></p>');
                
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

                createAccountButton.removeClass('pulse').text('Try Again');

                return false;
            });
    }

    createAccountButton.click(function() {
        createAccountButton.createAccount();
    });

    $('#accountCard input').on('keydown', function(event) {
        if ( event.which == 13 ) {
            event.preventDefault();
            createAccountButton.createAccount();
        }
    });


});

