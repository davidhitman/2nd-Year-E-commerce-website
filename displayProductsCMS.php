<?php
// connecting to the mongodb
    include('commonCMS.php');
    cmsHeader();
    logo();
// connecting to the mongodb
   require __DIR__ . '/vendor/autoload.php';
   $mongoClient = (new MongoDB\Client);
   $db = $mongoClient->Ecommerce;
   $collection = $db->Product;
   $mObj = $db->Product->find();
?>
<!-- link to the css file-->
<link rel="stylesheet" type="text/css" href="../css/displayProductsCMS.css">
</head>
<body>
    <!-- table to display the data -->
<table style="background-color:white;" class="table">
    <tr>
        <!-- table header -->
        <td style="font-size:20px; font-weight:bold;">Product ID</td>
        <td style="font-size:20px; font-weight:bold;">Product Name</td>
        <td style="font-size:20px; font-weight:bold;">Price</td>
        <td style="font-size:20px; font-weight:bold;">Size</td>
        <td style="font-size:20px; font-weight:bold;">Brand</td>
        <td style="font-size:20px; font-weight:bold;">Color</td>
    </tr>
    <?php
        foreach($mObj as $row){
    ?>
    <tr>
        <!-- retriving the data from mongodb and store it in the table -->
    <td><?php echo $row['_id'] ?></td>
    <td><?php echo $row['ProductName'] ?></td>
    <td><?php echo $row['Price'] ?></td>
    <td><?php echo $row['Size'] ?></td>
    <td><?php echo $row['Brand'] ?></td>
    <td><?php echo $row['Color'] ?></td>
    </tr>
    <?php
        };
    ?>
</table>
</body>
</html>