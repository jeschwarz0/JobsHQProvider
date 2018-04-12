<?php namespace JobApis\Jobs\Client\Queries;

class JobsHQQuery extends AbstractQuery
{
    /**
     * format
     *
     * Format: must be "rss".
     *
     * @var string
     */
    protected $format;

    /**
     * Keywords
     *
     * The primary search string
     *
     * @var string
     */
    protected $keywords;

    /**
     * Industry
     *
     * The Industry code
     *
     * @var int
     */
    protected $industry;

    /**
     * Role
     *
     * The Role code
     *
     * @var int
     */
    protected $role;
    
    /**
     * Salary Range
     *
     * The Salary Range code
     *
     * @var int
     */
    protected $salaryrange;    

    /**
     * Hours
     *
     * The Hour selection code
     *
     * @var int
     */
    protected $hours;    

    /**
     * Employer Type
     *
     * The Employer Type code
     *
     * @var int
     */
    protected $employertype;   

    /**
     * Job Type
     *
     * The job type code
     *
     * @var int
     */
    protected $jobtype;

    /**
     * Country Code
     *
     * The country code
     *
     * @var string
     */
    protected $countrycode;

    /**
     * Location Id
     *
     * The job location id
     *
     * @var int
     */
    protected $locationid;

    /**
     * Radial Location Id
     *
     * The job radial location id
     *
     * @var int
     */
    protected $radiallocation;

    /**
     * The real city name
     *
     * The job city name
     *
     * @var string
     */
    protected $radialtown;

    /**
     * Show nearby jobs
     *
     * Show nearby jobs
     *
     * @var boolean
     */
    protected $nearfacetsshown;

    /**
     * Get baseUrl
     *
     * @return  string Value of the base url to this api
     */
    public function getBaseUrl()
    {
         return 'https://www.jobshq.com/jobsrss/';
    }

    /**
     * Get keyword
     *
     * @return  string Attribute being used as the search keyword
     */
    public function getKeyword()
    {
        return $this->keywords;
    }

    /**
     * Default parameters
     *
     * @return array
     */
    protected function defaultAttributes()
    {
        return [
            'format' => 'rss',
        ];
    }
}
