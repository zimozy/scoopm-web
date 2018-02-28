var ScoopMAuth = {
    signIn(email, password, redirect) {

        firebase.auth()
            .signInWithEmailAndPassword(email, password)
            .then(function(user) {
                //set id token as cookie
                var date = new Date();
                date.setTime(date.getTime() + (24*60*60*1000));

                //get token
                user.getIdToken(true).then(function(idToken) {
                    
                    //set cookie
                    document.cookie = "userIDToken=" + idToken + "; expires=" + date.toUTCString() + "; path=/";               

                    //redirect
                    window.location.replace(redirect);
                });
            })
            .catch(function(error) {
                // console.log(error); 
                alert('There was an error signing in. Please try again.');
            });
    }
}