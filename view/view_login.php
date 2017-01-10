
<html>

<head>
  <title>Login</title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css"  media="screen,projection"/>
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

<a href = "view/view_home.php"><button type="submit">Login</button></a>
<a href = "view/view_signup.php"><button type="submit">Sign Up</button></a>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

</body>
</html>
