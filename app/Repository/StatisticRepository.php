<?php

namespace App\Repository;

use App\Models\Statistic;
use App\Repository\Interfaces\StatisticRepositoryInterface;

class StatisticRepository implements StatisticRepositoryInterface
{
    public function all()
    {
        return Statistic::latest()->get();
    }

    public function store($request)
    {
        $data=$request->all();
        if($request->file('icon'))
        {
            $file=$request->file('icon');
            $icon_name=time(). $file->getClientOriginalName();
            $file->move('admin2/statistics/', $icon_name);
            $data['icon']="https://babm.afeme.uz/admin2/statistics/".$icon_name;
        }
            Statistic::create($data);
    }

    public function find($id)
    {
        return Statistic::find($id);
    }

    public function update($request,$id)
    {
        $data=$request->all();
        
        if($request->file('icon'))
        {
            $file=$request->file('icon');
            $icon_name=time(). $file->getClientOriginalName();
            $file->move('admin2/statistics/', $icon_name);
            $data['icon']="https://babm.afeme.uz/admin2/statistics/".$icon_name;
        }
            $statistic=$this->find($id);
            $statistic->update($data);
        
    }

}