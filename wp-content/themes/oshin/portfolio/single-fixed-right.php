<?php
	global $be_themes_data;
	$be_pb_class = 'page-builder';
	$be_pb_disabled = get_post_meta( $post->ID, '_be_pb_disable', true );
	if( true === $be_pb_disabled || 'yes' == $be_pb_disabled || !isset( $be_themes_data['enable_pb'] ) || 0 == $be_themes_data['enable_pb'] ) {
		$be_pb_class = 'no-page-builder';
		get_template_part( 'page-breadcrumb' );
	}
?>
<?php 
	if ( post_password_required() ) {
				$content  = get_the_password_form();

			    echo '<div class="be-wrap clearfix be-password-protect-wrap">'.$content.'</div>';
	} else {
?>
<div id="content" class="right-sidebar-page fixed-sidebar-page">	
	<div id="content-wrap" class="<?php echo $be_pb_class; ?> clearfix">
		<div id="page-content" class="content-single-sidebar">
			<div class="clearfix">				
				<?php
					$attachments = get_post_meta(get_the_ID(),'be_themes_single_portfolio_slider_images');
					$image_animation = get_post_meta(get_the_ID(),'be_themes_single_portfolio_floting_images_style', true);
					if(!empty($attachments)) {
						$count = 1;
						foreach ( $attachments as $attachment_id ) {
							$attach_img = wp_get_attachment_image_src($attachment_id, 'full');
							$video_url = get_post_meta($attachment_id, 'be_themes_featured_video_url', true);
							if($video_url) {
								$data_source = 'video';
							} else {
								$data_source = $attach_img[0];
							}
							if($count == count($attachments)) {
								$class = 'margin-bottom-0';
							} else {
								$class = '';
							}
							echo '<p class="be-animate '.$class.'" data-animation="'.$image_animation.'">';
							if($video_url) {
								echo be_gal_video($video_url);
							} else {
								echo '<img src="'.$data_source.'" style="display: block;" alt=""/>';
							}
							echo '</p>';
							$count++;
						}
					}
				?>
			</div> <!--  End Page Content -->
		</div>
		<div id="right-sidebar" class="clearfix fixed-sidebar">
			<div class="fixed-sidebar-content">
				<div class="fixed-sidebar-content-inner">
					<?php //get_template_part( 'single', 'navigation' ); ?>
					<div>
						<?php the_content(); ?>
					</div>
					<?php //get_template_part( 'portfolio/gallery', 'sidebar' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
} //get_template_part( 'portfolio/single', 'navigation' ); 
?>