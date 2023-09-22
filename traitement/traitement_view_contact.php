<?php
require '../db/connexion.php';

$db = connexionBdd();
$statement = $db->prepare("SELECT * FROM contact");
$item = $statement->fetch();

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>