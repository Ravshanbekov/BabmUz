<?php

namespace App\Repository;

use App\Models\Team;
use App\Repository\Interfaces\TeamRepositoryInterface;

class TeamRepository implements TeamRepositoryInterface
{
    public function all()
    {
        return Team::latest()->get();
    }

    public function store($request)
    {
        $data=$request->all();

        if($request->file('image'))
        {
            $file=$request->file('image');
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin2/teams/', $image_name);
            $data['image']="https://babm.afeme.uz/admin2/teams/".$image_name;
        }

        Team::create($data);
    }

    public function find($id)
    {
        return Team::find($id);
    }

    public function update($request, $id)
    {
        $data=$request->all();

        if($request->file('image'))
        {
            $file=$request->file('image');
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin2/teams/', $image_name);
            $data['image']="https://babm.afeme.uz/admin2/teams/".$image_name;
        }

        $team=$this->find($id);
        $team->update($data);
    }
}

?>