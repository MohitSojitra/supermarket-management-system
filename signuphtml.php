

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="signup.css">
  <title>Document</title>
</head>

<body>

  <div class="wrapper fadeInDown">
    <div id="formContent">

      <!-- Icon -->
      <div class="fadeIn first">
        <h1>Sign-Up</h1>
      </div>

      <!-- Tabs Titles -->
      <h2 class="inactive underlineHover" id="hh"> <a href="loginhtml.php"> Sign In </a></h2>
      <h2 class="active"> Sign Up </h2>

      <!-- Signup Form -->
      <form action="./php/signup.php" method="POST">
        <input type="text" id="firstname" class="fadeIn second" name="firstname" placeholder="Firstname">
        <input type="text" id="lastname" class="fadeIn third" name="lastname" placeholder="Lastname">
        <input type="text" id="Signup" class="fadeIn fourth" name="userid" placeholder="Used Id">
        <input type="password" id="password" class="fadeIn fifth" name="password" placeholder="Password">
        <input type="password" id="password" class="fadeIn sixth" name="cPassword" placeholder="re-Enter Password">
        <input type="email" id="email" class="fadeIn seventh" name="email" placeholder="Email">
        <input type="number" id="mobile" class="fadeIn eight" name="mobile" placeholder="Mobile Number">
        <input type="submit" class="fadeIn ninth" value="Sign Up">
      </form>

    </div>
  </div>
</body>

</html>