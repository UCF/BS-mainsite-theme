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

                    <div class="top-wrap formatted">


                        <?php if( have_rows('slides') ): ?>

                            <div class="contracts-repeater">

                                <?php while( have_rows('slides') ): the_row();

                                    $image = get_sub_field('contract_image');
                                    ?>
                                    <div class="repeater-item">
                                        <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                                        <h2><?php the_sub_field('contract_title'); ?></h2>
                                        <p class="contract-tagline"><?php the_sub_field('contract_tagline'); ?></p>
                                        <p class="contract-body"><?php the_sub_field('contract_body_text'); ?></p>
                                        <p class="contract-links"><?php the_sub_field('contract_links'); ?></p>
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
