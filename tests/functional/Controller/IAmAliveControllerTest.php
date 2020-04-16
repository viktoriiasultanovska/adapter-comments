<?php

namespace App\Tests\Functional\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;

/**
 * Class IAmAliveControllerTest
 */
class IAmAliveControllerTest extends WebTestCase
{
    public function testItReturns200StatusCode()
    {
        $client = $this->createClient();
        $client->request('GET', '/adapter/comments/i-am-alive');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}