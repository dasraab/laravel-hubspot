<?php

return [
    'api_key' => env('HUBSPOT_API_KEY'),
    'http_errors' => true, // throw no Guzzle exceptions
    'base_url' => "https://api.hubapi.com"
];
