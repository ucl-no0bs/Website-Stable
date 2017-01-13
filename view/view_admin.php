<?php session_start() ?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>Admin Portal</title>
    <?php include_once('import_materialize.php'); ?>
  </head>

  <body>

    <?php include_once("import_navbar.php"); ?>

      <div class="container">
        <?php include_once("../controller/controller_admin.php") ?>
      </div>


      <?php include_once("import_js.php"); ?>

  </body>

  </html>