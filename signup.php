<!DOCTYPE html>
<html>
<head>
  <title> Sign Up Form </title>
  <meta name="viewport" content="width= device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>

  <form from="myForm" action ="signupp.php" method="POST">

    <div class="login-box">

      <h1> Sign Up </h1>

      <div class="textbox">
        <input type="text" placeholder="Username" id="fname" name="fname" value="" required>  
      </div>

      <div class="textbox">
        <input type="password" placeholder="Password" id="password" name="password" value="" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="password must cantain at least one number and one uppper case and one lowercase letter and 8 characters" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Email" id="email" name="email" value="" required pattern="[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+.[a-z]{2,4}" title="Invalid Email">
      </div>

      <div class="textbox">
        <input type="text" placeholder="City" id="city" name="city" value="" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Phone" id="phone" name="phone" value="" required onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" pattern="([0-9]){10,}">
      </div>

      <input class="btn" type="submit" name="" value="Sign Up"> <br> <br>

      <center> <a href="login.php"> Already have an account ? </a> <center>

    </div>
    
  </form>

</body>
</html>