<?php
    include("../includes/admin.php");
    require("../traitement/traitement_view.php");

    // Récupération des données de la session
	session_start();

	// Vérifie si l'utilisateur est connecté, sinon redirection vers la page de connexion
	if(!isset($_SESSION["utilisateur_email"])){
		header("Location: connexion.php");
		exit(); 
	}
?>

        <div class="container admin">
            <div class="row">
                <div class="col-sm-6">
                    <h1><strong>Voir un projet</strong></h1>
                    <br>
                    <form>
                        <div class="form-group">
                            <label>Titre :</label><?php echo '  '.$item['projet_titre'];?>
                        </div>
                        <div class="form-group">
                            <label>Intitulé :</label><?php echo '  '.$item['projet_intitule'];?>
                        </div>
                        <div class="form-group">
                            <label>Contexte :</label><?php echo '  '.$item['projet_contexte'];?>
                        </div>
                        <div class="form-group">
                            <label>Charge en heure :</label><?php echo '  '.$item['projet_charge_heure'];?>
                        </div>
                        <div class="form-group">
                            <label>Période de réalisation :</label><?php echo '  '.$item['projet_periode_realisation'];?>
                        </div>
                        <div class="form-group">
                            <label>Besoin :</label><?php echo '  '.$item['projet_besoin_mission'];?>
                        </div>
                        <div class="form-group">
                            <label>Outils :</label><?php echo '  '.$item['projet_outils'];?>
                        </div>
                        <div class="form-group">
                            <label>Technologies utilisées :</label><?php echo '  '.$item['techno_type'];?>
                        </div>
                        <div class="form-group">
                            <label>Documentation :</label><?php echo '  '.$item['projet_documentation'];?>
                        </div>
                        <div class="form-group">
                            <label>Bilan :</label><?php echo '  '.$item['projet_bilan'];?>
                        </div>
                        <div class="form-group">
                            <label>Image :</label><?php echo '  '.$item['projet_images'];?>
                        </div>
                    </form>
                    <br>
                    <div class="form-actions">
                        <a class="btn btn-primary" href="admin.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                    </div>
                </div> 
                <div class="col-sm-6 site">
                    <div class="thumbnail">
                        <img src="<?php echo '../image/'.$item['projet_images'];?>" alt="...">
                                <div class="caption">
                                    <h4><?php echo $item['projet_titre'];?></h4>
                                    <p><?php echo $item['projet_intitule'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>