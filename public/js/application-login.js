$(function() {

    $('form:first').submit(function(event) {
        event.preventDefault();
    })

    $('#signInButton').click(function(event) {
        event.preventDefault();
        firebase.auth().signInWithEmailAndPassword(
            $('#email').val(),
             $('#password').val()
        ).catch(function(error) {
            console.log(error);
            alert('There was an error. Please try again.');
        });
    });

});

firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        window.location.replace('/register');
    }
});