page {
    includeCSS {
        lightbox2                   = EXT:testsite/Resources/Public/Lightbox2/css/lightbox.min.css
    }
    includeJSFooter {
        lightbox2                    = EXT:testsite/Resources/Public/Lightbox2/js/lightbox.min.js
        lightbox2.title              = Lightbox
    }

}

lib.contentElement.settings.media.popup.linkParams.ATagParams.dataWrap = data-lightbox="lightbox[{field:uid}]"