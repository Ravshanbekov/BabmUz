<?php

namespace App\Repository;
use App\Models\Fog;
use App\Repository\Interfaces\FogRepositoryInterface;

class FogRepository implements FogRepositoryInterface
{
    public function all()
    {
        return Fog::latest()->get();
    }

    public function store($request)
    {
        $data=$request->all();

        if($request->file('image'))
        {
            $file=$request->file('image');
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin2/fogs/', $image_name);
            $data['image']="https://babm.afeme.uz/admin2/fogs/".$image_name;
        }

        Fog::create($data);
    }

    public function find($id)
    {
        return Fog::find($id);
    }

    public function update($request, $id)
    {
        $data=$request->all();

        if($request->file('image'))
        {
            $file=$request->file('image');
            $image_name=time(). $file->getClientOriginalName();
            $file->move('admin2/fogs/', $image_name);
            $data['image']="https://babm.afeme.uz/admin2/fogs/".$image_name;
        }
            $fog= $this->find($id);
            $fog->update($data);
    }
}




















?>