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

        if ($statusCode === 200) {
            $body = $response->getBody()->getContents();
            preg_match('/"author"\s*:\s*{[^}]*"name"\s*:\s*"([^"]+)"/', $body, $matches);
            return $matches;
        } else {
            throw new \Exception("Failed to fetch data from URL: $url, Status Code: $statusCode");
        }
    }
}