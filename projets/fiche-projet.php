<?php
	include("../includes/head.php");
    if(!empty($_GET['id'])) 
        {
            $id = checkInput($_GET['id']);
        }
        require("../db/connexion.php");
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

    <div class="center">
		<div class="col-lg-7 mx-auto">
            <div class="card mb-5 border border-secondary">
                <h5 class="card-header h4 text-secondary"><?php echo $item['projet_titre'];?></h5>
                <div class="card-body">
					<h5 class="card-title h5 text-secondary"><?php echo $item['projet_intitule'];?></h5>
                    <p class="card-text"><span class="text-muted">Contexte : </span><?php echo $item['projet_contexte'];?></p>
					<p class="card-text"><span class="text-muted">Charge en heures : </span><?php echo $item['projet_charge_heure'];?></p>
					<p class="card-text"><span class="text-muted">Période de réalisation : </span> <?php echo $item['projet_periode_realisation'];?></p>
					<p class="card-text"><span class="text-muted">Besoin de la mission : </span> <?php echo $item['projet_besoin_mission'];?></p>
                    <p class="card-text"><span class="text-muted">Outils : </span><?php echo $item['projet_outils'];?></p>
                    <p class="card-text"><span class="text-muted">Technologies utilisées : </span> <?php echo $item['techno_type'];?></p>
					<p class="card-text"><span class="text-muted">Documentation associée : </span> <?php echo $item['projet_documentation'];?></p>
                    <p class="card-text"><span class="text-muted">Bilan : </span> <?php echo $item['projet_bilan'];?></p>

                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Téléchargement des documentations/Cahiers des Charges <i class="fas fa-download"></i></button>

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                        
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Documentations & Cahiers des Charges</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                            
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <a href="../image/CDC-Livequestion.pdf" download="CDC-Livequestion.pdf" target="blank"><button type="button" class="btn btn-primary">LiveQuestion - CDC (421 Ko) <i class="fas fa-download"></i></button></a><br><br>
                                    <a href="../documentation/LIVEQUESTION.pdf" download="LIVEQUESTION.pdf" target="blank"><button type="button" class="btn btn-primary">LiveQuestion - Documentation (109 Ko) <i class="fas fa-download"></i></button></a><br><br>
                                    <a href="../image/CDC-My-Series-Companion-vacances.pdf" download="CDC-My-Series-Companion-vacances.pdf" target="blank"><button type="button" class="btn btn-primary">My Series Companion - CDC (1,14 Mo) <i class="fas fa-download"></i></button></a><br><br>
                                    <a href="../documentation/DISNEYPLUS.pdf" download="DISNEYPLUS.pdf" target="blank"><button type="button" class="btn btn-primary">Disney+ - Documentation (140 Ko) <i class="fas fa-download"></i></button></a><br><br>
                                    <a href="../documentation/documents.zip" download="documents.zip" target="blank"><button type="button" class="btn btn-primary">Gestion d'une infirmerie - Documentation (1,9 Mo) <i class="fas fa-download"></i></button></a><br><br>
                                    <a href="../documentation/documentsSymfony.zip" download="documentsSymfony.zip" target="blank"><button type="button" class="btn btn-primary">Gestion des locations - Documentation (4 Mo) <i class="fas fa-download"></i></button></a><br><br>
                                    <a href="../documentation/documentsLesGouttesDEau.zip" download="documentsLesGouttesDEau.zip" target="blank"><button type="button" class="btn btn-primary">Les Gouttes d'Eau - Documentation (8,2 Mo) <i class="fas fa-download"></i></button></a>
                                </div>
                            
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="captures" src="<?php echo '../image/'.$item['projet_images'];?>" alt="Image du projet">
    </div>

<?php
    include("../includes/footer.php");
?>