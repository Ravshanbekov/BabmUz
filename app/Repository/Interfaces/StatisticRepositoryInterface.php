<?php

namespace App\Repository\Interfaces;

interface StatisticRepositoryInterface
{
    public function all();
    public function store($request);
    public function find($id);
    public function update($request, $id);

}



?>