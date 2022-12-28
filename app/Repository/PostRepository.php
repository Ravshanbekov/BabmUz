<?php

namespace App\Repository;

use Illuminate\Support\Str;
use App\Models\Post;
use App\Repository\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::latest()->get();
    }

    public function store($request)
    {
        $data=$request->all();
        $data['slug_uz']=Str::slug($request->title_uz);
        $data['slug_ru']=Str::slug($request->title_ru);
        $data['slug_en']=Str::slug($request->title_en);

        if($request->file('image')){
            $file=$request->file('image');
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin2/posts/', $image_name);
            $data['image']="https://babm.afeme.uz/admin2/posts/".$image_name;
        }

        Post::create($data);
    }

    public function find($id)
    {
        return Post::find($id);
    }

    public function update($request, $id)
    {
        $data=$request->all();
        $data['slug_uz']=Str::slug($request->title_uz);
        $data['slug_ru']=Str::slug($request->title_ru);
        $data['slug_en']=Str::slug($request->title_en);

        if($request->file('image')){
            $file=$request->file('image');
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin2/posts/', $image_name);
            $data['image']="https://babm.afeme.uz/admin2/posts/".$image_name;
        }
    
        $post=$this->find($id);
        $post->update($data);
        
    }
}