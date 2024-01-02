<?php
            session_start();?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>NIKE CART</title>
    <link rel="icon" href="Images/Logo/NIKE LOGO.png">
    <style>
        .empty-cart-container {
            text-align: center;
            padding: 50px;
            background-color: #fff;
            border: 1px solid #ddd;
            margin: 20% auto;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .empty-cart-container h2 {
            color: #333;
        }

        .empty-cart-container p {
            color: #777;
        }

        .empty-cart-container img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }

        .empty-cart-container a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .empty-cart-container a:hover {
            background-color: #2980b9;
        }
        .buy-now-button {
    background-color: #5bc0de;
    color: #fff;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    margin-top: 20px;
}

.buy-now-button:hover {
    background-color: #46b8da;
}
.product-item {
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
    max-width: 300px; /* Set your preferred maximum width */
    margin: 90px auto 20px auto; /* Center the container horizontally */
    border: 1px solid black;
}

.product-item img {
    max-width: 100%;
    height: auto;
    object-fit: cover; /* You can use 'contain', 'fill', 'cover', etc. */
}
/* Add this to your existing styles.css */

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1em 0;
}

main {
    margin: 20px 0;
}

.product-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.product-item {
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
}

.product-item:hover {
    transform: translateY(-5px);
}

.product-item img {
    max-width: 100%;
    height: auto;
    object-fit: cover;
}

.item-details {
    padding: 15px;
}

.remove-button {
    background-color: #d9534f;
    color: #fff;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

.remove-button:hover {
    background-color: #c9302c;
}

.cart-summary {
    margin-bottom: 40px;
    padding-bottom: 20px;
    margin-left: 20px;
}

.checkout-button {
    background-color: #f60;
    color: #fff;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    margin-bottom: 50px;
}

.checkout-button:hover {
    background-color: green;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1em 0;
    position: fixed;
    width: 100%;
    bottom: 0;
}

/* Styles for Modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    position: relative;
}

.close {
    color: #aaa;
    font-size: 28px;
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

.remove-confirm-button,
.cancel-button {
    background-color: #5bc0de;
    color: #fff;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    font-size: 14px;
    margin-right: 10px;
    transition: background-color 0.3s ease;
}

.remove-confirm-button:hover,
.cancel-button:hover {
    background-color: #46b8da;
}
.iconsItems {
  display: flex;
  background-color: white;
  width: 100%;
  height: 10vh;
  justify-content: space-between;
  align-items: center;
} 

.icons {
  display: flex;
  flex-direction: row;
  color: white;
  width: 30%;
  align-items: center;
  justify-content: start;
}

.logoEonia {
  display: flex;
}
.logo{
  margin-left: 10px;
}

.logo img:hover {
  cursor: pointer;
  scale: 1.2;
  transition: 0.3s ease-in-out;
}


.nav-menuu {
  position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 20px;
  left: -20px;
  /* top: 8px; */
  /* gap: 0.3rem; */
  text-decoration: none;
  font-size: 1.2rem;
  transition: 0.5s ease-in-out;
  margin-bottom: 15px;
}

.hamburger {
  display: none;
  cursor: pointer;
}

.bar {
  display: block;
  width: 25px;
  height: 3px;
  margin: 5px 15px;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background-color: white;
}

@media(max-width:920px) {
  .hamburger {
    display: block;
  }

  .hamburger.active .bar:nth-child(2) {
    opacity: 0;
  }

  .hamburger.active .bar:nth-child(1) {
    transform: translateY(8px) rotate(45deg);
  }

  .hamburger.active .bar:nth-child(3) {
    transform: translateY(-8px) rotate(-45deg);
  }

  .nav-menuu {
    position: fixed;
    left: -100%;
    top: 70px;
    gap: 0;
    flex-direction: column;
    width: 100%;
    text-align: center;
    transition: 0.3s;
    background-color: rgba(0, 0, 0, 0.75);
    -webkit-backdrop-filter: blur(5px);
    backdrop-filter: blur(1px);
  }

  .nav-itemm {
    margin: 16px 0;
  }

  .nav-menuu.active {
    left: 0;
  }

  a.nav-linkk{
    color: white;
  }

  a.nav-linkk:hover{
    color: #f60;
  }

  a.nav-linkk:active{
    color: #f60;
  }
}


.nav-menuu {
  padding: 0;
  margin: 0;
  list-style: none;
  font-weight: 750;
}

