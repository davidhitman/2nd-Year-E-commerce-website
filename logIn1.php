<?php
    //Start session management
    session_start();

    //Get name and address strings - need to filter input to reduce chances of SQL injection etc.
    $email= filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_STRING);    

    //Connect to MongoDB and select database
	require __DIR__ . '/vendor/autoload.php';//Include libraries
	$mongoClient = (new MongoDB\Client);//Create instance of MongoDB client
	$db = $mongoClient->Ecommerce;
	
    //Create a PHP array with our search criteria
    $findCriteria = [ "Email" => $email ];

    if (isset($_POST['check1'])){
        $resultArray = $db->Admin->find($findCriteria)->toArray();

        //Check that there is exactly one customer
        if(count($resultArray) == 0){
            echo 'Customer email not found';
            return;
        }
        else if(count($resultArray) > 1){
            echo 'Database error: Multiple customers have same email address.';
            return;
        }
        // check if the password is correct
        $customer = $resultArray[0];
        if($customer['Password'] != $password){
            echo 'Password incorrect.';
            return;
        }
        else if($customer['Password'] == $password){
            include('displayProductsCMS.php');     
        }
    }
    else {

        //Find all of the customers that match  this criteria
        $resultArray = $db->Customer->find($findCriteria)->toArray();

        //Check that there is exactly one customer
        if(count($resultArray) == 0){
            echo 'Customer email not found';
            return;
        }
        else if(count($resultArray) > 1){
            echo 'Database error: Multiple customers have same email address.';
            return;
        }
   
        //Get customer and check password
        $customer = $resultArray[0];
        if($customer['Password'] != $password){
            echo 'Password incorrect.';
            return;
        }
        else if($customer['Password'] == $password){
            include('product.php');
        }
    }
    //Start session for this user
    $_SESSION['loggedInUserEmail'] = $email;
        

    
?>