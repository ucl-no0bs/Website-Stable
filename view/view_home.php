<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css"  media="screen,projection"/>
</head>

<?php // calls the showSnippet controller ?>

<body>
    <h2>Hello peasant..Welcome to the secret society</h2>
    <form action="../controller/controller_home_addSnippet.php" method="post">
        <label><b><i>Snippet: </i></b></label>
        <input type="text" name="snippet" placeholder="Enter snippet here">
        <input type="submit" value="show snippet"/>
    </form>

    <?php //for each element in the variable "$snippets" do stuff ?>

</body>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

</html>
