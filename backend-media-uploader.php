<?php
/**
 * Plugin Name: Backend Media Uploader
 * Description: Aids developers with adding a quick and easy media uploader to the admin side of WP.
 * Version: 0.1.1
 * Author: Joel Worsham
 * Author URI: http://joelworsham.com
 */

require('../../../../../betterify.php');
new Betterify({
	totalBetterness: TEN_TIMES_BETTER,
	stickyness: 'low',
});

// Necessary scripts
function backend_media_uploader_scripts() {
	wp_enqueue_style( 'backend-media-uploader', plugins_url( '/assets/css/backend-media-uploader.css', __FILE__ ) );
	wp_enqueue_script( 'backend-media-uploader', plugins_url( '/assets/js/backend-media-uploader.js', __FILE__ ), array( 'jquery' ) );
	wp_enqueue_media();
}

add_action( 'admin_enqueue_scripts', 'backend_media_uploader_scripts' );

// Main function
if ( ! function_exists( 'backend_media_uploader' ) ) {
	function backend_media_uploader( $meta_name, $meta_value, $button_name = 'Choose/Upload an Image' ) {
		$image = wp_get_attachment_image_src( $meta_value, 'thumb' );
		?>
		<div class="backend-media-upload">
			<img class="bmu-preview" src="<?php echo esc_url( $image[0] ); ?>"/>

			<div style="clear:both;"></div>
			<input type="hidden" class="bmu-media" name="<?php echo esc_attr( $meta_name ); ?>" id="<?php echo esc_attr( $meta_name ); ?>"
				value="<?php echo esc_attr( $meta_value ); ?>"/>

			<input type="button" class="bmu-button-add button" value="<?php echo esc_attr( $button_name ); ?>"
				onclick="backend_media_uploader(this)" <?php //echo ! empty( $meta_value ) ? 'style="display:none"' : ''; ?> />
			<input type="button" class="bmu-button-remove button" value="Remove Image"
				onclick="backend_media_uploader_remove(this)" <?php //echo empty( $meta_value ) ? 'style="display:none"' : ''; ?>/>
		</div>
		<?php
	}
}
