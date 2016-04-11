<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section class="clearfix" id="sectionsi">
<div class="warpper clearfix">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			?><h2><?php
			// Include the single post content template.
			echo the_title();
			?></h2><div><hr><?php
			
			the_post_thumbnail();
			
			echo the_content();?>
			</div><?php
			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) {
			//	comments_template();
			//}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'cnadmission' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'cnadmission' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'cnadmission' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'cnadmission' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'cnadmission' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}

			// End of the loop.
		endwhile;
		?>
	</div>
</section><!-- .content-area -->
<?php get_footer(); ?>
