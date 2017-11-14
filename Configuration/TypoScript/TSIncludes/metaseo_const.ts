plugin.metaseo {
    services {
        enableIfHeaderIsDisabled = 1
        googleAnalytics.anonymizeIp = 0
        googleAnalytics = ----
        googleAnalytics.domainName = www.abc.abc
    }
    metaTags{
        robotsNoTranslate = 1
        googleVerification = ----
    }
    userAgent {
        ieCompatibilityMode = 10
    }

    robotsTxt.default.10.value (
        User-agent: *
        Disallow: /fileadmin/_temp_/
        Disallow: /t3lib/
        Disallow: /typo3/
        Disallow: /typo3conf/
        Disallow: /typo3_src/
        Disallow: /clear.gif

        Allow: /typo3conf/ext/testsite/Resources/Public/
        Allow: /typo3conf/ext/news/Resources/Public/
    )
}
