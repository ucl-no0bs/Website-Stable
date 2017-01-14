<?php session_start(); ?>

<html>
<head>
	<title>Sign Up</title>
	<?php include_once("import_materialize.php"); ?>
</head>

<body class="container center">
  <h3>Enter your details to sign up to this amazing system..</h3>
  <form action="../controller/controller_signup.php" method="post" autocomplete="off">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br>
	<!-- The captcha stuff (to block bots/spam) -->
	<img id="captcha" src="../securimage/securimage_show.php" alt="CAPTCHA Image" />
	<a href="#" onclick="document.getElementById('captcha').src = '../securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
	<input type="text" name="captcha_code" size="10" maxlength="6" />

    <button class="btn waves-effect waves-light">Submit</button>
  </form>

  <!--Import jQuery before materialize.js-->
  <?php include_once("import_js.php"); ?>
</body>

</html>
