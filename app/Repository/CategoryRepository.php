<?php

namespace App\Repository;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Repository\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function all()
    {
        return Category::latest()->get();
    }

    public function store($request)
    {
        $data=$request->all();
        $data['slug_uz']=Str::slug($request->name_uz);
        $data['slug_ru']=Str::slug($request->name_ru);
        $data['slug_en']=Str::slug($request->name_en);
        Category::create($data);
    }

    public function find($id)
    {
        return Category::find($id);
    }

    public function update($request, $id)
    {
        $data=$request->all();
        $data['slug_uz']=Str::slug($request->name_uz);
        $data['slug_ru']=Str::slug($request->name_ru);
        $data['slug_en']=Str::slug($request->name_en);
        $category= $this->find($id);
        $category->update($data);

    }


}







?>