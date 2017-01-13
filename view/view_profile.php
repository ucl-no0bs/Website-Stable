<?php session_start(); ?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Home Page</title>
    <?php include_once("import_materialize.php"); ?>
  </head>

  <body>

    <?php include_once("import_navbar.php"); ?>

      <div class="container section">
        <ul class="collection with-header">
          <li class="collection-header">
            <h4>Settings</h4></li>
          <li class="collection-item avatar">
            <img src="/images/<?php echo $_SESSION["current_user"]; ?>/profile.jpg" alt="" class="circle">
            <span class="title"><br>Profile picture</span>
            <div class="secondary-content">
              <i><label>edit</label></i>
              <a class="modal-trigger" href="#picture">
                <i class="material-icons right">mode_edit</i></a>
            </div>
          </li>
          <li class="collection-item"><span class="title">PASSWORD</span>
            <div class="secondary-content">
              <i><label>*******</label></i>
              <a class="modal-trigger" href="#password">
                <i class="material-icons right">mode_edit</i></a>
            </div>
          </li>
        </ul>
      </div>


      <div id="picture" class="modal bottom-sheet">
        <div class="modal-content">
          <!--<form action="/controller/controller_profile.php" method="post" enctype="multipart/form-data">
<div class="file-field input-field">
<div class="btn">
<span>Upload File</span>
<input type="file" name="fileToUpload" id="fileToUpload">
</div>
<div class="file-path-wrapper">
<input class="file-path validate" type="text">
</div>
</div>
<div>
</form>-->
          <form action="/controller/controller_profile.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
          </form>
        </div>
      </div>

      <div id="password" class="modal bottom-sheet">
        <div class="modal-content">
          <label><b><i>Change Password:</i></b></label>
          <input type="text" name="snippet" placeholder="Enter new password" />
          <button class="btn modal-action modal-close waves-effect waves-light">Confirm</button>
          <button class="btn modal-action modal-close waves-effect waves-light">Cancel</button>
        </div>
      </div>
      </div>

      <!--Import jQuery before materialize.js-->
      <?php include_once("import_js.php"); ?>
        <script language="Javascript">
          $(document).ready(function() {
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
          });
        </script>
        <script language="Javascript">
          $(document).ready(function() {
            $('.carousel').carousel();
          });
        </script>
  </body>

  </html>