.nav-itemm {
  display: inline-block;
  margin-right: 15px;
}

.nav-linkk {
  text-decoration: none;
  color: black;
  transition: color 0.3s ease-in-out, transform 0.3s ease-in-out;
}

.nav-itemm:hover .nav-linkk {
  color: #f60;
  transform: scale(1.5);
}

.nav-itemm:hover .nav-linkk:hover {
  text-decoration: none;
}

.ulMenWomen{
padding: 0;
margin: 0;
list-style: none;
font-weight: 750;
}

.liMenWomen{
display: inline-block;
margin-right: 15px;
}

.aMenWomen{
text-decoration: none;
color: black;
transition: color 0.3s ease-in-out, transform 0.3s ease-in-out;
font-size: 19.42px;
}

.liMenWomen:hover .aMenWomen{
  color: #f60;
  transform: scale(1.5);
}

.liMenWomen:hover .aMenWomen:hover{
  text-decoration: none;
}


#facebook:hover {
  color: #4267B2;
  cursor: pointer;
  scale: 1.7;
  transition: 0.3s ease-in-out;
}

#instagram:hover {
  color: #bc1888;
  cursor: pointer;
  scale: 1.7;
  transition: 0.3s ease-in-out;
}

#twitter:hover {
  color: #1DA1F2;
  cursor: pointer;
  scale: 1.7;
  transition: 0.3s ease-in-out;
}

#linkedin:hover {
  color: #0A66C2;
  cursor: pointer;
  scale: 1.7;
  transition: 0.3s ease-in-out;
}

#whatsapp:hover {
  color: #25D366;
  cursor: pointer;
  scale: 1.7;
  transition: 0.3s ease-in-out;
}
.aboutUs {
  background-color: #111111;
  display: flex;
  flex-direction: column;
  align-items: center;
  color: white;
}

.aboutUsTop {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  width: 100%;
  gap: 75px;
  margin-bottom: 15px;}

.subscribe {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;
  margin-left: 7.5px;
}

.subscribeButton{
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  background-color: black;
  min-height: 50px;
  min-width: 120px;
  margin-top: 5px;
  margin-bottom: 5px;
  border: 1px solid white;
  border-radius: 10px;
  font-weight: 600;
}

.unsubscribe {
  display: flex;
  flex-direction: column;
  margin-right: 7.5px;
}

#noPurchases {
  display: none;
}

.aboutUsBottom {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: baseline;
  margin-right: 15px;
  margin-left: 15px;
  margin-bottom: 1em;
}

.aboutEgy {
  display: flex;
  flex-direction: column;
  max-width: 40%;
  padding-right: 10px;
}

