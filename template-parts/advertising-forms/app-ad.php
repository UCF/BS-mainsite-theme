<div class="content-wrap" data-wrap="slide-2">
	
	<?php if ( get_field( 'app_ad_description' ) ) { ?>

		<div class="info-block formatted2">
			
			<div class="top-wrap">
				<?php the_field( 'app_ad_description' ); ?>
			</div>	

		</div>

	<?php } ?>

	<div class="form-wrap info-block formatted2">
		<?php the_field ( 'app_ad' ); ?>
	</div>

</div>