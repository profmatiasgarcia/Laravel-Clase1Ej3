{{-- Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3.
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/- --}}

<!DOCTYPE html>
<html>
	<head>
		<title>Ejemplo Material Design</title>

		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

		<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

		<link rel="stylesheet" href="{!! asset('css/estilocards.css') !!}">
	</head>
	<body>
		<div class="profile-card-wrap">
			<input id="check" type="checkbox" class="check"><label for="check" class="toggle"> + </label>
			<div class="content" data-text="Hola !!!">
				<div class="title">@profmatiasg</div>
				<p>Profesor y Técnico en Informática Aplicada. Docente de nivel superior especializado en Lenguajes de Programación, Bases de Datos, IA, Software Libre y TIC.</p>
			</div>
			<div class="link-info">
				<div class="social">
					<a class="link oc" href="https://www.profmatiasgarcia.com.ar" target="_blank"><i class="fas fa-graduation-cap"></i></a>
					<a class="link tw" href="https://twitter.com/profmatiasg" target="_blank"><i class="fab fa-twitter"></i></a>
					<a class="link cp" href="https://www.youtube.com/profmatiasgarcia" target="_blank"><i class="fab fa-youtube"></i></a>
					<a class="link gh" href="https://github.com/profmatiasgarcia" target="_blank"><i class="fab fa-github"></i></a>
					<a class="link li" href="https://www.linkedin.com/in/profmatiasgarcia/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					<a class="link gp" href="mailto:profmatiasgarcia@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
				</div>
				<div class="photo"></div>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>

	<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
</html>
