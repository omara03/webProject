<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="womenClothes.css">
    <title>NIKE WOMEN</title>
    <link rel="icon" href="../../../Images/Logo/NIKE LOGO.png">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nike" rel="stylesheet">
    <style>
      @font-face {
  font-family: 'Nike';
  src: url('../../../webfonts/Futura Condensed Extra Bold.otf') format('opentype');
}
    </style>
    <style>
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
ul{
  list-style-type: none
}
    </style>
</head>
<body >
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
          <a class="nav-linkk" href="../../../contactPage.php">Contact</a>
          </li>
         <li class="nav-itemm">
          <a class="nav-linkk" href="#about_us">About</a>
         </li>
         <li class="nav-itemm">
            <a class="nav-linkk" href="../../../viewCart.php">Cart</a>
           </li>
         <li style="text-decoration: none;">
          <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="Search NIKE's WOMEN"
            style="border-radius: 5px;
            height: 30px;
            background-color: lightgrey;
            color: white;
            border: 2px solid black;
            border-radius: 8px">
            <label for="search-box" class="fas fa-search"> </label>
          </form>
          <li class="nav-itemm">
            <a class="nav-linkk" style="cursor: pointer;" onclick="redirectToNewPage()">Log Out</a>
           </li>
          </li>
        </ul>

        <script>
        function redirectToNewPage() {
            // Replace the current entry in the browser's history with the new page          
            window.location.replace("../../../index.php");
            }
            
          
           </script>

        <style>
          #search-box::placeholder{
            color:grey;
          }
        </style>

        <div class="hamburger">
          <span class="bar" style="background-color:black;"></span>
          <span class="bar" style="background-color:black;"></span>
          <span class="bar" style="background-color:black;"></span>
        </div>
      </div>
      <div class="WomenBackground">
        <!-- <img src="../../../Images/Products/WomenWallpaper.jpg" alt="WomenWallpaper"> -->
    </div>
  
    <div class="Essentials">
        <div class="EssentialText" style="display: flex; justify-content: center;"><h2>Shop The Essentials</h2></div>
        <div class="EssentialPics" style="display: flex; justify-content: center; gap: 10px; flex-direction: row; flex-wrap: wrap;">
  <div class="Essential1">
  <a href="Pages/menClothes/menClothes/menClothes.php" style="text-decoration:none; color:black;">
    <img src="../../../Images/Products/Essential1W.jpg" alt="Essential 1" style="width: 100%; height: 100%; object-fit: cover;">
    <h2>Clothing</h2>
  </a>
  </div>
  <div class="Essential2">
  <a href="Pages/womenClothes/womenClothes/womenClothes.php" style="text-decoration:none; color:black;">
    <img src="../../../Images/Products/Essential2W.jpg" alt="Essential 2" style="width: 100%; height: 100%; object-fit: cover;">
 <h2>Shoes</h2> 
  </a>
  </div>
</div>
      </div>

      <div class="JustIn">
        <div class="JustInText" style="display: flex; justify-content: center;"><h2>Just In</h2></div>
        <div class="EssentialPics" style="display: flex; justify-content: center; gap: 10px; flex-direction: row; flex-wrap: wrap;">
  <div class="JustIn1" style="width: 400px; height: 450px; margin-bottom: 80px; flex-direction:row;">
  <a href="../../singleProduct/singleProduct.php?id=49" style="text-decoration:none; color:black;">
    <img src="../../../Images/Products/JustIn1W.jpg" alt="Essential 1" style="width: 100%; height: 100%; object-fit: cover;">
    <button class="shop_men_button" id="test">Shop&emsp;&#8594;</button>
   
  </a>
  </div>
  <div class="JustIn2" style="width: 350px; height: 450px; margin-bottom: 80px; flex-direction:row;">
  <a href="../../singleProduct/singleProduct.php?id=50" style="text-decoration:none; color:black;">
    <img src="../../../Images/Products/JustInW.jpg" alt="Essential 2" style="width: 100%; height: 100%; object-fit: cover;">
    <button class="shop_men_button" id="test">Shop&emsp;&#8594;</button>
  </a>
  </div>
  <div class="JustIn3" style="width: 400px; height: 450px; margin-bottom: 80px; flex-direction:row;">
  <a href="../../singleProduct/singleProduct.php?id=51" style="text-decoration:none; color:black;">
    <img src="../../../Images/Products/JustIn3W.jpg" alt="Essential 1" style="width: 100%; height: 100%; object-fit: cover;">
    <button class="shop_men_button" id="test">Shop&emsp;&#8594;</button>
   
  </a>
  </div>
