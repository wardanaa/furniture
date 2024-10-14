<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'shipping_code', 'shipping_companny', 'total_payment', 'cart_id'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
