<?php
  // calling fuctions from commonCMS.php (cmsHeader and logo)
    include('commonCMS.php');
    cmsHeader();
    logo(); 
?>
<!-- link to the css file-->
<link rel="stylesheet" type="text/css" href="../css/deleteProduct.css">
</head>
<body>
    <!-- the form to add admin in the css -->
<form action="updateProduct1.php" method="post">
    Product ID: <input type="text" name="id" required>
    <!-- the button to add the entered details-->
    <button class="button" type="submit">Search</button>
</form>
</body>