{{-- Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3. 
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/- --}}

<!DOCTYPE html>
<html>
	<head>
		<title>Ejemplo usando CSS</title>

		<link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">
		
	</head>

	<body>

		<!-- contain everything in a wrapper to set overall width -->
		<div id="wrapper">

			<!-- 	HEADER -->
			<!--	main info at the top, noted in the more semantic <header> tag -->
			<header>
				
				<!-- note that this is also a link to the index page -->
				<h1><a href="#">THIS IS THE HEADER</a></h1>

				<div class="clear"></div>

				<!-- 	advanced: a horizontal list can be used as a menu -->
				<!-- 	note that we don't create a 'home' menu; people assume that 
						the header itself will be a home link -->
				<ul>
					<li><a href="#">ABOUT</a></li>		<!-- the '#' is an empty anchor, here just for demonstration -->
					<li><a href="#">ITEM A</a></li>
					<li><a href="#">ITEM B</a></li>
					<li><a href="#">ITEM C</a></li>
				</ul>

			</header>


			<!-- 	SIDEBAR -->
			<!-- 	if the sidebar is first, it will be on the left -->
			<div id="sidebar">
				<p><strong>SIDEBAR</strong></p>

				<!-- 	we use an unordered list to place the menu -->
				<p>
					<ul>
						<li><a href="#">Menu items</a></li>
						<li><a href="#">are usually</a></li>
						<li><a href="#">in the sidebar</a></li>
					</ul>
				</p>

				<p>You can also include "About" sections and other details in the sidebar.</p>
			</div>  <!-- end sidebar -->


			<!-- 	MAIN BODY -->
			<div id="content">
				<h2>MAIN CONTENT</h2>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue nunc in mi eleifend porttitor. Suspendisse ante dolor, venenatis sed porta sed, consectetur eget est. Cras suscipit porta nisl, id congue odio auctor non. Sed ac tristique lorem. Curabitur bibendum varius rutrum. Maecenas libero nibh, faucibus quis vehicula sit amet, lobortis non urna. Aliquam urna felis, tincidunt eu consequat vel, tempor vel leo. Suspendisse quam est, venenatis ac imperdiet et, vestibulum a nulla.</p>

				<p>Vivamus in augue quam. Nullam imperdiet blandit eros, vel fringilla felis lacinia eu. In eget arcu lectus. In ante erat, cursus id viverra eget, eleifend nec orci. Quisque consequat iaculis laoreet. Curabitur arcu urna, consequat ut dignissim vel, vestibulum sit amet dolor. Suspendisse laoreet urna vitae enim aliquet quis sodales libero tempor. Sed condimentum sapien non nibh accumsan sodales. Vestibulum nulla nunc, lobortis in commodo eget, congue quis lorem. Donec pellentesque semper nisi a rhoncus. Duis sit amet ipsum eu sapien lobortis euismod. Vestibulum vehicula volutpat adipiscing. Aliquam ligula sem, pulvinar ultricies faucibus ac, tincidunt ut leo. Morbi ultricies iaculis odio vitae fermentum. Donec sit amet est id dolor sodales gravida a ut erat. Proin commodo turpis ut urna interdum eget iaculis nunc ultrices.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue nunc in mi eleifend porttitor. Suspendisse ante dolor, venenatis sed porta sed, consectetur eget est. Cras suscipit porta nisl, id congue odio auctor non. Sed ac tristique lorem. Curabitur bibendum varius rutrum. Maecenas libero nibh, faucibus quis vehicula sit amet, lobortis non urna. Aliquam urna felis, tincidunt eu consequat vel, tempor vel leo. Suspendisse quam est, venenatis ac imperdiet et, vestibulum a nulla.</p>

				<p>Vivamus in augue quam. Nullam imperdiet blandit eros, vel fringilla felis lacinia eu. In eget arcu lectus. In ante erat, cursus id viverra eget, eleifend nec orci. Quisque consequat iaculis laoreet. Curabitur arcu urna, consequat ut dignissim vel, vestibulum sit amet dolor. Suspendisse laoreet urna vitae enim aliquet quis sodales libero tempor. Sed condimentum sapien non nibh accumsan sodales. Vestibulum nulla nunc, lobortis in commodo eget, congue quis lorem. Donec pellentesque semper nisi a rhoncus. Duis sit amet ipsum eu sapien lobortis euismod. Vestibulum vehicula volutpat adipiscing. Aliquam ligula sem, pulvinar ultricies faucibus ac, tincidunt ut leo. Morbi ultricies iaculis odio vitae fermentum. Donec sit amet est id dolor sodales gravida a ut erat. Proin commodo turpis ut urna interdum eget iaculis nunc ultrices.</p>
			</div>  <!-- end content -->

			<!--	'clear' removes the float, so that the footer appears at the bottom - try removing this
					line and see what happens! -->
			<div class="clear"></div>

			<!--	FOOTER -->
			<div id="footer">
				<p>&copy; footers usually contain copyright (or creative commons) information or contact details</p>
			</div>  <!-- end footer -->

		</div>  <!-- end wrapper -->

	</body>
</html>