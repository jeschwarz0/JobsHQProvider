<?php namespace JobApis\Jobs\Client\Providers;

use JobApis\Jobs\Client\Job;

class JobsHQProvider extends AbstractProvider
{
    /**
     * Returns the standardized job object
     *
     * @param array $payload
     *
     * @return \JobApis\Jobs\Client\Job
     */
    public function createJobObject($payload)
    {
        $titlepl = explode(':', $payload['title']);
        // Get description attributes
        // Isolate the location from the description (last line)
        $descr_location_separator_loc = strrpos($payload['description'], PHP_EOL, -2);
        $descpl = array();
        if ($descr_location_separator_loc !== FALSE)
        {
            $descpl[0] = substr($payload['description'], 0, $descr_location_separator_loc);
            $descpl[1] = trim(substr($payload['description'], $descr_location_separator_loc));
        }else {
            $descpl[0] = $payload['description'];
            $descpl[1] = '';
        }
        $job = new Job([
            'title' => $titlepl[1],
            'name' => $titlepl[1],
            'company' => $titlepl[0],
            'description' => $descpl[0],
            'location' => $descpl[1],
            'url' => $payload['link'],
            'datePosted' => $payload['pubDate'],
        ]);
         return $job;
    }

    /**
     * Job response object default keys that should be set
     *
     * @return  array
     */
    public function getDefaultResponseFields()
    {
        return [
            'title',
            'description',
            'link',
            'pubDate',
        ];
    }

    /**
     * Get format
     * 
     * @return string Only xml is supported
     */
    public function getFormat()
    {
        return "xml";
    }

    /**
     * Get listings path
     *
     * @return  string
     */
    public function getListingsPath()
    {
        return 'channel.item';
    }
}
