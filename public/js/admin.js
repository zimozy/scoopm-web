$(function() {

    database = firebase.database();
    usersRef = database.ref().child('users');   //.limitToFirst(10).orderByKey();

    usersTable = $('#usersTable');
    
    usersRef.on('value', function(snapshot) {
        snapshot.forEach(function(data) {
            var user = data.val();
            usersTable.append('<tr>');
            usersTable.append('<th scope="row">' + user.firstName + ' ' + user.lastName + '</th>');
            usersTable.append('<td>' + user.email + '</td>');
            usersTable.append('<td>' + user.year + ' ' + user.make + ' ' + user.model + '</td>');
            usersTable.append('</tr>');
            // console.log("The " + data.key + " score is " + data.val());
          });
        

    });
    // console.log(usersRef);
    
});