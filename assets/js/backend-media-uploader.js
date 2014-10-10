function backend_media_uploader(e){
    var send_attachment_bkp = wp.media.editor.send.attachment,
        button = jQuery(e),
        parent = jQuery(e).closest('.backend-media-upload');

    wp.media.editor.send.attachment = function(props, attachment){
        jQuery(e).siblings('.bmu-media').val(attachment.id);
        jQuery(e).siblings('.bmu-preview').attr('src', attachment.url);
        wp.media.editor.send.attachment = send_attachment_bkp;
    };

    wp.media.editor.open(button);

    return false;
}

function backend_media_uploader_remove(e) {
    var parent = jQuery(e).closest('.backend-media-upload');

    parent.find('.bmu-preview').attr('src', '');
    parent.find('.bmu-media').val('');

    // Hide this button and reveal the other
    //jQuery(e).hide();
    //parent.find('.bmu-button-add').show();
}