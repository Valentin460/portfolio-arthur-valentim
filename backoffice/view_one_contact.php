<?php
include("../includes/head-contact.php");
if(!empty($_GET['id']))
{
    $id = checkInput($_GET['id']);
}
require("../db/connexion.php");
$db = connexionBdd();
$statement = $db->prepare("SELECT * FROM contact WHERE contact_ID = ?");
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
                    <h5 class="card-header h4 text-secondary">Voir un message</h5>
                    <div class="card-body">
                        <p class="card-text"><span class="text-muted">Prénom : </span><?php echo $item['contact_firstname'];?></p>
                        <p class="card-text"><span class="text-muted">Nom : </span><?php echo $item['contact_name'];?></p>
                        <p class="card-text"><span class="text-muted">Adresse email : </span> <?php echo $item['contact_email'];?></p>
                        <p class="card-text"><span class="text-muted">Numéro de téléphone : </span> <?php echo $item['contact_phone'];?></p>
                        <p class="card-text"><span class="text-muted">Message : </span><?php echo $item['contact_message'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>