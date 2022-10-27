<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


Problem locally changed verify to false.

You can still use "guzzlehttp/guzzle": "~5.3|~6.0", in your composer.json but you need to edit the following file in vendor/guzzlehttp/guzzle/src/Client.php

$defaults = [
'allow_redirects' => RedirectMiddleware::$defaultSettings,
'http_errors'     => true,
'decode_content'  => true,
'verify'          => true, //  TO BE REPLACED by false
'cookies'         => false
];

GET: http://127.0.0.1:8000/api/employees

POST: http://127.0.0.1:8000/api/newemployee

POST: http://127.0.0.1:8000/api/updateemployee/4?_method=patch
