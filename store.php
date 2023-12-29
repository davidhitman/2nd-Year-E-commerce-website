<!DOCTYPE html>
<html>
    <head>
         <!--title E-commerce-->
         <title>E-commerce</title>
         <!--linking to the css file-->
         <link rel="stylesheet" type="text/css" href="../css/style.css">
         <!--linking to  the library that contains logos-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <meta charset="utf-8">
        <title>Choose Your Style</title>
        <meta name="description" content="This is the description">
        <script src="../javascript/store.js" async></script>
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
                </nav>
            <h1 class="band-name band-name-large">Wear Your Style</h1>
        <br>
        <section class="container content-section">
            <h2 class="section-header"></h2>
        </br>
        <br>
        <!-- division containing products for the user to selecte them-->
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Nike Air Force 1</span>
                    <img style="height:300px; width:250px; top:0px; position:relative;" class="shop-item-image" src="../images/air-force-1-older-shoes-11jxCZ.jfif">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$100</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </br>
                <br>
                <div class="shop-item">
                    <span class="shop-item-title">Addidas Tennis</span>
                    <img style="height:300px; width:250px; top:0px; position:relative;" class="shop-item-image" class="shop-item-image" src="../images/addidas.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$80</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
            </br>
                <br>
                <div class="shop-item">
                    <span class="shop-item-title">Nike AF-1</span>
                    <img style="height:300px; width:250px; top:0px; position:relative;" class="shop-item-image" class="shop-item-image" src="../images/Nike1.jfif">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$160</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </br>
                <br>
                <div class="shop-item">
                    <span class="shop-item-title">Nike Air Jordon</span>
                    <img style="height:300px; width:250px; top:0px; position:relative;" class="shop-item-image" class="shop-item-image" src="../images/Nike2.jfif">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$90</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                    </div>
                </br>
                    <br>
                <div class="shop-item">
                    <span class="shop-item-title">Puma Trainers</span>
                    <img style="height:300px; width:250px; top:0px; position:relative;" class="shop-item-image" class="shop-item-image" src="../images/puma2.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$70</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </br>
                <br>
                <div class="shop-item">
                    <span class="shop-item-title">Addidas Heritage</span>
                    <img style="height:300px; width:250px; top:0px; position:relative;" class="shop-item-image" class="shop-item-image" src="../images/addidas2.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$130</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </br>
                <br>
                <div class="shop-item">
                    <span class="shop-item-title">Nike Air Force 1</span>
                    <img style="height:300px; width:250px; top:0px; position:relative;" class="shop-item-image" class="shop-item-image" src="../images/Addidas4.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$130</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </br>
                <br>
                <div class="shop-item">
                    <span class="shop-item-title">Puma Grip</span>
                    <img style="height:300px; width:250px; top:0px; position:relative;" class="shop-item-image" class="shop-item-image" src="../images/puma6.jfif">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$70</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </br>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
   
    </body>
</html>

