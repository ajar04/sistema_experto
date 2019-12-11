<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

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


		if ((v1 == true) && (v2 == true) && (v3 == true) && (v4 == true) && (v5 == true) && (v6 == true) && (v7 == true) && (v8 == true) && (v9 == true) && (v10 == true) && (v11 == true) && (v12 == true) && (v13 == false) && (v14 == false)) {
			$("#resultado").val("Usted Puede Presentar estres , Por favor asista al psicologo o medico especializado");
			responsiveVoice.speak("Usted Puede Presentar estres , Por favor asista al psicologo o medico especializado", "Spanish Latin American Female");
		} else {


			$("#resultado").val("Su probabilidad de Tener estres es minima, sus sintomas no son en totalidad estres ");
			responsiveVoice.speak("Su probabilidad de Tener estres es minima, sus sintomas no son en totalidad estres ", "Spanish Latin American Female");


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
					<li class="fh5co-active"><a href="index.php">
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">INICIO</font>
							</font>
						</a></li>
					<li><a href="colesterol.php">
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">COLESTEROL</font>
							</font>
						</a></li>
					<li><a href="estres.php">
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">ESTRES</font>
							</font>
						</a></li>
					<li><a href="infarto.php">
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">INFARTO</font>
							</font>
						</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>2019 Inteligencia Artificial. 1150966-1150394 </span> </p>

			</div>

		</aside>

		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-5">
						<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Sistema Experto <span>Inteligencia Artificial</span></h2>
						<p class="fh5co-lead animate-box" data-animate-effect="fadeInLeft">Realizado con Prolog y PHP</p>
						<p class="animate-box" data-animate-effect="fadeInLeft"> Sistemas expertos(ES, siglas del término Expert System) es un sistema de información basado en el conocimiento que usa su conocimiento de un área de aplicación compleja y específica a fin de actuar como un consultor experto para los usuarios finales. Los sistemas expertos proporcionan respuestas sobre un área problemática muy específica al hacer inferencias semejantes a las humanas sobre los conocimientos obtenidos en una base de conocimientos especializados.</p>
					</div>
					<div class="col-md-6 col-md-push-1 animate-box" data-animate-effect="fadeInLeft">
						<img src="images/bgia.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
					</div>
				</div>

			</div>


			<div class="fh5co-narrow-content fh5co-border-bottom">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Contenido <span>Sistema Experto</span></h2>
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">

							</div>
							<div class="fh5co-text">
								<h3>COLESTEROL</h3>
								<p>Tenemos un seccion donde te mostramos unos sintomas y escoges que sintomas estas presentando y de acuerdo a tu seleccion podremos determinar si puedes tener el colesterol alto o bajo </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">

							</div>
							<div class="fh5co-text">
								<h3>ESTRES</h3>
								<p>Tenemos un seccion donde te mostramos unos sintomas y escoges que sintomas estas presentando y de acuerdo a tu seleccion podremos determinar si puedes tener estres </p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">

							</div>
							<div class="fh5co-text">
								<h3>INFARTO</h3>
								<p>Tenemos un seccion donde te mostramos unos sintomas y escoges que sintomas estas presentando y de acuerdo a tu seleccion podremos determinar si puedes tener sintomas de preinfarto </p>
							</div>
						</div>
					</div>


				</div>
			</div>

			<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				<h2 class="fh5co-heading">Realizado Por</span></h2>

				<div class="row">
					<div class="col-md-4 fh5co-staff">
						<img src="https://avatars1.githubusercontent.com/u/39635732?s=460&v=4" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>YEISON DANIEL MANRIQUE CAMACHO</h3>
						<h4>Desarrollador Web</h4>
						<p>Estdiante de Ingenieria de Sistemas UFPS</p>
						<ul class="fh5co-social">
							<li><a href="https://github.com/yeidan14" target="_blank"><i class="icon-git"></i></a></li>
							<li><a href="https://www.facebook.com/YDaNielManrique" target="_blank"><i class="icon-facebook"></i></a></li>

						</ul>
					</div>
					
					<div class="col-md-4 fh5co-staff">
						<img src="images/alv.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>ALVARO JOSE ARIAS RAMIREZ </h3>
						<h4>Ingeniero de Sistemas</h4>
						<p>Estudiante de Ingenieria de Sistemas UFPS</p>
						<ul class="fh5co-social">
							<li><a href="https://github.com/ajar04" target="_blank"><i class="icon-git"></i></a></li>

							<li><a href="https://www.facebook.com/IngAlvaroJose" target="_blank"><i class="icon-facebook"></i></a></li>

						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="https://docs.microsoft.com/es-es/azure/app-service/media/index/github-octicons.svg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>REPÍSITORIO GIT</h3>
						<h4>Sistema Experto </h4>
						<p>UFPS INGENIERIA DE SISTEMAS</p>
						<ul class="fh5co-social">
							<li><a href="https://github.com/yeidan14/sistema_experto" target="_blank"><i class="icon-git"></i></a></li>


						</ul>
					</div>

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