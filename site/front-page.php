<?php
/**
 * Template Name: Front Page Template
 */

get_header(); ?>

<div class="home-banner"><?php
	// putRevSlider() is gone/deprecated in newer Slider Revolution and is a
	// fatal error whenever the plugin is inactive, so go through the shortcode.
	if ( shortcode_exists( 'rev_slider' ) ) {
		echo do_shortcode( '[rev_slider alias="homeslider"]' );
	} elseif ( function_exists( 'putRevSlider' ) ) {
		putRevSlider( 'homeslider' );
	}
?></div>
			
<div class="content-area">

    <div class="home-col">
        <?php dynamic_sidebar( 'home-col' ); ?>
    </div>

	<div class="home-col2">

		<div class="col_1">
			<?php dynamic_sidebar( 'home-project' ); ?>
        </div>

		<div class="col_2">

			<?php while ( have_posts() ) : the_post(); ?>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="entry-page-image">
                        <?php the_post_thumbnail(); ?>
                    </div><!-- .entry-page-image -->
                <?php endif; ?>
            
                <?php get_template_part( 'content', 'page' ); ?>
            
            <?php endwhile; // end of the loop. ?>

		</div>
        
	</div>

</div>

<?php get_footer(); ?>