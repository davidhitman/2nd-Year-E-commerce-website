<?php

include('commonCMS.php');
cmsHeader();
logo(); 

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client)->Ecommerce->Product;

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
    echo '<form action="updateProduct2.php" method="post">';
    echo'<label>Product ID:</label>';
    echo '<input type="text" name="id" value="' . $cust['_id'] . '" required><br>';
    echo'<label>Product Name:</label>';
    echo '<input type="text" name="ProductName" value="' . $cust['ProductName'] . '" required><br>';
    echo'<label>Price:</label>';
    echo ' <input type="text" name="Price" value="' . $cust['Price'] . '" required><br>';
    echo'<label>Size:</label>';
    echo ' <input type="text" name="Size" value="' . $cust['Size'] . '" required><br>';
    echo'<label>Brand: </label>';
    echo '<input type="text" name="Brand" value="' . $cust['Brand'] . '" required><br>';  
    echo'<label>Color: </label>';
    echo ' <input type="text" name="Color" value="' . $cust['Color'] . '" required><br>'; 
    echo '<button class="button" type="submit">update</button>';
    echo '</form><br>';
}
?>