<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NIKE</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/all.min.css" />
    <link rel="stylesheet" href="CSS/swiper-bundle.min.css" />
    <link rel="stylesheet" href="CSS/indexUser.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="Images/Logo/NIKE LOGO.png" />
    <!-- <link href="https://fonts.cdnfonts.com/css/nike" rel="stylesheet"> -->
    <style>
      @font-face {
  font-family: 'Nike';
  src: url('../webfonts/Futura Condensed Extra Bold.otf') format('opentype');
}
    </style>
    <style> 
    
      /*=============== SCROLL UP ===============*/
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
      .container-fluid{
  width: 100%;
  padding: 0;
  margin: 0;
}
    </style>
  </head>
  <body>


    
    <!-- <h1>WELCOME <?php echo $_SESSION["Email"]?></h1> -->
    <div class="container-fluid">
      <div class="bg">
        <div class="iconsItems" style=" position: fixed; top: 0px; z-index: 99;">
          <div class="logoEonia">
            <div class="logo">
              <a href="#">
                <img src="Images/Logo/NIKE LOGO.png" alt="" height="30" width="90"/>
              </a>
            </div>
          </div>

          <ul  class="ulMenWomen" >
            <li class= "liMenWomen">
              <a class="aMenWomen" href="Pages/menClothes/menClothes/menClothes.php">Men</a>
            </li>
            <li class="liMenWomen">
              <a class="aMenWomen" href="Pages/womenClothes/womenClothes/womenClothes.php">Women</a>
            </li>
          </ul>
 
          <ul class="nav-menuu">
            <li class="nav-itemm">
              <a class="nav-linkk" href="#">Home</a>
            </li>
            <li class="nav-itemm">
            <a class="nav-linkk" href="contactPage.php">Contact</a>
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
          
           <script>

            function redirectToNewPage() {
            // Replace the current entry in the browser's history with the new page          
            window.location.replace("index.php");
            }
            
          
           </script>

          
            <!-- <li class="nav-itemm">
              <a class="nav-linkk" href="#sellers">sellers</a>
            </li>
            <li class="nav-itemm">
              <a class="nav-linkk" href="#brands_dealing">Brands</a>
            </li> -->
          </ul>

          <div class="hamburger">
            <span class="bar" style="background-color:black;"></span>
            <span class="bar" style="background-color:black;"></span>
            <span class="bar" style="background-color:black;"></span>
          </div>
        </div>
      </div>

      
      <div class="video-container">
    <video autoplay muted loop id="background-video" class="fullscreen-video">
      <source src="/Video/NIKE.mp4" type="video/mp4" alt="VIDEO NOT FOUND">
      <!-- Add other video formats if needed -->
      Your browser does not support the video tag.
    </video>
  </div>

  <div class="justdoit" style="display: flex; margin: 40px 0 80px 0; flex-direction: column;">
    <h1 style="display: flex; 
  align-items: center; 
  justify-content: center; ">FIND YOUR PERFECT SPORTSWEAR</h1>
    <h1 style="display: flex; 
  align-items: center; 
  justify-content: center; ">JUST DO IT.</h1>
  </div>

      <div class="featured">
        <div class="featuredText" style="display: flex; justify-content: center;"><h2>Featured</h2></div>
        <div class="featuredPics" style="display: flex; justify-content: center; gap: 10px; flex-direction: row; flex-wrap: wrap;">
  <div class="featuredMen" style="width: 550px; height: 450px; margin-bottom: 80px">
  <a href="Pages/menClothes/menClothes/menClothes.php">
    <img src="Images/Featured/FEATURED MEN.webp" alt="Featured Men" style="width: 100%; height: 100%; object-fit: cover;">
    <button class="shop_men_button" id="test">Men&emsp;&#8594;</button>
  </a>
  </div>
  <div class="featuredWomen" style="width: 550px; height: 450px; margin-bottom: 80px">
  <a href="Pages/womenClothes/womenClothes/womenClothes.php">
    <img src="Images/Featured/WOMEN_FEATURED.jpg" alt="Featured Women" style="width: 100%; height: 100%; object-fit: cover;">
    <button class="shop_women_button" id="test">Women&emsp;&#8594;</button>
  </a>
  </div>
