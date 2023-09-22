<?php
require '../db/connexion.php';

if(!empty($_GET['id']))
{
    $id = checkInput($_GET['id']);
}
$db = connexionBdd();
$statement = $db->prepare("SELECT * FROM contact WHERE contact_ID = ?");
$statement->execute(array($id));
$item = $statement->fetch();

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>