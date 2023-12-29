<?php
    // calling fuctions from commonCMS.php (cmsHeader and logo)
    include('commonCMS.php');
    cmsHeader();
    logo(); 

?>
<!-- link to the css file-->
<link rel="stylesheet" type="text/css" href="../css/addCustomer.css">
</head>
<body>
<!-- the form to add admin in the css -->
<form action="addCustomer1.php" method="post" class="form">
    <label>Customer Name:</label>
    <input type="text" name="CustomerName" required><br>
    <label>Email: </label>
    <input type="text" name="Email" id="Price" required><br>
    <label>Tel Number: </label>
    <input type="text" name="TelNumber" id="Size" required><br>
    <label>Address: </label>
    <input type="text" name="Address" id="Brand" required><br>
    <label>Password: </label>
    <input type="password" name="Password" id="Color" required><br>
    <!-- the button to add the entered details-->
    <button type="submit" class="button">Add</button>
</form>
</body>
</html>