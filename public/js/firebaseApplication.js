$(function() {


    var database = firebase.database();
    var applicationKeyInput = $('input#applicationKey');

    if (applicationKeyInput.val() == '') {
        var applicationReference = database.ref().child('applications').push();
        
        applicationReference.set({'complete': false}); //incomplete form
        
        // GLOBAL // APPLICATION KEY NUMBER
        var applicationKey = applicationReference.key;

        //hidden input for our PHP-Slim REST query
        applicationKeyInput.val(applicationKey);

    } else { //they are coming back from a failed Slim validation
        var applicationKey = applicationKeyInput.val();
        
    }
    

});




