<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Bulma is an open source CSS framework based on Flexbox and built with Sass. It's 100% responsive, fully modular, and available for free.">
	<title>House & Workspace</title>
	<link rel="stylesheet" type="text/css" href=<?php echo get_theme_file_uri('/assets/css/index.css') ?> />
	<link rel="stylesheet" type="text/css" href=<?php echo get_theme_file_uri('assets/css/aos.css') ?> />
</head>
<body>
	<nav class="navbar is-fixed-top is-white">
    <div class="container" data-aos="fade-right">
      <div class="navbar-brand">
        <a class="navbar-item">
          [LOGO]
        </a>
        <span class="navbar-burger burger" data-target="navbarMenuHeroA">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
      <div id="navbarMenuHeroA" class="navbar-menu">
        <div class="navbar-end">
          <a class="navbar-item">
            Services
          </a>
          <a class="navbar-item">
            Portofolio
          </a>
          <a class="navbar-item">
            Tutorials
          </a>
          <a class="navbar-item">
            About Us
          </a>
          <a class="navbar-item">
            contact Us
          </a>
        </div>
      </div>
    </div>
  </nav>

	<section class="hero is-info is-fullheight landing-header">
	  <div class="hero-body has-text-centered">
	    <div class="container" data-aos="fade-up">
	      <h1 class="title is-italic is-1">
	        House & Workspace
	      </h1>
	      <h2 class="subtitle">
	        Architecths & Design
	      </h2>
	    </div>
	  </div>
	</section>

	<section class="hero is-fullheight">
	  <div class="hero-body has-text-centered">
	    <div class="container" data-aos="fade-up">
	      <h1 class="title">
	        Prologue
	      </h1><br/>
	      <h2 class="subtitle is-italic">
	        "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
	      </h2>
	      <h2>Ochaymode</h2>
	    </div>
	  </div>
	</section>

	<section class="hero is-primary is-fullheight">
	  <div class="hero-body has-text-centered">
	    <div class="container">
	      <h1 class="title" data-aos="fade-up">
	        Portofolio
	      </h1>
	      <h2 class="subtitle" data-aos="fade-up">
	        Full Height subtitle
	      </h2>
	      <div class="columns" data-aos="fade-up">
				  <div class="column">
				    <figure class="image is-square">
						  <img src="https://bulma.io/images/placeholders/256x256.png">
						</figure>
				  </div>
				  <div class="column">
				    <figure class="image is-square">
						  <img src="https://bulma.io/images/placeholders/256x256.png">
						</figure>
				  </div>
				  <div class="column">
				    <figure class="image is-square">
						  <img src="https://bulma.io/images/placeholders/256x256.png">
						</figure>
				  </div>
				  <div class="column">
				    <figure class="image is-square">
						  <img src="https://bulma.io/images/placeholders/256x256.png">
						</figure>
				  </div>
				</div>
				<div class="columns" data-aos="fade-up">
				  <div class="column">
				    <figure class="image is-square">
						  <img src="https://bulma.io/images/placeholders/256x256.png">
						</figure>
				  </div>
				  <div class="column">
				    <figure class="image is-square">
						  <img src="https://bulma.io/images/placeholders/256x256.png">
						</figure>
				  </div>
				  <div class="column">
				    <figure class="image is-square">
						  <img src="https://bulma.io/images/placeholders/256x256.png">
						</figure>
				  </div>
				  <div class="column">
				    <figure class="image is-square">
						  <img src="https://bulma.io/images/placeholders/256x256.png">
						</figure>
				  </div>
				</div>
	    </div>
	  </div>
	</section>

	<section class="hero is-info is-fullheight">
	  <div class="hero-body has-text-centered">
	    <div class="container" data-aos="fade-up">
	      <h1 class="title">
	        Tutorial
	      </h1>
	      <h2 class="subtitle">
	        Full Height subtitle
	      </h2>
	    </div>
	  </div>
	</section>

	<section class="hero is-link is-fullheight">
	  <div class="hero-body has-text-centered">
	    <div class="container" data-aos="fade-up">
	      <h1 class="title">
	        Testimonials
	      </h1>
	      <h2 class="subtitle">
	        Full Height subtitle
	      </h2>
	    </div>
	  </div>
	</section>

	<footer class="footer">
	  <div class="container">
	    <div class="content has-text-centered">
	      <p>
	        <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
	        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
	        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
	      </p>
	    </div>
	  </div>
	</footer>

	<script type="text/javascript" src=<?php echo get_theme_file_uri('assets/js/aos.js') ?>></script>

	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', function () {

		  // Get all "navbar-burger" elements
		  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

		  // Check if there are any navbar burgers
		  if ($navbarBurgers.length > 0) {

		    // Add a click event on each of them
		    $navbarBurgers.forEach(function ($el) {
		      $el.addEventListener('click', function () {

		        // Get the target from the "data-target" attribute
		        var target = $el.dataset.target;
		        var $target = document.getElementById(target);

		        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
		        $el.classList.toggle('is-active');
		        $target.classList.toggle('is-active');

		      });
		    });
		  }
		});

		AOS.init({
		  duration: 1200,
		})
	</script>

</body>
</html>