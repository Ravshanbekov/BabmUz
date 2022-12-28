<?php

namespace App\Repository;

use App\Models\Event;
use Illuminate\Support\Str;
use App\Repository\Interfaces\EventRepositoryInterface;

class EventRepository implements EventRepositoryInterface
{

    public function all()
    {
        return Event::latest()->get();
    }

    public function store($request)
    {
        $data=$request->all();

        if($request->file('image'))
        {
            $file=$request->file('image');
            $image_name=time(). $file->getClientOriginalName();
            $file->move('admin2/events/', $image_name);
            $data['image']="https://babm.afeme.uz/admin2/events/".$image_name;
        }
            $data['slug_uz']=Str::slug($request->title_uz);
            $data['slug_ru']=Str::slug($request->title_ru);
            $data['slug_en']=Str::slug($request->title_en);

            Event::create($data);
    }

    public function find($id)
    {
        return Event::find($id);
    }

    public function update($request, $id)
    {
        $data=$request->all();

        if($request->file('image'))
        {
            $file=$request->file('image');
            $image_name=time(). $file->getClientOriginalName();
            $file->move('admin2/events/', $image_name);
            $data['image']="https://babm.afeme.uz/admin2/events/".$image_name;
        }
          $data['slug_uz']=Str::slug($request->title_uz);
          $data['slug_ru']=Str::slug($request->title_ru);
          $data['slug_en']=Str::slug($request->title_en);

            $event= $this->find($id);
            $event->update($data);
    }

}




?>