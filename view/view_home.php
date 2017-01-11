<?php session_start(); ?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Home Page</title>
    <?php include_once('import_materialize.php'); ?>
  </head>

  <?php // calls the showSnippet controller ?>

    <body>

      <?php include_once("import_navbar.php"); ?>

        <!--<div class="container section">
<div class="right fixed-action-btn toolbar">
<a class="btn-floating btn-large red">
<i class="large material-icons">menu</i>
</a>
</div>
</div>-->

        <div class="container">
          <div class="center">
            <h2>Welcome to the secret society</h2>
            <a class="btn waves-effect waves-light" href="#modal">Add note</a>
          </div>

          <div id="modal" class="modal bottom-sheet">
            <div class="modal-content">
              <form action="../controller/controller_home_addSnippet.php" method="post">
                <label><b><i>New Note: </i></b></label>
                <input type="text" name="snippet" placeholder="Enter new note here">
                <input class="btn waves-effect waves-light" type="submit" value="Add Note" />
              </form>
            </div>
          </div>

          <div class="section">
            <h4>Your Notes:</h4>
            <div class="section">
              <ul class="collapsible popout" data-collapsible="accordion">
                <?php include_once("../controller/controller_home_showSnippets.php"); ?>
              </ul>
            </div>
          </div>

        </div>

        <?php //for each element in the variable "$snippets" do stuff ?>

          <!--Import jQuery before materialize.js-->
          <?php include_once("import_js.php"); ?>
            <script language="Javascript">
              $(".dropdown-button").dropdown();
            </script>
            <script language="Javascript">
              $(document).ready(function() {
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal').modal();
              });
            </script>
    </body>

  </html>