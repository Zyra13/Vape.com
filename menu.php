<?php
// Establish connection to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "vape";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Extract data from the provided code snippet
$prod1_img = "img/appleblck.jpg";
$prod1_title = "Juicy nerds amped apple blackberry";
$prod1_description = "Taste like a real candy";
$prod1_price = "Php 200.00";

$prod2_img = "img/grpsstraw.jpg";
$prod2_title = "Grapes and strawberry mentol";
$prod2_description = "Taste like re grapes and strawberry and cool sensation";
$prod2_price = "Php 220.00";

$prod3_img = "img/cheesecake.jpg";
$prod3_title = "Chuffed Dessert strawberry cheesecake";
$prod3_description = "Taste like real cheesecake";
$prod3_price = "Php 200.00";

$prod4_img = "img/yakult.jpg";
$prod4_title = "Iced Strawberry yakult";
$prod4_description = "Taste like real strawberry with the yakult and cooling sensation";
$prod4_price = "Php 280.00";

$prod5_img = "img/korean.jpg";
$prod5_title = "Korean dessert";
$prod5_description = "Taste sweet and delicious";
$prod5_price = "Php 290.00";

// Prepare the SQL statements to insert data into the table
$sql1 = "INSERT INTO your_table_name (prodimg, prodtitle, description, product_price)
         VALUES ('$prod1_img', '$prod1_title', '$prod1_description', '$prod1_price')";

$sql2 = "INSERT INTO your_table_name (prodimg, prodtitle, description, product_price)
         VALUES ('$prod2_img', '$prod2_title', '$prod2_description', '$prod2_price')";

$sql3 = "INSERT INTO your_table_name (prodimg, prodtitle, description, product_price)
         VALUES ('$prod3_img', '$prod3_title', '$prod3_description', '$prod3_price')";

$sql4 = "INSERT INTO your_table_name (prodimg, prodtitle, description, product_price)
         VALUES ('$prod4_img', '$prod4_title', '$prod4_description', '$prod4_price')";

$sql5 = "INSERT INTO your_table_name (prodimg, prodtitle, description, product_price)
         VALUES ('$prod5_img', '$prod5_title', '$prod5_description', '$prod5_price')";

