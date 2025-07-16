<?php
namespace App\ETL;

use GuzzleHttp\Client;

class Extract
{
    private object $client;

    public function __construct(
    )
    {
        $this->client = new GuzzleHttp\Client([
          'allow_redirects' => false
        ]);
    }

    public static function get(string $url)
    {
        $response = $this->client->request('GET', $url);
        $statusCode = $response->getStatusCode();
    }
}