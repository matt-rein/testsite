plugin.tx_testsite {

    settings.cookieconsent {
        link =
        theme =
        domain =
    }
    _LOCAL_LANG.de
        {
    message = Cookies erleichtern die Bereitstellung unserer Dienste. Mit der Nutzung unserer Dienste erklären Sie sich damit einverstanden, dass wir Cookies verwenden.
    }
}

page{
    jsInline {
        cookieconsent = FLUIDTEMPLATE
        cookieconsent {
            file = EXT:testsite/Resources/Private/Templates/CookieConsent/Configuration.html

            templateRootPath = {$plugin.tx_testsite.view.templateRootPath}
            partialRootPath = {$plugin.tx_testsite.view.partialRootPath}
            layoutRootPath = {$plugin.tx_testsite.view.layoutRootPath}

            settings {
                link = {$plugin.tx_testsite.settings.link}
                container = {$plugin.tx_testsite.settings.container}
                theme = {$plugin.tx_testsite.settings.theme}
                path = {$plugin.tx_testsite.settings.path}
                domain = {$plugin.tx_testsite.settings.domain}
                expiryDays = {$plugin.tx_testsite.settings.expiryDays}
            }
        }
    }
    includeCSS {
        cookieconsent2              = EXT:testsite/Resources/Public/CookieConsent/cookieconsent.min.css
        cookieconsent2.titel        = CookieConsent 2
    }
    includeJSFooter {
        cookieconsentBase = EXT:testsite/Resources/Public/CookieConsent/cookieconsent.min.js
        cookieconsentBase.title = CookieConsent 2 Basis

    }
}
