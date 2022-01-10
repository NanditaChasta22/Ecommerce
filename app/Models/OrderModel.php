<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;

    public $table = 'oders';

    protected $fillable = [

        'orderUserId',
        'orderProductId',
        'orderDate',
        'orderPrice',
        'orderStatus',  
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

}
