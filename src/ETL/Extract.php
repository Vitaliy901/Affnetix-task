<?php

namespace App\ETL;

use GuzzleHttp\Client;

class Extract
{
    private object $client;

    private function __construct(
    )
    {
        $this->client = new Client();
    }

    public static function get(string $url)
    {
        $response = $this->client->request('GET', $url);
        $statusCode = $response->getStatusCode();
        return $statusCode;
    }
}