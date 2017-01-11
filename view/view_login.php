
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


<a href = "view/view_signup.php"><button class="btn waves-effect waves-light" type="submit">Sign Up</button></a>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

</body>
</html>
