<?php

namespace App\Http\Controllers\Api;

use App\Models\Talent;
use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\Talent as TalentResource;

class TalentController extends BaseController
{
    public function getTalent()
    {
        $talents = Talent::all();
        
        return $this->sendResponse(TalentResource::collection($talents), 'Talent Retrived Successfully.');
    }
}
