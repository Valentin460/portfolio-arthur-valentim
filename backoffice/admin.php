<?php
	include("../includes/admin.php");
	
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
                Titre
                </th>
                <th>
                Intitulé
                </th>
                <th>
                Contexte
                </th>
                <th class="tab_charge_heure">
                Charge en heure
                </th>
                <th>
                Période de réalisation
                </th>
                <th>
                Besoin
                </th>
                <th>
                Outils
                </th>
                <th>
                Technologies utilisées
                </th>
                <th>
                Documentation
                </th>
                <th>
                Bilan
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
                require '../db/connexion.php';
                $db = connexionBdd();
                $statement = $db->query('SELECT * FROM projets, technologies WHERE projets.projet_id_technologie = techno_ID');
                while($item = $statement->fetch())
                {
                    echo "<tr>";
                    echo "<td data-title='Titre : '>". $item['projet_titre'] ."</td>";
                    echo "<td data-title='Intitulé : '>". $item['projet_intitule'] ."</td>";
                    echo "<td data-title='Contexte : '>". $item['projet_contexte'] ."</td>";
                    echo "<td data-title='Charge en heure : '>". $item['projet_charge_heure'] ."</td>";
                    echo "<td data-title='Besoin : '>". $item['projet_besoin_mission'] ."</td>";
                    echo "<td data-title='Outils : '>". $item['projet_outils'] ."</td>";
                    echo "<td data-title='Période de réalisation : '>". $item['projet_periode_realisation'] ."</td>";
                    echo "<td data-title='Technologies utilisées : '>". $item['techno_type'] ."</td>";
                    echo "<td data-title='Documentation : '>". $item['projet_documentation'] ."</td>";
                    echo "<td data-title='Bilan : '>". $item['projet_bilan'] ."</td>";
                    echo '<td class="select"><a class="btn btn-default" href="view.php?id='.$item['projet_ID'].'"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                    echo '<a class="btn btn-primary" href="update.php?id='.$item['projet_ID'].'"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
                    echo '<a class="btn btn-danger" href="delete.php?id='.$item['projet_ID'].'"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
    </main>
    <link rel="stylesheet" type="text/css" href="../backoffice/css/admin.css">
    </body>
</html>