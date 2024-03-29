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

                            <?php if( get_field( 'dining_membership_cancellation_description' ) ): ?>
							<li class="pull-left active">
								<a href="#" data-wrap="slide-0" data-slide="0">Meal Plan Cancelation</a>
							</li>
                            <?php endif; ?>

							<?php if( get_field( 'vending_issues_description' ) ): ?>
							<li class="pull-left">
								<a href="#" data-wrap="slide-1" data-slide="1">Vending Issues</a>
							</li>
                            <?php endif; ?>

							<?php if( get_field( 'donation_description' ) ): ?>
							<li class="pull-left">
								<a href="#" data-wrap="slide-2" data-slide="2">Donation Requests</a>
							</li>
							<?php endif; ?>

							<?php if( get_field( 'student_form_description' ) ): ?>
							<li class="pull-left">
							    <a href="#" data-wrap="slide-4" data-slide="4">Student Union Work Order</a>
                            </li>
                            <?php endif; ?>

                            <?php if( get_field( 'coke_donation_description' ) ): ?>
							<li class="pull-left">
								<a href="#" data-wrap="slide-6" data-slide="6">Coke Donation</a>
							</li>
							<?php endif; ?>

                            <?php if( get_field( 'contact_form_description' ) ): ?>
                            <li class="pull-left">
								<a href="#" data-wrap="slide-7" data-slide="7">General</a>
							</li>
							<?php endif; ?>

                            <?php if( get_field( 'shuttles_description' ) ): ?>
                                <li class="pull-left">
                                    <a href="#" id="shuttles" data-name="shuttles" data-wrap="slide-8" data-slide="8">Shuttle Advertising</a>
                                </li>
                            <?php endif; ?>

                            <?php if( get_field( 'knightcash_description' ) ): ?>
                                <li class="pull-left">
                                    <a href="#" id="knightcash" data-name="knightcash" data-wrap="slide-9"
                                       data-slide="9">Knight Cash Refunds</a>
                                </li>
                            <?php endif; ?>

						</ul>

						<div class="clear"></div>

						<div id="slideCount" data-total-slides="8"></div>

						<?php
							get_template_part( 'template-parts/contact-content-wraps/dining-membership' );
							get_template_part( 'template-parts/contact-content-wraps/general' );
							get_template_part( 'template-parts/contact-content-wraps/vending' );
							get_template_part( 'template-parts/contact-content-wraps/donation' );
							get_template_part( 'template-parts/contact-content-wraps/students' );
							get_template_part( 'template-parts/contact-content-wraps/coke-donation' );
							get_template_part( 'template-parts/contact-content-wraps/shuttles' );
							get_template_part( 'template-parts/contact-content-wraps/knightcash')
						?>

					</div>

				</div>

			</section>

		</main>

	</div>

<?php get_footer(); ?>