.importantLinks {
  display: flex;
  flex-direction: column;
}  
.contactMe{
  height: auto;
  padding-bottom: 25px;
  }
  .follow{
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  flex-direction: column;
  background-color: #111111
  }
  :root {
  --twitter: #1DA1F2;
  --facebook: #4267B2;
  --snapchat: #FFFC00;
  --linkedin: #0A66C2;
  }
  
  .background {
  place-items: center;
  height: 100vh;
  }
  
  .social-media-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 24px;
  margin-bottom: 15px;
  }
  
  .social-media-button {
  width: 58px;
  height: 58px;
  border-radius: 50%;
  outline: 2px solid white;
  cursor: pointer;
  transition: all 0.3s;
  display: grid;
  place-items: center;
  }
  
  .social-media-button img{
  width: 30px;
  height: 30px;
  }
  
  .social-media-button:hover {
  outline-offset: 3px;
  transition: all 0.3s;
  }
  
  .social-media-button a {
  transition: all 0.3s;
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 60%;
  min-height: 60%;
  width: 60px;
  }
  
  .social-media-button:hover img {
  transform: scale(1.15);
  }
  
  #instagram_id:hover{
  background: radial-gradient(
    circle at 30% 107%, #fdf497 0%, 
    #fdf497 5%, #fd5949 45%,
    #d6249f 60%,#285AEB 90%
  );
  }
  #twitter_id:hover{
  background-color: var(--twitter);
  }
  #facebook_id:hover{
  background-color: var(--facebook);
  }
  #snapchat_id:hover{
  background-color: var(--snapchat);
  }
  #linkedin_id:hover{
  background-color: #0A66C2;
  }
  .facebook-icon {
  width: 100%;
  height: 100%;
  background-color: transparent; /* Set the background color for the circle */
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  }
  .facebook-icon img {
  width: 30px;
  height: 30px;
  }
  .snapchat-icon {
  width: 100%;
  height: 100%;
  background-color: transparent; /* Set the background color for the circle */
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  }
  .snapchat-icon img{
  width: 30px;
  height: 30px;
  }
  #scrollUp { 
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 10px;
        font-size: 18px;
        opacity: 0.5;
      }

      #scrollUp svg {
        fill: black;
      }

      #scrollUp:hover {
        opacity: 1;
      }

      @media screen and (min-width: 960px) {
        #scrollUp {
          right: 3rem;
        }
      }

      #secondButton {
        box-shadow: 3px 4px 10px 1px #bdb8b8;
      }
      
    </style>
    <style>
      .contactMe{
    height: auto;
    padding-bottom: 25px;
    }
    .follow{
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    flex-direction: column;
    }
    :root {
    --twitter: #1DA1F2;
    --facebook: #4267B2;
    --snapchat: #FFFC00;
    --linkedin: #0A66C2;
    }
    
    .background {
    place-items: center;
    height: 100vh;
    }
    
    .social-media-buttons {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 24px;
    margin-bottom: 15px;
    }
    
    .social-media-button {
    width: 58px;
    height: 58px;
    border-radius: 50%;
    outline: 2px solid white;
    cursor: pointer;
    transition: all 0.3s;
    display: grid;
    place-items: center;
    }
    
    .social-media-button img{
    width: 30px;
    height: 30px;
    }
    
    .social-media-button:hover {
    outline-offset: 3px;
    transition: all 0.3s;
    }
    
    .social-media-button a {
    transition: all 0.3s;
    display: flex;
    justify-content: center;
    align-items: center;
    max-width: 60%;
    min-height: 60%;
    width: 60px;
    }
    
    .social-media-button:hover img {
    transform: scale(1.15);
    }
    
    #instagram_id:hover{
    background: radial-gradient(
      circle at 30% 107%, #fdf497 0%, 
      #fdf497 5%, #fd5949 45%,
      #d6249f 60%,#285AEB 90%
    );
    }
    #twitter_id:hover{
    background-color: var(--twitter);
    }
    #facebook_id:hover{
    background-color: var(--facebook);
    }
    #snapchat_id:hover{
    background-color: var(--snapchat);
    }
    #linkedin_id:hover{
    background-color: #0A66C2;
    }
    .facebook-icon {
    width: 100%;
    height: 100%;
    background-color: transparent; /* Set the background color for the circle */
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    }
    .facebook-icon img {
    width: 30px;
    height: 30px;
    }
    .snapchat-icon {
    width: 100%;
    height: 100%;
    background-color: transparent; /* Set the background color for the circle */
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    }
    .snapchat-icon img{
    width: 30px;
    height: 30px;
    }



  
  #facebook:hover {
    color: #4267B2;
    cursor: pointer;
    scale: 1.7;
    transition: 0.3s ease-in-out;
  }
  
  #instagram:hover {
    color: #bc1888;
    cursor: pointer;
    scale: 1.7;
    transition: 0.3s ease-in-out;
  }
  
  #twitter:hover {
    color: #1DA1F2;
    cursor: pointer;
    scale: 1.7;
    transition: 0.3s ease-in-out;
  }
  
  #linkedin:hover {
    color: #0A66C2;
    cursor: pointer;
    scale: 1.7;
    transition: 0.3s ease-in-out;
  }
  
  #whatsapp:hover {
    color: #25D366;
    cursor: pointer;
    scale: 1.7;
    transition: 0.3s ease-in-out;
  }
  
  .aboutUs {
    background-color: #111111;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;
  }
  
  .aboutUsTop {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    width: 100%;
    gap: 75px;
    margin-bottom: 15px;}
  
  .subscribe {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    margin-left: 7.5px;
  }
  
  .subscribeButton{
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    background-color: black;
    min-height: 50px;
    min-width: 120px;
    margin-top: 5px;
    margin-bottom: 5px;
    border: 1px solid white;
    border-radius: 10px;
    font-weight: 600;
  }
  
  .unsubscribe {
    display: flex;
    flex-direction: column;
    margin-right: 7.5px;
  }
  
  #noPurchases {
    display: none;
  }
  
  .aboutUsBottom {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: baseline;
    margin-right: 15px;
    margin-left: 15px;
    margin-bottom: 1em;
  }
  
  .aboutEgy {
    display: flex;
    flex-direction: column;
    max-width: 40%;
    padding-right: 10px;
  }
  
  .importantLinks {
    display: flex;
    flex-direction: column;
  }

  @media only screen and (max-width: 768px) {
    .aboutUsTop {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      gap: 10px;
    }
  
    .subscribe { 
      display: flex;
      justify-content: center;
      align-items: center;
    }
  
    .subscribe p {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 0;
    }
  
    .unsubscribe {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  }
  
  @media only screen and (max-width: 425px) {
    #purchases {
      display: none;
    }
  
    #noPurchases {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  
    .aboutUsBottom {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  
    .aboutEgy {
      max-width: 80%;
      display: flex;
      align-items: center;
      margin-bottom: 25px;
    }

    .importantLinks {
        display: flex;
        flex-direction: column;
        margin-bottom: 25px;
      }
    
      .contactWithUs{
        margin-bottom: 25px;
      }
  }
  
  @media only screen and (min-width: 425px) {
    .aboutUsBottom {
      flex-wrap: wrap;
    }
  }

  @media only screen and (min-width: 425px) {
    .aboutEgy {
      margin-bottom: 25px;
    }
  
    .importantLinks {
      margin-bottom: 25px;
    }
  
    .contactWithUs{
      margin-bottom: 25px;
    }
  }
  
  @media only screen and (min-width: 527px) {
    .aboutEgy {
      margin-right: 10px;
    } 
  
    .importantLinks {
      margin-right: 25px;
    }
  
    .contactWithUs{
      margin-right: 10px;
    }
  }
  
  @media only screen and (min-width: 385px) and (max-width: 485px){
    .social-media-buttons a{
      margin: 0 10px 0;
    }
  }
  
  @media only screen and (min-width: 485px) and (max-width: 535px){
    .social-media-buttons a{
      margin: 0 15px 0;
    }
  }
  
  @media only screen and (min-width: 535px) and (max-width: 555px){
    .social-media-buttons a{
      margin: 0;
    }
  }
    </style>
    <style>
      @media(max-width:425px){
        .empty-cart-container{
          padding: 5px;
        }
      }
    </style>
</head>
<body>
<div class="iconsItems" style=" position: fixed; top: 0px; z-index: 99;">
        <div class="logoEonia">
          <div class="logo">
            <a href="../../../indexUser.php">
              <img src="../../../Images/Logo/NIKE LOGO.png" alt="NIKE" height="30" width="90" />
            </a>
          </div>
        </div>

        <ul  class="ulMenWomen" >
            <li class= "liMenWomen">
              <a class="aMenWomen" href="../../menClothes/menClothes/menClothes.php">Men</a>
            </li>
            <li class="liMenWomen">
              <a class="aMenWomen" href="../../womenClothes/womenClothes/womenClothes.php">Women</a>
            </li>
          </ul>

        <ul class="nav-menuu">
          <li class="nav-itemm">
            <a class="nav-linkk" href="../../../indexUser.php">Home</a>
          </li>
          <li class="nav-itemm">
            <a class="nav-linkk" href="#contact_us">Contact</a>
          </li>
         <li class="nav-itemm">
          <a class="nav-linkk" href="#about_us">About</a>
         </li>
          <li class="nav-itemm">
            <a class="nav-linkk" href="viewCart.php">Cart</a>
           </li>
           <li class="nav-itemm">
            <a class="nav-linkk" style="cursor: pointer;" onclick="redirectToNewPage()">Log Out</a>
           </li>
        </ul>

        <script>

function redirectToNewPage() {
// Replace the current entry in the browser's history with the new page          
window.location.replace("index.php");
}


</script>

        <div class="hamburger">
          <span class="bar" style="background-color:black;"></span>
          <span class="bar" style="background-color:black;"></span>
          <span class="bar" style="background-color:black;"></span>
        </div>
      </div>
    <main class="container">
        <section class="cart-items">
            <div class="product-grid">
            <?php

            
            include_once('Connection.php');

            if(!$conn)
            {
            echo "Failed to connect!";
            die();
            }


            $email=$_SESSION["Email"];

            $sql = "SELECT * FROM cart WHERE USER_EMAIL = '$email'";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
            // Output data as JSON
            $rows = array();
            $totalprice=0;
            $totalitems=0;
            $_SESSION["totalitems"] = 0;
            while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
            $totalprice+=$row["PRICE"];
            $totalitems+=1;
            $myElement =
    '<div class="product-item">
    <img src="images/products/'.$row['FRONTFACE'].'" alt="'.$row['NAME'].'">
    <div class="item-details">
        <h2>'.$row['NAME'].'</h2>
        <p>Sport: '.$row['SPORT'].'</p>
        <p>Type: '.$row['TYPE'].'</p>
        <p>Price: '.$row['PRICE'].'</p>
        <p class="productId" style="display:none;">'.$row['ID'].'</p>
    </div>
    <button class="remove-button" onclick="removeContainer(this)">Remove</button>
</div>';
$_SESSION["totalitems"]=$totalitems;
echo $myElement;
}          } else {
    $myElement = '<div class="empty-cart-container">
    <h2>Your Cart is Empty</h2>
    <p>Add some items to your cart to get started.</p>
    <a class="messi" href="indexUser.php" style="background-color:#f60;">Explore Products</a>
</div>';

echo $myElement;
    //echo json_encode(array()); // Return an empty array if no users are found
}
$conn->close();
            ?>
            

                <!-- Add more product items as needed -->
            </div>
        </section>
