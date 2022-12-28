<?php

namespace App\Repository;
use App\Models\Talent;
use App\Repository\Interfaces\TalentRepositoryInterface;

class TalentRepository implements TalentRepositoryInterface
{
    public function all()
    {
        return Talent::latest()->get();
    }

    public function store($request)
    {
        $data=$request->all();

        if($request->file('image'))
        {
            $file=$request->file('image');
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin2/talents/', $image_name);
            $data['image']="https://babm.afeme.uz/admin2/talents/".$image_name;
        }

        Talent::create($data);
    }

    public function find($id)
    {
        return Talent::find($id);
    }

    public function update($request, $id)
    {
        $data=$request->all();

        if($request->file('image'))
        {
            $file=$request->file('image');
            $image_name=time(). $file->getClientOriginalName();
            $file->move('admin2/talents/', $image_name);
            $data['image']="https://babm.afeme.uz/admin2/talents/".$image_name;
        }
            $talent= $this->find($id);
            $talent->update($data);
    }
}

