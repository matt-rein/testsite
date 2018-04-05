page {
    jsInline {
        201105 = FLUIDTEMPLATE
        201105 {
            file = EXT:testsite/Resources/Private/Templates/CookieConsent/Configuration.html

            templateRootPath = {$plugin.tx_testsite.view.templateRootPath}
            partialRootPath = {$plugin.tx_testsite.view.partialRootPath}
            layoutRootPath = {$plugin.tx_testsite.view.layoutRootPath}


        }
    }

    includeCSS {
        cookieconsent2 = EXT:testsite/Resources/Public/CookieConsent/cookieconsent.min.css
    }

    includeJSFooter {
        cookieconsentBase = EXT:testsite/Resources/Public/CookieConsent/cookieconsent.min.js
        cookieconsentBase.title = CookieConsent 2 Basis

    }
}
