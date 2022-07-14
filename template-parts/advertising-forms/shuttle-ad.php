<div class="content-wrap active" data-wrap="slide-0">
	
	<?php if ( get_field( 'contact_form_description' ) ) { ?><!--TO DO - ADD FIELD-->

		<div class="info-block formatted2">
			
			<div class="top-wrap">
				<?php the_field( 'contact_form_description' ); ?><!--TO DO - ADD FIELD-->
			</div>	

		</div>

	<?php } ?>

	<div class="form-wrap">
		<?php gravity_form( 1, FALSE, FALSE, FALSE, NULL, TRUE); ?><!--TO DO - Update Form-->
	</div>

</div>