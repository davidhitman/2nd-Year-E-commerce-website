<?php
// connecting to the mongodb
require __DIR__. '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->Ecommerce;
$collection = $db->Customer;


    //Get name and address strings - need to filter input to reduce chances of SQL injection etc.
    $name= filter_input(INPUT_POST, 'CustomerName', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
    $telNum = filter_input(INPUT_POST, 'TelNumber', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'Address', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_STRING);
    
    
    if($name != "" && $email != "" && $telNum != "" && $address != "" && $password != ""){//Check query parameters 
        //STORE REGISTRATION DATA IN MONGODB
        
        $customerData = [
        "CustomerName" => $name,
        "Email" => $email,
        "TelNumber" => $telNum,
        "Address" => $address,
        "Password" => $password,
        ];
    }
// insert the data into the table
$insertresult = $collection->insertOne($customerData);
?>