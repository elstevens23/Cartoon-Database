<?php

require('functions.php');
$db = connect_db('CartoonCollection');
$tvShows = extract_tvShow_from_db($db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Character to Collection</title>
    <link href="normalize.css" type="text/css" rel="stylesheet">
    <link href="cartoons-stylesheet.css" type="text/css" rel="stylesheet">
    <link href="cartoon-font.ttf" type="text/ttf" rel="stylesheet">
    <link href="BalooTammudu2-Regular.ttf" type="text/ttf" rel="stylesheet">
</head>

<body>

<div class="goBack">
    <a href="index.php" rel="prev">< Go Back</a>
</div>

<div class="newCharacterTitle">
    <h1>Add a New Character</h1>
</div>

<div class="formNewCharacter">
    <form method="POST" action="addNewItems_toDb.php">
        <div class="groupCharacterName">
            <label for="characterName"><strong>Character Name:</strong></label>
            <input type="text" id="characterName" name="characterName" placeholder="e.g. Bart Simpson" required>
        </div>
        <div class="groupTvShowName">
            <label for="tvShowName"><strong>TV Show Name:</strong></label>
            <select id="tvShowName" name="tvShowName" required>
                <option selected="selected"><strong>   Select TV Show Name</strong></option>
                <?php
                foreach($tvShows as $newTvShow_form){
                    echo '<option value="' . $newTvShow_form['id'] . '">' . $newTvShow_form['name'] . '</option>';
                } ?>
            </select>
        </div>
        <div class="groupCharacterIq">
            <label for="characterIq"><strong>Character's IQ:</strong></label>
            <input type="text" id="characterIq" name="characterIq" placeholder="e.g. 50" required>
        </div>
        <div class="groupCharacterImgLink">
            <label for="characterImgLink"><strong>Image of your Character: [optional]</strong></label>
            <input type="url" id="characterImgLink" name="characterImgLink" placeholder="e.g. https://www.google/cartoon-images.com">
        </div>
        <div class="submitCharacter">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>

</body>
</html>
