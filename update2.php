
<?php

include('commonCMS.php');
cmsHeader();
logo(); 

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client)->Ecommerce->Customer;

//Select a database
//$db = $mongoClient->Ecommerce;


//Extract the data that was sent to the server
$search_string = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

$search = [
    '_id' => new MongoDB\BSON\ObjectID($search_string)
];

//Create a PHP array with our search criteria
$findCriteria = [
    '$_id' => $search_string 
 ];

//Find all of the customers that match  this criteria
$cursor = $mongoClient->find($search);
//Output the results as forms  
foreach ($cursor as $cust){
    echo '<link rel="stylesheet" type="text/css" href="../css/update.css">';
    echo '<form action="update3.php" method="post">';
    echo'<label>Customer ID:</label>';
    echo '<input type="text" name="id" value="' . $cust['_id'] . '" required><br>';
    echo'<label>Name:</label>';
    echo '<input type="text" name="CustomerName" value="' . $cust['CustomerName'] . '" required><br>';
    echo'<label>Email:</label>';
    echo ' <input type="email" name="Email" value="' . $cust['Email'] . '" required><br>';
    echo'<label>Password:</label>';
    echo ' <input type="text" name="Password" value="' . $cust['Password'] . '" required><br>';
    echo'<label>TelNumber: </label>';
    echo '<input type="text" name="TelNumber" value="' . $cust['TelNumber'] . '" required><br>';  
    echo'<label>Address: </label>';
    echo ' <input type="text" name="Address" value="' . $cust['Address'] . '" required><br>'; 
    echo '<button class="button" type="submit">update</button>';
    echo '</form><br>';
}
?>