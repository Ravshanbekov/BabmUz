<?php

namespace App\Http\Controllers\Api;

use App\Models\Fog;
use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\Fog as FogResource;

class FogController extends BaseController
{
    public function getFog()
    {
        $fogs = Fog::all();
        
        return $this->sendResponse(FogResource::collection($fogs), 'Fog Retrived Successfully.');
    }
}
