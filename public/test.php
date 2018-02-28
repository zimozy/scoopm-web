<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
echo exec('whoami');
phpinfo();
// require '../app/CheckrCandidate.php';
// use ScoopM\CheckrAPI\CheckrCandidate;

// $candidate = new CheckrCandidate(
//     'Thom',
//     'James',
//     'Jones',
//     'your.name@example.com',
//     '5555555555',
//     '90401',
//     '1970-01-22',
//     '111-11-2001',
//     'F1112001',
//     'CA'
// );

// $candidate->execute();

// echo $candidate->getID();