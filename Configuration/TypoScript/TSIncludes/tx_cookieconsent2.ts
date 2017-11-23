page {
    jsInline {
        201105 = FLUIDTEMPLATE
        201105 {
            file = EXT:testsite/Resources/Private/Templates/CookieConsent/Configuration.html

            templateRootPath = {$plugin.tx_testsite.view.templateRootPath}
            partialRootPath = {$plugin.tx_testsite.view.partialRootPath}
            layoutRootPath = {$plugin.tx_testsite.view.layoutRootPath}

            settings.cookieconsent {
                link = {$plugin.tx_testsite.settings.cookieconsent.link}
                container = {$plugin.tx_testsite.settings.cookieconsent.container}
                theme = {$plugin.tx_testsite.settings.cookieconsent.theme}
                path = {$plugin.tx_testsite.settings.cookieconsent.path}
                domain = {$plugin.tx_testsite.settings.cookieconsent.domain}
                expiryDays = {$plugin.tx_testsite.settings.cookieconsent.expiryDays}
            }
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
