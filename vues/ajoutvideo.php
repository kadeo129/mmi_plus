<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une vidéo</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/css_general.css">
	<link rel="stylesheet" type="text/css" href="css/css_navbar.css">
	<link rel="stylesheet" type="text/css" href="css/css_apercu.css">
	<link rel="stylesheet" type="text/css" href="css/css_biblio.css">
	<link rel="stylesheet" type="text/css" href="css/css_ajoutyoutube.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="../web/assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="../web/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../web/assets/js/jquery.mixitup.min.js"></script>
</head>
<body>


	<?php include 'header.php'; ?>



	<nav class="sousmenu navbar">	
		<ul class="nav">
			<li class="active col-xs-6 onglet1"><a  href="#1a" data-toggle="tab"><h1 class="text-center">Bibliothèque</h1></a></li>
			<li class="col-xs-6"><a href="#2a" data-toggle="tab"><h1 class="text-center">Vidéo Youtube</h1></a></li>
		</ul>

			<div class="tab-content clearfix">

				<div class="tab-pane active" id="1a">
					<div class="biblio col-md-9 col-xs-12">

						<nav class="tri hidden-xs hidden-ms">   
						  	<ul id="triul">
								<li class="actual"><h1 class="filter" data-filter=".all">tous</h1></li>
								<li><h1 class="filter" data-filter=".actus">actus</h1></li>
								<li><h1 class="filter" data-filter=".visuel">visuel</h1></li>
								<li><h1 class="filter" data-filter=".techno">techno</h1></li>
								<li><h1 class="filter" data-filter=".ateliers">ateliers</h1></li>
								<li><h1 class="filter" data-filter=".fun">fun</h1></li>
								<li><h1 class="filter" data-filter=".aftermmi">after mmi</h1></li>
						  	</ul> 
						</nav>


				<!--															//////////// NE MARCHE PAS - RESPONSIVE DU MENU EN DROPDOWN

				 		<div class="form-group tri hidden-lg hidden-md">	
							<label><h1><span>></span> Trier par:</h1></label>
								<select class="form-control noborder" id="triul" onchange="jQuery('#triul').mixItUp('filter', this.value);">
								    <option value=".all">Tous</option>
								    <option value=".actus">Actus</option>
								    <option value=".visuel">Visuel</option>
								    <option value=".techno">Techno</option>
								    <option value=".ateliers">Ateliers</option>
								    <option value=".fun">Fun</option>
								    <option value=".aftermmi">After MMI</option>
								</select>
						</div> -->

						<div class="list col-xs-12">
							
							<div class="portfolio actus all" data-cat="actus">		
								<img src="img/portfolios/logo/1.jpg" alt="" />
							</div>			

							<div class="portfolio visuel all" data-cat="visuel">		
								<img src="img/portfolios/logo/2.jpg" alt="" />
							</div>

							<div class="portfolio techno all" data-cat="techno">		
								<img src="img/portfolios/logo/3.jpg" alt="" />
							</div>

							<div class="portfolio ateliers all" data-cat="ateliers">		
								<img src="img/portfolios/logo/4.jpg" alt="" />
							</div>

						</div>
					</div>
				


						<?php include 'apercu.php'; ?>


				</div>

				<div class="container main tab-pane" id="2a">
			        <form>
			        	<div class="container pull-left col-md-6 col-xs-12">
							  <div class="form-group">
							    <label for="lien"><h1><span>></span> Lien YouTube</h1></label>
							    <input type="url" class="form-control noborder" id="lien">
							  </div>
							  <div class="form-group">
							    <label for="titre"><h1><span>></span> Titre</h1></label>
							    <input type="text" class="form-control noborder" id="titre">
							  </div>
							  <div class="form-group">
							    <label for="inputdes"><h1><span>></span> Description</h1></label>
							    <textarea class="form-control noborder" id="inputdes"></textarea>
							  </div>
						</div>

						<div class="container col-md-6 col-xs-12">
							<div class="form-group">
							    <label for="lien"><h1><span>></span> Aperçu</h1></label>
							    <iframe width="100%" height="350" src="https://www.youtube.com/embed/tVawpT44Hrk" frameborder="0" allowfullscreen></iframe>
							  </div>
							  <div class="form-group">
							    <label for="inputcat"><h1><span>></span> Catégorie</h1></label>
							    <select class="form-control noborder" id="inputcat">
							        <option>AfterMMI</option>
							        <option>Ateliers</option>
							        <option>Tutos Visuel</option>
							        <option>Tutos Techno</option>
							        <option>Actus & Culture</option>
							        <option>Fun & divertissement</option>
							    </select>
							</div>
						  	<button type="submit" class="form-control noborder">
						  		<span class="hover-bg oblikd"></span>
						  		<img src="img/icon/plusblanc.png">
						  		<h1>Envoyer la vidéo</h1></button>
						</div>
					</form>
				</div>
			</div>
		

	</nav>

</body>

<script type="text/javascript" src="../web/assets/js/biblio.js"></script>

</html>