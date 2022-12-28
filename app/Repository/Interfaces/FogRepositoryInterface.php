<?php

namespace App\Repository\Interfaces;

interface FogRepositoryInterface
{
    public function all();
    public function store($request);
    public function find($id);
    public function update($request, $id);
}

?>