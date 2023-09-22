<?php
require '../db/connexion.php';

if(!empty($_GET['id']))
{
    $id = checkInput($_GET['id']);
}

if(!empty($_POST))
{
    $id = checkInput($_POST['id']);
    $db = connexionBdd();
    $statement = $db->prepare("DELETE FROM contact WHERE contact_ID = ?");
    $statement->execute(array($id));
    header("Location: view_contact.php");
}

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>