</div>
      </div>
      <div class="container mt-5">
    <h2 class="text-center mb-4">Comming Soon</h2>
        <div id="photoSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#photoSlider" data-slide-to="0" class="active"></li>
                <li data-target="#photoSlider" data-slide-to="1"></li>
                <li data-target="#photoSlider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../../Images/Products/JumpmanW1.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="../../../Images/Products/Jumpman2W.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="../../../Images/Products/Jumpman3W.jpeg" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#photoSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#photoSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
    <div class="containerClothes" id="containerid" style="gap: 50px;">

    <div class="containerClothesFootball" id="Sport">

    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "eonia";
     
    $conn = mysqli_connect($server, $user, $pass, $dbname,3307);
    $sql = "SELECT * FROM product WHERE TYPE = 'Clothing' AND SPORT = 'Football' AND GENDER = 'F';";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
            // Output data as JSON
            $rows = array();
         
            while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
            $myElement =
    '<div class="Card">
        <div class="Photo">
          <img src="../../../Images/Products/'.$row["FRONTFACE"].'" alt="'.$row["NAME"].'" style="display: flex; align-items: center; justify-content: center;">
        </div>
        <div class="Allcarditems"> 
          <div class="ProductDescription" style="margin: 0 15px;">
          <div>
            <h3>"'.$row["NAME"].'"</h3>
          </div>
          <div class="productprice">
          <s style="color: red;">'.$row["PREVIOUSPRICE"].' L.E</s>
          <Span>'.$row["PRICE"].' L.E</Span>
      </div>
      </div>
      <div style="display: flex;justify-content: center;align-items: center;">
        <a href="../../singleProduct/singleProduct.php?id='.$row["ID"].'" style="text-decoration: none;">
          <button class="BuyNowButton" style="cursor: pointer;">Shop</button>
        </a>
      </div>
      </div>
    </div>';
echo $myElement;
}          } 
$conn->close();
    ?>







    


    

    

    

    </div>
    <div class="containerClothesTennis" id="Sport">
    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "eonia";
    
    $conn = mysqli_connect($server, $user, $pass, $dbname,3307);
    $sql = "SELECT * FROM product WHERE TYPE = 'Clothing' AND SPORT = 'Tennis' AND GENDER = 'F';";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
            // Output data as JSON
            $rows = array();
          
            while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
            $myElement =
    '<div class="Card">
        <div class="Photo">
          <img src="../../../Images/Products/'.$row["FRONTFACE"].'" alt="'.$row["NAME"].'" style="display: flex; align-items: center; justify-content: center;">
        </div>
        <div class="Allcarditems"> 
          <div class="ProductDescription" style="margin: 0 15px;">
          <div>
            <h3>"'.$row["NAME"].'"</h3>
          </div>
          <div class="productprice">
          <s style="color: red;">'.$row["PREVIOUSPRICE"].' L.E</s>
          <Span>'.$row["PRICE"].' L.E</Span>
      </div>
      </div>
      <div style="display: flex;justify-content: center;align-items: center;">
        <a href="../../singleProduct/singleProduct.php?id='.$row["ID"].'" style="text-decoration: none;">
          <button class="BuyNowButton" style="cursor: pointer;">Shop</button>
        </a>
      </div>
      </div>
    </div>';
echo $myElement;
}          } 
$conn->close();
    ?>


    </div>
    <div class="containerClothesBasketball" id="Sport">
    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "eonia";
    
    $conn = mysqli_connect($server, $user, $pass, $dbname,3307);
    $sql = "SELECT * FROM product WHERE TYPE = 'Clothing' AND SPORT = 'Basketball' AND GENDER = 'F';";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
            // Output data as JSON
            $rows = array();
         
            while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
            $myElement =
    '<div class="Card">
        <div class="Photo">
          <img src="../../../Images/Products/'.$row["FRONTFACE"].'" alt="'.$row["NAME"].'" style="display: flex; align-items: center; justify-content: center;">
        </div>
        <div class="Allcarditems"> 
          <div class="ProductDescription" style="margin: 0 15px;">
          <div>
            <h3>"'.$row["NAME"].'"</h3>
          </div>
          <div class="productprice">
          <s style="color: red;">'.$row["PREVIOUSPRICE"].' L.E</s>
          <Span>'.$row["PRICE"].' L.E</Span>
      </div>
      </div>
      <div style="display: flex;justify-content: center;align-items: center;">
        <a href="../../singleProduct/singleProduct.php?id='.$row["ID"].'" style="text-decoration: none;">
          <button class="BuyNowButton" style="cursor: pointer;">Shop</button>
        </a>
      </div>
      </div>
    </div>';
