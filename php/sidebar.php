<section id="sidebar">

  <!-- Intro -->
    <section id="intro">
      <header>
        <h1><a href="<?php echo $Site->url() ?>"><?php echo $Site->title() ?></a></h2>
        <p><?php echo $Site->slogan() ?></p>
      </header>
        
        <ul class="icons">
          <?php
          	if ($Site->twitter()) {
  						echo '<li><a href="'.$Site->twitter().'" class="icon fa-twitter"><span class="label">Twitter</span></a></li>';
  					}
  					if ($Site->facebook()) {
  						echo '<li><a href="'.$Site->facebook().'" class="icon fa-facebook"><span class="label">Facebook</span></a></li>';
  					}
  					if ($Site->instagram()) {
  						echo '<li><a href="'.$Site->instagram().'" class="icon fa-instagram"><span class="label">Instagram</span></a></li>';
  					}
  					if ($Site->github()) {
  						echo '<li><a href="'.$Site->github().'" class="icon fa-github"><span class="label">Github</span></a></li>';
  					}
  					if ($Site->codepen()) {
  						echo '<li><a href="'.$Site->codepen().'" class="icon fa-codepen"><span class="label">Codepen</span></a></li>';
  					}
  					// Check if the plugin RSS is enabled
  					if (pluginEnabled('RSS')) {
  						echo '<li><a href="'.$Site->rss().'" class="icon fa-rss"><span class="label">RSS</span></a></li>';
  					}
  					// Check if the plugin Sitemap is enabled
  					if (pluginEnabled('sitemap')) {
  						echo '<li><a href="'.$Site->sitemap().'" class="icon fa-sitemap"><span class="label">Sitemap</span></a></li>';
  					}
  				?>
        </ul>
    </section>

    <section>
      
      <?php Theme::plugins('siteSidebar') ?>

  <!-- Footer -->
    <section id="footer">
      <p class="copyright">&copy; <?php echo $Site->title() ?>. Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a>. Bludit version: <a href="https://github.com/Turqueso" target="_blank">Turqueso</a>.</p>
    </section>

</section>