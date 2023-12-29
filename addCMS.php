<?php
    // calling fuctions from commonCMS.php (cmsHeader and logo)
    include('commonCMS.php');
    cmsHeader();
    logo(); 

?>
<!-- link to the css file-->
<link rel="stylesheet" type="text/css" href="../css/addCMS.css">
</head>
<body>
<!-- the form to add admin in the css -->
<form action="addProduct1.php" method="post" class="form">
    <label>Product Name:</label>
    <input type="text" name="ProductName" required><br>
    <label>Price: </label>
    <input type="text" name="Price" id="Price" required><br>
    <label>Size: </label>
    <input type="text" name="Size" id="Size" required><br>
    <label>Brand: </label>
    <input type="text" name="Brand" id="Brand" required><br>
    <label>Color: </label>
    <input type="text" name="Color" id="Color" required><br>
    <!-- the button to add the entered details-->
    <button type="submit" class="button">Add</button>
</form>
</body>
</html>