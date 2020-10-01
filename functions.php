<?php

/**
 * Connects to the database and setting the attribute
 *
 * @param $dbName refers to the database name, referenced through the function connect_db on the index.php file
 *
 * @return the new PDO, setting up the connection between the php file and the database
 *
 */

function connect_db(string $dbName): PDO
{
    $db = new PDO('mysql:host=db;dbname=' . $dbName,'root', 'password'); // initialise the db connection
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}

/**
 * Executes the query by fetching all the data, using the query code written below
 *
 * @param PDO $db links to the function above, which connects to the database
 *
 * @return this extracts the data from the database, returning it as an associative array
 *
 */

function extract_from_db(PDO $db): array
{
    $query = $db->prepare('SELECT  `cartoons`.`character_name`, `TVshows`.`name`, `IQ`, `image` FROM `cartoons`
        JOIN `TVshows` ON `cartoons`.`TVshow_id` = `TVshows`.`id`;');
    $query->execute();
    return $query->fetchAll();
}

/**
 * This takes the given array $cartoons, ensures it is a string, and concatenates each variable, connecting
 * each bit of data from the database, to give the $character an image, name, TV show name and IQ
 *
 * @param array $character takes each property of the character's name, TV show name, image and IQ, storing each one in
 * a variable of their own
 *
 * @return this returns the variable $characterHtmlElementsString which is a concatenated string with each separate stat
 * about each character
 */

function eachCharacter(array $character): string
{
    $characterHtmlElementsString = '';
    if (
        isset($character['character_name']) &&
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



/**
 * this extracts the TV shows' names
 *
 * @param PDO $db this extracts from the database and returns in an associative array
 *
 * @return array an array of the TV show names
 *
 */

function extract_tvShow_from_db(PDO $db): array
{
    $query = $db->prepare('SELECT `id`, `name` FROM `TVshows`;');
    $query->execute();
    return $query->fetchAll();
}


/**
 * This adds an array of given values of a new character to the database
 *
 * @param array $newInputArray this is the array of the character's values being added to the db
 *
 * @param PDO $db this is the database that the values will be added to
 *
 */

function addNewItem_to_db (array $newInputArray, PDO $db) {
    $query = $db->prepare('INSERT INTO `cartoons`(`character_name`, `TVshow_id`, `IQ`, `image`) 
VALUES (:characterName, :tvShowName, :characterIq, :img_location);');
    $query->execute($newInputArray);
}