<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
       'productname',
        'price',
           'datepurchased',
           'quantity',
           'category',
           'unitprice',
           'description',
           'purchasedfrom',
           'image_path'
        

    ];

}
