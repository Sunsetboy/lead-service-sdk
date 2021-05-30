<?php
declare(strict_types=1);

namespace LeadServiceClient;

use GuzzleHttp\Client;
use LeadServiceClient\Services\BalanceService;
use LeadServiceClient\Services\CampaignService;
use LeadServiceClient\Services\LeadService;
use LeadServiceClient\Services\SourceService;

class LeadServiceClient
{
    private $httpClient;

    /**
     * @var string Key for data changing requests
     */
    private $apiKey = '';
    private $balanceService;
    private $campaignService;
    private $sourceService;
    private $leadService;

    public function __construct(string $baseUrl, string $apiKey = '')
    {
        $this->httpClient = new Client([
            // Base URI is used with relative requests
            'base_uri' => $baseUrl,
            // You can set any number of default request options.
            'timeout' => 2.0,
        ]);
        $this->apiKey = $apiKey;
    }

    public function getBalanceService()
    {
        if (!$this->balanceService) {
            $this->balanceService = new BalanceService($this->httpClient, $this->apiKey);
        }
        return $this->balanceService;
    }

    public function getSourceService()
    {
        if (!$this->sourceService) {
            $this->sourceService = new SourceService($this->httpClient, $this->apiKey);
        }
        return $this->sourceService;
    }

    public function getCampaignService()
    {
        if (!$this->campaignService) {
            $this->campaignService = new CampaignService($this->httpClient, $this->apiKey);
        }
        return $this->campaignService;
    }

    public function getLeadService()
    {
        if (!$this->leadService) {
            $this->leadService = new LeadService($this->httpClient, $this->apiKey);
        }
        return $this->leadService;
    }
}
