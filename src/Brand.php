<?php

namespace MBLSolutions\InspiredDeck;

use MBLSolutions\InspiredDeck\Api\ApiResource;

class Brand extends ApiResource
{

    /**
     * View all Brands
     *
     * @param int|null $page
     * @return array
     */
    public function all(int $page = null): array
    {
        return $this->getApiRequestor()->getRequest('/api/brand', [
            'page' => $page
        ]);
    }

    /**
     * Select Brands for Input
     *
     * @return array
     */
    public function select(): array
    {
        return $this->getApiRequestor()->getRequest('/api/brand/select');
    }

    /**
     * Create a new Brand
     *
     * @param array $params
     * @return array
     */
    public function create(array $params): array
    {
        return $this->getApiRequestor()->postRequest('/api/brand', $params);
    }

    /**
     * Update a Brand
     *
     * @param array $params
     * @return array
     */
    public function update($id, array $params): array
    {
        return $this->getApiRequestor()->patchRequest('/api/brand/' . $id, $params);
    }

    /**
     * Show a Brand
     *
     * @param $id
     * @return array
     */
    public function show($id): array
    {
        return $this->getApiRequestor()->getRequest('/api/brand/' . $id);
    }

    /**
     * Can Delete a Brand
     *
     * @param $id
     * @return array
     */
    public function delete($id): array
    {
        return $this->getApiRequestor()->deleteRequest('/api/brand/' . $id);
    }

    /**
     * Resend Programme Activation
     *
     * @param $id
     * @return array
     */
    public function resend($id): array
    {
        return $this->getApiRequestor()->postRequest('/api/programme/' . $id . '/activation/resend');
    }

    /**
     * Get a list of Brand Users
     *
     * @param $id
     * @return array
     */
    public function users($id): array
    {
        return $this->getApiRequestor()->getRequest('/api/brand/' . $id . '/user');
    }

}