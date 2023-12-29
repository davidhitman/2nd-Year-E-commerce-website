
<script>
    // script to call displayProductsCMS.php
    window.onload=".../php/displayProductsCMS.php";
</script>
<?php
    // connecting to the mongodb
    require __DIR__ . '/vendor/autoload.php';
    $mongoClient = (new MongoDB\Client);
    $db = $mongoClient->Ecommerce;
    $collection = $db->Product; 

    // retriving the data entered in the serve
    $Name= filter_input(INPUT_POST, 'ProductName', FILTER_SANITIZE_STRING);
    $Price = filter_input(INPUT_POST, 'Price', FILTER_SANITIZE_STRING);
    $Size = filter_input(INPUT_POST, 'Size', FILTER_SANITIZE_STRING);
    $Brand = filter_input(INPUT_POST, 'Brand', FILTER_SANITIZE_STRING);
    $Color = filter_input(INPUT_POST, 'Color', FILTER_SANITIZE_STRING);

     // the array to be inserted in the mongodb database
    $dataArray = [
        "ProductName" => $Name, 
        "Price" => $Price, 
        "Size" => $Size,
        "Brand" => $Brand, 
        "Color" => $Color,
    ];
    // inserting the data in the mongodb database
    $insertResult = $collection->insertOne($dataArray);
    // calling page displayAdmin.php
    include('displayProductsCMS.php');
?>