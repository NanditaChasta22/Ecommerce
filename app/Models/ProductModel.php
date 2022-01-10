<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    public $table = "products";

    protected $fillable = [
        'productName',
        'productCategoryId',
        'productPrice',
        'productDescription',
	    'productImg',
    ];

    public function product()
    {
        return $this->hasOne(Category::class);
    }
}
