<?php

require 'functions.php';

if (
    isset($_POST['characterName']) &&
    isset($_POST['tvShowName']) &&
    isset($_POST['characterIq'])
) {
    $db = connect_db('CartoonCollection');
    $_POST['img_location'] = 'imgs/default_image.jpg';
    addNewItem_to_db($_POST, $db);
    header("Location: index.php");
    exit();
}