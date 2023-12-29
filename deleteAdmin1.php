<?php
// connecting to the mongodb
require __DIR__ . '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->Ecommerce;
 

// retriving the data entered in the serve
$custID = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);


$deleteCriteria = [
    "_id" => new MongoDB\BSON\ObjectID($custID)
];
 // deleting the data from the table
$deleteRes = $db->Admin->deleteOne($deleteCriteria);

// calling page displayAdmin.php
include('displayAdmin.php');

?>