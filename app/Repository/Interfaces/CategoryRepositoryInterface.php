<?php

namespace App\Repository\Interfaces;

interface CategoryRepositoryInterface
{
    public function all();
    public function store($request);
    public function find($id);
    public function update($id, $request);
}



?>