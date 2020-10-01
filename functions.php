<?php

/*
 * Connects to the database and setting the attribute
 *
 * @param $collectionName refers to the database name, referenced through the function connect_db on the index.php file
 *
 * @return the new PDO, setting up the connection between the php file and the database
 *
 */

function connect_db($dbName)
{
    $db = new PDO('mysql:host=db;dbname=' . $dbName,'root', 'password'); // initialise the db connection
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/*
 * Executes the query by fetching all the data, using the query code written below
 *
 * @param PDO $db links to the function above, which connects to the database
 *
 * @return this extracts the data from the database, returning it as an associative array
 *
 */

function extract_from_db(PDO $db): array {
    $query = $db->prepare('SELECT  `cartoons`.`character_name`, `TVshows`.`name`, `IQ`, `image` FROM `cartoons`
        JOIN `TVshows` ON `cartoons`.`TVshow_id` = `TVshows`.`id`;');
    $query->execute();
    return $query->fetchAll();
}

/*
 * This takes the given array $cartoons, ensures it is a string, and concatenates each variable, connecting
 * each bit of data from the database, to give the $character an image, name, TV show name and IQ
 *
 * @param $cartoons the array, from the database, which is being passed in this function
 *
 * @return this returns the variable $characterHtmlElementsString which is a concatenated string with each separate stat
 * about each character
 *
 */

function eachCharacter(array $character): string
{
    $characterHtmlElementsString = '';
    if (isset($character['character_name']) &&
        isset($character['IQ']) &&
        isset($character['name']) &&
        isset($character['image'])
    ) {
        $characterImageElement = '<img src="' . $character['image'] . '" alt="Picture of ' . $character['character_name'] . '">';
        $characterNameElement = $character['character_name'];
        $characterTvShowElement = $character['name'];
        $characterIqElement = $character['IQ'];
        $characterHtmlElement = '<div class="container">' . $characterImageElement . "<h2>Name: " . $characterNameElement . '</h2>' . "<h2>TV Show: " . $characterTvShowElement . '</h2>' . "<h2>IQ: " . $characterIqElement . '</h2>' . '</div>';
        $characterHtmlElementsString .= $characterHtmlElement;
    }
    return $characterHtmlElementsString;
}