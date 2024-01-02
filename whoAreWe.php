<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT NIKE</title>
    <link rel="icon" href="Images/Logo/NIKE LOGO.png">

    <style>
        
        html {
  margin: 0;
  padding: 0;
  background-color: #F5F5F5;
}

.scrollable-element {
  scrollbar-color: red yellow;
}

.container-fluid{
  padding: 0;
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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        h1, h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #555;
        }

        

        /* Add any additional styles or customization as needed */
    </style>
</head>
<body>

<!-- Navigation Bar -->
<div class="container-fluid">
      <div class="bg">
        <div class="iconsItems" style=" position: fixed; top: 0px; z-index: 99;">
          <div class="logoEonia">
            <div class="logo">
              <a href="indexUser.php">
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
              <a class="nav-linkk" href="indexUser.php">Home</a>
            </li>
            <li class="nav-itemm">
              <a class="nav-linkk" href="indexUser.php #contact_us">Contact</a>
            </li>
           <li class="nav-itemm">
            <a class="nav-linkk" href="indexUser.php #about_us">About</a>
           </li>
            <!-- <li class="nav-itemm">
              <a class="nav-linkk" href="#sellers">sellers</a>
            </li>
            <li class="nav-itemm">
              <a class="nav-linkk" href="#brands_dealing">Brands</a>
            </li> -->
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

<!-- <h2>EXPERIENCE COMFORT<br>LIKE NEVER BEFORE!</h2> -->
      </div>


<!-- About Nike Content -->
<header>
    <h1>About Nike</h1>
</header>

<div class="container">
    <h2>Our Story</h2>
    <p>Nike, Inc., named after the Greek goddess of victory, is the world's leading designer, marketer, and distributor of athletic footwear, apparel, equipment, and accessories. The company's mission is to bring inspiration and innovation to every athlete in the world.</p>

    <h2>History</h2>
    <p>Nike was founded in 1964 by Bill Bowerman and Phil Knight as Blue Ribbon Sports and officially became Nike, Inc. in 1971. Since then, Nike has been at the forefront of athletic innovation, producing iconic designs and breakthrough technologies in sports performance and fashion.</p>

    <h2>Values</h2>
    <p>Nike's core values include innovation, sustainability, diversity, and inclusion. The company is committed to creating positive change in the world and empowering athletes of all levels to achieve their full potential.</p>

    <h2>Contact Us</h2>
    <p>Have questions or want to connect with Nike? Feel free to reach out to us through our <a href="contactPage.php" style="color: #f60;">contact page</a>.</p>
</div>

<script>
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

</body>
</html>