</div>
      </div>

      <div class="cards">
        <div id="sellers" class="bestSellers" style="color: black;">
          <h2>Trending</h2>
        </div>
        <div class="sellerName">
          <div class="flip-card">
              <div class="flip-card1">
                <div class="flip-card1-front">
                  <img
                    src="Images/Best Sellers/Air_Max_Pulse.webp"
                    alt="Air_Max_Pulse"
                    style="width: 300px; height: 200px"
                  />
                </div>
                <div class="flip-card1-back">
                  <div class="flip-card1-back-content">
                    <p>
                       <s style="color: red;">L.E 3500.00 EGP</s> L.E 3000.00 EGP <br> Air Max Pulse <br> GREY
                    </p>
                    <a href="Pages/singleProduct/singleProduct.php?id=42" style="text-decoration: none;">
                      <button id="test">Buy now!</button>
                    </a>
                  </div>
                </div>
              </div>
          </div>
          <div class="flip-card">
            <div class="flip-card2">
              <div class="flip-card2-front">
                <img
                src="Images/Best Sellers/Nike Sportswear Tech Fleece.jpg"
                alt="EONIA CROP-TOP I HATE IT HERE"
                style="width: 300px; height: 200px"
                />
              </div>
              <div class="flip-card2-back">
                <div class="flip-card2-back-content">
                  <p>
                      <s style="color: red;">L.E 2000.00 EGP</s> L.E 1500.00 EGP <br> Nike Sportswear Tech Fleece <br> BLACK
                    </p>
                    <a href="Pages/singleProduct/singleProduct.php?id=43" style="text-decoration: none;">
                    <button id="test">Buy now!</button>
                  </a>
                  </div>
                </div>
              </div>
          </div>
          <div class="flip-card">
            <div class="flip-card3">
              <div class="flip-card3-front">
                <img
                  src="Images/Best Sellers/nike-dunk-low-retro.jpeg"
                  alt="EONIA BASIC MAKE IT LAST - BLUE"
                  style="width: 300px; height: 200px"
                />
              </div>
              <div class="flip-card3-back">
                <div class="flip-card3-back-content">
                  <p>
                    <s style="color: red;">L.E 3500.00 EGP</s> L.E 3000.00 EGP <br> Nike dunk low retro <br> WHITE/BLACK
                  </p>
                  <a href="Pages/singleProduct/singleProduct.php?id=44" style="text-decoration: none;">
                    <button id="test">Buy now!</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card4">
              <div class="flip-card4-front">
                <img
                src="Images/Best Sellers/Solo_Swoosh_Hoodie.webp"
                alt="ETERNITY IN MOTION PINK - MODEL"
                style="width: 300px; height: 200px"
                />
              </div>
              <div class="flip-card4-back">
                <div class="flip-card4-back-content">
                  <p>
                    <s style="color: red;">L.E 2000.00 EGP</s> L.E 1500.00 EGP <br> Solo swoosh hoodie <br> BLUE 
                  </p>
                  <a href="Pages/singleProduct/singleProduct.php?id=45" style="text-decoration: none;">
                  <button id="test">Buy now!</button>
                </a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!-- js jonas from zero to hero -->


      <!-- <div class="container mt-5">
    <h2 class="text-center mb-4">Always Iconic</h2>
        <div id="photoSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#photoSlider" data-slide-to="0" class="active"></li>
                <li data-target="#photoSlider" data-slide-to="1"></li>
                <li data-target="#photoSlider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../../Images/Shop by Sport/Basketball.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="../../../Images/Shop by Sport/Basketball.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="../../../Images/Shop by Sport/Basketball.jpg" class="d-block w-100" alt="Slide 3">
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
    </div> -->

    <script>
  
  var images = [
    "../../../Images/Shop by Sport/Basketball.jpg",
    "../../../Images/Shop by Sport/Football.jpg",
    "../../../Images/Shop by Sport/Tennis.jpg"
  ];

  images.forEach(function (image) {
    var img = new Image();
    img.src = image;
  });
</script>

<div style="display: none;">
  <img src="../../../Images/Shop by Sport/Basketball.jpg" alt="Preloaded Image">
  <img src="../../../Images/Shop by Sport/Football.jpg" alt="Preloaded Image">
  <img src="../../../Images/Shop by Sport/Tennis.jpg" alt="Preloaded Image">
