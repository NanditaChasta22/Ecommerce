<?php

namespace App\Repository;
use App\Models\CategoryModel;

class CategoryClass implements CategoryInterface
{
    public function all()
    {
        return CategoryModel::get()->paginate(3);
    }

    public function get($id)
    {
        return CategoryModel::find($id);
    }

    public function store(array $data)
    {
        return CategoryModel::create($data);
    }

    public function update($id, array $data)
    {
        return CategoryModel::find($id)->update($data);
    }

    public function delete($id)
    {
        return CategoryModel::destroy($id);
    }

}