<?php
    include("../includes/admin.php");
    require("../traitement/traitement_insert.php");

    // Récupération des données de la session
	session_start();

	// Vérifie si l'utilisateur est connecté, sinon redirection vers la page de connexion
	if(!isset($_SESSION["utilisateur_email"])){
		header("Location: connexion.php");
		exit(); 
	}
?>
    <form class="form" action="insert.php" role="form" method="post" enctype="multipart/form-data">
        <!--  General -->
        <div class="form-group">
            <h2 class="heading">Ajouter un projet</h2>
            <div class="controls">
            <input type="text" id="titre" class="floatLabel" name="titre">
            <label for="name">Titre</label>
            <span class="help-inline"><?php echo $titreErreur;?></span>
            </div>
            <div class="controls">
            <input type="text" id="intitule" class="floatLabel" name="intitule">
            <label for="email">Intitulé</label>
            <span class="help-inline"><?php echo $intituleErreur;?></span>
            </div>
            <div class="controls">
            <input type="text" id="intitule" class="floatLabel" name="contexte">
            <label for="email">Contexte</label>
            <span class="help-inline"><?php echo $contexteErreur;?></span>
            </div>        
            <div class="controls">
            <input type="text" id="heure" class="floatLabel" name="heure">
            <label for="phone">Charge en heure</label>
            <span class="help-inline"><?php echo $heureErreur;?></span>
            </div>
                <div class="grid">
                    <div class="col-2-3">
                        <div class="controls">
                            <input type="text" id="realisation" class="floatLabel" name="realisation">
                            <label for="street">Période de réalisation</label>
                            <span class="help-inline"><?php echo $realisationErreur;?></span>
                        </div>          
                    </div>
                    <div class="col-1-3">
                        <div class="controls">
                            <input type="text" id="besoin" class="floatLabel" name="besoin">
                            <label for="street-number">Besoin</label>
                            <span class="help-inline"><?php echo $besoinErreur;?></span>
                        </div>          
                    </div>
                    <div class="col-1-3">
                        <div class="controls">
                            <input type="text" id="besoin" class="floatLabel" name="outils">
                            <label for="street-number">Outils</label>
                            <span class="help-inline"><?php echo $outilsErreur;?></span>
                        </div>          
                    </div>
                </div>
                <div class="grid">
                        <div class="col-2-3">
                            <div class="controls">
                                <select name="techno" id="techno">
                                <?php
                                    $techno = connexionBdd()->query('SELECT * FROM technologies')->fetchAll();
                                    for($i = 0; $i < count($techno); $i++){
                                        echo '<option value="'.$techno[$i]['techno_ID'].'">'.$techno[$i]['techno_type'].'</option>';
                                    }
                                ?>
                                </select>
                            </div>        
                        </div>
                        <div class="col-1-3">
                            <div class="controls">
                                <input type="text" id="documentation" class="floatLabel" name="documentation">
                                <label for="post-code">Documentation</label>
                                <span class="help-inline"><?php echo $documentationErreur;?></span>
                            </div>         
                        </div>
                    </div>
                    <div class="controls">
                        <input type="text" id="bilan" class="floatLabel" name="bilan">
                        <label for="country">Bilan</label>
                        <span class="help-inline"><?php echo $bilanErreur;?></span>
                    </div>
                </div>
                <div class="controls">
                    <label for="image">Sélectionnez une image :</label>
                    <br><br><br>
                    <input type="file" id="image" name="image"> 
                    <span class="help-inline"><?php echo $imageErreur;?></span>
                </div>
                <br>
                <button type="submit" value="Submit" class="col-1-4">Ajouter</button>
                <a class="col-1-4 back" href="admin.php">Retour</a>
            </div>  
        </div> <!-- /.form-group -->
    </form>
    <link rel="stylesheet" type="text/css" href="../backoffice/css/insert.css">
    <script src="../script.js"></script>
    </body>
</html>