<?php get_header(); ?>

	<section class="page-left">

	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?><!-- Post BreadCrumbs -->

    Search Result for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles'); wp_reset_query(); ?><!-- To display the search term for the user and the number of results -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- Start of the WordPress Loop -->

	<?php the_title() ;?><!-- Post Title -->

	<?php the_content(); ?><!-- Post Content -->

	<?php the_time('F j, Y'); ?><!-- Post Data -->

    <?php comments_template( '', true ); ?><!-- WordPress Comments for the Post -->
   
	<?php endwhile; ?>
   	<?php else: ?>
	<?php endif; ?><!-- end of WordPress loop -->

   	</section><!-- page-left -->

	<aside class="page-right">

	<?php get_sidebar(); ?><!-- WordPress Sidebar -->

	</aside><!-- page-right -->

<?php get_footer(); ?>