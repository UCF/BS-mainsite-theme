<?php /*
Template Name: Advertising
*/ ?>

<?php get_header(); ?>

	<div class="container">

		<main id="content" class="home">

			<section class="slider-section">

				<div class="container">

					<div class="inner-wrap-container">

						<div class="pagination slider-line-pagers">
							<a href="#" class="left-page pull-left"></a>
							<a href="#" class="right-page pull-left"></a>
							<div class="clear"></div>
						</div>

						<ul class="slider-line advertising-slider full-border">

							<li class="pull-left">
								<a href="#" data-wrap="slide-0" data-slide="0">Shuttle Ad</a>
							</li>

							<li class="pull-left">
								<a href="#" data-wrap="slide-1" data-slide="1">UCF App Ad</a>
							</li>

						</ul>

						<div class="clear"></div>

						<div id="slideCount" data-total-slides="1"></div>

                        <!--TO DO -->
						<?php
							get_template_part( 'template-parts/advertising-forms/app-ad' ); 
							get_template_part( 'template-parts/advertising-forms/shuttle-ad' );
						?>

					</div>

				</div>

			</section>

		</main>

	</div>

<?php get_footer(); ?>
