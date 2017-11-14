

#### Configuration tx_min.tinysource [Start] ####
plugin.tx_min.tinysource {
    enable = 0
    head {
        stripTabs = 0
        stripNewLines = 0
        stripDoubleSpaces = 1
        stripTwoLinesToOne = 1
    }
    body {
        stripComments = 1
        stripTabs = 1
        stripNewLines = 1
        stripDoubleSpaces = 1
        stripTwoLinesToOne = 0
        preventStripOfSearchComment = 1
        protectCode {
            10 = /(<textarea.*?>.*?<\/textarea>)/is
            20 = /(<pre.*?>.*?<\/pre>)/is
        }
    }
    oneLineMode = 1
}
#### Configuration tx_min.tinysource [End] ####