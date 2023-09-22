<?php
    require '../db/connexion.php';

    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }
    $db = connexionBdd();
    $statement = $db->prepare("SELECT * FROM projets, technologies WHERE projets.projet_id_technologie = technologies.techno_ID AND projet_ID = ?");
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