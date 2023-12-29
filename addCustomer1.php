<?php
    // connecting to the mongodb
    require __DIR__ . '/vendor/autoload.php';
    $mongoClient = (new MongoDB\Client);
    $db = $mongoClient->Ecommerce;
    $collection = $db->Customer; 

    // retriving the data entered in the serve
    $CustomerName= filter_input(INPUT_POST, 'CustomerName', FILTER_SANITIZE_STRING);
    $Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
    $TelNumber = filter_input(INPUT_POST, 'TelNumber', FILTER_SANITIZE_STRING);
    $Address = filter_input(INPUT_POST, 'Address', FILTER_SANITIZE_STRING);
    $Password = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_STRING);

    // the array to be inserted in the mongodb database
    $dataArray = [
        "CustomerName" => $CustomerName, 
        "Email" => $Email, 
        "TelNumber" => $TelNumber,
        "Address" => $Address, 
        "Password" => $Password,
    ];
    // inserting the data in the mongodb database
    $insertResult = $collection->insertOne($dataArray);
    // calling page displayAdmin.php
    include('displayCustomer.php');

?>