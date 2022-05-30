<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderContent extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'product_id', 'price', 'quantity'];
    public function user_order(){
        return $this->belongsToMany(Order::class, 'ord_users', 'order_id', 'user_id');
    }
}
