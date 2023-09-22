<?php

    require '../db/connexion.php';

    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }

    $titreErreur = $intituleErreur = $contexteErreur = $heureErreur = $realisationErreur = $besoinErreur = $outilsErreur = $documentationErreur = $bilanErreur = $imageErreur = $titre = $intitule = $contexte = $heure = $realisation = $besoin = $outils = $documentation = $bilan = $image = "";

    if(!empty($_POST)) 
    {
        $titre = checkInput($_POST['titre']);
        $intitule = checkInput($_POST['intitule']);
        $contexte = checkInput($_POST['contexte']);
        $heure = checkInput($_POST['heure']);
        $realisation = checkInput($_POST['realisation']);
        $besoin = checkInput($_POST['besoin']);
        $outils = checkInput($_POST['outils']);
        $documentation = checkInput($_POST['documentation']);
        $bilan = checkInput($_POST['bilan']); 
        $image = checkInput($_FILES["image"]["name"]);
        $imagePath = '../image/'. basename($image);
        $imageExtension = pathinfo($imagePath,PATHINFO_EXTENSION);
        $isSuccess = true;
       
        if(empty($titre)) 
        {
            $titreErreur = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($intitule)) 
        {
            $intituleErreur = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 
        if(empty($contexte)) 
        {
            $contexteErreur = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 
        if(empty($heure)) 
        {
            $heureErreur = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 
         
        if(empty($realisation)) 
        {
            $realisationErreur = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($besoin)) 
        {
            $besoinErreur = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($outils)) 
        {
            $outilsErreur = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 
        if(empty($documentation)) 
        {
            $documentationErreur = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($bilan)) 
        {
            $bilanErreur = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($image)) // le input file est vide, ce qui signifie que l'image n'a pas ete update
        {
            $isImageUpdated = false;
        }
        else
        {
            $isImageUpdated = true;
            $isUploadSuccess =true;
            if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif" ) 
            {
                $imageErreur = "Les fichiers autorises sont: .jpg, .jpeg, .png, .gif";
                $isUploadSuccess = false;
            }
            if(file_exists($imagePath)) 
            {
                $imageErreur = "Le fichier existe deja";
                $isUploadSuccess = false;
            }
            if($_FILES["image"]["size"] > 5000000) 
            {
                $imageErreur = "Le fichier ne doit pas depasser les 5MB";
                $isUploadSuccess = false;
            }
            if($isUploadSuccess) 
            {
                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) 
                {
                    $imageErreur = "Il y a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                } 
            } 
        }

        $image = strtr($image,
			'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜİàáâãäåçèéêëìíîïğòóôõöùúûüıÿ',
			'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'); 
			//On remplace les lettres accentutées par les non accentuées dans $image.
			//Et on récupère le résultat dans fichier
 
			//En dessous, il y a l'expression régulière qui remplace tout ce qui n'est pas une lettre non accentuées ou un chiffre
			//dans $image par un tiret "-" et qui place le résultat dans $image.
			$image = preg_replace('/([^.a-z0-9]+)/i', '-', $image);

			rename ("../image/".$_FILES['image']["name"], "../image/$image");
         
        if (($isSuccess && $isImageUpdated && $isUploadSuccess) || ($isSuccess && !$isImageUpdated)) 
        { 
            $db = connexionBdd();
            if($isImageUpdated)
            {
                $statement = $db->prepare("UPDATE projets set projet_titre = ?, projet_intitule = ?, projet_contexte = ?, projet_charge_heure = ?, projet_periode_realisation = ?, projet_besoin_mission = ?, projet_outils = ?, projet_documentation = ?, projet_bilan = ?, projet_images = ? WHERE projet_ID = ?");
                $statement->execute(array($titre,$intitule,$contexte,$heure,$realisation,$besoin,$outils,$documentation,$bilan,$image,$id));
            }
            else
            {
                $statement = $db->prepare("UPDATE projets set projet_titre = ?, projet_intitule = ?, projet_contexte = ?, projet_charge_heure = ?, projet_periode_realisation = ?, projet_besoin_mission = ?, projet_outils = ?, projet_documentation = ?, projet_bilan = ? WHERE projet_ID = ?");
                $statement->execute(array($titre,$intitule,$contexte,$heure,$realisation,$besoin,$outils,$documentation,$bilan,$id));
            }
            header("Location: admin.php");
        }
        else if($isImageUpdated && !$isUploadSuccess)
        {
            $db = connexionBdd();
            $statement = $db->prepare("SELECT * FROM projets where projet_ID = ?");
            $statement->execute(array($id));
            $item = $statement->fetch();
            $image = $item['projet_images'];
           
        }
    }
    else 
    {
        $db = connexionBdd();
        $statement = $db->prepare("SELECT * FROM projets where projet_ID = ?");
        $statement->execute(array($id));
        $item = $statement->fetch();
        $titre = $item['projet_titre'];
        $intitule = $item['projet_intitule'];
        $contexte = $item['projet_contexte'];
        $heure = $item['projet_charge_heure'];
        $realisation = $item['projet_periode_realisation'];
        $besoin = $item['projet_besoin_mission'];
        $outils = $item['projet_outils'];
        $documentation = $item['projet_documentation'];
        $bilan = $item['projet_bilan'];
        $image = $item['projet_images'];
    }

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>