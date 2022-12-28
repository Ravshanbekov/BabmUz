<?php

namespace App\Repository;

use App\Models\About;
use App\Repository\Interfaces\AboutRepositoryInterface;

class AboutRepository implements AboutRepositoryInterface

{

    public function all()
    {
        return About::latest()->get();
    }

    public function store($request)
    {
        $data=$request->all();

        if($request->file('image'))
        {
            $file=$request->file('image');
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin2/abouts/', $image_name);
            $data['image']="https://babm.afeme.uz/admin2/abouts/".$image_name;
        }

        About::create($data);
    }

    public function find($id)
    {
        return About::find($id);
    }

    public function update($request, $id)
    {
        $data=$request->all();

        if($request->file('image'))
        {
            $file=$request->file('image');
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin2/abouts/', $image_name);
            $data['image']="https://babm.afeme.uz/admin2/abouts/".$image_name;
        }

        $about= $this->find($id);
        $about->update($data);
    } 

}




















?>