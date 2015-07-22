<?php include('../config.php'); ?>
<?php $page = 'social';?>
<?php include('../header.php'); ?>

<div class="hero data-img" id="social-hero" style="background-image: url();" data-sml="../img/halves/social-hero-medium.jpg" data-med="../img/social-hero.jpg" data-lrg="../img/social-hero.jpg">
	<p class="page-title">Social</p>
</div>
<div class="banner">
	<div class="social-banner-message banner-message">
		<a target="_blank"href="http://instagram.com/iammindfulof"><p><img class="social-icon" src="<?php echo BASE_URL; ?>/img/instagram.svg"><span class="handles"> : @iammindfulof</span></p></a>
		<a target="_blank"href="https://twitter.com/iammindfulof"><p><img class="social-icon" src="<?php echo BASE_URL; ?>/img/twitter.svg"><span class="handles"> : @iammindfulof</span></p></a>
		<a target="_blank" href="https://www.facebook.com/iammindfulof"><p><img class="social-icon" src="<?php echo BASE_URL; ?>/img/facebook.svg"><span class="handles"> : /iammindfulof</span></p></a>
		<a target="_blank" href="https://www.soundcloud.com/iammindfulof"><p><img class="social-icon" src="<?php echo BASE_URL; ?>/img/soundcloud.svg"><span class="handles"> : /iammindfulof</span></p></a>
	</div>
</div>
<div class="media-container">
	<?php include('../tweets.php') ;?>
</div>

<script>
	
	var thisPage = "social";
	
</script>


<?php include('../footer.php'); ?>