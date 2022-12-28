<?php

namespace App\Repository\Interfaces;

interface PostRepositoryInterface
{
    public function all();
    public function store($request);
    public function find($id);
    public function update($request, $id);

}



?>