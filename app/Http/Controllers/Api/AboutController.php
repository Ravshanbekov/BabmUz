<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\About as AboutResource;
use App\Models\About;
use Illuminate\Support\Facades\Http;

class AboutController extends BaseController
{
    public function getAbout()
    {
        $abouts=About::all();

        return $this->sendResponse(AboutResource::collection($abouts), 'About Retrived Successfully.');
    }

    // public function getApi()
    // {
    //     $data=Http::get('https://bigsmm.ru/api/v2/?action=services');

    //     return $data;
    // }

}
