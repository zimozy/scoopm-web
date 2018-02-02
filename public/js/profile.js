$(function() {


// Points to the root reference
var storageRef = firebase.storage().ref();

// Points to 'images'
var imagesRef = storageRef.child('profile-photos/-L3nU_V8rq-oHjd4tEkC');

console.log(imagesRef.getDownloadURL());


});