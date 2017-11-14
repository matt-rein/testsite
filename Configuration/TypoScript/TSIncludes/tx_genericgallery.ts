#### Configuration genericgallery [Start] ####

plugin.tx_genericgallery {
    view {
        templateRootPaths.20 = EXT:testsite/Resources/Private/Templates/Gallery/
        partialRootPaths.20 = EXT:testsite/Resources/Private/Partials/Gallery/

        widget {
            TYPO3\CMS\Fluid\ViewHelpers\Widget\PaginateViewHelper {
                templateRootPath = {$plugin.tx_testsite.view.templateRootPath}
            }
        }
    }

    settings {

        # Config available gallery types
        gallery {
            bootstrap_slider_image >
            bootstrap_slider_teaser >
            foundation {
                name = Foundation 6 Gallery

                # template for gallery
                template = EXT:testsite/Resources/Private/Templates/Gallery/GalleryCollection/Show.html

                # template for item detail view
                itemTemplate = EXT:testsite/Resources/Private/Templates/Gallery/GalleryItem/Show.html
            }
            slickslider {
                name = Slick Slider

                # template for gallery
                template = EXT:testsite/Resources/Private/Templates/Gallery/GalleryCollection/SlickSlider/Show.html

                # template for item detail view
                itemTemplate = EXT:testsite/Resources/Private/Templates/Gallery/GalleryItem/SlickSlider/Show.html
            }
        }
    }
}
#### Configuration genericgallery [End] ####
