<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'directory',
        'product_id'
    ];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
