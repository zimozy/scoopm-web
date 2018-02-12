$(function() {

    applicationModal = $('#applicationModal');

    database = firebase.database();
    
    //.limitToFirst(10).orderByKey();
    database.ref().child('users').once('value').then(function(snapshot) {
        
        snapshot.forEach(function(data) {
            var user = data.val();
            // console.log(user);
            $('#usersTable').append(
                  '<tr id="' + data.key + '">'
                + '<th scope="row">' + user.firstName + ' ' + user.lastName + '</th>'
                + '<td>' + user.email + '</td>'
                + '<td>' + user.year + ' ' + user.make + ' ' + user.model + '</td>'
                + '</tr>'
            );
        });
        $('tr').click(function() {
            applicationModal.update($(this).prop('id'));
            applicationModal.modal('show');
        });
    });
    
    applicationModal.update = function(uid) {
        database.ref().child('users/' + uid).once('value').then(function(snapshot) {
            data = snapshot.val();            
            console.log(data);
            
            $('#phone').text(data.phone);
            $('#email').text(firebase.Auth().currentUser.uid);
            $('#ssn').text(data.ssn);


            $('#ref1Name').text(data.ref1Name);
            $('#ref1Email').text(data.ref1Email);
            $('#ref1Phone').text(data.ref1Phone);
            
            $('#ref2Name').text(data.ref2Name);
            $('#ref2Email').text(data.ref2Email);
            $('#ref2Phone').text(data.ref2Phone);
            
            $('#year').text(data.year);
            $('#make').text(data.make);
            $('#model').text(data.model);
            $('#licenseNumber').text(data.licenseNumber);

            $('#provider').text(data.provider);
            $('#policyNumber').text(data.policyNumber);
            });
    }
});