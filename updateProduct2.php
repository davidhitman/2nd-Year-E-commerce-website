<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Ecommerce;

//Extract the customer details 
$name= filter_input(INPUT_POST, 'ProductName', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'Price', FILTER_SANITIZE_STRING);
$size = filter_input(INPUT_POST, 'Size', FILTER_SANITIZE_STRING);
$brand = filter_input(INPUT_POST, 'Brand', FILTER_SANITIZE_STRING);
$color = filter_input(INPUT_POST, 'Color', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

//Criteria for finding document to replace
$replaceCriteria = [
    "_id" => new MongoDB\BSON\ObjectID($id)
];

//Data to replace
$customerData = [
    "ProductName" => $name,
    "Price" => $price,
    "Size" => $size,
    "Brand" => $brand,
    "Color" => $color,
];

//Replace customer data for this ID
$updateRes = $db->Product->replaceOne($replaceCriteria, $customerData);
include('displayProductsCMS.php');