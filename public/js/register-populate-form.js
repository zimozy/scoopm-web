function populateForm(user) {
    firebase.database()
        .ref('users/' + user.uid )
        .once('value')
        .then(function(snapshot) {
            snapshot.forEach(function(data) {
                $('#' + data.key).val(data.val());
            });

            $('.upload-input-group').each(function() {
                uploadsAreValid = true;

                if (! $(this).children('input:text').val().length) {
                    uploadsAreValid = false;
                    return false; //break the .each() loop
                }

                submitButton.updateDisabled();
            });
        });
}
