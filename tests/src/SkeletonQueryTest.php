<?php namespace JobApis\Jobs\Client\Test;

use JobApis\Jobs\Client\Queries\JobsHQQuery as Query;
use Mockery as m;

class JobsHQQueryTest extends \PHPUnit_Framework_TestCase
{
    public $query;

    public function setUp()
    {
        $this->query = new Query();
    }

    public function testItCanGetBaseUrl()
    {
        $this->assertEquals('https://www.jobshq.com/jobsrss/', $this->query->getBaseUrl());
    }

    public function testFormatIsRss()
    {
        $this->assertEquals('rss', $this->query->get('format'));
    }

    public function testGetKeywords()
    {
        $keyword = uniqid();
        $this->query->set('keywords', $keyword);
        $this->assertEquals($keyword, $this->query->getKeyword());
    }

}
