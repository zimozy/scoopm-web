$(function() {

    var usersTBody = $('#usersTable tbody');
    var applicationModal = $('#applicationModal');

    var database = firebase.database();
    var storage = firebase.storage().ref();
    
    // SEND HOME FUNCTION
    function sendHome() { window.location.replace('/'); }

    // CHECK THEY'RE AN ADMIN
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            database.ref('admin/' + user.uid).once('value', function() {
                //success
                usersTBody.populate();
            }, function() {
                alert('is not admin');
                //not an admin
                sendHome();
            });
        } else {
            //not logged in
            sendHome();
        }
    });

    // DATA LOAD
    usersTBody.populate = function() {
        //.limitToFirst(10).orderByKey();
        database.ref('users').on('value', function(snapshot) {
            
            usersTBody.children('tr').remove(); //empty the table body and reload the rows

            snapshot.forEach(function(data) {
                var user = data.val();
                // console.log(user);
                var acceptedText  = user.accepted ? "Yes": "No";
                var acceptedClass = user.accepted ? "accepted" : "not-accepted";
                usersTBody.append(
                    '<tr id="' + data.key + '" class="' + acceptedClass + '">'
                        + '<th scope="row">' + user.firstName + ' ' + user.lastName + '</th>'
                        + '<td>' + user.email + '</td>'
                        + '<td>' + user.year + ' ' + user.make + ' ' + user.model + '</td>'
                        + '<td>' + acceptedText + '</td>'
                    + '</tr>'
                );
            });
            $('tr').click(function() {
                applicationModal.update($(this).prop('id'));
                applicationModal.modal('show');
            });
        });
    }

    // UPDATE FILE LINK FUNCTION
    function updateFileLink(linkObject, folder, uid) {

        var image = storage.child(folder + '/' + uid);
        
        image.getMetadata().then(function(metadata) {
            image.getDownloadURL().then(function(url) {                
                if (/image\/.+/.test(metadata.contentType)) {
                    //it's an image
                    linkObject.html('<a href="' + url + '" target="_blank"><img src="' + url + '"></a>'); 
                } else {
                    //it's a PDF/DOC
                    targetText = metadata.contentType == 'application/pdf' ? ' target="_blank"' : '';
                    linkObject.html('<a href="' + url + '"' + targetText + '><i class="fas fa-folder-open"></i> Open File</a>'); 
                }
            }).catch(function(error) {});
        }).catch(function(error) {
            linkObject.html('<p>No file</p>');
        });
    }
    
    // SHOWING THE MODAL
    applicationModal.update = function(uid) {
        currentUserRef = database.ref('users/' + uid);
        currentUserRef.once('value').then(function(snapshot) {
    
            data = snapshot.val();
            
            $('#firstName').text(data.firstName);
            $('#middleName').text(data.middleName ? data.middleName + ' ' : ''); //added space if there is a middle name
            $('#lastName').text(data.lastName);
            $('#phone').text(data.phone).attr('href', 'tel:'+data.phone);
            $('#email').text(data.email).attr('href', 'mailto:'+data.email);
            $('#ssn').text(data.ssn);
            updateFileLink($('#profilePhoto'), 'profiles', uid);
            updateFileLink($('#resume'), 'resumes', uid);
            updateFileLink($('#w9'), 'w9s', uid);
            updateFileLink($('#fingerprints'), 'fingerprints', uid);

            $('#ref1Name').text(data.ref1Name);
            $('#ref1Email').text(data.ref1Email).attr('href', 'mailto:'+data.ref1Email);
            $('#ref1Phone').text(data.ref1Phone).attr('href', 'tel:'+data.ref1Phone);
            
            $('#ref2Name').text(data.ref2Name);
            $('#ref2Email').text(data.ref2Email).attr('href', 'mailto:'+data.ref2Email);
            $('#ref2Phone').text(data.ref2Phone).attr('href', 'tel:'+data.ref2Phone);
            
            $('#year').text(data.year);
            $('#make').text(data.make);
            $('#model').text(data.model);
            $('#licenseNumber').text(data.licenseNumber);
            updateFileLink($('#licenseImage'), 'licenses', uid);
            updateFileLink($('#registration'), 'registrations', uid);

            $('#policyProvider').text(data.policyProvider);
            $('#policyNumber').text(data.policyNumber);    
            updateFileLink($('#insuranceImage'), 'insurance-cards', uid);
        });
        
        // APPLICANT APPROVAL
        $('#approveButton').click(function() {
            currentUserRef.update( {'accepted':true}, function() {
                applicationModal.modal('hide');
            });
        });
    }
});