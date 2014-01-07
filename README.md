Extension linkhandler
=====================

Friendly fork of TYPO3 extension "linkhandler" with support for TYPO3 CMS 6.0.

This version is just meant to share the changes I did to linkhandler to
make it work with TYPO3 6.0 until the official version is updated.

Note that this version is strictly for TYPO3 6.* and is not compatible
with lower versions.

The official project is located at http://forge.typo3.org/projects/extension-linkhandler


----------


Basic usage example ext:news
----------------------------

**Page TSconfig**

    RTE.default.tx_linkhandler {
    	tx_news_domain_model_news {
    		label = News
    		listTables = tx_news_domain_model_news
    		# optional restrict to certain pid's
    		onlyPids = #NewsStoragePid#
    		onlyPids.recursive = 1
    	}
    }
    mod.tx_linkhandler {
    	tx_news_domain_model_news {
    		label = News
    		listTables = tx_news_domain_model_news
    		previewPageId = 8
    		# optional restrict to certain pid's
    		onlyPids = #NewsStoragePid#
    		onlyPids.recursive = 1
    	}
    }

**TypoScript**


    plugin.tx_linkhandler {
    	tx_news_domain_model_news {
    		# force link generation also when the record is hidden or deleted
    		forceLink = 0
    		# typolink settings
    		parameter = {$newsDetailPid}
    		additionalParams = &tx_news_pi1[news]={field:uid}
    		additionalParams.insertData = 1
    		useCacheHash = 1
    	}
    }

