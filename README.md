Backend Media Uploader
---------------

A wordpress plugin designed for wordpress developers.

Ever spend too much time trying to get that dang Wordpress 3.5 media uploader to work? This plugin simplifies that process to an easy to use function. This plugin is designed strictly for images, though can easily be modified for desired use (audio, video, pdf, etc.).

## To install:

  - Download zip file
  - Upload to your site via "Add Plugin"

## To Use:

Anywhere in your code you want to have a media upload button, place the function:

```php
backend_media_uploader($meta_name, $meta_value[, $button_name])
```

The function will place a media upload button that allows users to either upload new content or use existing content via the media library. Once selected, the media attachment ID will be used in the form to save in conjunction with the given meta information. You may then call that meta information on any page and will receive the media attachment ID for use in Wordpress.

This function requries two parameters, `$meta_name` and `$meta_value`

`$meta_name` is the name of whatever data variable you're saving. This variable will also be used for the input name that contains the attachment ID.

`$meta_value` is the actual value of whatever meta name you chose. This value should return the media attachment ID after it has been sent. The value is sent into the preview image.

The third value, `$button_name`, is optional. This value will be used to supply the upload button with the shown text. Defaults to "Choose/Upload an Image".

## NOTE

This plugin will send the media attachment ID to your meta value, **not the image url**. The simpliest way to use this attachment ID is like so:

```php
echo wp_get_attachment_image( $attachment_id, $size); // $attachment_id is your meta value
```
