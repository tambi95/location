<?php
/**
 * The template for displaying Author bios
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<?php if (!empty($sUrlImage = get_the_author_meta('src_image'))) : ?>
	 <div class="author-img">
	  <img src="<?php echo $sUrlImage; ?>" />
	 </div>
	<?php endif; ?>

	<div class="col_right">
		<div class="entry-meta sidebar_meta">
			<span class="date">
				<?php 
					printf(__('Published on', 'tm-bootstrap').' : <span class="date">%1$s</span>',   
					  get_the_date('j F Y', get_the_id())
					 ); 
				?>
			</span>
		</div>

		<div class="author-heading">
		 <?php _e('by', 'tm-bootstrap'); ?>
		 <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
		 	<?php echo get_the_author(); ?>
		 </a>
		</div> 

		<div class="author-description">
			<p class="author-bio">
				<?php 
				 the_author_meta('description');

		   if (!empty($sEmailPublic = get_the_author_meta('email_public'))) :
		    echo '<a href="mailto:'.$sEmailPublic.'" class="contact">'.__('Contact me', 'tm-bootstrap').'</a>';
		   endif;
				?>
			</p>
		</div>
	</div>
	<div class="clearfix"></div>