<?php
// require '../vendor/autoload.php';
// use Firebase\FirebaseLib;

// $firebase = new \Firebase\FirebaseLib('https://scoopm-8975f.firebaseio.com/', $_COOKIE['userIDToken']);

// $user = $firebase->get('users/' . $_GET['id']);
// $user = json_decode($user);

// //CHECK THEY'RE ALLOWED TO VIEW THE FILE
// if ($user->error) {
//     header('Location: /');
//     die();
// }

// //CREATE PDF
// $proof = new ProofOfAuthorization(
//     $user->signature,
//     $user->signatureTimestamp,
//     $user->signatureIP,
//     $user->signatureIPFromHeaders
// );

// //DISPLAY PDF
// $proof->Output();






// $app->get("/authorizationPDF/{userID}", function ($request, $response, $args) {

//     $firebase = new \Firebase\FirebaseLib('https://scoopm-8975f.firebaseio.com/', $_COOKIE['userIDToken']);
    
//     $user = $firebase->get('users/' . $args['userID']);
//     // die(var_dump($user));

//     $proof = new ProofOfAuthorization($user->signature, $user->signatureTimestamp, $user->signatureIP, $user->signatureIPFromHeaders);

//     $proof->Output();

//     return $response;
// });
