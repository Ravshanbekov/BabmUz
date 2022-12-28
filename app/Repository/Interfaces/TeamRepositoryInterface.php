<?php

namespace App\Repository\Interfaces;

interface TeamRepositoryInterface
{
    public function all();
    public function store($request);
    public function find($id);
    public function update($request, $id);

}

?>