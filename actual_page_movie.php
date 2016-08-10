<?php
/**
 * Template Name: Movies
 * 
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
/* var_dump($posts); */
get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">


			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();?>
				

					<?php get_template_part( 'content', 'page' );?>
				

					
					<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
			
				<div class="site-content2">
			<?php 

			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			
			$mymovies = new WP_QUERY(array(
				'post_type' => 'my_movies',
				'posts_per_page' => 6,
				'paged' => $paged,			
			));
			

			$total = $mymovies->max_num_pages;
    // Only paginate if we have more than one page
    if ( $total > 1 )  {
         // Get the current page
         if ( !$current_page = get_query_var('paged') )
              $current_page = 1;
         // Structure of “format” depends on whether we’re using pretty permalinks
        $permalinks = get_option('permalink_structure');
        $format = empty( $permalinks ) ? '&page=%#%' : 'page/%#%/';
       
    }

			 while ($mymovies->have_posts()) : $mymovies->the_post(); ?>

					<div class="date-outer">
					<div class="roundedImage">
						<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('thumbnail'); ?>
					</div>
					<h5> <a href="<?php the_permalink(); ?>">
						<?php the_title(); ?> 
						</a>
						<span class="date">(
						<?php $date = date_create_from_format('Ymd', get_field('release_date'));
						echo $date->format('Y'); ?>
						)</span>
					</h5>
					<p><strong>My rating: </strong> <span class="rating"><?php the_field('rate'); ?></span>
					</p>
					
				
					<div class="content_description">
						<p><?php the_field('description'); ?></p>
			    	</div>
			    	</div>
					<?php endwhile; ?>
		    

					<div class="pagenav">

				        <P>
				        <?php echo paginate_links(array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => $format,
              'current' => $current_page,
              'total' => $total,
              'mid_size' => 2,
              'type' => 'plain'
        )); ?>
				        </p>
					</div>

				</div>

			</div><!-- #content -->
				
		</div><!-- #primary -->

		<?php get_sidebar( 'content' ); ?>

	</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();