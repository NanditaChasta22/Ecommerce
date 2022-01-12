<?php

namespace App\Repository;


interface CategoryInterface 
{
    public function all();

    public function get($id);

    public function store(array $data);

    public function show($id);

    public function update($id, array $data);

    public function delete($id);
}