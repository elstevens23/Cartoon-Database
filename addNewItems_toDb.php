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
        $_POST['characterImgLink'] = '<img src=" <?php characterImgLink ?> " alt=" <?php $character ?> ">';
        addNewItem_to_db($_POST, $db);
        header("Location: index.php");
    } else {
        echo 'Adding an image to your cartoon card has failed. Please try again!';
    }
//    addNewItem_to_db($_POST, $db);
//    header("Location: index.php");
    exit();
}