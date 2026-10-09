<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<div class="banner"><?php $image = get_post_meta($post->ID, 'Banner', true); ?>
<img src="<?php echo $image; ?>" alt="" /></div>
        
<div class="content-area">

	<div id="left-sidebar">

		<?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'page' ); ?>
            <?php //comments_template( '', true ); ?>
        <?php endwhile; // end of the loop. ?>
    
    </div>
    
    <div id="right-sidebar">
    	<?php dynamic_sidebar( 'contact-sidebar' ); ?>
    </div>
    
    <div class="clear"></div>

</div>
<?php get_footer(); ?>