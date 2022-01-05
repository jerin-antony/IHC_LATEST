<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <style>
      
.nav-links{
  flex: 1;
  text-align: center;
}

.nav-links ul li{
  list-style: none;
  display: inline-block;
  padding: 8px 12px;
  position: relative;
}

.nav-links ul li a{
  color: rgb(6, 78, 160);
  text-decoration: none;
  font-size: 20px;

}

.nav-links ul li::after{
  content: '';
  width: 0%;
  height: 2PX;
  background: #00ffd5;
  display: block;
  margin: auto;
  transition: 0.5s;
}

.nav-links ul li:hover::after{
  width: 100%;
}
      </style>
    
    <div class="nav-links">
                        <!--<i class="fa fa-times" onclick="hideMenu()"></i>-->
                           <ul>
                               <li><a href="newpage.html">HOME</a></li>
                               <li><a href="newform1.php" >DASHBOARD</a></li>
                               <li><a href="newform.html">APPOINMENT</a></li>
                               <li><a href="newform.html">VACCINATION SERVICES</a></li>
                           </ul>
                       </div>

    <link rel="stylesheet" href="formstyle.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form">
            <h2 class="title">Sign in</h2><h8>An OTP will be send to your mobile number for verification</h8>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="tel" id="mobile" name="phone" placeholder="0123456789" pattern="[0-9]{10}" >
            </div>
          
            <input type="submit" value="Send OTP" class="btn solid" onClick="sendOTP();" >
            <!--<p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>-->
          </form>
          <form action="registration1.php" method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="emailid" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="tel" id="phone" name="phone" placeholder="0123456789" pattern="[0-9]{10}" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <div><input type="checkbox" class="check-box"required><span>I agree to the <a href='terms and condition.html'> terms & conditions</a></span ></div>
            <input type="submit" class="btn" value="Sign up" />
           <!-- <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>-->
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
    <script src="verification.js"></script>
    <script src="jquery-3.6.0.min.js" type="text/javascript"></script>
  </body>
</html>