echo $myElement;
}          } 
$conn->close();
    ?>

    </div>
    
    </div>

    <div class="containerShoes" id="containerid" style="gap: 50px;">
    
    <div class="containerShoesFootball" id="Sport">
    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "eonia";
    
    $conn = mysqli_connect($server, $user, $pass, $dbname,3307);
    $sql = "SELECT * FROM product WHERE TYPE = 'Shoes' AND SPORT = 'Football' AND GENDER = 'F';";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
            // Output data as JSON
            $rows = array();
         
            while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
            $myElement =
    '<div class="Card">
        <div class="Photo">
          <img src="../../../Images/Products/'.$row["FRONTFACE"].'" alt="'.$row["NAME"].'" style="display: flex; align-items: center; justify-content: center;">
        </div>
        <div class="Allcarditems"> 
          <div class="ProductDescription" style="margin: 0 15px;">
          <div>
            <h3>"'.$row["NAME"].'"</h3>
          </div>
          <div class="productprice">
          <s style="color: red;">'.$row["PREVIOUSPRICE"].' L.E</s>
          <Span>'.$row["PRICE"].' L.E</Span>
      </div>
      </div>
      <div style="display: flex;justify-content: center;align-items: center;">
        <a href="../../singleProduct/singleProduct.php?id='.$row["ID"].'" style="text-decoration: none;">
          <button class="BuyNowButton" style="cursor: pointer;">Shop</button>
        </a>
      </div>
      </div>
    </div>';
echo $myElement;
}          } 
$conn->close();
    ?>



    </div>
    <div class="containerShoesTennis" id="Sport">
    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "eonia";
    
    $conn = mysqli_connect($server, $user, $pass, $dbname,3307);
    $sql = "SELECT * FROM product WHERE TYPE = 'Shoes' AND SPORT = 'Tennis' AND GENDER = 'F';";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
            // Output data as JSON
            $rows = array();
         
            while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
            $myElement =
    '<div class="Card">
        <div class="Photo">
          <img src="../../../Images/Products/'.$row["FRONTFACE"].'" alt="'.$row["NAME"].'" style="display: flex; align-items: center; justify-content: center;">
        </div>
        <div class="Allcarditems"> 
          <div class="ProductDescription" style="margin: 0 15px;">
          <div>
            <h3>"'.$row["NAME"].'"</h3>
          </div>
          <div class="productprice">
          <s style="color: red;">'.$row["PREVIOUSPRICE"].' L.E</s>
          <Span>'.$row["PRICE"].' L.E</Span>
      </div>
      </div>
      <div style="display: flex;justify-content: center;align-items: center;">
        <a href="../../singleProduct/singleProduct.php?id='.$row["ID"].'" style="text-decoration: none;">
          <button class="BuyNowButton" style="cursor: pointer;">Shop</button>
        </a>
      </div>
      </div>
    </div>';
echo $myElement;
}          } 
$conn->close();
    ?>


    </div>
    <div class="containerShoesBasketball" id="Sport">
    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "eonia";
    
    $conn = mysqli_connect($server, $user, $pass, $dbname,3307);
    $sql = "SELECT * FROM product WHERE TYPE = 'Shoes' AND SPORT = 'Basketball' AND GENDER = 'F';";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
            // Output data as JSON
            $rows = array();
         
            while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
            $myElement =
    '<div class="Card">
        <div class="Photo">
          <img src="../../../Images/Products/'.$row["FRONTFACE"].'" alt="'.$row["NAME"].'" style="display: flex; align-items: center; justify-content: center;">
        </div>
        <div class="Allcarditems"> 
          <div class="ProductDescription" style="margin: 0 15px;">
          <div>
            <h3>"'.$row["NAME"].'"</h3>
          </div>
          <div class="productprice">
          <s style="color: red;">'.$row["PREVIOUSPRICE"].' L.E</s>
          <Span>'.$row["PRICE"].' L.E</Span>
      </div>
      </div>
      <div style="display: flex;justify-content: center;align-items: center;">
        <a href="../../singleProduct/singleProduct.php?id='.$row["ID"].'" style="text-decoration: none;">
          <button class="BuyNowButton" style="cursor: pointer;">Shop</button>
        </a>
      </div>
      </div>
    </div>';
echo $myElement;
}          } 
$conn->close();
    ?>
<!-- <div class="Card">
        <div class="Photo">
          <img src="../../../Images/Products/JustIn1.jpg" alt="fds" style="display: flex; align-items: center; justify-content: center;">
        </div>
        <div class="Allcarditems"> 
          <div class="ProductDescription" style="margin: 0 15px;">
          <div>
            <h3>"fds"</h3>
          </div>
          <div class="productprice">
          <s style="color: #f60;">123 L.E</s>
          <Span>321 L.E</Span>
      </div>
      </div>
      <div style="display: flex;justify-content: center;align-items: center;">
        <a href="../../singleProduct/singleProduct.php?id=33" style="text-decoration: none;">
          <button class="BuyNowButton" style="cursor: pointer;">Buy now!</button>
        </a>
      </div>
      </div>
    </div> -->

    
    </div>
    
    </div>


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