<!DOCTYPE html>
<html lang="entered">

<head>
  <title> Sign In Form </title>
  <meta name="viewport" content="width= device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
  <body>
    <form name="myForm" action ="loginn.php" method="POST">

      <div class="login-box">

        <h1> Sign In </h1>

        <div class="textbox">
           
          <input type="text" placeholder="Username" name="user" value="" required> 

        </div>
        <div class="textbox">
          <input type="password" placeholder="Password" name="pass" value="" maxlength="8" required>
        </div>
          
        <input class="btn" type="submit" name="submit" value="Sign in"> 
        <center> <a style="color: white;" href="signup.php"> Don't have an account ? </a> <center>
      </div>

    </form>

  </body>
</html>