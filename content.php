<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package deepakiyer
 * @subpackage scratch
 * @since scratch 0.1a
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
		
		<nav class="entry-meta-bar">
			<div class="entry-meta">
			<?php scratch_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'scratch' ), '<span class="edit-link">', '</span>' ); ?>
			</div>
		</nav><!-- .entry-header-meta-->
	</header><!-- .entry-header -->




	<div class="entry-content">
		<div class="post-deco">
			<div class="hex hex-small">
				<div class="hex-inner"><i class="fa"></i></div>
				<?php if ( $format != false ) :?><a href="<?php echo get_post_format_link($format); ?>"></a><?php endif; ?>
			</div>
		</div><!--/.post-deco-->

		<?php
			// Post thumbnail.
			the_post_thumbnail();
		?>

		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'scratch' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'scratch' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'scratch' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<div class="sep"><span class="outer-circle"><span class="inner-circle"></span></span></div>