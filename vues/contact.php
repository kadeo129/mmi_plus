<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/css_general.css">
	<link rel="stylesheet" type="text/css" href="css/css_navbar.css">
	<link rel="stylesheet" type="text/css" href="css/css_ajoutyoutube.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="../web/assets/js/bootstrap.js"></script>
    <script src="../web/assets/js/form-validation.js"></script>

</head>
<body>

	<?php include 'header.php'; ?>

	<nav class="sousmenu navbar">	
		<ul  class="nav">
			<li class="active col-xs-12"><a data-toggle="tab"><h1 class="text-center">Contact</h1></a></li>
		</ul>

		<div class="main container">

			        <form name="myform" id="contactForm" action="sendcontact.php" enctype="multipart/form-data" method="post">
			        	<div class="container">

			        <div class="alert bgvert alert-error error" id="fname">
                      <p class="black">Veuillez entrer un nom valide.</p>
                    </div>
                    <div class="alert bgvert alert-error error" id="fmail">
                      <p class="black">Veuillez entrer un e-mail valide.</p>
                    </div>
                     <div class="alert bgvert alert-error error" id="fmsg">
                       <p class="black">Veuillez entrer un message.</p>
                     </div>

							  <div class="form-group col-md-6">
							    <label for="lien"><h1><span>></span> Nom</h1></label>
							    <input type="text" name="name" class="form-control noborder" id="lien">
							  </div>
							  <div class="form-group col-md-6">
							    <label for="titre"><h1><span>></span> E-mail</h1></label>
							    <input type="email" name="email" class="form-control noborder" id="titre">
							  </div>
							  <div class="form-group col-md-12">
							    <label for="inputdes"><h1><span>></span> Message</h1></label>
							    <textarea class="form-control noborder" name="message" id="inputdes"></textarea>
							  </div>

							  <div class="form-group col-md-12">

								<button type="submit" id="submit" name="submit" class="form-control noborder">
							  		<span class="hover-bg oblikd"></span>
							  		<img src="img/icon/plusblanc.png">
							  		<h1>Envoyer le message</h1>
							  	</button>
						  	</div>
						</div>
					</form>

		</div>
	</nav>


</body>

    <script type="text/javascript">
    $("#contacta").addClass("current");
    </script>
</html>