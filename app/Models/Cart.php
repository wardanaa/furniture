<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['cart_code', 'country_code', 'city', 'zip_code', 'address', 'user_id'];

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
                $total += $product->price_after_discount() * $item->amount;
            }
        }

        return $total;
    }
}
