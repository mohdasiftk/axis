<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function sale()
    {
        return $this->hasMany(Sale::class,'product_name','product_name');
    }
}