<?php
//$_SESSION["totalitems"] = 0;
$totalitems = isset($totalitems) ? $totalitems : 0;
if($totalitems!=0){
    $checkout='<section class="cart-summary">
    <h2>Cart Summary</h2>
    <p>Total Items: '.$totalitems.' </p>
    <p>Total Price: '.$totalprice.'</p>
    <a href="checkOut.php?price='.$totalprice.'&totalitems='.$totalitems.'">
    <button class="checkout-button">Proceed to Checkout</button>
    </a>
</section>';
echo $checkout;
}

?>


    </main>
    <!-- Modal for Removing Items -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>Are you sure you want to remove this item from your cart?</p>
            <button class="remove-confirm-button" onclick="removeItem()">Yes, Remove</button>
            <button class="cancel-button" onclick="closeModal()">Cancel</button>
        </div>
    </div>
    <script>
        function removeContainer(button) {
            var container = button.closest('.product-item');
            var id = container.querySelector('p.productId').textContent;
            if (container) {
          

                container.remove();

                var xhr = new XMLHttpRequest();
                
               // var additionalVariable = "exampleValue"; // Replace with your variable

                xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                console.log(xhr.responseText);
                } else {
                console.error("Ajax request failed");
        }
    }
}

xhr.open("POST", "ajaxTani.php", true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

// Append the additional variable to the request body
var requestBody = "id=" + encodeURIComponent(id);

xhr.send(requestBody);


                
            }
            location.reload(true)
            
        }
    </script>
    <script>
        // Add this to your script.js file

