//custom upload field
$(function() {


var folders = { //Names of the FireBase Storage directories
           'photo-actual': 'profiles',
    'licenseImage-actual': 'licenses',
    'registration-actual': 'registrations',
  'insuranceImage-actual': 'insurance-cards',
              'w9-actual': 'w9s',
          'resume-actual': 'resumes',
    'fingerprints-actual': 'fingerprints'
}

$('input:file').each(function() {
    var input       = $(this);
    var inputGroup  = $(this).parent().parent().first();
    var button      = $(this).siblings('label').first();
    var uploadLabel = inputGroup.children('.form-control').first();

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

        function updateValidity() {
            // ENABLE SUBMIT BUTTON ONLY IF ALL UPLOADS WERE COMPLETED SUCCESSFULLY
            uploadsAreValid = true;
            $('.upload-input-group').each(function() {
                if (! ($(this).hasClass('scoopm-is-valid'))) {
                    uploadsAreValid = false;
                    return false; //break the .each() loop
                }
            });
            submitButton.updateDisabled();
        }

        //UPLOAD THE FILE
        var uploadTask = firebase.storage().ref().child( folders[$(this).prop('name')] + '/' + $('#userID').val() ).put(file);

        //UPLOAD CALLBACKS
        uploadTask.on(firebase.storage.TaskEvent.STATE_CHANGED, function(snapshot) {
            switch (snapshot.state) {
                case firebase.storage.TaskState.PAUSED: // or 'paused'
                    // console.log('Paused upload: ' + file.name);
                    break;
                case firebase.storage.TaskState.RUNNING: // or 'running'
                    // console.log('Running upload: ' + file.name);
                    break;
            }
        }, function(error) {//error
            button.text('Try Again...');
            
            inputGroup.removeClass('scoopm-is-valid');
            inputGroup.removeClass('scoopm-is-uploading');
            inputGroup.addClass('scoopm-is-invalid');
            
            updateValidity();

        }, function() { //success
            // console.log('Upload success.');
            //CHANGE BUTTON
            button.text('Change File...');
            
            //CHANGE INPUT-GROUP CLASS
            inputGroup.removeClass('scoopm-is-invalid');
            inputGroup.removeClass('scoopm-is-uploading');
            inputGroup.addClass('scoopm-is-valid another-class');

            updateValidity();
        });
    });
});



});//jquery