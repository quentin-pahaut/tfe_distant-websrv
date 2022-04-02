<?php
require_once 'vendor/autoload.php';
//accès aux erreurs sur MAMP
error_reporting(E_ALL);
ini_set('display_errors', 1);

// if (!isset($_POST['bike-amper'])) {
//     echo "No POST income";
// }else{
//     echo "POST sent";
// }
//
file_put_contents(
    './bike-ampers.json', 
    json_encode($_POST,true),
    FILE_APPEND
);




