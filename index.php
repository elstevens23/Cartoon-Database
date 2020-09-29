<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cartoon Collection</title>
    <link href="cartoons-stylesheet.css" type="text/css" rel="stylesheet">
    <link href="normalize.css" type="text/css" rel="stylesheet">
    <link href="cartoon-font.ttf" type="text/ttf" rel="stylesheet">
    <link href="BalooTammudu2-Regular.ttf" type="text/ttf" rel="stylesheet">
</head>

<body>

<div class="mainTitle">
    <h1>My Cartoon Collection</h1>
</div>



<?php

$db = new PDO('mysql:host=db;dbname=MyCollection', 'root', 'password'); // initialise the db connection
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT  `cartoons`.`character_name`, `TVshows`.`name`, `IQ`, `image` FROM `cartoons`
JOIN `TVshows` ON `cartoons`.`TVshow_id` = `TVshows`.`id`;');
$query->execute();
$cartoons=$query->fetchAll();

echo '<div class="characters">';

foreach ($cartoons as $character) {
    $characterHtmlElement = '';
    $characterImageElement = '<img src="' .$character['image'] . '" alt="Picture of' . $character['character_name'] . '">';
    $characterNameElement = $character['character_name'];
    $characterTvShowElement = $character['name'];
    $characterIqElement = $character['IQ'];
    $characterHtmlElement = '<div class="container">' . $characterImageElement . "<h2>Name: " . $characterNameElement . '</h2>' . "<h2>TV Show: " . $characterTvShowElement . '</h2>' . "<h2>IQ: " . $characterIqElement . '</h2>' . '</div>';
  echo $characterHtmlElement;
};

echo '</div>';

?>


</body>
</html>