Google APIs Client Library for PHP
=====================================

###Description

The Google API Client Library enables you to work with Google APIs such as Google+, Drive, Tasks, or Compute on your server.

Requirements:

* PHP 5.3 or higher [http://www.php.net/]
* PHP Curl extension [http://www.php.net/manual/en/intro.curl.php]
* PHP JSON extension [http://php.net/manual/en/book.json.php]

Project pages:

* This Project: http://www.github.com/block8/google-api
* Original on Google Code: http://code.google.com/p/google-api-php-client

OAuth 2 instructions:

* http://code.google.com/p/google-api-php-client/wiki/OAuth2

Report a defect or feature request here:

* https://github.com/Block8/Google-API/issues

### Basic Example
    <?php

    $client = new Google\Api\Client();
    $service = new Google\Service\Books($client);

    $optParams = array('filter' => 'free-ebooks');
    $results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

    foreach ($results['items'] as $item) {
      print($item['volumeInfo']['title'] . '<br>');
    }
