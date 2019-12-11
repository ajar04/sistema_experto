<!DOCTYPE html>

<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistema Experto &mdash; </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />
	<script src="Javascript/jquery.js"></script>
	<script src="Javascript/jquery.min.js"></script>
	<script src="Javascript/angular.min.js"></script>
	<script src="Javascript/responsivevoice.js"></script>
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<script>
		function ConsultaHombres() {
			$("#resultado").val("");
			var v1 = document.getElementById("1").checked;
			var v2 = document.getElementById("2").checked;
			var v3 = document.getElementById("3").checked;
			var v4 = document.getElementById("4").checked;
			var v5 = document.getElementById("5").checked;
			var v6 = document.getElementById("6").checked;
			var v7 = document.getElementById("7").checked;
			var v8 = document.getElementById("8").checked;
			var v9 = document.getElementById("9").checked;
			var v10 = document.getElementById("10").checked;
			var v11 = document.getElementById("11").checked;
			var v12 = document.getElementById("12").checked;
			var v13 = document.getElementById("13").checked;
			var v14 = document.getElementById("14").checked;
			

			if ((v1 == true) && (v2 == true) && (v3 == true) && (v4 == true) && (v5 == true) && (v6 == true) && (v7 == true) && (v8 == true) && (v9 == true) && (v10 == true) && (v11 == true) && (v12 == true) && (v13 == false) && (v14 == false) ) {
				$("#resultado").val("Usted Puede Tener el Colesterol Alto");
				responsiveVoice.speak("Usted Puede Tener el Colesterol Alto", "Spanish Latin American Female");
			} else {
				if ((v1 == false) && (v2 == false) && (v3 == false) && (v4 == false) && (v5 == false) && (v6 == false) && (v7 == false) && (v8 == false) && (v9 == false) && (v10 == false) && (v11 == true) && (v12 == false) && (v13 == true) && (v14 == true) ) {
					$("#resultado").val("Usted Puede estar sufriendo de colesterol bajo");
					responsiveVoice.speak("Usted Puede estar sufriendo de colesterol bajo", "Spanish Latin American Female");
				} else {

					$("#resultado").val("Su probabilidad de Tener el Colesterol alto es minima O los sintomas se relacionan Con otra enfermedad ");
					responsiveVoice.speak("Su probabilidad de Tener el Colesterol alto es minima", "Spanish Latin American Female");

				}
			}
		}
	</script>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/check.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div id="fh5co-page">
		<a href="#" class=""><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.html"><img src="images/colesterol.png" width="80%" alt="Free HTML5 Bootstrap Website Template"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li ><a href="index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">INICIO</font></font></a></li>
					<li class="fh5co-active"><a href="colesterol.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">COLESTEROL</font></font></a></li>
					<li><a href="estres.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ESTRES</font></font></a></li>
					<li><a href="infarto.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">INFARTO</font></font></a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>2019 Inteligencia Artificial. 1150966-1150394 </span> </p>

			</div>

		</aside>

		<div id="fh5co-main">









			<div class="fh5co-cards">
				<div class="">


					<div class="">










						<form>

							<br>
							<fieldset data-role="controlgroup" class="w3-container w3-padding-64 w3-center" style="width:100%;">

								<legend>Sintomas de Colesterol:</legend>
								<div class="col-md-6">
									<input name="checkbox-v-2a" id="1" type="checkbox">
									<label for="1">Hinchazón de las extremidades</label>
								</div>
								<div class="col-md-6">
									<input name="checkbox-v-2a" id="2" type="checkbox">
									<label for="2">Boca pastosa, seca y halitosis</label>
								</div>

								<div class="col-md-6">
									<input name="checkbox-v-2a" id="3" type="checkbox">
									<label for="3">Pesadez en el estómago e indigestión</label>
								</div>
								<div class="col-md-6">
									<input name="checkbox-v-2a" id="4" type="checkbox">
									<label for="4">Dificultades en el ritmo intestinal</label>
								</div>

								<div class="col-md-6">
									<input name="checkbox-v-2a" id="5" type="checkbox">
									<label for="5">Aparición de urticaria</label>
								</div>
								<div class="col-md-6">
									<input name="checkbox-v-2a" id="6" type="checkbox">
									<label for="6">Dolor en el pecho</label>

								</div>
								<div class="col-md-6">
									<input name="checkbox-v-2a" id="7" type="checkbox">
									<label for="7">Dolor de cabeza</label>
								</div>

								<div class="col-md-6">
									<input name="checkbox-v-2a" id="8" type="checkbox">
									<label for="8">Visión borrosa</label>
								</div>
								<div class="col-md-6">
									<input name="checkbox-v-2a" id="9" type="checkbox">
									<label for="9">Agitación al moverse o hacer deporte</label>
								</div>
								<div class="col-md-6">
									<input name="checkbox-v-2b" id="10" type="checkbox">
									<label for="10">Pérdida de equilibrio</label>
								</div>
								<div class="col-md-6">
									<input name="checkbox-v-2b" id="11" type="checkbox">
									<label for="11">Accidente cerebro-vascular</label>
								</div>
								<div class="col-md-6">
									<input name="checkbox-v-2b" id="12" type="checkbox">
									<label for="12">Ataque al corazón</label>
								</div>
								<div class="col-md-6">
									<input name="checkbox-v-2b" id="13" type="checkbox">
									<label for="13">Depresión</label>
								</div>
								<div class="col-md-6">
									<input name="checkbox-v-2b" id="14" type="checkbox">
									<label for="14">Ansiedad</label>
								</div>


							
								<div class="w3-group">
									<label>Resultado</label>
									<br>
									<textarea disabled class="resultado" rows="2" cols="74" id="resultado"></textarea>
								</div>
								<button type="button" class="btn border1 border111" onclick="ConsultaHombres()">Consultar</button>
								
							</fieldset>


						</form>





					</div>

				</div>
			</div>



		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>


	<!-- MAIN JS -->
	<script src="js/main.js"></script>

</body>

</html>