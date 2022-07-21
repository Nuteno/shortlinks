<?php

ini_set('display_errors', 'On');


include_once "php/database.php";

$database = new Database();
$db = $database->getConnection();


if (isset($_GET['r'])) {

    $short_key = htmlspecialchars(strip_tags($_GET['r']));

    $query = "SELECT `url` FROM `links` WHERE `short_key`= '$short_key'";

    $stmt = $db->prepare($query);

    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    header('Location:'.$row['url']);
}
else{
    header('Location: index.html');
}
?>
