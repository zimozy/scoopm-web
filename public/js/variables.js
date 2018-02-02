/* VARIABLES */
var formIsValid = true;

var mForm = $('#application-form');

var password     = $('#password');
var passwordHint = password.siblings('#password-size');

var confirmPassword     = $('#confirmPassword');
var confirmPasswordHint = confirmPassword.siblings('#password-match');

var email = $('#email');

var createAccountButton = $('#createAccount');

var submitButton = $('#submit-button'); // MUST NOT BE CALLED "SUBMIT" OR IT WILL MESS UP THE submit EVENT

var uploadsAreValid = false;
var emailIsValid    = false;
var passwordIsValid = false;

var userKey = null;