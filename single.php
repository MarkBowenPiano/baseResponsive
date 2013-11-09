<?php get_header(); ?>

	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?><!-- Post BreadCrumbs -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- Start of the WordPress Loop -->

	<?php the_title() ;?><!-- Post Title -->

	<?php the_content(); ?><!-- Post Content -->

	<?php the_time('F j, Y'); ?><!-- Post Data -->

    <?php comments_template( '', true ); ?><!-- WordPress Comments for the Post -->
   
	<?php endwhile; ?>
   	<?php else: ?>
	<?php endif; ?><!-- end of WordPress loop -->

   	<?php get_sidebar(); ?><!-- WordPress Sidebar -->

<?php get_footer(); ?>