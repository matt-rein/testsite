#### Configuration tx_news [Start] ####

plugin.tx_news {
    view {
        templateRootPaths.10 = EXT:testsite/Resources/Private/Templates/News/
        partialRootPaths.10 = EXT:testsite/Resources/Private/Partials/News/
        layoutRootPaths.10 = EXT:testsite/Resources/Private/Layouts/News/
    }
    settings {
        list.paginate.templatePath = EXT:testsite/Resources/Private/Templates/News/ViewHelpers/Widget/Paginate/Index.html
    }
}

module.tx_news {
    settings {
        list.paginate.itemsPerPage = 25
    }
}
#### Configuration tx_news [End] ####