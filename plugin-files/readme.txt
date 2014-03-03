=== Backend Media Uploader ===
Tags: backend, media, uploader
Requires at least: 3.5
Tested up to: 3.8.1
License: GPLv2 or later

Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here.

== Description ==

Anywhere in your code you want to have a media upload button, place the function *backend\_media\_uploader(**$meta\_name**, **$meta\_value**, **$button\_name**)*

The function will place a media upload button that allows users to either upload new content or use existing content via the media library. Once selected, the media attachment ID will be used in the form to save in conjunction with the given meta information. You may then call that meta information on any page and will receive the media attachment ID for use in Wordpress.

This function requries two parameters, **$meta\_name** and **$meta\_value**

**$meta\_name** is the name of whatever data variable you're saving. This variable will also be used for the input name that contains the attachment ID.

**$meta\_value** is the actual value of whatever meta name you chose. This value should return the media attachment ID after it has been sent. The value is sent into the preview image.

The third value, **$button\_name**, is optional. This value will be used to supply the upload button with the shown text. Defaults to "Choose/Upload an Image".

**NOTE**

This plugin will send the media attachment ID to your meta value, **not the image url**. The simpliest way to use this attachment ID is like so:

echo wp\_get\_attachment\_image( $attachment\_id, $size); // $attchment_id is your meta value

== Installation ==

1. Upload to your site via "Add Plugin"

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

= 1.0 =
* Initial release.