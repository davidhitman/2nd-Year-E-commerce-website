<!DOCTYPE html>
<html>
    <head>
        <!--title E-commerce-->
        <title>E-commerce</title>
        <!--linking to the css file-->
        <link rel="stylesheet" type="text/css" href="../css/product.css">
        <!--linking to  the library that contains logos-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="logo-div">
            <!--setting the logo from the library that was linked to above-->
            <i class="fa fa-american-sign-language-interpreting" style="font-size: 50px;"></i>
            <p class="letter-H">H</p>
            <p class="letter-D">D</p>
            <!--setting the search bar and the button-->
            <input class="search-bar" type="text" placeholder="what are you looking for....">
            <button class="search-button">Search</button>
            <!--setting the navigation bar-->
            <nav class="navigation">
                <a class="link" href="home.php">Home</a>
                <a class="link" href="login.php">SignIn</a>
                <a class="link" href="store.php">Basket</a>
            </nav>
        </div>
        <!--the div that contains the welcoming statement to the user-->
        <div class="sec-div">
            <p class="p-store">Welcome to our <span>H</span><span>D</span> Store</p>
            <p class="p-store1">We have the best shoes for you. No need to hunt around, we have all in one place</p>
            <button class="sort" onclick="sort()">Sort By Price</button>
        </div>
        <!--the products details and there description are shown below-->
        <a href="" style="text-decoration:none;">
            <div style="height:250; width:250px; background-color:white; top:250px; left:80px; position:absolute;">
               <img style="height:300px; width:250px; top:0px; position:relative;" src="../images/air-force-1-older-shoes-11jxCZ.jfif">
               <p style="  position:relative; left:3px; color:black;">Kick it in comfort in the Nike Air Force 1.The feel of classic leather and details that made this shoe an icon are sure to make your sneaker style stand out on the street.

                Colour Shown: White/Black
                Style: CT3839-100. Price: £100</p> 
            <div>
        </a>
        <!-- displaying the products in differents divisions -->
        <a href="" style="text-decoration:none;">
            <div style="height:250; width:250px; background-color:white; top:0px; left:300px; position:absolute;">
               <img style="height:300px; width:250px; top:0px; position:relative;" src="../images/addidas.jpg">
               <p style="  position:relative; left:3px; color:black;">Ace the style game in these tennis-inspired shoes. They're classic 3-Stripes shoes with a sporty build for comfort that lasts past sundown. The sockliner provides a soft feel for long days on your feet.
                Style: CT3839-100. Price: £80</p> 
            <div>
        </a>
        </a>
        <a href="" style="text-decoration:none;">
            <div style="height:250; width:250px; background-color:white; top:0px; left:300px; position:absolute;">
               <img style="height:300px; width:250px; top:0px; position:relative;" src="../images/Nike1.jfif">
               <p style="  position:relative; left:3px; color:black;"> You're no stranger to the iconic AF-1.Crisp overlays, bold accents and Air-Sole cushioning have been celebrating its hoops-inspired heritage for decades.Make the legacy your own by putting premium leather and suede where you want it.
                 Price: £160</p> 
            <div>
        </a>
        <a href="" style="text-decoration:none;">
            <div style="height:250; width:250px; background-color:white; top:0px; left:300px; position:absolute;">
               <img style="height:300px; width:250px; top:0px; position:relative;" src="../images/Nike2.jfif">
               <p style="  position:relative; left:3px; color:black;">Inspired by one of the most iconic sneakers of all time, the Air Jordan 1 G is an instant classic. With Air in the heel, a Jumpman on the insole and an integrated traction pattern, it recreates the look of the low-cut original.
               <br> Price: £90</p> 
            <div>
        </a>
        <a href="" style="text-decoration:none;">
            <div style="height:250; width:250px; background-color:white; top:500px; right:900px; position:absolute;">
               <img style="height:300px; width:250px; top:0px; position:relative;" src="../images/puma2.jpg">
               <p style="  position:relative; left:3px; color:black;">Puma mid-profile lace up trainers are an update to the RS whilst keeping the core cushioning technology with the PU midsole and removable sockliner providing maximum comfort. 37323607
                 <br>Price: £70</p> 
            <div>
        </a>
        <a href="" style="text-decoration:none;">
            <div style="height:250; width:250px; background-color:white; top:0px; left:300px; position:absolute;">
               <img style="height:300px; width:250px; top:0px; position:relative;" src="../images/addidas2.jpg">
               <p style="  position:relative; left:3px; color:black;"> As you dare to step outside the box, these adidas shoes accent every stride with that same boldness. This updated version of a classic silhouette stays true to its heritage while bringing new attitude to your look.
               <br> Price: £110</p> 
            <div>
        </a>
        <a href="" style="text-decoration:none;">
            <div style="height:250; width:250px; background-color:white; top:0px; left:300px; position:absolute;">
               <img style="height:300px; width:250px; top:0px; position:relative;" src="../images/Addidas4.jpg">
               <p style="  position:relative; left:3px; color:black;">Kick it in comfort in the Nike Air Force 1.The feel of classic leather and details that made this shoe an icon are sure to make your sneaker style stand out on the street.
                Colour Shown: White/Black
                <br> Price: £130</p> 
            <div>
        </a>
        <a href="" style="text-decoration:none;">
            <div style="height:250; width:250px; background-color:white; top:0px; left:300px; position:absolute;">
               <img style="height:300px; width:250px; top:0px; position:relative;" src="../images/puma6.jfif">
               <p style="  position:relative; left:3px; color:black;"> Beat your time then beat it again in Deviate NITRO. This high-performance running shoe is packed with tech for the fastest runs. At the bottom, you get durable, PUMAGRIP tract...
                Style: 194449_11
                <br>Price: £50</p> 
            <div>
        </a>
        <script>
            // script to call the sort page when the sort button is clicked
            function sort(){
                window.location.href = "sort.php";
            }
        </script>
    </body>
</html>