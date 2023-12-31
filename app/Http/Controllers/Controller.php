<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\MarketService;

class Controller extends BaseController
{
    /**
     * The market service to consume from this client
     * @var App\Services\MarketService
     */
    protected $marketService;

    use AuthorizesRequests, ValidatesRequests;

    public function __construct(MarketService $marketService)
    {
        $this->marketService = $marketService;
    }
}
