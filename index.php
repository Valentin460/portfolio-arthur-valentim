<?php
	include("includes/menu.php");
?>
		<!-- Description/Présentation -->
		<div class="bg-presentation">
			<center class="centre">
				<div id="presentation" class="presentation">
					<div class="card" style="width: 30rem;">
						<img class="card-img-top" src="image/Arthur.jpg" alt="Card image cap">
						<div class="card-body">
							<h3 class="card-title">Développeur web junior</h3>
							<p class="card-text">Actuellement au sein de l'ESGI à Paris, en mastère Ingénierie du Web.</p>
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary center bouton" data-toggle="modal" data-target="#exampleModal">Télécharger mon CV <span class="glyphicon glyphicon-download-alt"></span></button>
							
							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Téléchargement du CV</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
											<p>Téléchargement au format PDF</p>
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
											<a href="image/Arthur.pdf" download="Arthur.pdf" target="blank"><button type="button" class="btn btn-primary">Télécharger (236 Ko) [Version Française] <span class="glyphicon glyphicon-download-alt"></span></button></a>
											<a href="image/EnglishCV.pdf" download="EnglishCV.pdf" target="blank"><button type="button" class="btn btn-info">Download (81 Ko) [English Version] <span class="glyphicon glyphicon-download-alt"></span></button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</center>
		</div>

		
		<div class="bg-cards" id="realisation">
			<h2 style="color:white;">Mes réalisations</h2>
			<main class="main-area">
				<div class="centered">
					<section class="cards">
					<?php
						require ('db/connexion.php');
						$db = connexionBdd();
						$statement = $db->query('SELECT * FROM projets');
						while($item = $statement->fetch())
						{
						echo '<article class="card">
								<a href="projets/fiche-projet.php?id='.$item['projet_ID'].'" class="btn btn-order" role="button">
									<figure class="thumbnail">
										<img src="image/' . $item['projet_images'] . '" alt="...">
									</figure>
									<div class="card-content">
										<h2>' . $item['projet_titre'] . '</h2>
											<p>' . $item['projet_intitule'] . '</p>
									</div>
								</a>
							</article>';
						}
						?>
					</section>
				</div>
			</main>
		</div>
      	<!-- Timeline - compétences -->
			<h2>Mon parcours</h2>
				<div class="container">
					<div class="main-timeline">
						<!-- start experience section-->
						<div class="timeline">
							<div class="icon"></div>
							<div class="date-content">
								<div class="date-outer">
									<span class="date">
										<span class="month">Septembre</span>
									<span class="year">2020</span>
									</span>
								</div>
							</div>
							<div class="timeline-content">
								<h5 class="title">HTML & CSS</h5>
							</div>
						</div>
						<!-- end experience section-->
						<div class="timeline">
							<div class="icon"></div>
							<div class="date-content">
								<div class="date-outer">
									<span class="date">
										<span class="month">Septembre</span>
									<span class="year">2020</span>
									</span>
								</div>
							</div>
							<div class="timeline-content">
								<h5 class="title">CV en ligne</h5>
								<p class="description">
									HTML, CSS
								</p>
							</div>
						</div>
						<!-- end experience section-->
						<!-- start experience section-->
						<div class="timeline">
							<div class="icon"></div>
							<div class="date-content">
								<div class="date-outer">
									<span class="date">
										<span class="month">Septembre</span>
									<span class="year">2020</span>
									</span>
								</div>
							</div>
							<div class="timeline-content">
								<h5 class="title">C#</h5>
							</div>
						</div>
						<!-- start experience section-->
						<div class="timeline">
							<div class="icon"></div>
							<div class="date-content">
								<div class="date-outer">
									<span class="date">
										<span class="month">Octobre</span>
									<span class="year">2020</span>
									</span>
								</div>
							</div>
							<div class="timeline-content">
								<h5 class="title">Site personnel</h5>
								<p class="description">
									HTML, CSS, JavaScript, PHP, MySQL
								</p>
							</div>
						</div>
						<!-- end experience section-->
						<div class="timeline">
							<div class="icon"></div>
							<div class="date-content">
								<div class="date-outer">
									<span class="date">
										<span class="month">Octobre</span>
									<span class="year">2020</span>
									</span>
								</div>
							</div>
							<div class="timeline-content">
								<h5 class="title">WordPress</h5>
							</div>
						</div>
						<!-- end experience section-->
						<!-- start experience section-->
						<div class="timeline">
							<div class="icon"></div>
							<div class="date-content">
								<div class="date-outer">
									<span class="date">
										<span class="month">Octobre</span>
									<span class="year">2020</span>
									</span>
								</div>
							</div>
							<div class="timeline-content">
								<h5 class="title">Site catalogue</h5>
								<p class="description">
									WordPress
								</p>
							</div>
						</div>
						<!-- start experience section-->
						<div class="timeline">
							<div class="icon"></div>
							<div class="date-content">
								<div class="date-outer">
									<span class="date">
										<span class="month">Octobre</span>
									<span class="year">2020</span>
									</span>
								</div>
							</div>
							<div class="timeline-content">
								<h5 class="title">Bootstrap & jQuery</h5>
							</div>
						</div>
						<!-- end experience section-->
						<!-- start experience section-->
						<div class="timeline">
							<div class="icon"></div>
							<div class="date-content">
								<div class="date-outer">
									<span class="date">
										<span class="month">Décembre</span>
									<span class="year">2020</span>
									</span>
								</div>
							</div>
							<div class="timeline-content">
								<h5 class="title">PHP</h5>
							</div>
						</div>
						<!-- end experience section-->
						<!-- start experience section-->
						<div class="timeline">
							<div class="icon"></div>
							<div class="date-content">
								<div class="date-outer">
									<span class="date">
										<span class="month">Février</span>
									<span class="year">2021</span>
									</span>
								</div>
							</div>
							<div class="timeline-content">
								<h5 class="title">LiveQuestion</h5>
								<p class="description">
									HTML, CSS, JavaScript, PHP, MySQL
								</p>
							</div>
						</div>
					<!-- end experience section-->
					<!-- start experience section-->
					<div class="timeline">
							<div class="icon"></div>
							<div class="date-content">
								<div class="date-outer">
									<span class="date">
										<span class="month">Mars</span>
									<span class="year">2021</span>
									</span>
								</div>
							</div>
							<div class="timeline-content">
								<h5 class="title">Projet Disney</h5>
								<p class="description">
									WordPress
								</p>
							</div>
						</div>
					<!-- end experience section-->
					<!-- start experience section-->
					<div class="timeline">
							<div class="icon"></div>
							<div class="date-content">
								<div class="date-outer">
									<span class="date">
										<span class="month">Juin</span>
									<span class="year">2021</span>
									</span>
								</div>
							</div>
							<div class="timeline-content">
								<h5 class="title">Maintenance éditoriale</h5>
								<p class="description">
									TYPO3
								</p>
							</div>
						</div>
					<!-- end experience section-->
					<!-- start experience section-->
					<div class="timeline">
							<div class="icon"></div>
							<div class="date-content">
								<div class="date-outer">
									<span class="date">
										<span class="month">Juin</span>
									<span class="year">2021</span>
									</span>
								</div>
							</div>
							<div class="timeline-content">
								<h5 class="title">Association Goutte d'eau</h5>
								<p class="description">
									HTML, CSS, PHP, MySQL
								</p>
							</div>
						</div>
						<!-- end experience section-->
						<!-- start experience section-->
						<div class="timeline">
								<div class="icon"></div>
								<div class="date-content">
									<div class="date-outer">
										<span class="date">
											<span class="month">Juin</span>
										<span class="year">2021</span>
										</span>
									</div>
								</div>
								<div class="timeline-content">
									<h5 class="title">Intranet Front Page</h5>
									<p class="description">
										HTML, CSS, JavaScript
									</p>
								</div>
							</div>
						<!-- end experience section-->
						<!-- start experience section-->
						<div class="timeline">
								<div class="icon"></div>
								<div class="date-content">
									<div class="date-outer">
										<span class="date">
											<span class="month">Juillet/Août</span>
										<span class="year">2021</span>
										</span>
									</div>
								</div>
								<div class="timeline-content">
									<h5 class="title">My Series Companion</h5>
									<p class="description">
										HTML, CSS, PHP, MySQL, Python
									</p>
								</div>
							</div>
						<!-- end experience section-->
						<div class="timeline">
								<div class="icon"></div>
								<div class="date-content">
									<div class="date-outer">
										<span class="date">
											<span class="month">Septembre</span>
										<span class="year">2021</span>
										</span>
									</div>
								</div>
								<div class="timeline-content">
									<h5 class="title">Symfony</h5>
								</div>
							</div>
						<!-- end experience section-->
						<div class="timeline">
								<div class="icon"></div>
								<div class="date-content">
									<div class="date-outer">
										<span class="date">
											<span class="month">Octobre</span>
										<span class="year">2021</span>
										</span>
									</div>
								</div>
								<div class="timeline-content">
									<h5 class="title">Gestion d'une infirmerie</h5>
									<p class="description">
										C#, SQL Server
									</p>
								</div>
							</div>
						<!-- end experience section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
										<span class="date">
											<span class="month">Décembre</span>
										<span class="year">2021</span>
										</span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Gestion des locations</h5>
                                <p class="description">
                                    Symfony
                                </p>
                            </div>
                        </div>
						<!-- end experience section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
										<span class="date">
											<span class="month">Septembre</span>
										<span class="year">2022</span>
										</span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">GestionAS</h5>
                                <p class="description">
                                    Symfony
                                </p>
                            </div>
                        </div>
						<!-- end experience section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
										<span class="date">
											<span class="month">Septembre</span>
										<span class="year">2022</span>
										</span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Resasnack</h5>
                                <p class="description">
                                    Symfony
                                </p>
                            </div>
                        </div>
						<!-- end experience section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
										<span class="date">
											<span class="month">Janvier</span>
										<span class="year">2023</span>
										</span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Gestion des sorties scolaires</h5>
                                <p class="description">
                                    Symfony
                                </p>
                            </div>
                        </div>
                        <!-- end experience section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
										<span class="date">
											<span class="month">Février</span>
										<span class="year">2023</span>
										</span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">React</h5>
                            </div>
                        </div>
                        <!-- end experience section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
										<span class="date">
											<span class="month">Septembre</span>
										<span class="year">2023</span>
										</span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Docker</h5>
                            </div>
                        </div>
					</div>
				</div>

		<!-- Formulaire de contact -->
		<div class="bg-contact">
			<div class="container contact">
				<div class="divider"></div>
					<div class="heading">
					<h2>Contactez-moi</h2>
					<?php
					// Vérification des données saisies dans les champs du formulaire
						require('traitement/traitement_contact.php');
						if (!empty($_POST)) {
							$traitement = traitementFormulaire($_POST);
						}
					?>
				</div>
				<div>
					<div class="row" id="contact">
						<div class="col-lg-10 col-lg-offset-1">
							<form id="contact-form" method="POST" action="#contact" role="form">
								<div class="row">
									<div class="col-md-6">
										<label for="name">Prénom <span class="blue">*</span></label>
										<input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom">
										<p class="comments"><?php
																if (isset($traitement) && $traitement['success'] === false && isset($traitement['erreurs']['firstname'])){
																echo $traitement['erreurs']['firstname'];
																}
															?></p>
									</div>
									<div class="col-md-6">
										<label for="firstname">Nom <span class="blue">*</span></label>
										<input id="name" type="text" name="name" class="form-control" placeholder="Votre nom">
										<p class="comments"><?php
																if (isset($traitement) && $traitement['success'] === false && isset($traitement['erreurs']['name'])){
																echo $traitement['erreurs']['name'];
																}
															?></p>
									</div>
									<div class="col-md-6">
										<label for="email">Email <span class="blue">*</span></label>
										<input id="email" type="email" name="email" class="form-control" placeholder="Votre email">
										<p class="comments"><?php
																if (isset($traitement) && $traitement['success'] === false && isset($traitement['erreurs']['email'])){
																echo $traitement['erreurs']['email'];
																}
															?></p>
									</div>
									<div class="col-md-6">
										<label for="phone">Numéro de téléphone <span class="blue">*</span></label>
										<input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre numéro de téléphone">
										<p class="comments"><?php
																if (isset($traitement) && $traitement['success'] === false && isset($traitement['erreurs']['phone'])){
																echo $traitement['erreurs']['phone'];
																}
															?></p>
									</div>
									<div class="col-md-12">
										<label for="message">Commentaire <span class="blue">*</span></label>
										<textarea id="message" name="message" class="form-control" placeholder="Votre commentaire" rows="4"></textarea>
										<p class="comments"><?php
																if (isset($traitement) && $traitement['success'] === false && isset($traitement['erreurs']['message'])){
																echo $traitement['erreurs']['message'];
																}
															?></p>
									</div>
                                    <div class="col-md-12 g-recaptcha" data-sitekey="6LeCRUkoAAAAAH1eA_pLhiSKbdXAyyiVQ9sdXI3W"></div>
                                    <div class="col-md-12">
										<p class="blue"><strong>* Ces informations sont requises.</strong></p>
									</div>
									<div class="col-md-12">
										<input type="submit" name="submit" class="button1" value="Envoyer">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Bouton permettant de remonter en haut de page -->
		<a id="button"></a>

		<!-- Bas de page -->
		<div class="coordonnees">
			<p>Si vous le souhaitez, vous pouvez me contacter directement par mail : <span class="glyphicon glyphicon-envelope"><a href="mailto:valentin.arthur1000@gmail.com">valentin.arthur1000@gmail.com</a></span></p>
			<p>Ou par téléphone :<span class="glyphicon glyphicon-phone"></span><a href="tel:+33605758093">+33605758093</a></p>
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php
		include("includes/footer.php");
	?>