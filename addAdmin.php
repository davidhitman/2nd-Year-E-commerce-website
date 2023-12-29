<?php
// calling fuctions from commonCMS.php (cmsHeader and logo)
    include('commonCMS.php');
    cmsHeader();
    logo(); 

?>
<!-- link to the css file-->
<link rel="stylesheet" type="text/css" href="../css/addAdmin.css">
</head>
<body>
<!-- the form to add admin in the css -->
<form action="addAdmin1.php" method="post" class="form">
    <label>Admin Name:</label>
    <input type="text" name="AdminName" required><br>
    <label>Email: </label>
    <input type="text" name="Email" id="Price" required><br>
    <label>Password: </label>
    <input type="password" name="Password" id="Size" required><br>
    <label>Tel Number: </label>
    <input type="text" name="TelNumber" id="Brand" required><br>
    <label>Address: </label>
    <input type="text" name="Address" id="Color" required><br>
    <!-- the button to add the entered details-->
    <button type="submit"  class="button">Add</button>
</form>
</body>
</html>
