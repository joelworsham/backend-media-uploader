<?
/*
Plugin Name: Backend Media Uploader
Description: Function for uploading media for use in backend coding for plugins
Author: Joel Worsham
Version: 1.0
*/

// Necessary scripts
wp_register_script('backend-media-uploader', plugins_url('/js/backend-media-uploader.js', __FILE__), array('jquery'));

function backend_media_uploader_scripts(){
  wp_enqueue_script('backend-media-uploader');
}
add_action('admin_enqueue_scripts', 'backend_media_uploader_scripts');

// Main function
if (!function_exists('backend_media_uploader')){
  function backend_media_uploader($meta_name, $meta_value){
      $image = wp_get_attachment_image_src($meta_value, 'thumb'); ?>
      <div class="media-upload">
          <img class="preview" src="<?php echo $image[0]; ?>" />
          <div style="clear:both;"></div>
          <input type="hidden" class="media" name="<?php echo $meta_name; ?>" id="<?php echo $meta_name; ?>" value="<?php echo $meta_value; ?>" />
          <input type="button" class="button" value="Choose or Upload Image" onclick="backend_media_uploader(this)" /><br/>
      </div>
  <?php }
}
?>