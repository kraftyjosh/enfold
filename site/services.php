<?php
/**
 * Template Name: Service
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

<?php dynamic_sidebar( 'service-sidebar' ); ?>

<?php get_footer(); ?>