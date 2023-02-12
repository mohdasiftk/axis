<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    public function customer()
    {
        return $this->hasOne(Customer::class,'id','customer_id');
    }
    protected $guarded = [];
}
