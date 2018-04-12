
# [![JobApis.com](https://i.imgur.com/9VOAkrZ.png)](https://www.jobapis.com) jobs-JobsHQ

[![Twitter URL](https://img.shields.io/twitter/url/https/twitter.com/jobapis.svg?style=social&label=Follow%20%40jobapis)](https://twitter.com/jobapis)
[![Latest Version](https://img.shields.io/github/release/jschwarz/jobs-JobsHQ.svg?style=flat-square)](https://github.com/jschwarz/jobs-JobsHQ/releases)
[![Software License](https://img.shields.io/badge/license-APACHE%202.0-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/jschwarz/jobs-JobsHQ/master.svg?style=flat-square&1)](https://travis-ci.org/jschwarz/jobs-JobsHQ)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/jschwarz/jobs-JobsHQ.svg?style=flat-square)](https://scrutinizer-ci.com/g/jschwarz/jobs-JobsHQ/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/jschwarz/jobs-JobsHQ.svg?style=flat-square)](https://scrutinizer-ci.com/g/jschwarz/jobs-JobsHQ)
[![Total Downloads](https://img.shields.io/packagist/dt/jschwarz/jobs-JobsHQ.svg?style=flat-square)](https://packagist.org/packages/jschwarz/jobs-JobsHQ)

## About

A Jobs-Common provider for the JobsHQ RSS Feed

### Example

```php
$client = new JobsHQProvider(new JobsHQQuery());
$jobs = $client->getJobs();
```

See [Usage](#usage) section below for more detailed examples.

### Mission

[JobApis](https://www.jobapis.com) makes job board and company data more accessible through open source software. To learn more, visit [JobApis.com](https://www.jobapis.com), or contact us at [admin@jobapis.com](mailto:admin@jobapis.com).


## Requirements
- [PHP 5.5+](http://www.php.net/)
- [Composer](https://getcomposer.org/)


## Installation

You can install this package using Composer. From the command line, run:

```bash
$ composer require jschwarz/jobs-JobsHQ
```


## Usage

 
```php
$query = new JobApis\Jobs\Client\Queries\JobsHQQuery();
```

Then inject the query object into the provider.

```php
$client = new JobApis\Jobs\Client\Providers\JobsHQProvider($query);
```

And call the "getJobs" method to retrieve results.

```php
$jobs = $client->getJobs();
```

The `getJobs()` method will return a [Collection](https://github.com/jobapis/jobs-common/blob/master/src/Collection.php) of [Job](https://github.com/jobapis/jobs-common/blob/master/src/Job.php) objects based on Schema.org's [JobPosting](https://schema.org/JobPosting) specification.


## Testing

1. Clone this repository from Github.
2. Install the dependencies with Composer: `$ composer install`.
3. Run the test suite: `$ ./vendor/bin/phpunit`.
4. (Optional) Run the test suite with real HTTP calls to the API: `$ REAL_CALL=1 ./vendor/bin/phpunit`.

A code coverage report will be generated in the `build/` directory at the root of the project.


## Contributing

Contributions are welcomed and encouraged! Please see [JobApis' contribution guidelines](https://www.jobapis.com/contributing/) for details, or create an issue in Github if you have any questions.

## Legal

### Disclaimer

This package is not affiliated with or supported by JobsHQ and we are not responsible for any use or misuse of this software.

### License

This package uses the Apache 2.0 license. Please see the [License File](https://www.jobapis.com/license/) for more information.

### Copyright

Copyright 2017, [Jesse Schwarz](www.linkedin.com/in/jesse-schwarz-56311652).

### Acknowledgments

* [Jobs-Skeleton](https://github.com/jobapis/jobs-skeleton)
* [Jobs-Craigslist](https://github.com/jobapis/jobs-craigslist)