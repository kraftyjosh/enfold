<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="banner"><?php $image = get_post_meta($post->ID, 'Banner', true); ?>
<img src="<?php echo $image; ?>" alt="" style="width:100%; height:350px;" /></div>

<div class="content-area">

	<div id="left-sidebar">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
	</div>

	<div id="right-sidebar">
    	<?php dynamic_sidebar(); ?>
    </div>
    
    <div class="clear"></div>

</div>
<?php get_footer(); ?>