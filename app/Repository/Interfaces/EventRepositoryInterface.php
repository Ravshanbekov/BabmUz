<?php

namespace App\Repository\Interfaces;

interface EventRepositoryInterface
{
    public function all();
    public function store($request);
    public function find($id);
    public function update($request, $id);

}



?>