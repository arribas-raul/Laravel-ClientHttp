<?php

namespace App\Services;

use App\Traits\ConsumersExternalServices;
use App\Traits\AuthorizesMarketRequests;
use App\Traits\InteractsWithMarketResponses;

class MarketService
{
    use ConsumersExternalServices, AuthorizesMarketRequests, InteractsWithMarketResponses;

    protected $baseUri;

    
    public function __construct()
    {
        $this->baseUri = config('services.market.base_uri');
    } 
    
    /**
     * Obtains the list of productos from the API
     * @return stdClass
     */
    public function getProducts()
    {
        return $this->makeRequest('GET', 'products');
    }

    /**
     * Obtains the list of categories from the API
     * @return stdClass
     */
    public function getCategories(){
        return $this->makeRequest('GET', 'categories');

    }

    /**
     * Obtains a product from the API
     *
     * @param int $id
     * @return stdClass
     */
    public function getProduct($id)
    {
        return $this->makeRequest('GET', "products/{$id}");
    }

    /**
     * Obtains a products by category from the API
     *
     * @param int $id
     * @return stdClass
     */
    public function getCategoryProducts($id)
    {
        return $this->makeRequest('GET', "categories/{$id}/products");
    }
}