<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\Post as PostResource;

class PostController extends BaseController
{
    public function getPost()
    {
        $post = Post::all();

        return $this->sendResponse(PostResource::collection($post), 'Post Retrieved Successfully.');
    }
    
    public function findPost($id)
    {
        $post = Post::find($id);
  
        if (is_null($post)) {
            return $this->sendError('Post not found.');
        }
   
        return $this->sendResponse(new PostResource($post), 'Post Retrieved Successfully.');
    }
}
