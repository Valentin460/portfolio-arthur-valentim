<?php

// Affichage des erreurs en cas de champs vides
function traitementConnexion(array $informations){
	$erreurs = [];

	if (empty($informations['email'])){
	$erreurs['email'] = "Veuillez saisir votre adresse email";
	}

	if (empty($informations['mdp'])){
	$erreurs['mdp'] = "Veuillez saisir votre mot de passe";
	}

	// S'il y a des erreurs : on les retourne, sinon on insère dans la base de données

	if (!empty($erreurs)) {
		return [
			'success' => false,
			'erreurs' => $erreurs,
	];
}
}
?>