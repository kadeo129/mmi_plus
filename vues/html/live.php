<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>MMI +</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="../css/css_general.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	
	<script type="text/javascript">
		
		function refresh_time() {
			var madate = new Date();
			s = madate.getHours() + ":" + madate.getMinutes();
			document.getElementById("heure").innerHTML=s;
			timer = setTimeout("refresh_time()",1000);
		}
		        
	</script>


  </head>

  <body onload="refresh_time()">

  	<div id="video-fond">
  		<iframe src="https://www.youtube.com/embed/XXlZfc1TrD0?autoplay=1"></iframe>
	</div>

	<div class="container-fluid">
		
		<div id="lh" class="col-xs-4">
			<div id="logo">
				<img src="../css/logo.png" alt="logo" height="30px">
			</div>
			<div id="heures">
				<p id="heure"></p>
			</div>
		</div>

		<div id="about" class="col-xs-12">
			<div id="cate" class="oblikd bgvert">
				<h1>aftermmi</h1>
			</div>
			<div id="center" class="bggris">
				<marquee loop="-1"><p> testestestestsetestestestes</p></marquee>
			</div>
			<div class="oblikd bgvert" id="author">
				<h1>jj</h1>
			</div>
		</div>
	</div> <!--fermeture du container-->
	
	<div id="bandeau" class="col-xs-12">
		<div id="categorie" class="bggris oblikd">
			<p>MMID2</p>	
		</div>
		<div id="info">

		    <marquee loop="-1">
		    	lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem 
		    </marquee>

		</div>
	</div>
	

  </body>

</html>