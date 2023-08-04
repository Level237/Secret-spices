<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Weight extends Model
{
    use HasFactory;

    protected $fillable=[
        'weight_name',

    ];

    public function products():HasMany{
        return $this->hasMany(Product::class);
    }
}