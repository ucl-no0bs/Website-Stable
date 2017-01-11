<nav>
  <div class="nav-wrapper">
    <a href="view_home.php" class="brand-logo">H4cK.me</a>
    <ul class="right">
      <li><a class="dropdown-button" data-activates="user_menu" data-beloworigin="true">
        <?php echo $_SESSION["current_user"]; ?><i class="material-icons right">arrow_drop_down</i></a>
      </li>
    </ul>
  </div>
</nav>

<ul id="user_menu" class="dropdown-content">
  <li><a href="view_profile.php">Settings</a></li>
</ul>
