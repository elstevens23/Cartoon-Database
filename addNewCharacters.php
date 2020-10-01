<?php

require('functions.php');
$db = connect_db('CartoonCollection');
$newTvShowName = extract_tvShow_from_db($db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Character to Collection</title>
    <link href="cartoons-stylesheet.css" type="text/css" rel="stylesheet">
    <link href="normalize.css" type="text/css" rel="stylesheet">
    <link href="cartoon-font.ttf" type="text/ttf" rel="stylesheet">
    <link href="BalooTammudu2-Regular.ttf" type="text/ttf" rel="stylesheet">
</head>

<body>

<div class="newCharacterTitle">
    <h1>Add a New Character</h1>
</div>

<form method="POST" action="addNewItems_toDb.php">
    <label for="characterName">Character Name:</label>
    <br>
    <input type="text" id="characterName" name="characterName" placeholder="e.g. Bart Simpson" required>
    <br>
    <label for="tvShowName">TV Show Name:</label>
    <br>
    <select id="tvShowName" name="tvShowName" required>
        <?php
        foreach($newTvShowName as $newTvShow_form){
            echo '<option value="' . $newTvShow_form['id'] . '">' . $newTvShow_form['name'] . '</option>';
        } ?>
    </select>
    <br>
    <label for="characterIq">Character's IQ:</label>
    <br>
    <input type="text" id="characterIq" name="characterIq" placeholder="e.g. 50" required>
    <br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
