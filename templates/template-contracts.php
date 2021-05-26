<?php /*
Template Name: Contracts
*/ ?>

<?php get_header(); ?>

<div class="container">

    <main id="content" class="contracts">

        <?php get_template_part( 'template-parts/cta-section' ); ?>

        <section class="slider-section">

            <div class="container">

                <div class="inner-wrap-container">

                    <div class="content-wrap active">

                        <?php if( have_rows('contracts_repeater') ): ?>

                            <div id="contracts-container" class="image-container formatted">

                                <?php while( have_rows('contracts_repeater') ): the_row();

                                    $image = get_sub_field('contract_image');
                                    ?>
                                    <div class="repeater-item image-container-formatted">
                                        <div class="image-side pull-right">
                                            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                                        </div>

                                        <div class="text-side pull-left">
                                            <h3><?php the_sub_field('contract_title'); ?></h3>
                                            <p class="contract-tagline"><?php the_sub_field('contract_tagline'); ?></p>
                                            <p class="contract-body"><?php the_sub_field('contract_body_text'); ?></p>
                                            <div class="contract-links"><?php the_sub_field('contract_links'); ?></div>
                                        </div>
                                    </div>

                                <?php endwhile; ?>

                                <div class="clear"></div>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>

<?php get_footer(); ?>
