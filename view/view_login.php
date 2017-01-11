<?php session_start(); ?>

<html>
<head>
  <title>Login</title>
  <?php include_once("import_materialize.php"); ?>
</head>

<body class="container" align="center">

  <form action="./controller/controller_login.php" align="centre" action="get">
    <h3><label><i>Fill in your details to log-in...</i></label></h3>
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>


      <button class="btn waves-effect waves-light">Login</button>
    </div>

  </form>


  <a href="view/view_signup.php">
    <button class="btn waves-effect waves-light" type="submit">Sign Up</button>
  </a>

  <!--Import jQuery before materialize.js-->
  <?php include_once("import_js.php"); ?>

</body>

</html>
