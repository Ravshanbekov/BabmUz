<?php

namespace App\Http\Controllers\Api;

use App\Models\Event;
use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\Event as EventResource;

class EventController extends BaseController
{
    public function getEvent()
    {
        $events = Event::all();
        
        return $this->sendResponse(EventResource::collection($events), 'Event Retrived Successfully.');
    }

    public function findEvent($id)
    {
        $event = Event::find($id);
  
        if (is_null($event)) {
            return $this->sendError('Event not found.');
        }
   
        return $this->sendResponse(new EventResource($event), 'Event Retrieved Successfully.');
    }

}