// Execute the SQL statements
if ($conn->query($sql1) === TRUE &&
    $conn->query($sql2) === TRUE &&
    $conn->query($sql3) === TRUE &&
    $conn->query($sql4) === TRUE &&
    $conn->query($sql5) === TRUE) {
    echo "";
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Get what you want">
        <title>Vape</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
        
        <script src="https://kit.fontawesome.com/48d684c0c9.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="addToCart.js"></script>
    
    </head>

</head>
<body background="img/vapeback.jpg">
    <!--- Home --->
        <div class="container">
          <header>
            <!-- <div style="height: 30px; width: 30px; align-items: center;" class="logo"><a href="About.html"><img src="img/color.jpg" ></a></div> -->
            <h1>Choose the best Juice for you!</h1><br>

          </header>
            <div class="side-bar-left">
               
                <div class="navbar">
                    <nav>
                            <a style="color: #fff;" href="home1.html"><i class="fa-solid fa-house"></i></a> <br>
                            <a style="color: #fff;" href="about2.html">About us</a> <br>
                            <a style="color: #fff;"><i class="fa-solid fa-basket-shopping"  id="cart-icon"></i></a><br>
                            <a style="color: #fff;" href="logout.php"> <i class="fa-solid fa-right-from-bracket"></i></a>
                      
                    </nav>
                </div>
                        <div class="cart">
                                <h2 class="cart-title">My Juices</h2> 
                                
                            <div class="ccontent">

                            </div>
                            
                                    <div class="total">
                                        <div class="total-title">Total</div>
                                        <div class="total-price">₱0</div>
                                    </div>
                                    <button type="button" class="btn-buy">Order Now</button>
                                    <i class="fa-solid fa-xmark" id="cart-close"></i>
                            
                        </div>
            </div>
        </div>
    <!-- Product Menu-->
    <div class="content">
        <div class="categories">
        </div>
        <div style="margin-left: 40px;" class="menu">
            <div class="product">
                <img style="height: 300px; width: 230px;" src="img/appleblck.jpg" class="prodimg">
                <h3 class="prodtitle">Juicy nerds amped apple blackberry</h3>
                <p class="description">Taste like a real candy</p>
                <span class="product-price">Php 200.00</span>
                <button class="add1">Add to My Cart <i class="fa-solid fa-basket-shopping"></i></button>
            </div>
  
            <div class="product">
                <img style="height: 300px; width: 230px;" src="img/grpsstraw.jpg" class="prodimg">
                <h3 class="prodtitle">Taste like re grapes and strawberry and cool sensation.</h3>
                <p class="description"></p>
                <span class="product-price">Php 220.00</span>
                <button class="add1">Add to My Cart<i class="fa-solid fa-basket-shopping"></i></button>
            </div>

            <div class="product">
    
                <img style="height: 300px; width: 230px;" src="img/cheesecake.jpg" class="prodimg">
                <h3 class="prodtitle">Chuffed Dessert strawberry cheesecake</h3>
                <p class="description">Taste like real cheesecake</p>
                <span class="product-price">Php 200.00</span>
                <button class="add1">Add to My Cart <i class="fa-solid fa-basket-shopping"></i></button>
            </div>
    
            <div class="product">
    
                <img style="height: 300px; width: 230px;" src="img/yakult.jpg" class="prodimg">
                <h3 class="prodtitle">Iced Strawberry yakult</h3>
                <p class="description">Taste like real strawberry with the yakult and cooling sensation</p>
                <span class="product-price">Php 280.00</span>
                <button class="add1">AAdd to My Cart<i class="fa-solid fa-basket-shopping"></i></button>
            </div>
    
            <div class="product">
    
                <img style="height: 300px; width: 230px;" src="img/korean.jpg" class="prodimg">
                <h3 class="prodtitle">Korean dessert</h3>
                <p class="description">Taste sweet and delicious</p>
                <span class="product-price">Php 290.00</span>
                <button class="add1">Add to My Cart<i class="fa-solid fa-basket-shopping"></i></button>
            </div>
        </div>
        <div class="categories">
        </div>
    </div>
    <script src="menu.js"></script>
</body>
</html>

<style>
    

@import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Sono:wght@500&family=Staatliches&display=swap');body{
  margin: 0px;
  padding: 0px;
  background-color: #696363;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
header{
	background-color: rgba(238, 130, 238, 0.279);
  height: 50px;

}
.container{
  margin: auto;
}
h1{
  text-decoration: none;
    color: white;
    left: 50%;
    top: 10%;
    text-align: center;
    letter-spacing: 1x;
    font-size: 30px;
    font-family: 'Times New Roman', Times, serif;
}
.side-bar-left {
        height: 298px;
        width: 150px;
        background: rgba(238, 130, 238, 0.279);
        float: left;
        text-align: center;
        position: fixed;
        left: 0;
        top: 80px;
        z-index: 1;

    }
.navbar nav a { 
        background-color: rgba(88, 75, 88, 0.445);
        padding: 20px;
        letter-spacing: 4x;
        display: list-item;
        border-top: 1px solid rgb(79, 1, 79);
        border-bottom: 1px solid rgb(79, 1, 79);
    }
    .navbar nav a:hover {
        background-color: rgb(16, 15, 15);
        transition: 0.5s;
        letter-spacing: 4px;
        text-transform: uppercase;
    }
.logo img{
  width: 200px;
  height: 70px;
  padding-left: 50px;
}
.contact{
  font-size: 25px;
  padding-left: 100px;
} 
.contact a{
  text-decoration: none;
  color: #ffffff;
}
.contact a:hover{
  transition: .3s;
  color:rgba(128, 128, 128, 0.489);
  font-size: 23px;
}
/* .navbar{
  flex: 1;
  text-align: right;
  margin-right: 50px;
}
.navbar nav ul{
  display: inline-block;
  list-style-type: none;
}
.navbar nav ul li{
  display: inline-block;
  padding-right: 80px;
}
.navbar nav ul li a{
  text-decoration: none;
  color: rgb(255, 255, 255);
  font-family: 'Staatliches', cursive;
  font-size: 25px;
  transition: .3s;
}  
.navbar nav ul li i{
  font-size: 25px;
  transition: .3s;
  color: #fff;
  cursor: pointer;
}  
.navbar nav ul li i:hover{
  color:  violet;
}  
.navbar nav ul li a:hover{
  color:   rgb(183, 26, 183);
} */
.cart{
  display: inline-block;
  padding-right: 50px;
  text-decoration: none;
  color: rgb(0, 0, 0);
  transition: .3s;
}
.cart i{
  transition: .3s;
  color: #000000;
}
.cart i:hover{
  color: violet;
}  
.cart{
  position: fixed;
  top: 0;
  right: 0;
  right: -100%;
  width: 350px;
  height: 85vh;
  overflow-y: auto;
  overflow-x: hidden;
  padding: 30px;
  background-color: rgba(238, 130, 238, 0.481);
  box-shadow: -2px solid 4 px hsl(0, 4%, 15% /10%);
  border: 1px solid  rgba(0, 0, 0, 0.527);
  transition: 1.5s;
}
.cart.active{
  right: 0;
  transition: .5s;
}
.cart-title{
  font-family: 'Sono', sans-serif;
  text-align: center;
  font-size: 30px;
  font-weight: 600;
  margin-top: 2rem;
}
.cart-box{
  display: grid;
  grid-template-columns: 32% 50% 7%;
  align-items: center;
  gap: 1.5rem;
  margin-top: 1rem;
}
.cart-img{
  width: 100px;
  height: 100px;
  object-fit: contain;
  padding: 10px;
}
.details{
  display: grid;
  row-gap: .5rem;
  font-family: 'Staatliches', cursive;
}
.cart-prodname{
  font-size: 18px;
  text-transform: uppercase;
  text-align:left;
}
.cart-price{
  font-size: 18px;
  font-weight: 500;
  text-align: left;
}
.cart-quantity{
  border: 1px solid rgb(0, 0, 0);
  outline-color: var(--main-color);
  width: 2rem;
  text-align: center;
  font-size: 12px;
}
.cart-remove{
  font-size: 20px;
  color: var(--main-color);
  cursor: pointer;
}
.total{
  display: flex;
  justify-content: flex-end;
  margin-top: 25px;
  border-top: 2px solid rgba(0, 0, 0, 0.459);
  font-size: 20px;
}
.total-title{
  font-weight: 600;
}
.total-price{
  margin-left: 10px;
}
.btn-buy{
  display: flex;
  margin: 1.5rem auto 0 auto;
  padding: 12px 20px;
  border: none;
  background-color:  rgb(183, 26, 183);
  color: rgb(255, 255, 255);
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
}
.btn-buy:hover{
  background-color: #000000;
}
#cart-close{
  position: absolute;
  top: 1rem;
  right: .8rem;
  font-size: 1.5rem;
  color: black;
  cursor: pointer;
}

 .product h3{
  text-align: center;
  font-size: 25px;
  margin-top: 0;
  padding-top: 10px;
}
 .menu{
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  justify-content: center;
  align-items: center;
  margin: 30px 0;
}
 .product{
  width: 20%;
  margin: 50px;
  box-sizing: border-box;
  float: left;
  text-align: center;
  border-bottom-right-radius: 20px;
  border-bottom-left-radius: 20px;
  cursor: pointer;
  box-shadow: 0 14px 28px rgba(94, 94, 94, 0.25),
  0 10px 10px rgba(0, 0, 0, 0.22);
  transition: .4s;
  background: rgba(238, 130, 238, 0.511);
}
 .product img{
  width: 100%;
  height: 100%;
  text-align: center;
  margin: 0 auto;
  display: block;
}
 .product:hover{
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16),
  0 3px 6px rgba(165, 165, 165, 0.466);
  transform: translate(0px, -8px);
}
 .product p{
  font-family: 'Sono', sans-serif;
  font-size: 15px;
  text-align: center;
  padding-top: 0px 8px;
  margin-left: 20px;
  margin-right: 20px;
}
 .product a{
  text-decoration: none;
  color: black;
}
 .product-price{
  font-size: 25px;
  text-align: center;
  color: rgb(0, 0, 0);
  margin: 0;
  font-family: 'Luckiest Guy', cursive;
}
 .product button{
  font-size: 15px;
  color: #fff;
  width: 100%;
  padding: 20px;
  border: 0;
  outline: none;
  cursor: pointer;
  margin-top: 5px;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
 }
 .add1{
  background: violet;
 }
 @media(max-width:1000px){
  .product{
    width: 50%;
    margin: 15 auto;
  }
  .header{
    width: 110%;
  }
  .contact{
    text-indent: -9999px;  
    padding: 0;
  }
  .nav{
    padding: 15px;
  }
  .container{
    width: 100%;
    margin: 0 auto;
  }
  .shop{
    margin-top: 2rem;
  }
 }
 @media(max-width:500px){
  .product{
    width: 100%;
  }
 }
</style>