function populateForm(user) {
    //get user data
    firebase.database().ref('users/' + user.uid ).once('value')
        .then(function(snapshot) {
            //set each field
            snapshot.forEach(function(data) {
                //get input field
                var inputField = $('#' + data.key);

                //check if it's a checkbox
                if (inputField.prop('type') == 'checkbox') {
                    //check/uncheck the box
                    inputField.prop('checked', data.val());

                } else {
                    //for other types of inputs, set the value
                    inputField.val(data.val());
                }
            });

            //check if uploads are valid
            $('.upload-input-group').each(function() {
                uploadsAreValid = true;

                if (! $(this).children('input:text').val().length) {
                    uploadsAreValid = false;
                    return false; //break the .each() loop
                }

                //update submit button
                submitButton.updateDisabled();
            });

            //update on first page load
            middleName.updateDisabled();
        });
}
