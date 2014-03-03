function backend_media_uploader(e){
  var send_attachment_bkp = wp.media.editor.send.attachment,
      button = jQuery(e);

  wp.media.editor.send.attachment = function(props, attachment){
    jQuery(e).siblings('.media').val(attachment.id);
    jQuery(e).siblings('.preview').attr('src', attachment.url);
    wp.media.editor.send.attachment = send_attachment_bkp;
  }

  wp.media.editor.open(button);
  return false;
}