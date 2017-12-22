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
		<?php echo Theme::jquery(); ?>
		<?php Theme::plugins('siteBodyEnd') ?>
	</body>
</html>