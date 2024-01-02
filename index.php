<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>WELCOME TO NIKE</title>
    <link rel="icon" href="Images/Logo/NIKE LOGO.png" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 100vh;
    }

    .bg {
  background-image: url("../Images/BACKGROUND1.jpeg");
  width: 100%;
  height: 100vh;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
          }

    .tabs {
      display: flex;
      justify-content: space-around;
      margin-bottom: 20px;
    }

    .tab {
      cursor: pointer;
    }

    .tab a{
      color: #f60;
    }

    .tab a:hover{
      background-color: #fff;
      color: black;
    }

    .form-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 50px;
      width: 300px;
      text-align: center;
      display: none;
    }

    .form-container.active {
      display: block;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
 
    .form-container h2 {
      margin-bottom: 20px;
    }

    .form-container img {
      width: 80px;
      margin-bottom: 20px;
    }

    .form-container input[type="text"],
    .form-container input[type="password"],
    .form-container input[type="email"] {
      width: calc(100% - 20px);
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 4px;
      background-color: #f60;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      margin-bottom: 15px
    }

    .form-container input[type="submit"]:hover {
      background-color: #ff751a;
    }

    #loginForm{
      margin-top: 55px;
    }


    @media only screen and (max-width: 1440px) {
  #loginForm {
    margin-top: 150px;
      padding: 50px;
  }

  #signupForm {
    margin-top: 160px;
      padding: 40px;
      height: 450px;
  }
}


    @media only screen and (max-width: 1024px) {
  #loginForm {
    margin-top: 150px;
      padding: 40px;
  }

  #signupForm {
    margin-top: 115px;
      padding: 20px 30px 10px 30px;
      height: 460px;
  }
}

@media only screen and (max-width: 768px){
  #loginForm {
    margin-top: 150px;
      padding: 40px;
  }

  #signupForm {
    margin-top: 115px;
      padding: 20px 30px 10px 30px;
      height: 460px;
  }
}

@media only screen and (min-width: 425px)  and (max-width: 767px){
  #loginForm {
    margin-top: 150px;
      padding: 30px;
  }

  #signupForm {
    margin-top: 115px;
      padding: 20px 30px 10px 30px;
      height: 460px;
  }
}


@media only screen and (max-width: 424px) {
  #loginForm {
    margin-top: 150px;
      padding: 20px 30px 10px 30px;
  }

  #signupForm {
    margin-top: 128px;
      padding: 20px 40px 10px 40px;
      height: 450px;
  }
}

@media only screen and (min-width: 300px) and (max-width: 423px){
  #loginForm {
    margin-top: 150px;
      padding: 20px;
      width: 250px;
  }

  #signupForm {
    margin-top: 100px;
      padding: 10px;
      width: 250px;
      height: 480px;
  }
}

/* .listValidations , .input_box{
  display: none;
} */

  </style>
</head>
<body>


  
    <style>
      .listValidations li.addall{
        display: block;
      }
  
