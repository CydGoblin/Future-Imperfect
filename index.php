<!DOCTYPE HTML>
<html>
	<head>
		<?php
				include(THEME_DIR_PHP.'head.php');
		?>
	</head>
	<body>
		<?php Theme::plugins('siteBodyBegin') ?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						
						<?php
							 if ($Url->whereAmI()=='page') {
									 include(THEME_DIR_PHP.'page.php');
							 }
							 else  {
									include(THEME_DIR_PHP.'home.php');
							 }
					 ?>

					</div>

				<!-- Sidebar -->
				<?php
            include(THEME_DIR_PHP.'sidebar.php');
        ?>

			</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
		<?php Theme::plugins('siteBodyEnd') ?>
	</body>
</html>