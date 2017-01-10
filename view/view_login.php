
<html>

<head>
  <title>Login</title>
</head>

<body  align="center">

<form action="controller_login.php" align="centre">
<h3><label><i>Fill in your details to log-in...</i></label></h3>
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>


    <input type="checkbox" checked="checked"> Remember me
  </div>

</form>

<a href = "home.php"><button type="submit">Login</button></a>
<a href = "signup.php"><button type="submit">Sign Up</button></a>

</body>
</html>
