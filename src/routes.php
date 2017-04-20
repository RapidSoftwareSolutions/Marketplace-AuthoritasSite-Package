       <?php
       $routes = [
       'getMarketVisibility',
       'getCategories',
       'getKeywordsGroups',
       'getUniversalKeywordsRanking',
       'getOrganicKeywordsRankingByDate',
       'getOrganicKeywordsRankingByPeriod',
       'getSiteData',
       'updateSite',
       'updateKeywords',
       'suggestCompetitors',
       'suggestKeywords',
       'instantAudit',
       'getUsers',
       'addUser',
       'addAffiliate',
       'getSites',
       'addSite',
       'getResellerClients',
       'updateResellerClient',
        'addResellerClient',
        'metadata'
       ];
       foreach ($routes as $file) {
           require __DIR__ . '/../src/routes/' . $file . '.php';
       }

