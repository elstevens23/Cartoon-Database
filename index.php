<?php

require 'functions.php';

$db = connect_db('CartoonCollection');
$cartoons = extract_from_db($db);

?>

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

echo '<div class="characters">';
     foreach ($cartoons as $character) {
         echo eachCharacter($character);
     }
echo '</div>';

?>


</body>
</html>