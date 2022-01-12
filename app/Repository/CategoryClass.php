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

    public function show($id)
    {
        return CategoryModel::find($id);
    }

    public function update($id , array $data)
    {
     
        $update = CategoryModel::findOrFail($id);
        $update->categoryName = $data['categoryName'];
        $update->categoryDescription = $data['categoryDescription'];
        $update->categoryImg = $data['categoryImg'];
        return $update->save();
        
    }

    public function delete($id)
    {
        return CategoryModel::destroy($id);
    }

}