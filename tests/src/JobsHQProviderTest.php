<?php namespace JobApis\Jobs\Client\Providers\Test;

use JobApis\Jobs\Client\Providers\JobsHQProvider as Provider;
use JobApis\Jobs\Client\Queries\JobsHQQuery as Query;
use Mockery as m;
/*
class JobsHQProviderTest extends \PHPUnit_Framework_TestCase
{
    public $client;

    public $query;

    public function setUp()
    {
        $this->query = m::mock(Query::class);

        $this->client = new Provider($this->query);
    }

    public function testItCanTest()
    {
        $this->assertTrue($this->client);
    }
}
*/