function openModal() {
    product-item
}

function closeModal() {
    document.getElementById('myModal').style.display = 'none';
}

function removeItem() {
    // Add logic to remove the item from the cart
    console.log('Item removed from the cart');
    closeModal();
}

    </script>

    <script src="script.js"></script>
    <div id="about_us" class="aboutUs">
        <div class="aboutUsTop">
          <div class="subscribe">
            <div style="display: flex; align-items: center; margin-right: 10px">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-envelope"
                viewBox="0 0 16 16"
              >
                <path
                  d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"
                />
              </svg>
            </div>
            <div style="display: flex; flex-direction: column;">
              <p style="margin-bottom: 0; font-weight: bold">
                Reach us through our e-mail
              </p>
              <p id="purchases">
                 Register now and get 10% discount on your purchases!</p>
              <p id="noPurchases">Register to get 10% discount</p>
            </div>
          </div>
          
        </div>
        <div class="aboutUsBottom">
        <div class="aboutEgy">
            <p style="font-weight: bold; margin-bottom: 0">About NIKE</p>
            <p>
            Nike, founded in 1964, is a global leader in athletic and lifestyle wear, renowned for its innovation and iconic swoosh logo. Beyond cutting-edge sportswear, Nike is a cultural phenomenon, inspiring individuals with its "Just Do It" mantra. The brand's influence extends worldwide, shaping the future of fashion and athleticism.            </p>
          </div>
          <div class="importantLinks">
            <p style="font-weight: bold; margin-bottom: 0">Important links!</p>
            <ul style="list-style: none;">
              <a href="../../../whoAreWe.php" style="color: #f60;"><li>Who are we?</li></a>
              <a href="../../../privacyPolicy.php" style="color: #f60;"><li>Privacy Policy</li></a>
              <a href="../../../termsAndConditions.php" style="color: #f60;"><li>Terms and Conditions</li></a>
              <a href="../../../customerSupport.php" style="color: #f60;"><li>Customer Support</li></a>
            </ul>
          </div>
          <div class="contactWithUs">
            <p style="font-weight: bold; margin-bottom: 0">Contact with us</p>
            <ul>
              <li>
                WhatsApp: <br />
                +20 01121582715
              </li>
              <li>
                Mobile: <br />
                +20 01121582715
              </li>
              <li>
                Address: <br />
                Zamalek - Cairo - Egypt
              </li>
              <li>
                Email: <br />
                3adly1710@gmail.com
              </li>
            </ul>
          </div>

        </div>
      </div>

      <div class="follow">
        <div>
          <span class="background">
            <span class="social-media-buttons">
              <a href="https://instagram.com/ahmedadly17?igshid=MzMyNGUyNmU2YQ==">
                    <span class="social-media-button" id="instagram_id">
                    <img
                        alt="Instagram"
                        src="../../../Images/Social Media/instagram.svg"
                    />
                  </span>
                  </a>
                 <a href="https://twitter.com/3adly17?t=UbZ6ZExXFtu1SmEWr_-Gmg&s=09">
                    <span class="social-media-button" id="twitter_id">
                    <img
                        alt="Twitter"
                        src="../../../Images/Social Media/twitter.svg"
                    />
                  </span>
                  </a>
                  <a href="https://www.facebook.com/ahmedadly.1710?mibextid=ZbWKwL">
                <span class="social-media-button" id="facebook_id">
                  <div class="facebook-icon">
                      <img alt="Facebook" src="../../../Images/Social Media/facebook.svg" />
                    </div>
                  </span>
                </a>
                <a href="https://www.snapchat.com/add/adly1710?share_id=gsZzKNgzHw8&locale=en-GB">
                  <span class="social-media-button" id="snapchat_id">
                    <div class="snapchat-icon">
                      <img
                          alt="Snapchat"
                          src="../../../Images/Social Media/snapchat.svg"
                      />
                    </div>
                  </span>
                  </a>
                  <a href="https://www.linkedin.com/in/ahmed-adly-73662828b">
                    <span class="social-media-button" id="linkedin_id">
                    <img
                        alt="LinkedIn"
                        src="../../../Images/Social Media/linkedin.svg"
                    />
                  </span>
                  </a>
            </span>
        </span>
        </div>
      </div>

      <!-- SCROLL UP BUTTON  -->
      <a href="#" onclick="topFunction()" id="scrollUp" title="Go to top">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="1em"
          viewBox="0 0 384 512"
        >
          <path
            d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
          />
        </svg>
      </a>
      <!-- SCROLL UP BUTTON  -->
      <script src="JS/all.min.js"></script>
      <script src="JS/bootstrap.bundle.min.js"></script>
      <script src="JS/index.js"></script>
      <script src="JS/swiper-bundle.min.js"></script>
      <script>
        // for scroll up button
        // Get the button:
        let mybutton = document.getElementById("scrollUp");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction();
        };

        function scrollFunction() {
          if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
          ) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

    </script>    
    <script>



        //Hamburger JS
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menuu");

        hamburger.addEventListener("click", () => {
          hamburger.classList.toggle("active");
          navMenu.classList.toggle("active");
        });

        document.querySelectorAll(".nav-linkk").forEach((n) =>
          n.addEventListener("click", () => {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
          })
        );
      </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchBox = document.getElementById('search-box');
        const productContainers = document.querySelectorAll('#containerid .Card');

        searchBox.addEventListener('input', function () {
            const searchTerm = searchBox.value.toLowerCase();

            productContainers.forEach(function (productContainer) {
                const productName = productContainer.querySelector('h3').innerText.toLowerCase();

                // Check if the product name contains the search term
                if (productName.includes(searchTerm)) {
                    productContainer.style.display = 'block'; // Show the product
                } else {
                    productContainer.style.display = 'none'; // Hide the product
                }
            });
        });
    });
</script>


</body>
</html>