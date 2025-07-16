<?php

namespace App\ETL;

use GuzzleHttp\Client;

class Extract
{
    private object $client;

    public function __construct(
    )
    {
        $this->client = new Client();
    }

    public function get(string $url)
    {
        $response = $this->client->request('GET', $url);
        $statusCode = $response->getStatusCode();
        return $statusCode;
    }
}