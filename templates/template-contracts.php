<?php /*
Template Name: Contracts
*/ ?>

<?php get_header(); ?>

<div class="container">

    <main id="content" class="contracts no-padding-top">

        <section class="cta-section dark-green text-center formatted">

            <div class="background-overlay" style="background: url(<?php bloginfo('template_directory'); ?>/library/images/ctabg1.jpg); background-position: center; background-size: cover;"></div>

            <div class="overlay"></div>

            <div class="inner-wrap larger">

                <?php if ( get_field( 'cta_title' ) ) { ?>
                    <h1><?php the_field( 'cta_title' ); ?></h1>
                <?php } ?>

                <?php if ( get_field( 'cta_description' ) ) { ?>
                    <?php the_field( 'cta_description' ); ?>
                <?php } ?>

                <?php if( have_rows( 'downloads' ) ): ?>

                    <div class="download-link-wrap">

                        <?php while ( have_rows( 'downloads' ) ) : the_row(); ?>

                            <a href="<?php the_sub_field('link_url'); ?>" class="white-btn btn special-dl" target="_blank"><?php the_sub_field('link_text'); ?></a>

                        <?php endwhile; ?>

                        <div class="clear"></div>

                    </div>

                <?php endif; ?>

            </div>

        </section>

        <section class="slider-section has padding-2">

            <div class="container">

                <div class="inner-wrap-container formatted">



                </div>

            </div>

        </section>

    </main>

</div>

<?php get_footer(); ?>
