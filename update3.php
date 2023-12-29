<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Ecommerce;

//Extract the customer details 
$name= filter_input(INPUT_POST, 'CustomerName', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_STRING);
$TelNumber = filter_input(INPUT_POST, 'TelNumber', FILTER_SANITIZE_STRING);
$Address = filter_input(INPUT_POST, 'Address', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

//Criteria for finding document to replace
$replaceCriteria = [
    "_id" => new MongoDB\BSON\ObjectID($id)
];

//Data to replace
$customerData = [
    "CustomerName" => $name,
    "Email" => $email,
    "Password" => $password,
    "TelNumber" => $TelNumber,
    "Address" => $Address,
];

//Replace customer data for this ID
$updateRes = $db->Customer->replaceOne($replaceCriteria, $customerData);
include('displayCustomer.php');