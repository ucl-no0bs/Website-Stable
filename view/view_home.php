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
    <?php// echo "heheyehey " . $_SESSION['current_user'] . " dd"; ?>

    <div class="container">
      <div class="center">
        <h2>Hello peasant..Welcome to the secret society</h2>
        <form action="../controller/controller_home_addSnippet.php" method="post">
          <label><b><i>Snippet: </i></b></label>
          <input type="text" name="snippet" placeholder="Enter snippet here">
          <input class="btn waves-effect waves-light" type="submit" value="Add Snippet" />
        </form>
      </div>

      <div class="section">
        <ul class="collapsible popout" data-collapsible="accordion">

        <?php include_once("../controller/controller_home_showSnippets.php"); ?>

          <!--<li>
            <div class="collapsible-header active">Snippet 1</div>
            <div class="collapsible-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non ligula ut dolor condimentum pellentesque. Praesent feugiat convallis erat, sed facilisis nulla varius eu. Nullam sit amet nibh aliquam, consequat velit non, malesuada neque.
              Pellentesque pharetra porttitor iaculis. Sed vel euismod urna. Suspendisse quis ligula euismod nibh imperdiet fringilla. Sed a turpis scelerisque, sagittis urna eget, dictum nisi.</div>
          </li>
          <li>
            <div class="collapsible-header">Snippet 2</div>
            <div class="collapsible-body">In vel augue sit amet felis facilisis fringilla. Ut ut tellus est. Aliquam vestibulum euismod pharetra. Mauris iaculis lacus eu urna placerat eleifend. Mauris scelerisque velit elit, vel maximus nunc blandit egestas. Nullam at condimentum
              diam, nec auctor velit. Aliquam lacinia placerat libero eu ullamcorper. Praesent at faucibus velit, molestie laoreet sem. Sed porttitor pharetra libero, ac molestie odio laoreet in. Praesent scelerisque velit vitae lacus placerat, ac tempus
              ligula ullamcorper. Aliquam ac nisl diam.</div>
          </li>
          <li>
            <div class="collapsible-header">Snippet 3</div>
            <div class="collapsible-body">Duis mollis, libero ac sodales vehicula, libero lorem pulvinar purus, sed finibus risus elit sed tortor. Integer est lacus, elementum id egestas nec, convallis non metus. Duis et nisi eu felis elementum sodales. Mauris vel dolor ut elit vehicula
              dignissim. Sed gravida justo et turpis bibendum tincidunt. Maecenas vestibulum efficitur ultricies. Donec et sem et eros cursus vehicula a at massa. Suspendisse velit velit, ullamcorper quis est nec, tempor bibendum sem. Nunc porta, lectus
              ut mattis cursus, orci odio suscipit dolor, ac ultrices massa metus et orci. Vivamus finibus nibh vitae eros hendrerit rutrum. Proin ultricies faucibus mi, eget pharetra nulla rhoncus ut. Aenean placerat sem in augue tempus, et malesuada
              turpis dignissim. Vivamus efficitur sit amet nunc vel ullamcorper.</div>
          </li>-->
          <ul>
      </div>

    </div>

    <?php //for each element in the variable "$snippets" do stuff ?>

      <!--Import jQuery before materialize.js-->
      <?php include_once("import_js.php"); ?>
      <script language="Javascript">
        $(".dropdown-button").dropdown();
      </script>
  </body>

</html>
