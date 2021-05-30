<?php
declare(strict_types=1);

namespace LeadServiceClient\Services;

use GuzzleHttp\Client;

class AbstractService
{
    private $httpClient;

    /**
     * @var string Key for data changing requests
     */
    private $apiKey = '';

    public function __construct(Client $httpClient, string $apiKey = '')
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $apiKey;
    }
}