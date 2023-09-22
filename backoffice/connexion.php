<?php
    include("../includes/head.php");
?>

<?php
			// Permet d'appeler la fonction de connexion à la BD
            require('../db/connexion.php');
			
			// Démarrage d'une session
            session_start();

            // Connexion à la BD
            $co = connexionBdd();

            if (isset($_POST['submit'])){
                $utilisateur_email = $_POST['utilisateur_email'];
				$utilisateur_mdp = hash('sha256', $_POST['utilisateur_mdp']);

                // Préparation de la requête
                $query = $co->prepare('SELECT * FROM utilisateurs WHERE utilisateur_email=:login and utilisateur_mdp=:password');

                // Association des paramètres aux variables/valeurs
                $query->bindParam(':login', $utilisateur_email);
				$query->bindParam(':password', $utilisateur_mdp);

                // Execution de la requête
                $query->execute();

                // Récupération dans la variable $result de toutes les lignes que retourne la requête
                $result = $query->fetchall();

                // On compte le nombre de lignes résultats de la requête
                $rows = $query->rowCount();
				
				// Si une ligne résultat est trouvée, cela signifie que l'utilisateur existe dans la BD
				// et donc qu'il a le droit de se connecter
                if($rows==1){
					// On définit la variable de session utilisateur_email avec la valeur saisie par l'utilisateur
                    $_SESSION['utilisateur_email'] = $utilisateur_email;
					// On lance la page admin.php à la place de la page actuelle
                    header("Location: admin.php");
                }else{
					// Si la requête ne retourne rien, alors l'utilisateur n'existe pas dans la BD, on lui
					// affiche un message d'erreur
                    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
                }
            }
        ?>
        <header class="hdr">
            <div class="container__form">
                <h2 class="container__title-connexion">Connexion</h2>
                <p class="container__text">Connexion à l'espace d'administration</p>
                <form class="form" action="" method="post"> 
                <div class="form-group">
                    <input class="input-field" id="username" type="text" name="utilisateur_email" placeholder="Adresse email"/>
                    <label for="username"> <i class="icon ion-md-person"></i></label>
                </div>
                <div class="form-group">
                    <input class="input-field" id="password" type="password" name="utilisateur_mdp" placeholder="Mot de passe"/>
                    <label for="password"> <i class="icon ion-md-lock"></i></label>
                </div>
                <div class="form-link"><a class="form__link-resetPassword" href="../index.php">Retour à la page principale</a></div>
                <div class="form__btn">
                    <input type="submit" name="submit" value="Connexion"/>
                </div>
                <?php if (! empty($message)) { ?>
                        <p class="errorMessage"><i class="fas fa-exclamation-triangle"></i><?php echo $message; ?></p>
                    <?php } ?>
                </form>
            </div>
        </header>
        <link rel="stylesheet" type="text/css" href="../backoffice/css/connexion.css">
    </body>
</html>