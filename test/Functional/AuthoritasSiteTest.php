<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');
class AuthoritasSiteTest extends BaseTestCase {

    public function testListMetrics() {

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
            'addResellerClient'
        ];

        foreach($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/AuthoritasSite/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in '.$file.' method');
        }
    }

}
