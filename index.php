<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Cartoon Collection</title>
</head>

<body>

<header>
    <h1>My Cartoon Collection</h1>
</header>





<?php

$db = new PDO('mysql:host=db;dbname=MyCollection', 'root', 'password'); // initialise the db connection
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT  `cartoons`.`character_name`, `TVshows`.`name`, `IQ`, `images` FROM `cartoons`
JOIN `TVshows` ON `cartoons`.`TVshow_id` = `TVshows`.`id`;');
$query->execute();
$cartoons=$query->fetchAll();

foreach ($cartoons as $character) {
  $characterHtmlElement = '';
  $characterNameElement = '<h2>' . $character['character_name'] . '</h2>';
  $characterTvShowElement = '<h3>' . $character['name'] . '</h3>';
  $characterIqElement = '<h4>' . $character['IQ'] . '</h4>';
  $characterHtmlElement = '<div class="container">' . $characterNameElement . $characterTvShowElement . $characterIqElement . '</div>';
  echo $characterHtmlElement;
};

?>


</body>
</html>