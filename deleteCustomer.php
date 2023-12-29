<?php
// connecting to the mongodb
    include('commonCMS.php');
    cmsHeader();
    logo(); 
?>
<!-- link to the css file-->
<link rel="stylesheet" type="text/css" href="../css/deleteCustomer.css">
</head>
<body>
    <!-- the form to add admin in the css --> 
<form action="deleteCustomer1.php" method="post">
    Customer ID: <input type="text" name="id" required>
    <!-- the button to add the entered details-->
    <button class="button" type="submit">Delete</button>
</form>
</body>