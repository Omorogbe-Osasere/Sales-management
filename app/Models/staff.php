<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'staffname',
        'email',
         'phonenumber',
         'gender',
          'birthday',
          'address',
           'password'
    ];
    
}
 