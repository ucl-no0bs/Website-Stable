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
          <li class="collection-item">PASSWORD
            <div class="secondary-content">
              <i><label>*******</label></i>
              <a class="modal-trigger" href="#modal">
                <i class="material-icons right">mode_edit</i></a>
            </div>
          </li>
        </ul>
      </div>

      <div id="modal" class="container modal bottom-sheet">
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
  </body>

  </html>