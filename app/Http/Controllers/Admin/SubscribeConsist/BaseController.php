<?php

namespace App\Http\Controllers\Admin\SubscribeConsist;

use App\Http\Controllers\Controller;
use App\Services\Subscribe\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
