<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bibliothèque</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/css_general.css">
	<link rel="stylesheet" type="text/css" href="css/css_navbar.css">
	<link rel="stylesheet" type="text/css" href="css/css_apercu.css">
	<link rel="stylesheet" type="text/css" href="css/css_biblio.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="../web/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../web/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../web/assets/js/jquery.mixitup.min.js"></script>

</head>
<body>

	<?php include 'header.php'; ?>

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


</body>

	<script type="text/javascript" src="../web/assets/js/biblio.js"></script>
	<script type="text/javascript">
    $("#biblioa").addClass("current");
    </script>

</html>