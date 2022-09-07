<?php
/**
 * The template part for displaying single post
 *
 * @package Digital Advertising
 * @subpackage digital_advertising
 * @since Digital Advertising 1.0
 */
?>
<article>
	<h1><?php the_title(); ?></h1>
	<?php if( get_theme_mod( 'digital_advertising_date_hide',true) != '' || get_theme_mod( 'digital_advertising_comment_hide',true) != '' || get_theme_mod( 'digital_advertising_author_hide',true) != '' || get_theme_mod( 'digital_advertising_time_hide',true) != '') { ?>
		<div class="metabox py-1 px-2 mb-3">
			<?php if( get_theme_mod( 'digital_advertising_date_hide',true) != '') { ?>
        <span class="entry-date me-2"><i class="far fa-calendar-alt me-1"></i><?php echo esc_html( get_the_date() ); ?></span>
      <?php } ?>

      <?php if( get_theme_mod( 'digital_advertising_author_hide',true) != '') { ?>
        <span class="entry-author me-2"><i class="fas fa-user me-1"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
      <?php } ?>

      <?php if( get_theme_mod( 'digital_advertising_comment_hide',true) != '') { ?>
        <i class="fas fa-comments me-1"></i><span class="entry-comments me-2"> <?php comments_number( __('0 Comments','digital-advertising'), __('0 Comments','digital-advertising'), __('% Comments','digital-advertising') ); ?></span>
      <?php } ?>

      <?php if( get_theme_mod( 'digital_advertising_time_hide',false) != '') { ?>
        <span class="entry-time"><i class="fas fa-clock me-1"></i> <?php echo esc_html( get_the_time() ); ?></span>
      <?php }?>
		</div>
	<?php } ?>
	<?php if( get_theme_mod( 'digital_advertising_feature_image',true) != '') { ?>
		<?php if(has_post_thumbnail()) { ?>
			<hr>
			<div class="feature-box">
				<?php the_post_thumbnail(); ?> 
			</div>
			<hr>
		<?php }?> 
	<?php }?>
	<div class="entry-content"><?php the_content();?></div>
	<?php if( get_theme_mod( 'digital_advertising_tags',true) != '') { ?>
		<div class="tags"><?php the_tags(); ?></div>
	<?php }?>
	<div class="clearfix"></div> 

	<?php
	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'digital-advertising' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'digital-advertising' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );

	if( get_theme_mod( 'digital_advertising_comment',true) != '') {
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() )
		comments_template();
	}

	if ( is_singular( 'attachment' ) ) {
		// Parent post navigation.
		the_post_navigation( array(
			'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title m-3">%title</span>', 'Parent post link', 'digital-advertising' ),
		) );
	} elseif ( is_singular( 'post' ) ) {
		if( get_theme_mod( 'digital_advertising_nav_links',true) != '') {
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('digital_advertising_next_text',__( 'Next Post', 'digital-advertising' ))) . '<i class="fas fa-chevron-right"></i></span> ' .
					'<span class="screen-reader-text">' . __( 'Next Post', 'digital-advertising' ) . '</span> ' .
					'',
				'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fas fa-chevron-left"></i>' . esc_html(get_theme_mod('digital_advertising_prev_text',__( 'Previous Post', 'digital-advertising' ))) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous Post', 'digital-advertising' ) . '</span> ' .
					'',
			) );
		}
	}?>
</article>

<?php if (get_theme_mod('digital_advertising_related_posts',true) != '') {
	get_template_part( 'template-parts/related-posts' );
}