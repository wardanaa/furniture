<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Photo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stock',
        'category_id',
        'dimension',
        'color_id',
        'price',
        'discount',
        'discount_type',
        'description',
        'brand_id'
    ];

    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function price_after_discount()
    {
        $discount_amount = $this->discount_amount;
        if ($this->discount_type == "percentage") {
            $discount_amount = $this->price * ($this->$discount_amount || 1) / 100;
        }
        return $this->price - $discount_amount;
    }

    public function color()
    {
        return Color::find($this->color_id)->first();
    }
}
