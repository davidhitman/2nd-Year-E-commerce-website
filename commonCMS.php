<?php
// fuction cmsHeader to open the header in html
function cmsHeader(){
    echo '<!DOCTYPE html>
    <html>
    <head>
    <title>E-commerce CMS</title>
    <!-- Link to external style sheet -->
    <link rel="stylesheet" type="text/css" href="../css/commonCMS.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">';
}
// logo that contains the logo and the navigation bar
function logo(){
	echo'<div class="logo">
    <i class="fa fa-american-sign-language-interpreting" style="font-size: 50px;"></i>
	<P class="logoText">H <span class="d">D</span></p>
    <nav class="navigation">
    <div class="dropdown1">
    <button class="dropbtn1">Products
    <i id="i1" class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content1">
    <a href="addCMS.php">Add</a>
    <a href="displayProductsCMS.php">Display</a>
    <a href="deleteProduct.php">Delete</a>
    <a href="updateProduct.php">Update</a>
    </div>
    </div>

    <div class="dropdown2">
    <button class="dropbtn2">Customers
    <i id="i2" class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content2">
    <a href="addCustomer.php">Add</a>
    <a href="displayCustomer.php">Display</a>
    <a href="#">Orders</a>
    <a href="deleteCustomer.php">Delete</a>
    <a href="update1.php">Update</a>
    </div>
    </div>

    <div class="dropdown3">
    <button class="dropbtn3">Admin
    <i id="i3" class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content3">
    <a href="addAdmin.php">Add</a>
    <a href="displayAdmin.php">Display</a>
    <a href="deleteAdmin.php">Delete</a>
 
    </div>
    </div>
    <a href="home.php" class="homeLink" style="background-color: rgba(0, 0, 0, 0);">Home</a>
    </nav>
	</div>
    <div class="cms">
       <p class="txt">Content Managment System</P>
    </div>';
}
?>