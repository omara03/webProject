<?php
echo"any";
session_start();

            // Retrieve the product ID from the URL
            $productid = isset($_GET['id']) ? $_GET['id'] : null;

            // Connect to your database (modify as per your database connection)
            $server = "localhost";
            $user = "root";
            $pass = "";
            $dbname = "eonia";
            $conn = mysqli_connect($server, $user, $pass, $dbname,3307);
           
            if (!$conn) {
                echo "Failed to connect!";
                die();
            }
            else
            {
              
                // Fetch product details from the database based on the product ID
            $sql = "SELECT * FROM product WHERE ID = '$productid'";
            $result = mysqli_query($conn,$sql);
            $productDetails = array();
            if ($result->num_rows > 0) {
                while($productDetails = mysqli_fetch_assoc($result))
                {
                    $name = $productDetails['NAME'];
                    $_SESSION["PRODUCTNAME"]=$name;
                    $previousprice = $productDetails['PREVIOUSPRICE'];
                    $price = $productDetails['PRICE'];
                    $_SESSION["PRODUCTPRICE"]=$price;
                    $frontface = $productDetails['FRONTFACE'];
                    $backface = $productDetails['BACKFACE'];
                    $description = $productDetails['DESCRIPTION'];
                    $color = $productDetails['COLOR'];
                    $type=$productDetails['TYPE'];
                    
                    $_SESSION["PRODUCTTYPE"]=$type;

                    $sport=$productDetails['SPORT'];
                    
                    $_SESSION["PRODUCTSPORT"]=$sport;

                    $_SESSION["FRONTFACE"]=$frontface;


                }

                // Display product details dynamically
                
                // ... (display other product details)
            } else {
                // Product not found, display a message or redirect to an error page
                echo '<p>Product not found.</p>';
            } 

            // Close the database connection
            mysqli_close($conn);
            }
            
        ?>

        <!-- HTML -->

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="singleProduct.css">
    <title><?php echo $name ?></title>
    <link rel="icon" href="../../Images/Logo/NIKE LOGO.png">

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
        .aboutUs {
    background-color: #111111;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;
  }
    </style>
</head>

<body>
  


<!-- START OF NAV BAR -->
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
              <a class="aMenWomen" href="../menClothes/menClothes/menClothes.php">Men</a>
            </li>
            <li class="liMenWomen">
              <a class="aMenWomen" href="../womenClothes/womenClothes/womenClothes.php">Women</a>
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
            <a class="nav-linkk" href="../../../viewCart.php">Cart</a>
           </li>
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

        <div class="hamburger">
          <span class="bar" style="background-color:black;"></span>
          <span class="bar" style="background-color:black;"></span>
          <span class="bar" style="background-color:black;"></span>
        </div>
      </div>

      <!-- END OF NAV BAR -->
      
    <!-- write your code here -->

    <div class="product">
        <div class="gallery" id="Gallery">
            <div class="card one" id="card_one">
              <!-- <h1><?php echo $type;?></h1> -->
              <a>
              <h1 style="color:red;"><?php $_SESSION["PRODUCTNAME"] ?></h1>
                <div class="card-container"> 
                  <img src="../../Images/Products/<?php echo $frontface ?>" alt="<?php echo $name ?>">
                </div>
              </a>
            </div>
            <div class="card two" id="card_two">
                <a>
                  <div class="card-container">
                  <img src="../../Images/Products/<?php echo $backface ?>" alt="<?php echo $name ?>">
                  </div>
                </a>
              </div>
        </div>
        <div class="description" style="color: black;">
            <h1><?php echo $name ?></h1>
            <span style="color: #f60;"><s><?php echo $previousprice ?> L.E  </s></span>  <?php echo $price ?> L.E<br></> <?php echo $description ?> <br> <?php echo $color ?> </br>
            <div class="descriptionButtons" style="margin-top: 30px;">
            <a href="../Cart/Cart.php?id=<?php echo $productid?>">
              <button class="messi"  onclick="cart()">Add to cart</button>
              </a>
                <a href="../buyNow/buyNow.php?id='<?php echo $productid ?>'">
                  <button class="messi" style="margin-top: 15px;">Buy now!</button>
                </a>
            </div>
        </div>
    </div>

    <script>
  function cart(){



    var xhr = new XMLHttpRequest();
            var email = $_SESSION["Email"];
            

            xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
            if (xhr.status == 200) {
              
                console.log(xhr.responseText);
            } else {
                console.error("Ajax request failed");
            }
        }
    }

    xhr.open("POST", "../Cart/cartAjax.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("Email=" + email);

  }
</script>



      <!-- <div class="line" style="margin: 25px 0 25px 0;"></div> -->


      <!-- START OF ABOUT US SECTION -->
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
            <ul style="list-style: none; text-decoration: none;">
              <a href="../../../whoAreWe.php" style="color: #f60; text-decoration: none;"><li>Who are we?</li></a>
              <a href="../../../privacyPolicy.php" style="color: #f60; text-decoration: none;"><li>Privacy Policy</li></a>
              <a href="../../../termsAndConditions.php" style="color: #f60; text-decoration: none;"><li>Terms and Conditions</li></a>
              <a href="../../../customerSupport.php" style="color: #f60; text-decoration: none;"><li>Customer Support</li></a>
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

      
      

      <!-- END OF ABOUT US SECTION -->

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



</div>

</body>
</html>