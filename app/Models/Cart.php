<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'cart_code', 'country_code', 'city', 'zip_code', 'address', 'user_id'];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function total_price()
    {
        $total = 0;

        foreach ($this->cartItems as $item) {
            $product = $item->product();
            if ($product) {
                $price = $product->price_after_discount();
                $amount = $item->amount;
                $subtotal = $price * $amount;

                $total += $subtotal;
            }
        }

        return $total;
    }
}
