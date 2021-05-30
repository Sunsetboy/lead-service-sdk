<?php
declare(strict_types=1);

namespace LeadServiceClient\Services;

use GuzzleHttp\Client;

class AbstractService
{
    /** @var Client $httpClient */
    protected $httpClient;

    /**
     * @var string Key for data changing requests
     */
    protected $apiKey = '';

    public function __construct(Client $httpClient, string $apiKey = '')
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $apiKey;
    }
}
