<?php
$pageName = 'Home';
$pageLevel = 0;
include ('includes/recursivity.php');
include ('header.php');
?>
	<div class="uk-container uk-height-max-large uk-width-expand srp-hero">
		<div class="uk-inline srp-hero-overlay">
			<img class="srp-hero-overlay-img" src="assets/img/herobg.jpg" alt="Hero Background">
			<div class="uk-overlay-primary uk-position-cover"></div>
			<div class="uk-overlay uk-position-center uk-light">
				<h1 class="uk-text-center">Serene Roleplay</h1>
				<p class="uk-heading-line uk-text-center"><span>Roleplay Re-imagined</span></p>
			</div>
		</div>
	</div>

	<div class="uk-container uk-text-center uk-width-1-1 srp-feature-container">
		<h1 class="uk-heading-line uk-light uk-text-center  uk-margin-large-left uk-margin-large-right"><span>Features</span></h1>
		<div class="uk-child-width-1-3 uk-grid-small uk-grid-match uk-margin-large-left uk-margin-large-right" uk-grid>
			<div>
				<div class="uk-card uk-card-secondary uk-card-body">
					<i class="fas fa-building"></i>
					<h3 class="uk-card-title">Player Accessible Interiors</h3>
					<p>Discover unique interiors that set us apart from other FiveM Communities! Check out our custom coffee shop, houses, and emergency center interiors!</p>
				</div>
			</div>
			<div>
				<div class="uk-card uk-card-secondary uk-card-body">
					<i class="fas fa-code"></i>
					<h3 class="uk-card-title">Custom Scripts</h3>
					<p>Discover unique features in San Andreas that allow for an Immersive roleplaying experience! From custom robberies to custom jobs and much more!</p>
				</div>
			</div>
			<div>
				<div class="uk-card uk-card-secondary uk-card-body">
					<i class="fas fa-dice-six"></i>
					<h3 class="uk-card-title">The Diamond Casino</h3>
					<p>Check out the newest edition to San Andreas!
						<br /> Anybody can access the gambling facility that gives its players an opportunity to lose their life savings!</p>
				</div>
			</div>
		</div>
		<div class="uk-child-width-1-3 uk-grid-small uk-grid-match uk-margin-large-left uk-margin-large-right" uk-grid>
			<div>
				<div class="uk-card uk-card-secondary uk-card-body">
					<i class="far fa-address-book"></i>
					<h3 class="uk-card-title">Whitelisted Jobs</h3>
					<p>Become more than just a citizen in the State of San Andreas! Join a whitelisted job within the law enforcement, fire department, additional citizen jobs, and
						many more.</p>
				</div>
			</div>
			<div>
				<div class="uk-card uk-card-secondary uk-card-body">
					<i class="fas fa-wallet"></i>
					<h3 class="uk-card-title">Player Controlled Economy</h3>
					<p>Jobs, Stores, and other areas that are controlled and maintained by players to initiate global roleplay across San Andreas. This is to provide players with
						more risk and entertainment in their Serene Roleplay experience.</p>
				</div>
			</div>
			<div>
				<div class="uk-card uk-card-secondary uk-card-body">
					<i class="fas fa-server"></i>
					<h3 class="uk-card-title">Optimized Infrastructure</h3>
					<p>Our team is constantly focused on improving and optimizing our services to provide our playerbase with a more enjoyable roleplaying experience. </p>
				</div>
			</div>
		</div>
	</div>
	<?php include ('footer.php'); ?>
