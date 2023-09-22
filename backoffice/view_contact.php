<?php
include("../includes/admin.php");
require("../traitement/traitement_view_contact.php");

// Récupération des données de la session
session_start();

// Vérifie si l'utilisateur est connecté, sinon redirection vers la page de connexion
if(!isset($_SESSION["utilisateur_email"])){
    header("Location: connexion.php");
    exit();
}
?>

<div id="topheader">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Menu de navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="logout.php">Déconnexion</a>
                <a class="navbar-brand" href="insert.php">Ajouter un projet</a>
                <a class="navbar-brand" href="admin.php">Projets</a>
                <a class="navbar-brand" href="view_contact.php">Messages</a>
            </div>
        </div>
    </nav>
</div>
<main>
    <table>
        <thead>
        <tr>
            <th>
                Prénom
            </th>
            <th>
                Nom
            </th>
            <th>
                Adresse email
            </th>
            <th>
                Numéro de téléphone
            </th>
            <th>
                Actions
            </th>
        </tr>
        </thead>
        <tfoot>
        </tfoot>
        <tbody>
        <?php
        $db = connexionBdd();
        $statement = $db->query('SELECT * FROM contact');
        while($item = $statement->fetch())
        {
            echo "<tr>";
            echo "<td data-title='Prénom : '>". $item['contact_firstname'] ."</td>";
            echo "<td data-title='Nom : '>". $item['contact_name'] ."</td>";
            echo "<td data-title='Adresse email : '>". $item['contact_email'] ."</td>";
            echo "<td data-title='Numéro de téléphone : '>". $item['contact_phone'] ."</td>";
            echo '<td><a class="btn btn-default" href="view_one_contact.php?id='.$item['contact_ID'].'"><span class="glyphicon glyphicon-eye-open"></span> Voir</a><a class="btn btn-danger" href="delete_contact.php?id='.$item['contact_ID'].'"><span class="glyphicon glyphicon-remove"></span> Supprimer</a></td>';
            echo "</tr>";
        }
        ?>
        <link rel="stylesheet" type="text/css" href="../backoffice/css/admin.css">
</main>
</body>
</html>