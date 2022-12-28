<?php

namespace App\Http\Controllers\Api;

use App\Models\Statistic;
use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\Statistic as StatisticResource;

class StatisticController extends BaseController
{
    public function getStatistic()
    {
        $statistics = Statistic::all();

        return $this->sendResponse(StatisticResource::collection($statistics), 'Statistic Retrieved Successfully.');
    }
       // $data= ClientResource::collection(Client::all());
        // $massage=count($data);
        // if($massage >= 0){
        //     return $this->success($data, $massage, 302);
        // }else{
        //     return $this->error($massage, 404);
        // }
}
