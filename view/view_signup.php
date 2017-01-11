<?php session_start(); ?>

<html>

<head>
	<title>Sign Up</title>
	<?php include_once("import_materialize.php"); ?>
</head>

<body class="container center">
  <h3>Enter your details to sign up to this amazing system..</h3>
  <form action="../controller/controller_signup.php" method="post">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <br>
    <label><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="password" required>
    <br>
    <button class="btn waves-effect waves-light">Submit</button>
  </form>

  <!--Import jQuery before materialize.js-->
  <?php include_once("import_js.php"); ?>
</body>

</html>
