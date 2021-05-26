<?php /*
Template Name: Contracts
*/ ?>

<?php get_header(); ?>

<div class="container">

    <main id="content" class="contracts">

        <?php get_template_part( 'template-parts/cta-section' ); ?>

        <section class="slider-section has-padding">

            <div class="container">

                <div class="inner-wrap-container">

                    <div class="content-wrap active">

                        <?php if( have_rows('contracts_repeater') ): ?>

                            <div class="contracts-repeater inner-wrap-container">

                                <?php while( have_rows('contracts_repeater') ): the_row();

                                    $image = get_sub_field('contract_image');
                                    ?>
                                    <div class="repeater-item imager-container-formatted">
                                        <div class="image-side pull-right">
                                            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                                        </div>

                                        <div class="text-side pull-left">
                                            <h3><?php the_sub_field('contract_title'); ?></h3>
                                            <p class="contract-tagline"><?php the_sub_field('contract_tagline'); ?></p>
                                            <p class="contract-body"><?php the_sub_field('contract_body_text'); ?></p>
                                            <p class="contract-links"><?php the_sub_field('contract_links'); ?></p>
                                        </div>
                                    </div>

                                <?php endwhile; ?>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>

<?php get_footer(); ?>
