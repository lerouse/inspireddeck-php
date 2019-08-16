<?php

namespace MBLSolutions\InspiredDeck;

use MBLSolutions\InspiredDeck\Api\ApiResource;

class Report extends ApiResource
{

    /**
     * View all Reports
     *
     * @param int|null $page
     * @return array
     */
    public function all(int $page = null): array
    {
        return $this->getApiRequestor()->getRequest('/api/report', [
            'page' => $page
        ]);
    }

    /**
     * Show a Report
     *
     * @param int $id
     * @param array $params
     * @return array
     */
    public function show(int $id, array $params = []): array
    {
        return $this->getApiRequestor()->getRequest('/api/report/' . $id, $params);
    }

    /**
     * Render a Report
     *
     * @param int $id
     * @param array $params
     * @return array
     */
    public function render(int $id, array $params = []): array
    {
        if (isset($params['page'])) {
            $uri = '/api/report/' . $id . '?page=' . $params['page'];
        } else {
            $uri = '/api/report/' . $id;
        }

        return $this->getApiRequestor()->postRequest($uri, $params);
    }
    
    /**
     * Get the Report Select Connections
     *
     * @return array
     */
    public function connections(): array
    {
        return $this->getApiRequestor()->getRequest('/api/report/connection');
    }

    /**
     * Get available report middleware
     *
     * @return array
     */
    public function middleware(): array
    {
        return $this->getApiRequestor()->getRequest('/api/report/middleware');
    }

    /**
     * Get available report data types
     *
     * @return array
     */
    public function dataType(): array
    {
        return $this->getApiRequestor()->getRequest('/api/report/data/type');
    }

    /**
     * Get the Report Select Models
     *
     * @return array
     */
    public function models(): array
    {
        return $this->getApiRequestor()->getRequest('/api/report/model');
    }

    /**
     * Export the report results
     *
     * @param int $id
     * @param array $params
     * @return array
     */
    public function export(int $id, array $params = []): array
    {
        return $this->getApiRequestor()->postRequest('/api/report/' . $id . '/export', $params);
    }

}