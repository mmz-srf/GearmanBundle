<?php

namespace Supertag\Bundle\GearmanBundle\Tests;

use PHPUnit\Framework\TestCase;
use Supertag\Bundle\GearmanBundle\Client;

class GearmanClientTest extends TestCase
{
    /**
     * @test
     */
    function shouldNamespaceAJobName()
    {
        $client = new Client("", "");
        $this->assertSame('no_namespace', $client->getJobName('no_namespace'));

        $client = new Client("", "ns_");
        $this->assertSame('ns_no_namespace', $client->getJobName('no_namespace'));
    }
}