.listValidations li{
  display: block;

  padding-bottom: 0.5vh;
  list-style: none;

}
.listValidations li.valid{
  display: block;
  color: green;
  font-weight: bold;
}
.listValidations li.invalid{
  display: block;
  color: red;
  font-weight: bold;
}
.listValidations li.removeall{
  display: none;
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
    </head>

<!-- <div class="bg">
  <div class="form-container active" id="loginForm">
    <img src="Images/Logo/NIKE LOGO.png" alt="Nike Logo">
    <h2>YOUR ACCOUNT TO EVERYTHING NIKE</h2>
    <form action="#" method="post">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <input type="submit" value="Login">
    </form>
  </div>
  
  <div class="form-container" id="signupForm">
    <img src="Images/Logo/NIKE LOGO.png" alt="Nike Logo">
    <h2>YOUR ACCOUNT TO EVERYTHING NIKE</h2>
    <form action="#" method="post">
      <input type="text" name="fullname" placeholder="Full Name" required><br>
      <input type="text" name="adress" placeholder="Adress" required><br>
      <input type="text" name="email" placeholder="Email" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <input type="submit" value="Sign Up">
    </form>
  </div>
  
  <div class="tabs">
    <div class="tab active" onclick="showForm('login')">Login</div>
    <div class="tab" onclick="showForm('signup')">Sign Up</div>
  </div>
</div> -->


<div class="bg">
  <div class="form-container active" id="loginForm">
    <img src="Images/Logo/NIKE LOGO.png" alt="Nike Logo">
    <h2>YOUR ACCOUNT TO EVERYTHING NIKE</h2>
    <form action="indexLogin.php" method="post">
      <input type="email" id="user" name="emailLogin" placeholder="Email" required><br>
      <input type="password" id="passLogin" name="passwordLogin" placeholder="Password" required><br>
      <input type="submit" value="Login" id="loginButton">
    </form>
    
    <script>
    $(document).ready(function () {
        // Initially hide the submit button
        checkFields();
        $("#user, #passLogin").on('keyup', function () {
            checkFields();
        });
        // Function to check if both email and password fields are filled
        

        // Attach the checkFields function to input events on email and password fields
        
    });
    function checkFields() {
            var email = $("#user").val();
            var password = $("#passLogin").val();

            if ($("#user").val() && $("#passLogin").val()) {
                $("#loginButton").slideDown(1000);
            } else {
                $("#loginButton").slideUp(1000);
            }
        }
</script>

    <div class="tab">
      <a onclick="showForm('signup')">Create new account?</a>
    </div>
  </div>
  
  <div class="form-container" id="signupForm">
    <img src="Images/Logo/NIKE LOGO.png" alt="Nike Logo">
    <h2>WELCOME TO NIKE</h2>
    <form action="indexSignUp.php" method="post" onsubmit="submitPassword()">
      <input type="text" id="name" name="fullName" placeholder="Full Name" required><br>
      <input type="text" id="address" name="Address" placeholder="Address" required><br>
      <input type="email" id="user" class="hamoot" name="emailSignUp" placeholder="Email" required><br>
      <input type="password" id="passSignUp" name="passwordSignUp" onkeyup="validatePassword()" placeholder="Password" required><br>
      <div class="listValidations" id="yarab">
                    
                      <li id="numbers" >Password contains numbers</li>
                      <li id="lowercase">Password contains lowercase </li>
                      <li id="uppercase">Password contains uppercase </li>
                      <li id="specialchars">Password contains special characters</li>
                      <li id="charLen8">Password is at least 8 characters</li>
                   </div>
      <input type="submit" value="Sign Up" id="signupButton">
    </form>
    <div class="tab">
      <a onclick="showForm('login')">Already have an account?</a>
    </div>
  </div>
  <script>
    var flag = false;
    $(document).ready(function () {
        // Initially hide the submit button
        $("#signupButton").hide();

        // Function to check if all required fields are filled
        function checkFields() {
            var name = $("#name").val();
            var address = $("#address").val();
            var email = $(".hamoot").val();
            var password = $("#passSignUp").val();
            validatePassword();

            if (name !== "" && address !== "" && email !== "" && flag) {
              $("#signupButton").show();
            } else {
              $("#signupButton").hide();
            }
        }

        // Attach the checkFields function to input events on all fields
        $("#name, #address, #user, #passSignUp").on("input", function () {
            checkFields();
        });
    });

    function validatePassword() {
      var passInput = document.getElementById("passSignUp").value;
var numbers = document.getElementById("numbers");
var lowercase = document.getElementById("lowercase");
var uppercase = document.getElementById("uppercase");
var specialchars = document.getElementById("specialchars");
var charLen8 = document.getElementById("charLen8");

var specialcharsList = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
var lowercaseList = /[a-z]/;
var uppercaseList = /[A-Z]/;
var numbersList = /[0-9]/;



if(passInput.match(numbersList)){
    numbers.classList.remove("invalid");
    numbers.classList.add("valid");
}
else{
    numbers.classList.remove("valid");
    numbers.classList.add("invalid");
}
if(passInput.match(lowercaseList)){
    lowercase.classList.remove("invalid");
    lowercase.classList.add("valid");
}
else{
    lowercase.classList.remove("valid");
    lowercase.classList.add("invalid");
}
if(passInput.match(uppercaseList)){
    uppercase.classList.remove("invalid");
    uppercase.classList.add("valid");
}
else{
    uppercase.classList.remove("valid");
    uppercase.classList.add("invalid");
}
if(passInput.match(specialcharsList)){
    specialchars.classList.remove("invalid");
    specialchars.classList.add("valid");
}
else{
    specialchars.classList.remove("valid");
    specialchars.classList.add("invalid");
}
if (passInput.length >= 8){
    charLen8.classList.remove("invalid");
    charLen8.classList.add("valid");
}
else {
    charLen8.classList.remove("valid");
    charLen8.classList.add("invalid");
}
if(passInput.length >= 8 && passInput.match(specialcharsList) && passInput.match(uppercaseList) && passInput.match(lowercaseList) && passInput.match(numbersList)){
  flag=true
  charLen8.classList.remove("valid");
    charLen8.classList.add("removeall");
    specialchars.classList.remove("valid");
    specialchars.classList.add("removeall");
    uppercase.classList.remove("valid");
    uppercase.classList.add("removeall");
    lowercase.classList.remove("valid");
    lowercase.classList.add("removeall");
    numbers.classList.remove("valid");
    numbers.classList.add("removeall");
}
        // Your existing password validation logic goes here
        
    else{
      charLen8.classList.remove("removeall");      
      specialchars.classList.remove("removeall");
      uppercase.classList.remove("removeall");
      lowercase.classList.remove("removeall");
      numbers.classList.remove("removeall");
      
      flag=false
    }
  }
  

    function submitPassword() {
      var numbers = document.getElementById("numbers");
    var lowercase = document.getElementById("lowercase");
    var uppercase = document.getElementById("uppercase");
    var specialchars = document.getElementById("specialchars");
    var charLen8 = document.getElementById("charLen8");

    var array = [numbers,lowercase,uppercase,specialchars,charLen8];
    var classLists = [];
    var flag = 1;
    for(var i = 0;i<5;i++)
    {
        classLists[i] = array[i].className;
        if(classLists[i] == "invalid")
        {
            window.alert("Password is invalid!");
            flag = 0;
            break;
        }
    } 
    
    if(flag == 1)
    {

        window.alert("Password is valid!");
    }

        // Your existing submit password logic goes here
    }
</script>
  
  
  <!-- <div class="tabs">
    <div class="tab active" onclick="showForm('login')">Login</div>
    <div class="tab" onclick="showForm('signup')">Sign Up</div>
  </div> -->
</div>


<script>
  function showForm(formName) {
    var loginForm = document.getElementById('loginForm');
    var signupForm = document.getElementById('signupForm');
    var loginTab = document.querySelector('.tab:nth-child(1)');
    var signupTab = document.querySelector('.tab:nth-child(2)');

    if (formName === 'login') {
      loginForm.classList.add('active');
      signupForm.classList.remove('active');
      loginTab.classList.add('active');
      signupTab.classList.remove('active');
    } else if (formName === 'signup') {
      loginForm.classList.remove('active');
      signupForm.classList.add('active');
      loginTab.classList.remove('active');
      signupTab.classList.add('active');
    }
  }
</script>
                  
                  




        <!-- write your code here -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
          <!-- <div class="line" style="margin: 25px 0 25px 0;"></div>
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
                <p style="font-weight: bold; margin-bottom: 0">About EONIA</p>
                <p>
                  EONIA AIMS TO CONNECT PEOPLE THROUGH THE ART OF FASHION, CREATING A BRAND THAT APPRECIATES CREATIVITY AND SELF-EXPRESSION. WITH A FOCUS ON ETERNITY, EACH PIECE IS CREATED TO BE TIMELESS AND EVERLASTING REPRESENTING THE BRAND'S COMMITMENT TO QUALITY AND SUSTAINABILITY. DISCOVER THE MAGIC OF EONIA, WHERE FASHION MEETS ART AND THE POSSIBILITIES ARE ENDLESS.
                </p>
              </div>
              <div class="importantLinks">
                <p style="font-weight: bold; margin-bottom: 0">Important links!</p>
                <ul>
                  <a href=""><li>Who are we?</li></a>
                  <a href=""><li>Privacy Policy</li></a>
                  <a href=""><li>Terms and Conditions</li></a>
                  <a href=""><li>Customer Support</li></a>
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
    
          SCROLL UP BUTTON 
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
           SCROLL UP BUTTON  -->
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
</body>
</html>