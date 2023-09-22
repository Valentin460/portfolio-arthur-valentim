<?php
include("../includes/admin.php");
require("../traitement/traitement_delete_contact.php");

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
                <h1><strong>Supprimer un message</strong></h1>
                <br>
                <form class="form" action="delete_contact.php" role="form" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <p class="alert alert-warning">Etes-vous sûr de vouloir supprimer ?</p>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-warning">Oui</button>
                        <a class="btn btn-default" href="view_contact.php">Non</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>