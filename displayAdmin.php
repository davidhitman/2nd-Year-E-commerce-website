<?php
    // connecting to the mongodb
    include('commonCMS.php');
    cmsHeader();
    logo();

    // connecting to the mongodb
   require __DIR__ . '/vendor/autoload.php';
   $mongoClient = (new MongoDB\Client);
   $db = $mongoClient->Ecommerce;
   $collection = $db->Admin;
   $mObj = $db->Admin->find();
?>
<!-- link to the css file-->
<link rel="stylesheet" type="text/css" href="../css/displayAdmin.css">
</head>
<body>
    <!-- table to display the data -->
<table style="background-color:white;" class="table">
    <tr>
        <!-- table header -->
    <td style="font-size:20px; font-weight:bold;">Admin ID</td>
        <td style="font-size:20px; font-weight:bold;">Admin Name</td>
        <td style="font-size:20px; font-weight:bold;">Email</td>
        <td style="font-size:20px; font-weight:bold;">Password</td>
        <td style="font-size:20px; font-weight:bold;">Tel Number</td>
        <td style="font-size:20px; font-weight:bold;">Address</td>
    </tr>
    <?php
        foreach($mObj as $row){
    ?>
    <tr>
        <!-- retriving the data from mongodb and store it in the table -->
    <td><?php echo $row['_id'] ?></td>
    <td><?php echo $row['AdminName'] ?></td>
    <td><?php echo $row['Email'] ?></td>
    <td><?php echo $row['Password'] ?></td>
    <td><?php echo $row['TelNumber'] ?></td>
    <td><?php echo $row['Address'] ?></td>
    </tr>
    <?php
        };
    ?>
</table>
</body>
</html>