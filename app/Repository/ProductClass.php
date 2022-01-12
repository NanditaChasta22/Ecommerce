<?php

namespace App\Repository;
use App\Models\ProductModel;

class ProductClass implements ProductInterface
{
    public function all()
    {
        return ProductModel::select('*', 'products.id as pid' )->join('categories','categories.id','=', 'products.productCategoryId')->paginate(3);
    }

    public function get($id)
    {
        return ProductModel::find($id);
    }

    public function store(array $data)
    {
        return ProductModel::create($data);
    }

    public function show($id)
    {
        return ProductModel::find($id);
    }

    public function update($id , array $data)
    {
        $update = ProductModel::findOrFail($id);
        $update->productName = $data['productName'];
        $update->productCategoryId = $data['productCategoryId'];
        $update->productPrice = $data['productPrice'];
        $update->productDescription = $data['productDescription'];
        $update->productImg = $data['productImg'];
        return $update->save();
    }

    public function delete($id)
    {
        return ProductModel::destroy($id);
    }

}