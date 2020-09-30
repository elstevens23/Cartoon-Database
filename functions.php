<?php

function eachCharacter(array $cartoons): string
{
    $characterHtmlElementsString = '';
    foreach ($cartoons as $character) {
        $characterImageElement = '<img src="' . $character['image'] . '" alt="Picture of ' . $character['character_name'] . '">';
        $characterNameElement = $character['character_name'];
        $characterTvShowElement = $character['name'];
        $characterIqElement = $character['IQ'];
        $characterHtmlElement = '<div class="container">' . $characterImageElement . "<h2>Name: " . $characterNameElement . '</h2>' . "<h2>TV Show: " . $characterTvShowElement . '</h2>' . "<h2>IQ: " . $characterIqElement . '</h2>' . '</div>';
        $characterHtmlElementsString .= $characterHtmlElement;
        if (!isset($character['character_name']) || !isset($character['IQ']) || !isset($character['name']) || !isset($character['image'])) {
            return false;
        };
    };
    return $characterHtmlElementsString;
}

function connect_db($collectionName)
{
    $db = new PDO('mysql:host=db;dbname=' . $collectionName,'root', 'password'); // initialise the db connection
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare('SELECT  `cartoons`.`character_name`, `TVshows`.`name`, `IQ`, `image` FROM `cartoons`
    JOIN `TVshows` ON `cartoons`.`TVshow_id` = `TVshows`.`id`;');
    $query->execute();
    return $query->fetchAll();
}