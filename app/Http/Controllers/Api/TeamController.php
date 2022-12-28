<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\Team as TeamResource;
use App\Models\Team;

class TeamController extends BaseController
{
    public function getTeam()
    {
        $teams=Team::all();
        return $this->sendResponse(TeamResource::collection($teams), 'Team Retrieved Successfully.');
    }

    public function findTeam($id)
    {
        $team = Team::find($id);
  
        if (is_null($team)) {
            return $this->sendError('Team not found.');
        }
   
        return $this->sendResponse(new TeamResource($team), 'Team Retrieved Successfully.');
    }
}
