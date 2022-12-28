<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\Category as CategoryResource;

class CategoryController extends BaseController
{
    public function getCategory()
    {
        $categories = Category::all();

        return $this->sendResponse(CategoryResource::collection($categories), 'Category Retrived Successfully.');
    }
}
