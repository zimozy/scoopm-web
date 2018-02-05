//custom upload field
$(function() {





// To-do: re-enable
// submitButton.prop('disabled', true); // DISABLE SUBMIT BUTTON






//Names of the FB Storage directories
var folders = {
    'licenseImage-actual': 'licenses',
    'registration-actual': 'registrations',
  'insuranceImage-actual': 'insurance-cards',
           'photo-actual': 'profiles',
              'w9-actual': 'w9s',
          'resume-actual': 'resumes',
    'fingerprints-actual': 'fingerprints',
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

        //UPLOAD THE FILE
        var uploadTask = firebase.storage().ref().child( folders[$(this).prop('name')] + '/' + $('#userID').val() ).put(file);

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
            uploadsAreValid = true;
            $('.upload-input-group').each(function() {
                if (($(this).hasClass('scoopm-is-valid'))) {
                    // console.log(this + ' has class');
                } else {
                    // console.log(this + ' doesnt have class');
                    uploadsAreValid = false;
                    return false; //break the .each() loop
                }
            });
            
            submitButton.updateDisabled();
        });
    });
});



});//jquery