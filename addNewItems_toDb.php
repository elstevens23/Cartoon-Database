<?php

require 'functions.php';

if (
    isset($_POST['characterName']) &&
    isset($_POST['tvShowName']) &&
    isset($_POST['characterIq']) &&
    isset($_POST['characterImgLink'])
) {
    $db = connect_db('CartoonCollection');
    if (empty($_POST['characterImgLink'])) {
        $_POST['characterImgLink'] = 'imgs/default_image.jpg';
    }
    addNewItem_to_db($_POST, $db);
    header("Location: index.php");
    exit();
}