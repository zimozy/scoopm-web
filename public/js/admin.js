$(function() {

    // $('#exampleModalCenter').modal('show')

    database = firebase.database();
    usersRef = database.ref().child('users');   //.limitToFirst(10).orderByKey();
    
    usersTable = $('#usersTable');

    usersRef.on('value', function(snapshot) {
        snapshot.forEach(function(data) {
            console.log(user);
            var user = data.val();
            usersTable.append(
                  '<tr style="">'
                + '<th scope="row">' + user.firstName + ' ' + user.lastName + '</th>'
                + '<td>' + user.email + '</td>'
                + '<td>' + user.year + ' ' + user.make + ' ' + user.model + '</td>'
                + '</tr>'
            );
        });
        $('tr').click(function() {
            $('#exampleModalCenter').modal('show');
        });
    });

    function updateModal() {
        
    }
});