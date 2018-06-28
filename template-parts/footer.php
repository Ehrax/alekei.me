<footer class="uk-flex uk-flex-column uk-flex-center uk-flex-middle">
	<div class="alekei-footer-social">
		<div class="uk-flex">
			<div class="uk-animation-toggle footer-page-link">
				<a href="<?php echo the_field('facebook'); ?>" uk-icon="icon: facebook" class="uk-animation-slide-top-small"></a>
			</div>
			<div class="uk-animation-toggle footer-page-link">
				<a href="<?php echo the_field('instagram'); ?>" uk-icon="icon: instagram" class="uk-animation-slide-top-small"></a>
			</div>
			<div class="uk-animation-toggle footer-page-link">
				<a href="<?php echo the_field('github'); ?>" uk-icon="icon: github" class="uk-animation-slide-top-small"></a>
			</div>
		</div>
	</div>
	<div class="alekei-footer-credits">
		<div class="alekei-footer-credits-owner">
			<p >
				Alexander Rasputin
				<span>©2018</span>
			</p>
		</div>
		<div class="alekei-footer-credits-impressum">
			<p uk-toggle="target: #offcanvas-impressum">Impressum</p>
		</div>
	</div>
</footer>
