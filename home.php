<!DOCTYPE html>
<html>
    <head>
        <!--title E-commerce-->
        <title>E-commerce</title>
        <!--linking to the css and javascript files-->
        <link rel="stylesheet" type="text/css" href="../css/home.css">
        <script>
            function shop(){
                window.location.href = "../php/product.php";
            }
        </script>
        <!--linking to  the library that contains logos-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8">
    </head>
    <body>
        <!--setting the logo from the library that was linked to above-->
        <i class="fa fa-american-sign-language-interpreting" style="font-size: 50px;"></i>
        <p class="letter-H">H</p>
        <p class="letter-D">D</p>
        <!--setting the search bar and the button-->
        <input class="search-bar" type="text" name="search" placeholder="what are you looking for....">
        <button class="search-button">Search</button>
        <!--setting the navigation bar-->
        <nav class="navigation">
            <a class="link" href="home.php">Home</a>
            <a class="link" href="logIn.php">SignIn</a>
            <a class="link" href="store.php">Basket</a>
        </nav>
        <!--creating div with a button "shop now" to be clicked when the customer wants to buy-->
        <div class="shop-div">
            <p class="first-P">We sell lifestyle</p>
            <p class="second-P">Flat 40% on premium</p>
            <button class="buy-button" onclick="shop()">Shop Now</button>
        </div>
        <!--div containing the addidas, nike, and puma logos-->
        <!--the footer-->
        <div class="footer">
            <p class="footer1">Contact</p>
            <p class="footer2">Email: shoes@gmail.com</p>
            <p class="footer3">Phone: +44 774 5676 431</p>
            <p class="footer4">We sell lifestyle</p>  
        </div>
    </body>
</html>