<?php /*
Template Name: Contact
*/ ?>

<?php get_header(); ?>

	<div class="container">

		<main id="content" class="contact no-padding-top">

			<?php get_template_part( 'template-parts/cta-section' ); ?>

			<section class="slider-section has-padding-2">

				<div class="container">

					<div class="inner-wrap-container">

						<div class="top-wrap formatted pull-right">

							<div class="pagination no-margin-top">
								<a href="#" class="left-page pull-left"></a>
								<a href="#" class="right-page pull-left"></a>
								<div class="clear"></div>
							</div>

						</div>

						<div class="clear"></div>

						<ul class="slider-line">

							<li class="pull-left active">
								<a href="#" data-wrap="slide-0" data-slide="0">General</a>
							</li>

							<li class="pull-left">
								<a href="#" data-wrap="slide-1" data-slide="1">Vending Issues</a>
							</li>

							<li class="pull-left">
								<a href="#" data-wrap="slide-2" data-slide="2">Donation Requests</a>
							</li>

							<!--<li class="pull-left">
								<a href="#" data-wrap="slide-3" data-slide="3">Business Inquiries</a>
							</li>-->

							<li class="pull-left">
								<a href="#" data-wrap="slide-4" data-slide="4">Student Union Work Order</a>
							</li>

							<!--<li class="pull-left">
								<a href="#" data-wrap="slide-5" data-slide="5">IT/Marketing Ticket</a>
							</li>-->

							<li class="pull-left">
								<a href="#" data-wrap="slide-6" data-slide="6">Coke Donation</a>
							</li>

							<li class="pull-left">
								<a href="#" data-wrap="slide-7" data-slide="7">Dining Membership Cancellation</a>
							</li>

						</ul>

						<div class="clear"></div>

						<div id="slideCount" data-total-slides="7"></div>

						<?php
							get_template_part( 'template-parts/contact-content-wraps/market' );
							get_template_part( 'template-parts/contact-content-wraps/general' );
							get_template_part( 'template-parts/contact-content-wraps/vending' );
							get_template_part( 'template-parts/contact-content-wraps/donation' );
							get_template_part( 'template-parts/contact-content-wraps/business' );
							get_template_part( 'template-parts/contact-content-wraps/students' );
							get_template_part( 'template-parts/contact-content-wraps/coke-donation' );
							get_template_part( 'template-parts/contact-content-wraps/dining-membership' );
						?>

					</div>

				</div>

			</section>

		</main>

	</div>

<?php get_footer(); ?>
