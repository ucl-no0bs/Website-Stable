<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
</head>

<?php // calls the showSnippet controller ?>

<body>
    <h2>Hello peasant..Welcome to the secret society</h2>
    <form action="controller_home_addSnippets.php" method="post">
        <label><b><i>Snippet: </i></b></label>
        <input type="text" name="snippet" placeholder="Enter snippet here">
        <input type="submit" value="show snippet"/>
    </form>

    <?php //for each element in the variable "$snippets" do stuff ?>

</body>

</html>
