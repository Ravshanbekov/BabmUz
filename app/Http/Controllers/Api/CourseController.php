<?php

namespace App\Http\Controllers\Api;

use App\Models\Course;
use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\Course as CourseResource;

class CourseController extends BaseController
{
    public function getCourse()
    {
        $courses = Course::all();
        
        return $this->sendResponse(CourseResource::collection($courses), 'Course Retrived Successfully.');
    }

}
