<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 */

get_header(); ?>

<div class="banner"><?php $image = get_post_meta($post->ID, 'Banner', true); ?>
<img src="<?php echo $image; ?>" alt="" /></div>
        
        <div class="content-area">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
            
        </div>

<?php get_footer(); ?>