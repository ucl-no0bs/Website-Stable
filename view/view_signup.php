<html>

<head>
  <title>Sign Up</title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css" media="screen,projection" />
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
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
</body>

</html>