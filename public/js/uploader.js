//custom upload field
$(function() {


var submitButton = $('input:submit'); // MUST NOT BE CALLED "SUBMIT" OR IT WILL MESS UP THE submit EVENT




// To-do: re-enable



// submitButton.prop('disabled', true); // DISABLE SUBMIT BUTTON

//Names of the FB Storage directories
var folders = {
    'licenseImage': 'licenses',
    'registration': 'registration-images',
       'insurance': 'insurace-cards',
           'photo': 'profile-photos',
              'w9': 'w9s',
          'resume': 'resumes',
    'fingerprints': 'fingerprints',
}

$('input:file').each(function() {
    var input      = $(this);
    var inputGroup = $(this).parent().parent().first();
    var button     = $(this).siblings('label').first();
    var uploadLabel      = inputGroup.children('.form-control').first();

    uploadLabel.on('focus', function() {
        $(this).blur();
        input.click();
    });

    input.on('change', function() {
        
        uploadLabel.val(this.files[0].name);

        button.text('Uploading...');

        inputGroup.removeClass('scoopm-is-valid');    
        inputGroup.removeClass('scoopm-is-invalid');
        inputGroup.addClass('scoopm-is-uploading');

        var file = this.files[0];

        //UPLOAD THE FILE
        // applicationKey == a global variable from firebaseApplication.js
        var uploadTask = firebase.storage().ref().child(
                                                    folders[input.prop('name')] + '/' + applicationKey
                                                    ).put(file);

        //UPLOAD CALLBACKS
        uploadTask.on(firebase.storage.TaskEvent.STATE_CHANGED, function(snapshot) {
            switch (snapshot.state) {
                case firebase.storage.TaskState.PAUSED: // or 'paused'
                    console.log('Paused upload: ' + file.name);
                    break;
                case firebase.storage.TaskState.RUNNING: // or 'running'
                    console.log('Running upload: ' + file.name);
                    break;
            }

        }, function(error) {
            button.text('Try Again...');
            
            inputGroup.removeClass('scoopm-is-valid');
            inputGroup.removeClass('scoopm-is-uploading');
            inputGroup.addClass('scoopm-is-invalid');
            
            console.log(error.message);

        }, function() { //success
            console.log('Upload success.');

            //CHANGE BUTTON
            button.text('Change File...');
            
            //CHANGE INPUT-GROUP CLASS
            inputGroup.removeClass('scoopm-is-invalid');
            inputGroup.removeClass('scoopm-is-uploading');
            inputGroup.addClass('scoopm-is-valid');

            // ENABLE SUBMIT BUTTON ONLY IF ALL UPLOADS WERE COMPLETED SUCCESSFULLY
            var allUploadsComplete = true;
            $('.upload-input-group').each(function() {
                if (! ($(this).hasClass('scoopm-is-valid'))) {
                    allUploadsComplete = false;
                    return false; //break the .each() loop
                }
            });
            if (allUploadsComplete) {
                submitButton.prop('disabled', false);
            }
            
        });
    });
});



});//jquery