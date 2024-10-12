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
}
