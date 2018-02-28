$(function() {

    $('form:first').submit(function(event) {
        event.preventDefault();
    })

    $('#signInButton').click(function(event) {
        event.preventDefault();
        ScoopMAuth.signIn($('#email').val(), $('#password').val(), '/register');
    });

});