<?php
declare(strict_types=1);

namespace LeadServiceClient\Services;

use LeadServiceClient\Dto\SourceDto;

class SourceService extends AbstractService
{
    /**
     * @param int $userId
     * @return SourceDto[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSourcesByUserId(int $userId): array
    {
        $sourcesResponse = $this->httpClient->request('GET', '/sources', [
            'query' => ['user' => $userId]
        ]);

        $sourcesDecoded = json_decode($sourcesResponse->getBody()->getContents(), true);

        $sources = [];
        foreach ($sourcesDecoded as $sourceProps) {
            $sources[] = (new SourceDto())->fillFromArray($sourceProps);
        }

        return $sources;
    }

    public function getSource(int $id): SourceDto
    {
        $sourceResponse = $this->httpClient->request('GET', '/sources/' . $id, []);

        $sourceDecoded = json_decode($sourceResponse->getBody()->getContents(), true);

        return (new SourceDto())->fillFromArray($sourceDecoded);
    }

    public function createSource(int $type, int $userId, string $name): SourceDto
    {
        $createSourceResponse = $this->httpClient->request('POST', '/sources', [
            'form_params' => [
                'type' => $type,
                'userId' => $userId,
                'name' => $name,
            ],
            'headers' => [
                'X-Auth-Token' => $this->apiKey,
            ],
        ]);

        $createSourceResponseDecoded = json_decode($createSourceResponse->getBody()->getContents(), true);

        return (new SourceDto())->fillFromArray($createSourceResponseDecoded);
    }


    public function updateSource(int $id, array $params): SourceDto
    {
        $updateSourceResponse = $this->httpClient->request('PUT', '/sources/' . $id, [
            'form_params' => $params,
            'headers' => [
                'X-Auth-Token' => $this->apiKey,
            ],
        ]);

        $updateSourceResponseDecoded = json_decode($updateSourceResponse->getBody()->getContents(), true);

        return (new SourceDto())->fillFromArray($updateSourceResponseDecoded);
    }

    public function deleteSource(int $id): bool
    {
        $deleteSourceResponse = $this->httpClient->request('DELETE', '/sources/' . $id, [
            'headers' => [
                'X-Auth-Token' => $this->apiKey,
            ],
        ]);

        return $deleteSourceResponse->getStatusCode() == 200;
    }
}