</div>


    <div class="container mt-5" id="shopbysport">
    <h2 class="text-center mb-4">Shop by Sport</h2>
        <div id="photoSlider" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#photoSlider" data-slide-to="0" class="active"></li>
                <li data-target="#photoSlider" data-slide-to="1"></li>
                <li data-target="#photoSlider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../../Images/Shop by Sport/Basketball.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="../../../Images/Shop by Sport/Football.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="../../../Images/Shop by Sport/Tennis.jpg" class="d-block w-100" alt="Slide 3">
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

      <style>
        #shopbysport{
          margin-bottom: 80px;
        }
      </style>

<!-- <style>
  .carousel-item img {
  width: 100%;
  height: auto;
}
</style> -->

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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
              <a href="whoAreWe.php" style="color: #f60; text-decoration: none;"><li>Who are we?</li></a>
              <a href="privacyPolicy.php" style="color: #f60; text-decoration: none;"><li>Privacy Policy</li></a>
              <a href="termsAndConditions.php" style="color: #f60; text-decoration: none;"><li>Terms and Conditions</li></a>
              <a href="customerSupport.php" style="color: #f60; text-decoration: none;"><li>Customer Support</li></a>
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
          <!-- <div class="followUs">
            <p style="font-weight: bold; margin-bottom: 0">Follow Us</p>
            <div class="iconsFollow">
              <a
                href="https://www.facebook.com/ahmedadly.1710?mibextid=ZbWKwL"
                style="color: #4267b2"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-facebook"
                  viewBox="0 0 16 16"
                  id="facebook"
                >
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                  />
                </svg>
              </a>
              <a
                href="https://instagram.com/ahmedadly17?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"
                style="color: #bc1888"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-instagram"
                  viewBox="0 0 16 16"
                  id="instagram"
                >
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                  />
                </svg>
              </a>
              <a
                href="https://twitter.com/3adly17?t=UbZ6ZExXFtu1SmEWr_-Gmg&s=09"
                style="color: #1da1f2"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-twitter"
                  viewBox="0 0 16 16"
                  id="twitter"
                >
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                  />
                </svg>
              </a>
              <a href="https://www.linkedin.com/in/ahmed-adly-73662828b" style="color: #0a66c2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-linkedin"
                  viewBox="0 0 16 16"
                  id="linkedin"
                >
                  <path
                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"
                  />
                </svg>
              </a>
            </div>
          </div> -->
        </div>
        <div class="follow">
        <div>
          <span class="background">
            <span class="social-media-buttons">
              <a href="https://instagram.com/ahmedadly17?igshid=MzMyNGUyNmU2YQ==">
                    <span class="social-media-button" id="instagram_id">
                    <img
                        alt="Instagram"
                        src="Images/Social Media/instagram.svg"
                    />
                  </span>
                  </a>
                 <a href="https://twitter.com/3adly17?t=UbZ6ZExXFtu1SmEWr_-Gmg&s=09">
                    <span class="social-media-button" id="twitter_id">
                    <img
                        alt="Twitter"
                        src="Images/Social Media/twitter.svg"
                    />
                  </span>
                  </a>
                  <a href="https://www.facebook.com/ahmedadly.1710?mibextid=ZbWKwL">
                <span class="social-media-button" id="facebook_id">
                  <div class="facebook-icon">
                      <img alt="Facebook" src="Images/Social Media/facebook.svg" />
                    </div>
                  </span>
                </a>
                <a href="https://www.snapchat.com/add/adly1710?share_id=gsZzKNgzHw8&locale=en-GB">
                  <span class="social-media-button" id="snapchat_id">
                    <div class="snapchat-icon">
                      <img
                          alt="Snapchat"
                          src="Images/Social Media/snapchat.svg"
                      />
                    </div>
                  </span>
                  </a>
                  <a href="https://www.linkedin.com/in/ahmed-adly-73662828b">
                    <span class="social-media-button" id="linkedin_id">
                    <img
                        alt="LinkedIn"
                        src="Images/Social Media/linkedin.svg"
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

        //========================
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


