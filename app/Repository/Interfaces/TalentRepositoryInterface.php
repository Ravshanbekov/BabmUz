<?php

namespace App\Repository\Interfaces;

interface TalentRepositoryInterface
{
    public function all();
    public function store($request);
    public function find($id);
    public function update($request, $id);

}



?>