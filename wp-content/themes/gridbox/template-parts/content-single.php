<?php
/**
 * The template for displaying single posts
 *
 * @package Gridbox
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php gridbox_post_image_single(); ?>

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php gridbox_entry_meta(); ?>

	</header><!-- .entry-header -->

	<div class="entry-content clearfix">

		<?php the_content(); ?>

		<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gridbox' ),
			'after'  => '</div>',
		) ); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php gridbox_entry_tags(); ?>
		<?php gridbox_post_navigation(); ?>

	</footer><!-- .entry-footer -->

</article>

<h3>Related posts</h3>
<div class="rows">
<?php
	//for use in the loop, list 5 post titles related to first tag on current post
	$tags = wp_get_post_tags($post->ID);
	
	if (!empty($tags)) {
		$tagsIdArr=array();
		
		foreach($tags as $postTag){
			$tagsIdArr[]= $postTag->term_id;
		}
		
		$allTags = implode(",",$tagsIdArr);
		
		$args=array(
			'tag__in' => $tagsIdArr,
			'posts_per_page'=>-1,
			'post__not_in'	=>array($post->ID),
			//'caller_get_posts'=>1,
		);

		$my_query = new WP_Query($args);

		if( $my_query->have_posts() ) {
			
			while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">	
				<div class="post-column clearfix">
					
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
						<?php gridbox_post_image(); ?>
						
						<header class="entry-header">
							<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
							<?php //gridbox_entry_meta(); ?>
						</header><!-- .entry-header -->

						<div class="entry-content entry-excerpt clearfix">
							<?php the_excerpt(20); ?>
							<?php gridbox_more_link(); ?>
						</div><!-- .entry-content -->

					</article>

				</div>
			</div>
			<?php
			endwhile;
		}
		wp_reset_query();
	}
?>
</div>