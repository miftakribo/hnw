<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<style type="text/css">
	html {
  min-height: 100%;
}

body {
  height: 100%;
}

.slideshow {
  list-style: none;
  width: 100%
  height: 100%;
}
.slideshow li span {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0px;
  left: 0px;
  color: transparent;
  background-size: cover;
  background-position: 50% 50%;
  background-repeat: none;
  opacity: 0;
  z-index: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-animation: imageAnimation 24s linear infinite 0s;
  -moz-animation: imageAnimation 24s linear infinite 0s;
  animation: imageAnimation 24s linear infinite 0s;
  background-attachment: fixed;
}
.slideshow li h3 {
  position: absolute;
  text-align: center;
  z-index: 2;
  bottom: 150px;
  left: 0;
  right: 0;
  opacity: 0;
  font-size: 4.0625em;
  font-family: 'Josefin Sans', sans-serif;
  text-transform: uppercase;
  color: #fff;
  -webkit-animation: titleAnimation 24s linear 1 0s;
  -moz-animation: titleAnimation 24s linear 1 0s;
  animation: titleAnimation 24s linear 1 0s;
}
@media only screen and (min-width: 768px) {
  .slideshow li h3 {
    bottom: 30px;
    font-size: 8.125em;
  }
}
@media only screen and (min-width: 1024px) {
  .slideshow li h3 {
    font-size: 10.9375em;
  }
}

.slideshow li:nth-child(1) span {
  /*background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/203277/summer-slide.jpg);*/
  background-image: url(http://localhost:8080/wordpress/wp-content/uploads/2018/05/grey-livingroom.jpg);
}

.slideshow li:nth-child(2) span {
  /*background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/203277/fall-slide.jpg);*/
  background-image: url(http://localhost:8080/wordpress/wp-content/uploads/2018/05/livingroom.jpg);
  -webkit-animation-delay: 6s;
  -moz-animation-delay: 6s;
  animation-delay: 6s;
}

.slideshow li:nth-child(3) span {
  /*background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/203277/winter-slide.jpg);*/
  background-image: url(http://localhost:8080/wordpress/wp-content/uploads/2018/05/livingroom2.jpg);
  -webkit-animation-delay: 12s;
  -moz-animation-delay: 12s;
  animation-delay: 12s;
}

.slideshow li:nth-child(4) span {
  /*background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/203277/spring-slide.jpg);*/
  background-image: url(http://localhost:8080/wordpress/wp-content/uploads/2018/05/office.jpg);
  -webkit-animation-delay: 18s;
  -moz-animation-delay: 18s;
  animation-delay: 18s;
}

@-webkit-keyframes imageAnimation {
  0% {
    opacity: 0;
    -webkit-animation-timing-function: ease-in;
  }
  12.5% {
    opacity: .7;
    -webkit-animation-timing-function: ease-out;
  }
  25% {
    opacity: .7;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@-moz-keyframes imageAnimation {
  0% {
    opacity: 0;
    -moz-animation-timing-function: ease-in;
  }
  12.5% {
    opacity: .7;
    -moz-animation-timing-function: ease-out;
  }
  25% {
    opacity: .7;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@keyframes imageAnimation {
  0% {
    opacity: 0;
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  12.5% {
    opacity: .7;
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  25% {
    opacity: .7;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@-webkit-keyframes titleAnimation {
  0% {
    opacity: 0;
  }
  12.5% {
    opacity: 1;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@-moz-keyframes titleAnimation {
  0% {
    opacity: 0;
  }
  12.5% {
    opacity: 1;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@keyframes titleAnimation {
  0% {
    opacity: 0;
  }
  12.5% {
    opacity: 1;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
.no-cssanimations .slideshow li span {
  opacity: 1;
}

</style>
<div class="custom-header">

		<div class="custom-header-media">
			<?php if (twentyseventeen_is_frontpage()) : ?>
				<ul class='slideshow'>
				  <li>
				    <!-- By Keven Law from Los Angeles, USA (Long Hot Summer......) [CC-BY-SA-2.0 (http://creativecommons.org/licenses/by-sa/2.0)], via Wikimedia Commons, http://commons.wikimedia.org/wiki/File%3AFlickr_-_law_keven_-_Long_Hot_Summer.......jpg -->
				    <span>Summer</span>
				  </li>
				  <li>
				    <!-- By http://www.ForestWander.com [CC-BY-SA-3.0-us (http://creativecommons.org/licenses/by-sa/3.0/us/deed.en)], via Wikimedia Commons, http://commons.wikimedia.org/wiki/File%3ARed-fall-tree-lake_-_West_Virginia_-_ForestWander.png -->
				    <span>Fall</span>
				  </li>
				  <li>
				    <!-- By Valerii Tkachenko [CC-BY-2.0 (http://creativecommons.org/licenses/by/2.0)], via Wikimedia Commons, http://commons.wikimedia.org/wiki/File%3AWinter_wonderland_Austria_mountain_landscape_(8290712092).jpg -->
				    <span>Winter</span>
				  </li>
				  <li>
				    <!-- By Arman7 (Own work) [CC-BY-SA-3.0 (http://creativecommons.org/licenses/by-sa/3.0) or GFDL (http://www.gnu.org/copyleft/fdl.html)], via Wikimedia Commons, http://commons.wikimedia.org/wiki/File%3ABoroujerd_spring.jpg -->
				    <span>Spring</span>
				  </li>
				</ul>
			<?php else : the_custom_header_markup(); endif; ?>
		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
