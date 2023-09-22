<?php

// Affichage des erreurs en cas de champs vides
function traitementFormulaire(array $informations){
	$erreurs = [];

	if (empty($informations['firstname'])){
	$erreurs['firstname'] = "Veuillez saisir votre prénom";
	}

	if (empty($informations['name'])){
	$erreurs['name'] = "Veuillez saisir votre nom";
	}

	if (empty($informations['email'])){
	$erreurs['email'] = "Veuillez saisir votre adresse mail";
	}

    if (empty($informations['phone'])){
    $erreurs['phone'] = "Veuillez saisir votre numéro de téléphone";
    }

    if (empty($informations['message'])){
    $erreurs['message'] = "Veuillez préciser votre demande";
    }

	// S'il y a des erreurs : on les retourne, sinon on insère dans la base de données

	if (!empty($erreurs)) {
		return [
			'success' => false,
			'erreurs' => $erreurs,
	];

	}
	else{
		// Apppeler le fichier de connexion à la base de données
			
		// Si l'on clique sur le bouton envoyer du formulaire
		if(isset($_POST['submit'])) {

			// Vérification si les champs ont été saisis
			if(isset($_POST['firstname'], $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message'])){

				// Vérification des champs et suppression des espaces, antislashs et convertit les caractères spéciaux en entités HTML
				function verifyInput($var)
				{
					$var = trim($var);
					$var = stripslashes($var);
					$var = htmlspecialchars($var);

					return $var;
				}
				
				// Récupération des valeurs du formulaire
				$firstname = verifyInput($_POST['firstname']);
				$name = verifyInput($_POST['name']);
				$email = verifyInput($_POST['email']);
				$phone = verifyInput($_POST['phone']);
				$message = verifyInput($_POST['message']);

				// Connexion à la base de données
				$co = connexionBdd();

				// Prépation de la requête afin d'inserer les valeurs en base de données
				$query = $co->prepare("INSERT into contact(contact_firstname, contact_name, contact_email, contact_phone, contact_message) VALUES (:contact_firstname, :contact_name, :contact_email, :contact_phone, :contact_message)");

				$query->bindParam(':contact_firstname', $firstname);
				$query->bindParam(':contact_name', $name);
				$query->bindParam(':contact_email', $email);
				$query->bindParam(':contact_phone', $phone);
				$query->bindParam(':contact_message', $message);

				// Exécution de la requête
				$query->execute();

				// Message de confirmation après l'envoie des informations en base de données
				if($query){
					echo "<div>
							<center><h3>Votre message a bien été envoyé !</h3></center>
						</div>";
				}
			}
		}
	}
	return [
		'success' => true,
	];
}

?>