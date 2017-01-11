<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css"  media="screen,projection"/>
</head>
<body>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">LOGO</a>
      <ul class="right">
        <li><a class="dropdown-button" data-activates="user_menu"
          data-beloworigin="true">USERNAME<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
  </nav>

  <div class="container section">
    <ul class="collection with-header">
      <li class="collection-header">USERNAME
        <div class="secondary-content">
          <i class="center"><label>PEANUTS</label></i><a class="modal-trigger" href="#modal">
          <i class="material-icons right">mode_edit</i></a>
        </div>
      </li>
      <li class="collection-item">FIRST NAME
        <div class="secondary-content">
          <i><label>JOHN</label></i><a class="modal-trigger" href="#modal">
          <i class="material-icons right">mode_edit</i></a>
        </div>
      </li>
      <li class="collection-item">LAST NAME
        <div class="secondary-content">
          <i><label>DOE</label></i><a class="modal-trigger" href="#modal">
          <i class="material-icons right">mode_edit</i></a>
        </div>
      </li>
      <li class="collection-item">PASSWORD
        <div class="secondary-content">
          <i><label>*******</label></i><a class="modal-trigger" href="#modal">
          <i class="material-icons right">mode_edit</i></a>
        </div>
      </li>
    </ul>
  </div>

  <div id="modal" class="modal modal-fixed-footer">
    <div content="modal-content">
      <h4>DATA FIELD</h4>
      <h5>CHANGES</h5>
    </div>
    <div class="modal-footer">
      <div class="right">
        <button class="btn modal-action modal-close waves-effect waves-light">Confirm</button>
        <button class="btn modal-action modal-close waves-effect waves-light">Cancel</button>
      </div>
    </div>
  </div>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <script language="Javascript">
    $(document).ready(function(){
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
    });
  </script>
</body>
</html>
